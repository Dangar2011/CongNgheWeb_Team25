<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../css/style-login.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <a class="navbar-brand ms-4" href="#"><img src="../image/meetup-logo-1.png" style="height: 34px; width: 100px;" alt=""></a>
    </nav>
  </header>
  <!-- Main -->
  <main class="main mt-1">
    <div class="form mt-5">
      <div class="main_form container mt-4 row">
        <div class="logo row">
          <div class="image_logo mt-4 me-5">
            <img src="../image/Meetup_Logo.png" style="height: 48px;" alt="">
          </div>
          <div class="mt-1">
            <h4><strong>Log in</strong></h4>
          </div>
          <div class="main_form container">
            <p>Not a member yet?</p>
            <a href="../account/signup.php" class="text-decoration-none ms-1">Sign up</a>
          </div>

        </div>
        <!-- Form -->
        <div class="form_login">
          <form action="../account/process-login.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" ><strong>Email</strong></label>
              <input type="email" class="form-control" name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" ><strong>Password</strong></label>
              <input type="password" class="form-control"name="txtPassWord" id="exampleInputPassword1" pattern="[a-zA-Z0-9!@#$%^&*]{8,}" required />
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
            </div>
            <button type="submit" class="btn btn-login" style="text-decoration:none" name="btnSignIn">
              <h4>Log in</h4>
            </button>
          </form>
        </div>
        <div class="hr mt-2">
          <hr width="90%" align="center" />
        </div>
        <!-- Fb, Gg, Apple -->
        <div class="button_login mt-1 row">
          <div class="fb">
            <button class="btn_a">
              <a href="#" class="text-decoration-none">
                <img src="https://img.icons8.com/ios-glyphs/30/4a90e2/facebook-f.png" />
              </a>
              Log in with Facebook
            </button>
          </div>

          <div class="gg">
            <button class="btn_a mt-1">
              <a href="#" class="text-decoration-none">
                <img src="https://img.icons8.com/offices/30/000000/google-logo.png" />
              </a>
              Log in with Google
            </button>
          </div>

          <div class="apple">
            <button class="btn_a mt-1">
              <a href="#" class="text-decoration-none">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/mac-os.png" />
              </a>
              Log in with Apple
            </button>
          </div>
          <div class="mt-3 mb-3" style="text-align: center;">
            <a href="">Issues with log in?</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php
  include("../template/footer_1.php");
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


<!-- pattern="" required : Bắt lỗi form bằng HTML5-->