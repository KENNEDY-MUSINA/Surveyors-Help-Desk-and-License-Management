<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
   $(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




	<title>Self Service Portal</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
   <h1 class="text-white">The Surveyors Help Desk System</h1>
   <form class="d-flex input-group w-auto">
      <input
        type="search"
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>   
  </div>
</nav>
<nav class="navbar navbar-dark bg-white">
  <div class="container-fluid">
   <p>Client Self Service Portal.Please select the type of Survey to proceed</p>
  </div>
</nav>
<hr>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
  	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
     </button>

    <ul class="navbar-nav">
    <div class="nav-item dropdown">
      <li class="nav-item ">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fab fa-accusoft fa-1x">&nbsp;Land Survey</i></a>
        <div class="dropdown-menu">
            <a href="#id02" class="dropdown-item text-white" data-toggle ="modal" aria-hidden="true">Field Set</a>
            <a href="Pages/landLicenseApp.html" class="dropdown-item text-white" >License Application</a>
            <a href="#" class="dropdown-item text-white">Blog</a>
            <a href="#" class="dropdown-item text-white">Contact Us</a>
         </div>
      </li>
   </div>


  	  <div class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fab fa-500px fa-1x">&nbsp;Hydrographic Survey</i></a>
         <div class="dropdown-menu">
            <a href="#" class="dropdown-item text-white">Field Set</a>
            <a href="#" class="dropdown-item text-white">License Application</a>
            <a href="#" class="dropdown-item text-white">Blog</a>
            <a href="#" class="dropdown-item text-white">Contact Us</a>
         </div>
      </li>
    </div>


     <div class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class=" fas fa-road fa-1x">&nbsp;Geo Engineering</i></a>
         <div class="dropdown-menu">
            <a href="#" class="dropdown-item text-white">Field Set</a>
            <a href="#" class="dropdown-item text-white">License Application</a>
            <a href="#" class="dropdown-item text-white">Blog</a>
            <a href="#" class="dropdown-item text-white">Contact Us</a>
         </div>
      </li>
   </div>

       <div class="nav-item dropdown">
       <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fas fa-globe fa-1x">&nbsp;Mapping Cartography</i></a>
         <div class="dropdown-menu">
            <a href="#" class="dropdown-item text-white">Field Set</a>
            <a href="#" class="dropdown-item text-white">License Application</a>
            <a href="#" class="dropdown-item text-white">Blog</a>
            <a href="#" class="dropdown-item text-white">Contact Us</a>
         </div>
      </li> 
  	</div>

          
     <div class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fas fa-globe-africa fa-1x">&nbsp;Environmental Planning</i></a>
         <div class="dropdown-menu">
            <a href="#" class="dropdown-item text-white">Add data</a>
            <a href="#" class="dropdown-item text-white">License Application</a>
            <a href="#" class="dropdown-item text-white">Blog</a>
            <a href="#" class="dropdown-item text-white">Contact Us</a>
         </div>
      </li>
      </div> 

          
      <div class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fas fa-satellite fa-1x">&nbsp;GPS Satellite surveying 
	</i></a>
 	<div class="dropdown-menu">
            <a href="#" class="dropdown-item">Field Set</a>
            <a href="#" class="dropdown-item">License Applictaion</a>
            <a href="#" class="dropdown-item">Blog</a>
            <a href="#" class="dropdown-item">Contact Us</a>
         </div>
      </li>
  	</div>

     <div class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fab fa-alipay  fa-1x">&nbsp;GIS</i></a>
         <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Add data</a>
            <a href="#" class="dropdown-item">Blog</a>
            <a href="#" class="dropdown-item">Contact Us</a>
         </div>
      </li>
 	 </div>

      <div class="nav-item dropdown">
       <li class="nav-item">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#"><i class="fas fa-gem  fa-1x">&nbsp;Mining</i></a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Add data</a>
            <a href="#" class="dropdown-item">Blog</a>
            <a href="#" class="dropdown-item">Contact Us</a>
         </div>
      </li>
     </div>

    </ul>
  </div>
</nav>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <div class="card h-100">
     			<img src="./assets/images/geo.jpg" class="card-img-top" alt="image">
      			<div class="card-body">
        			<h5 class="card-title">Land surveyor</h5>
                    <div class="card-footer bg-transparent border-success">
                        All forms of land surveys can be figured out
                    </div>
      			</div>
    		</div>
  		</div>
  		<div class="col-lg-2">
    		<div class="card h-100">
      			<img src="./assets/images/machine.jpg" class="card-img-top" alt="machine">
      			<div class="card-body">
        			<h5 class="card-title">Machines</h5>
                    <div class="card-footer bg-transparent border-success">
                        We offer machine and all surveys hiring tools
                    </div>
      			</div>
    		</div>
  		</div>
  		<div class="col-lg-2">
    		<div class="card h-100">
      		<img src="./assets/images/satellite.jpg" class="card-img-top" alt="satellite">
      			<div class="card-body">
       			<h5 class="card-title">Satellite survey</h5>
                  <div class="card-footer bg-transparent border-success">
                      Satellite and imagery guide
                  </div>
      			</div>
    		</div>
 		 </div>
 		<div class="col-lg-2">
    		<div class="card h-100">
      			<img src="./assets/images/mining.jpg" class="card-img-top" alt="mining">
     			 <div class="card-body">
        			<h5 class="card-title">Mining</h5>
                    <div class="card-footer bg-transparent border-success">
                        We go to the core end of the minerals
                    </div>
      		</div>
    	</div>

            </div>
        <div class="col-lg-4">
            <div class="demo-content bg-alt">
              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
              Login</button>
              <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
              Sign Up</button>


			<div id="id01" class="modal">
  
 			 <form class="modal-content animate modal-fade" aria-hidden="true" action="Backend/License/loginProcess.php"  method="post">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h3>Login</h3>
    			</div>

    			<div class="container">
            <?php
            include ("./Backend/License/query.php");
            $shouldShow = 0;


      // Check user login or not
        if(!isset($_SESSION['email'])){
           $shouldShow = 1;

        }
            ?>
     				<label for="email"><b>Email</b></label>
      				<input type="email" placeholder="Enter Email" name="email" required>

     				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="password" required>
        
      				<button type="submit">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
   				</div>

    			<div class="container">
                    <hr>
                <button type="submit" class="btn btn-danger"><i class="fab fa-google fa-1x">&nbsp;Login with Google</i></button>
    				<hr>
      			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      			<span class="psw">No Account<a href="#"><br>Sign Up</a></span><br>
      			<div class="text-center">Forgot <a href="#">password?</a></div>
   				 </div>

  			</form>
			</div>

       <div id="id02" class="modal">
       <form class="modal-content animate" action="Backend/License/register.php" enctype="multipart/form-data"  method="post">
          <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h3>Register</h3>
          </div>

          <div class="container">
            <label for="firstname"><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" name="firstname" required>

              <label for="lastname"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" name="lastname" required>
              <label for="name"><b>License No</b></label>
              <input type="text" placeholder="Your License Number" name="ref_no" required>
              <label for="email"><b>Email</b></label>
              <input type="email" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>

              <label for="confirm_password"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="confirm_password" required>
        
              <button type="submit">Sign Up</button>
             
          </div>

          <div class="container">
                    
            <hr>
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"> Alredy have Account <br><a href="#">Sign Up</a></span>
           </div>
        </form>

      </div>



        </div>
     </div>
</div>
<br>
<footer class="bg-dark text-center text-white">
    <section class="mb-4">
      <a class="btn btn-outline-light btn-primary btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a class="btn btn-outline-light btn-primary btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <a class="btn btn-outline-light btn-danger btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <a class="btn btn-outline-light  btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <a class="btn btn-outline-light btn-primary btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>

    <section class="">
      <form action="#">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
        </div>
        <!--Grid row-->
      </form>
    </section>

    <section class="mb-4">
      <p>
        How to have the best Survey taking Experience.</p>
    </section>

    <section class="">
      <div class="row">

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Answer Surveys</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Discover Deals</a>
            </li>
            <li>
              <a href="#!" class="text-white">Extensions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Useful Articles</a>
            </li>
            <li>
              <a href="#!" class="text-white">About Us</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Informations</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Dos and Don'ts</a>
            </li>
            <li>
              <a href="#!" class="text-white">SiteMap</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms of Use</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Customer Support</a>
            </li>
            <li>
              <a href="#!" class="text-white">Advertise with Us</a>
            </li>
            <li>
              <a href="#!" class="text-white">Business Inquiries</a>
            </li>
            <li>
              <a href="#!" class="text-white">Careers</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  

  <div class="text-center p-3">
    © 2022 Copyright:
    <a class="text-white" href="musinakennedy@gmail.com">musinakennedy@gmail.com</a>
  </div>
</footer>
<script>

var shouldLoad = <?php echo $shouldShow; ?>;
if (shouldLoad == 1){

    loadPage(true); // load page is an imaginary Javascript function which
            //you can make to load the page.

}

</script>

</body>
</html>