<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: -15px;
}
  .navbar-light .navbar-brand  {
    font-family: 'Dosis', sans-serif !important;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0px;
    height: inherit;
    font-size: 36px;
    margin: -14px 0px;
}
.navbar-light .navbar-nav > li > a {
    color: #717f86;
    font-size: 18px;
    font-weight: 700;
}
.navbar-light .navbar-brand {
    color: #5FCF80;
}
.navbar-nav > li > a {
    padding: 0px;
    margin: -7px 5px;
    padding: 10px 15px;
}
.btn {
    background-color: #5FCF80;
    border-radius: 25px;
    color: #ffffff !important;
    border: 1px solid #5FCF80;
}
.carousel-inner img {
    width: 100%;
    
  }
  #testimonial {
    background-color: #111;
}
.section-padding {
    padding: 60px 0px;
}
body {
    font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
.text-par {
    font-size: 20px;
    padding-bottom: 15px;
}
p {
    margin: 0 0 10px;
}
#testimon {
    margin-right: -15px;
    margin-left: -15px;
}
div {
    display: block;
}
.col-md-3 col-sm-3{
  background-color: white;
}
.text-comment {
    background-color: rgb(255, 255, 255);
    padding: 20px;
}
.header-section text-center {
    text-align: center;
}
.footer {
    padding: 60px 0 20px;
    background: #111;
    color: #ccc;
}

    footer .social-links {
    list-style: none;
    padding: 0;
    margin: 30px 0 40px;
    padding: 40px 0 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    display: inline-flex;
}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tracking">Tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#refer">Refer & Earn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>PaytmKit/TxnTest.php">PAYMENT</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <a href="<?php echo base_url()?>index.php/user/login" > <li class="btn btn-primary mx-2">Login in</li></a>
          <li><a href="#">Helpline No: 01232-26482</a></li>
          
        </ul>
         
       
      </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1446694292248-2c2a7e575b1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1473445730015-841f29a9490b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1449247666642-264389f5f5b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
            <form>
        <div class="container">
           <div class="row">
		   
             <div class=" col-lg-5">
          <div class="form-group">
  
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
  </div>
  <div class=" col-lg-5">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  <div class=" col-lg-2 mt-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  </div>
  </div>
</form>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <div class="container my-4">
        <h2 style="text-align: center;">About Us</h1>
        <div class="row">
          <div class="col-3">
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-3">
              <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-3">
                  <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                      <div class="card" style="width: 18rem;">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>
          
          </div>
      </div>
      <section id="testimonial" class="section-padding">
          <div class="container">
            <div class="row" id="testimon">
              <div class="header-section text-center">
                <h2 class="white"  style="text-align: center;">See What Our People Are Saying?</h2>
                <p class="white"  style="text-align: center;">A better school experience
      for everyone. Starts here....</p>
               
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development .</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="text-comment">
                  <p class="text-par">The school is very good and has a very nice and supportive staff.They come up to their promise of holistic development.</p>
                  <p class="text-name">"Friendly Staff and Good Infrastructure"</p>
                </div>
              </div>
              
            </div>
          </div>
        </section>

        <div class ="container my-4">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-box-c">
                          <h3>Terms and Conditions:</h3>
                          <p>
                              <i class="fa fa-map-signs" aria-hidden="true"></i>
                              <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                          </p>
                          <p>
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                              <span>
            +91 80005 89080 
          </span>
                          </p>
                          <p>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span><a href="#">support@foodfunday.com</a></span>
                          </p>
                      </div>
                      <!-- end footer-box-c -->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="contact">
                      <div class="footer-box-c">
                          <h3>Contact Us</h3>
                          <p>
                              <i class="fa fa-map-signs" aria-hidden="true"></i>
                              <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                          </p>
                          <p>
                              <i class="fa fa-mobile" aria-hidden="true"></i>
                              <span>
            +91 80005 89080 
          </span>
                          </p>
                          <p>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span><a href="#">support@foodfunday.com</a></span>
                          </p>
                      </div>
                    </div>
                      <!-- end footer-box-c -->
                  </div>
</div>
<!--Contact-->


 
<!--Footer-->
<footer id="footer" class="footer">
<div class="container text-center">


<!-- End newsletter-form -->

<ul class="social-links">
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/facebook-circled.png"></a></li>
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/whatsapp.png"></a></li>
  <li><a href="#link"><img src="https://img.icons8.com/color/48/000000/linkedin.png"></a></li>
 
</ul>
<div class="row text-center">
©2019 Harsh Tyagi. All rights reserved
<div class="credits">
 
  Designed by <a href="https://github.com/harshtyagimdr">Harshtyagimdr</a>
</div>
</div>
</div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>