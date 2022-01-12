<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <link rel="shortcut icon" href="image/Meetup_Logo.png">
    <link rel="stylesheet" href="css/style-post-view.css">
    <link rel="stylesheet" href="js/js2.js">

</head>

<body>
    <!-- Narbar -->
    <header class="container-fluid bg-white">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="col-md-6 row">
                            <div class="col-md-2 ">
                                <a class="navbar-brand" href="#">
                                    <img src="image/meetup-logo-1.png" class="logochange" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 ">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search"
                                        placeholder="Search for keywords" aria-label="">
                                    <input type="text" class="form-control" placeholder="New York,NY" aria-label="">
                                    <form action="find/process-search.php" method="get">
                                        <button class="btn btn-outline-secondary bg-danger" type="submit" name="find"
                                            style="boder-top-left-radius:0px;boder-top-left-radius:0px">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 20 20"
                                                style="color:white">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-0 mb-lg-0 ">
                                <button class="nav-item bg-white border-0">
                                    <a class="nav-link text-decoration-none link-primary"
                                        style="color:rgb(170, 170 ,170);" href="#">Start a new group-30% off!</a>
                                </button>
                                <button class="nav-item bg-white border-0">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            style="color: black" fill="currentColor" class="bi bi-chat-left"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        </svg>

                                    </a>
                                </button>
                                <button class="nav-item bg-white border-0">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            style="color: black" fill="currentColor" class="bi bi-bell"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                        </svg>
                                    </a>
                                </button>
                                <button class="flex-shrink-0 dropdown bg-white border-0">
                                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                        id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="image/Meetup_Logo.png" alt="mdo" width="32" height="32"
                                            class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                        <li><a class="dropdown-item" href="#">Your events</a></li>
                                        <li><a class="dropdown-item" href="#">Your groups</a></li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Help</a></li>
                                        <li><a class="dropdown-item" href="#">Log out</a></li>
                                    </ul>
                                </button>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <hr>
        </div>
       


    </header>
    
    <main class="container">
    <div class="sticky ">
            <p>Thursday, January 20, 2022</p>
            <h4>Grand Central Murder Mystery & Scavenger Hunt</h4>
        
        </div>
        <a href="groups.php" class="link-primary text-decoration-none"><img src="image/Meetup_Logo.png" alt="mdo" width="40" style="background-color:white;"
                    height="40" class="rounded-circle">
                <h6>Lou S.</h6>
            </a>
            <hr>
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-6">
                    <img src="image/event-1.jpg" width="660" height="370" alt="">
                    <h4 class="mt-3"> <strong>Details</strong></h4>
                    <p>
                        *GET TICKETS AT -
                        https://dljparty.ticketleap.com/grand-central-murder-mystery--scavenger-hunt/dates/ (For your
                        safety, this event will be operating at a limited capacity. Tickets will sell out quickly.
                        Vaccinated only. )

                        Join us after work for a safe & social adventure at our Grand Central Murder Mystery Scavenger
                        Hunt.
                        You don’t need any special skills for this activity. Get ready to have fun making new friends
                        and
                        solving a mystery. Plus, you'll find out things about Grand Central you never knew before!

                        How It Works:
                        * When you arrive we will put you on teams - if you don’t already have one (90% of those
                        attending
                        will not have a team).

                        * Each team will be given a list of clues and 75 minutes to head to Grand Central to try and
                        uncover
                        the mystery of Mary’s demise.

                        *The team with the most points wins!

                        * Once everyone is back we'll safely socialize where you can share your experiences with the
                        others.

                        The Theme:
                        Meet Up Mary is a regular on the social circuit in New York. You'd probably know her if you've
                        been
                        out before. She was very personable, friendly and bubbly! Unfortunately Mary met a horrific end
                        at
                        Grand Central and the police need you help to solve her case! Join us for this fun and
                        educational
                        night where you will get to explore every corner of the NYC Landmark in ways that you never have
                        before! (If you have participated in our other Grand Central Hunts no worries as this is a
                        completely different experience)

                        COVID-19 Protocols:
                        *This event has been posted as a Vaccinated Only event. You'll need to show your vaccination
                        card
                        (photo is fine) or Excelsior app. Face masks are recommended.

                        *PURCHASE TICKET AT -
                        https://dljparty.ticketleap.com/grand-central-murder-mystery--scavenger-hunt/dates/ (*$20-$30
                        depending upon how early you purchase. NOT sold at door.)</p>
                </div>

                <div class="col-md-6">
                    <div class="sticky">
                        <div class="card-item">
                        <div class="card-img">
                            <!-- image -->

                        </div>
                        <div class="card-content">
                            <a class="btn-card" href="groups.php">
                                <h4 class="card-content-title">Group Name</h4>
                            </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="card-img">
                            <!-- image -->

                        </div>
                        <div class="card-content">
                            <a class="btn-card" href="groups.php">
                                <h4 class="card-content-title">Group Name</h4>
                            </a>
                        </div>
                    </div>
                    </div>
                    

                </div>


            </div>


        </div>






    </main>

    
    <?php
    include ("template/footer.php");
?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="js/script.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>