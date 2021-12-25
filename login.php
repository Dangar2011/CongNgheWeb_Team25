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
    <div class="modal">
        <div class="modal_overlay">

        </div>
        <div class="modal_body">
            <div class="modal_main">
                <div class="container">
                    <div class="logo row">
                        <div class="image_logo mt-4 me-5">
                            <img src="image/Meetup_Logo.png" style="height: 48px;" alt="">
                        </div>
                        <div class="mt-1">
                            <h4>Log in</h4>
                        </div>
                        <p>Not a member yet?</p>
                        <a href="signup.html" class="text-decoration-none">Sign up</a>
                    </div>
                    <div class="form_login ms-5 mt-3">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><strong>Email</strong></label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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
                    <div class="mt-3 ms-5">
                        <hr width="90%" align="center" />
                    </div>
                    <div class="button_login mt-3">
                        <button class="facebook ms-5">
                            <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=2403839689&kid_directed_site=0&app_id=2403839689&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv11.0%2Fdialog%2Foauth%3Fapp_id%3D2403839689%26auth_type%3Dreauthorize%26cbt%3D1640082907155%26channel_url%3Dhttps%253A%252F%252Fstaticxx.facebook.com%252Fx%252Fconnect%252Fxd_arbiter%252F%253Fversion%253D46%2523cb%253Df32fe2a41c8aa1c%2526domain%253Dwww.meetup.com%2526is_canvas%253Dfalse%2526origin%253Dhttps%25253A%25252F%25252Fwww.meetup.com%25252Ffa02e70f344bd%2526relation%253Dopener%26client_id%3D2403839689%26display%3Dpopup%26domain%3Dwww.meetup.com%26e2e%3D%257B%257D%26fallback_redirect_uri%3Dhttps%253A%252F%252Fwww.meetup.com%252F%26locale%3Den_US%26logger_id%3Df2884604722165c%26origin%3D1%26redirect_uri%3Dhttps%253A%252F%252Fstaticxx.facebook.com%252Fx%252Fconnect%252Fxd_arbiter%252F%253Fversion%253D46%2523cb%253Df23746b3aeb2de8%2526domain%253Dwww.meetup.com%2526is_canvas%253Dfalse%2526origin%253Dhttps%25253A%25252F%25252Fwww.meetup.com%25252Ffa02e70f344bd%2526relation%253Dopener%2526frame%253Df1d90ec648bc668%26response_type%3Dtoken%252Csigned_request%252Cgraph_domain%26scope%3Demail%252Cuser_friends%26sdk%3Djoey%26version%3Dv11.0%26ret%3Dlogin%26fbapp_pres%3D0%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df23746b3aeb2de8%26domain%3Dwww.meetup.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.meetup.com%252Ffa02e70f344bd%26relation%3Dopener%26frame%3Df1d90ec648bc668%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied&display=popup&locale=en_GB&pl_dbl=0"
                                class="text-decoration-none">
                                <img src="https://img.icons8.com/ios-glyphs/30/4a90e2/facebook-f.png" />
                                Log in with Facebook
                            </a>
                        </button>
                        <button class="google mt-3 ms-5">
                            <a href="home.html" class="text-decoration-none">
                                <img src="https://img.icons8.com/offices/30/000000/google-logo.png" />
                                Log in with Google
                            </a>
                        </button>
                        <button class="apple mt-3 ms-5">
                            <a href="https://appleid.apple.com/auth/authorize?redirect_uri=https%3A%2F%2Fwww.meetup.com%2Fties2%2F&state=returnUri%3Dhttps%253A%252F%252Fwww.meetup.com%252Fhome&client_id=com.meetup.web&response_type=code%20id_token&scope=name%20email&response_mode=form_post"
                                class="text-decoration-none">
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/mac-os.png" />
                                Log in with Apple
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>