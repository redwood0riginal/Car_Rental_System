<?php
include('./includes/functions.php'); 
// head
echo head('register');

// header
include('./includes/header.php');

?>

<body class="container d-flex justify-content-center my-3">
  <div class="card mb-3" style="max-width: 750px;">
    <div class="row g-0">
      <div class="col-md-6">
        <div class="container my-5 px-3" style="max-width: 400px;">
          <form class="card p-3 mt-4" id="signup-form" method="POST">
            <div width='100%' class="h3 d-flex justify-content-between align-items-center">Sign Up</div>
            <div class="p text-secondary my-2">Please enter your signup details</div>
            <div class="mb-3 form-floating">
            <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
            <label for="username" class="form-label">UserName</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="text" class="form-control" id="fullname" placeholder="Last Name" name="fullname" required>
            <label for="fullname" class="form-label">Full Name</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
            <label for="email" class="form-label">Email address</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="tel" class="form-control" id="phone" placeholder="phone address" name="phone">
            <label for="phone" class="form-label">Phone</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="password" class="form-control" id="password" placeholder="Password" style="position: relative;" name="password">
            <i class="fa-solid fa-eye eye"></i>
            <label for="password" class="form-label">Password</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" style="position: relative;" name="cpassword">
            <i class="fa-solid fa-eye eye"></i>
            <label for="cpassword" class="form-label">Confirm Password</label>
          </div>
          <div class="mb-3 ms-2">
            <div id="emailHelp" class="form-text">Already have an account? <a href="./login.php">Login</a></div>
          </div>
          <button type="submit" name="signup" class="btn btn-success">sign up</button>
          <p class="form-text">Are you a rental company? <a href="register_rental_company.php">Register as a rental company</a></p>
        </form>
      </div>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <img src="./images/signup-banner.jpg" alt="img" class="card-img" style="height: 100%;border-radius: 0;">
    </div>
  </div>
</div>

</body>
<?php include('./includes/footer.php'); ?>