<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/signup-gmail.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="navbar-brand ms-4" href="#"><img src="image/meetup-logo-1.png" style="height: 34px; width: 100px;" alt=""></a>
        </nav>
    </header>

    <main>
        <!-- Main -->
        <div class="form mt-5">
            <div class="icon_left">
                <a href="../account/signup.php">
                    <i class="bi bi-chevron-left" style="font-size: 30px; color: black;"></i>
                </a>
            </div>
            <div class="container mt-5 ms-3">
                <div class="text mt-1">
                    Finish signing up
                </div>
                <!-- Form_Sign up_gmail -->
                <div class="form_gmail mt-4">
                    <form action="../account/active_account.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><strong>Your name</strong></label>
                            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="yourname" class="form-text">Your name with be public on Your meetup profile.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><strong>Email ddress</strong></label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                            <div id="emailaddress" class="form-text">We’ll use your email address to send you updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputlocation" class="form-label"><strong>Location</strong></label>
                            <input type="location" class="form-control" id="exampleInputlocation" placeholder="City or zip code">
                            <div id="emailaddress" class="form-text">We’ll use your location to show Meetup events near
                                you..</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputage" class="form-label"><strong>Age</strong><i class="bi bi-exclamation-circle ms-1"></i></label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    I am 18 years of age or older.</label>
                            </div>
                        </div>
                        <button type="submit" class="btn_signup" style="font-size: 20px;"><a href=""></a><strong>Sign up</strong></button>
                    </form>
                    <!-- Main footer -->
                    <div class="mt-3 me-5" style="text-align: center;">
                        By signing up, you agree to
                        <a href=""> Terms of Service</a>
                        ,
                        <a href="">Privacy Policy</a>
                        , and
                        <a href="">Cookie Policy</a>
                        .
                    </div>

                    <div class="main_footer mt-3 me-5">
                        Already a member?
                        <a href="../account/login.php" class="text-decoration-none ms-1">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <?php
        include("../template/footer_1.php");
        ?>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>