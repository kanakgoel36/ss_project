<?php include('header.php');?>

<div  style="margin-top:70px; text-align:center">
  <h3>SELECT FORM ACCORDING TO YOU</h3>
<button onclick="myFunction()" id="btn" style="color: white ; background-color:green">USER</button>
<button onclick="myFunction1()" id="btn1">DRIVER</button>
<button onclick="myFunction2()" id="btn2">TRANSPORTER</button>
<button onclick="myFunction3()" id="btn3">VEHICLE</button>
</div>
<?php include('user_registration.php');?>
<?php include('driver_registration.php');?>
<?php include('transporter_registration.php');?>
<?php include('vehicle_registration.php');?>


<?php if($error=$this->session->flashdata('user_notadd')):?>
<div class="row">
<div class="col-lg-4">
<div class="alert alert-danger">
<?php echo $error; ?> 
</div>
</div>
</div>
<?php endif;?>







<script>
  function myFunction() {
    document.getElementById("btn").style.backgroundColor="green";
    document.getElementById("btn").style.color="white";
    document.getElementById("btn1").style="none";
    document.getElementById("btn2").style="none";
    document.getElementById("btn3").style="none";
    var x = document.getElementById("myDIV");  
    var y = document.getElementById("myDIV1");
    var z = document.getElementById("myDIV2");
    var v = document.getElementById("myDIV3");
    if (x.style.display === "none") {
      x.style.display = "block";
        y.style.display = "none";
          z.style.display = "none";
          v.style.display = "none";
    }
  }
  function myFunction1() {
    document.getElementById("btn1").style.backgroundColor="green";
    document.getElementById("btn1").style.color="white";
    document.getElementById("btn").style="none";
    document.getElementById("btn2").style="none";
    document.getElementById("btn3").style="none"
    var x = document.getElementById("myDIV1");
    var y = document.getElementById("myDIV2");
    var z = document.getElementById("myDIV");
    var v = document.getElementById("myDIV3");
    if (x.style.display === "none") {
      x.style.display = "block";
        y.style.display = "none";
          z.style.display = "none";
          v.style.display = "none";
    }
  }
  function myFunction2() {
    document.getElementById("btn1").style="none";
    document.getElementById("btn").style="none";
    document.getElementById("btn3").style="none";
    document.getElementById("btn2").style.backgroundColor="green";
    document.getElementById("btn2").style.color="white";
    var x = document.getElementById("myDIV2");
    var y = document.getElementById("myDIV1");
    var z = document.getElementById("myDIV");
    var v = document.getElementById("myDIV3");
    if (x.style.display === "none") {
      x.style.display = "block";
        y.style.display = "none";
          z.style.display = "none";
          v.style.display = "none";
    }
  }
  function myFunction3() {
    document.getElementById("btn1").style="none";
    document.getElementById("btn2").style="none";
    document.getElementById("btn").style="none";
    document.getElementById("btn3").style.backgroundColor="green";
    document.getElementById("btn3").style.color="white";
    var x = document.getElementById("myDIV3");
    var y = document.getElementById("myDIV1");
    var z = document.getElementById("myDIV");
    var v = document.getElementById("myDIV2");
    if (x.style.display === "none") {
      x.style.display = "block";
        y.style.display = "none";
          z.style.display = "none";
          v.style.display = "none";
    }
  }
  
  
  </script>
<?php include('footer.php');?>