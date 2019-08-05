<?php include('header.php');?>

<div class="container" style="margin-top:50px;">
<div class="panel-heading">
                 <h1> <strong>Login</strong></h1>
                </div>
<?php if($success=$this->session->flashdata('user_add')):?>
<div class="row">
<div class="col-lg-4">
<div class="alert alert-success">
<?php echo $success; ?> 
</div>
</div>
</div>
<?php endif;?>

<?php if($error=$this->session->flashdata('user_notmatch')):?>
<div class="row">
<div class="col-lg-4">
<div class="alert alert-danger">
<?php echo $error; ?> 
</div>
</div>
</div>
<?php endif;?>

<?php echo form_open('user/user_success');?>
<div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Username:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname',
    'value'=>set_value('uname')]);?>
    
  </div>
  </div>
  
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('uname');?> 
  </div>
  </div>


  <div class="row">
<div class="col-lg-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
   
    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Password','name'=>'pass'
    ,'value'=>set_value('pass')]);?>
  </div></div>
  <div class="col-lg-6" style="margin-top:30px;">
  <?php echo form_error('pass');?> 
  </div> </div>
 <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']);?>
 <?php echo form_reset(['type'=>'reset','class'=>'btn btn-dark','value'=>'Reset']);?>
 <?php echo anchor('user/register/','Sign up?','class="link-class"')?>


 
</div>
<?php include('footer.php');?>
