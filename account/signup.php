<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/style_signup.css">
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
                        <h4><strong>Sign up</strong></h4>
                    </div>
                    <div class="main_form container">
                        <p>Already a member?</p>
                        <a href="../account/login.php" class="text-decoration-none ms-1">Log in</a>
                    </div>
                </div>
                <!-- Sign Up With ... -->
                <div class="button_signin mt-3 ms-3 mb-5 row">
                    <div class="fb">
                        <button class="bnt">
                            <a href="" class="text-decoration-none">
                                <img src="https://img.icons8.com/ios-glyphs/30/4a90e2/facebook-f.png" />

                            </a>
                            Sign up with Facebook
                        </button>
                    </div>
                    <div class="gg">
                        <button class="bnt mt-3">
                            <a href="" class="text-decoration-none">
                                <img src="https://img.icons8.com/offices/30/000000/google-logo.png" />
                            </a>
                            Sign up with Google
                        </button>
                    </div>

                    <div class="apple">
                        <button class="bnt mt-3">
                            <a href="" class="text-decoration-none">
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/mac-os.png" />
                            </a>
                            Sign up with Apple
                        </button>
                    </div>
                    <div class="email">
                        <button class="bnt mt-3">
                            <a href="signup-gmail.php" class="text-decoration-none" style="color: black;">
                                <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-email-seo-dreamstale-lineal-dreamstale.png" />
                                Sign up with Email
                            </a>
                        </button>
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