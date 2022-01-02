<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style-login.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="navbar-brand ms-4" href="#"><img src="image/meetup-logo-1.png" style="height: 34px; width: 100px;" alt=""></a>
        </nav>
    </header>
    <!-- Main -->
    <main class="main mt-4">
        <div class="main_form container mt-4 row">
            <div class="logo row">
                <div class="image_logo mt-4 me-5">
                    <img src="image/Meetup_Logo.png" style="height: 48px;" alt="">
                </div>
                <div class="mt-1">
                    <h4><strong>Log in</strong></h4>
                </div>
                <div class="main_form container">
                    <p>Not a member yet?</p>
                    <a href="signup.html" class="text-decoration-none ms-1">Sign up</a>
                </div>

            </div>
            <!-- Form -->
            <div class="form_login">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><strong>Email</strong></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                    </div>
                    <button type="submit" class="btn btn-login">
                        <h4>Log in</h4>
                    </button>
                </form>
            </div>
            <div class="hr mt-3 ms-5">
                <hr width="40%" align="center" />
            </div>
            <div class="button_login mt-3 row">
                <button class="facebook">
                    <a href="https://www.facebook.com/" class="text-decoration-none">
                        <img src="https://img.icons8.com/ios-glyphs/30/4a90e2/facebook-f.png" />
                        Log in with Facebook
                    </a>
                </button>
                <button class="google mt-3">
                    <a href="home.html" class="text-decoration-none">
                        <img src="https://img.icons8.com/offices/30/000000/google-logo.png" />
                        Log in with Google
                    </a>
                </button>
                <button class="apple mt-3">
                    <a href="" class="text-decoration-none">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/mac-os.png" />
                        Log in with Apple
                    </a>
                </button>
            </div>
        </div>
    </main>
    
  <!-- Footer -->
  <footer class="footer mt-5">
    <div class=" mt-4 container row">
      <div class="get mt-3">
        <p>Create your own Meetup group.</p>
        <button class="get_started button ms-2">Get Started</button>
      </div>
      <div class="mt-2">
        <hr>
      </div>
      <div class="row">
        <div class="col-md">
          <h4>Your Account</h4>
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none ">Sign up</a></li>
            <li><a href="#" style="text-decoration:none ">Log in</a></li>
            <li><a href="#" style="text-decoration:none ">Help</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Discover</h4>
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none ">Groups</a></li>
            <li><a href="#" style="text-decoration:none ">Calendar</a></li>
            <li><a href="#" style="text-decoration:none ">Topics</a></li>
            <li><a href="#" style="text-decoration:none ">Cities</a></li>
            <li><a href="#" style="text-decoration:none ">Online Events</a></li>
            <li><a href="#" style="text-decoration:none ">Local Guides</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Meetup</h4>
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none">About</a></li>
            <li><a href="#" style="text-decoration:none">Blog</a></li>
            <li><a href="#" style="text-decoration:none">Meetup Pro</a></li>
            <li><a href="#" style="text-decoration:none">Careers</a></li>
            <li><a href="#" style="text-decoration:none">Apps</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="cod-md-6">
          <h4>Follow us</h4>
          <a href="#" class="fb"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></a>
          <a href="#" class="tw ms-2"><img src="https://img.icons8.com/color/48/000000/twitter-circled--v3.png"/></a>
          <a href="#" class="yt ms-2"><img src="https://img.icons8.com/color/48/000000/youtube-play.png"/></a>
          <a href="#" class="int ms-2"><img src="https://img.icons8.com/bubbles/50/000000/apple-camera.png"/></a>
        </div>
        <div class="ms-auto col-md-auto">
          <a href="#" class="google_play"><img src="image/google_play.svg" alt=""></a>
          <a href="#" class="apple_store"><img src="image/apple_store.svg" alt=""></a>
        </div>

      </div>
      <div class="meetup_2021 mt-4 row">
        <div class="col-md-2">
          <p>© 2021 Meetup</p>
        </div>

        <div class="col-md-1">
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none">About</a></li>
        </div>

        <div class="col-md-2">
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none">Privacy Policy</a></li>
        </div>

        <div class="col-md-2">
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none">Cookie Policy</a></li>
        </div>

        <div class="col-md-1">
          <ul class="menu list-unstyled">
            <li><a href="#" style="text-decoration:none">Help</a></li>
        </div>

      </div>

    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>