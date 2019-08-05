<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function login()
	{
		$this->load->view('user/user');
	}
	public function user_success()
	{
		$this->form_validation->set_rules('uname','User Name','required|alpha_numeric_spaces|max_length[20]');
		$this->form_validation->set_rules('pass','Password','required|alpha_numeric|max_length[20]');
		$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');
		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id= $this->loginmodel->isvalidate($uname,$pass);
			
			if($login_id){
				
				$this->session->set_userdata('id',$login_id);
				return redirect('user/welcome');
			}
			else{
				
				$this->session->set_flashdata('user_notmatch','Username and Password are Incorrect. ');
				return redirect('user/login');
			}
			
		}
		else{
           $this->load->view('user/user');
		}
	}
	public function welcome(){
		$this->load->view('user/user1');
	}
	public function register(){
		$this->load->view('user/register');
		
		}
	public function submit(){
		$config=[
		  'upload_path'=>'./upload',
		  'allowed_types'=>'gif|jpg|png|jpeg',

		];
		$this->load->library('upload',$config);
		
		$this->form_validation->set_rules('username','User Name','required|alpha_numeric_spaces|max_length[20]');
		$this->form_validation->set_rules('Aadhar','Aadhar no','required|regex_match[^\d{4}\s\d{4}\s\d{4}$^]|is_unique[users.Aadhar]');
		$this->form_validation->set_rules('dob','Date of birth', 'required|callback_date_valid');
		$this->form_validation->set_rules('mobile_no','Mobile No','required|numeric|min_length[10]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|max_length[20]');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('address','Address','required');
		
		
		$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');
		
		if($this->form_validation->run() && $this->upload->do_upload()){
            
			// $password = $this->encrypt->encode($this->input->post('password'));
			$data=$this->upload->data();
			$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
			$data_user = array(
			 'username'  => $this->input->post('username'),
			 'Aadhar'  => $this->input->post('Aadhar'),
			 'dob'  => $this->input->post('dob'),
			 'mobile_no'  => $this->input->post('mobile_no'),
			 'email'  => $this->input->post('email'),
			 'password' => md5($this->input->post('password')),
			 'cpassword' => md5($this->input->post('cpassword')),
			 'address'  => $this->input->post('address'),
			 'image'=>$image_path,
					);
			//  $post=$this->input->post();
			
			
			$this->load->model('loginmodel');
			if($this->loginmodel->add_user($data_user)){
			  $this->session->set_flashdata('user_add','User Added successful!');
			  return redirect('user/login');
			 }else{
			  $this->session->set_flashdata('User_notadd','User not Added.. ');
			  return redirect('user/register');
			 }
			 
			 } else{
				 $upload_error=$this->upload->display_errors();
				$this->load->view('user/register',compact('upload_error'));
	}      
}
public function date_valid($date)
{
  $parts = explode("/", $date);
  if (count($parts) == 3) {      
	if (checkdate($parts[1], $parts[0], $parts[2]))
	{
	  return TRUE;
	}
  }else{
  $this->form_validation->set_message('date_valid', 'The Date field must be mm/dd/yyyy');
  }
  return false;
}

}