<?php include('./includes/header.php'); ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="container my-5" style="max-width: 400px;">
        <div class="errorMessage"></div>
        <div class="h3 text-center mb-1">Sign Up Now</div>
        <form class="card p-3 mt-4" id="signup-form" method="POST">
          <div class="mb-3 form-floating">
            <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="First Name" name="fname" required>
            <label for="fname" class="form-label">First Name</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Last Name" name="lname" required>
            <label for="lname" class="form-label">Last Name</label>
          </div>
          <div class="mb-3 form-floating">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email address" name="email">
            <label for="email" class="form-label">Email address</label>
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
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <svg class="bd-placeholder-img img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
      </svg>
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>