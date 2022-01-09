<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style-groups-events.css">
</head>

<body>
    <header>
        <div class="top_narbar">
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand ms-4" href="#"><img src="image/meetup-logo-1.png" style="height: 34px; width: 100px;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class=" form_seach">
                        <form class="form-inline row">
                            <div class="col-md-2">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search for keywords">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control mr-sm-2" type="location" placeholder="Location" aria-label="Enter location">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" style="color: #339966;" aria-current="page" href=""><b>Start a new group</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html"><i class="bi bi-globe"></i>
                                    <strong>English</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login.php"><b>Log In</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="signup.php"><b>Sign Up</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>
            <div class="hr mt-5 ms-5">
                <hr width="40%" align="center" />
            </div>
        </div>
    </header>
    <!-- Main -->
    <main class="container mt-5 col-sm-10">
        <div class="group row">
            <div class="list-unstyled col-md-1">
                <a href="events.php" style="color: #006699">
                    <h4>Events</h4>
                </a>
            </div>
            <div class="col-md-6">
                <a href="groups.php" style="text-decoration:none; color: rgb(156, 148, 148) ">
                    <h4>Groups</h4>

                </a>
            </div>

            <!-- Default -->
            <div class="mt-3" style="color: rgb(156, 148, 148)">
                <p>Suggested Events near Ha Noi, VN</p>
            </div>
            <div class="Default row">
                <div class="any_day col-md-2">
                    <select class="def" aria-label="Default select example">
                        <option selected>Any Day</option>
                        <option value="1">To day</option>
                        <option value="1">Tomorrow</option>
                        <option value="1">This week</option>
                        <option value="1">Next week</option>
                        <option value="1">Coustom</option>
                    </select>
                </div>
                <div class="any_type col-md-2">
                    <select class="def" aria-label="Default select example">
                        <option selected>Any type</option>
                        <option value="1">online</option>
                        <option value="1">In person</option>
                    </select>
                </div>
                <div class="any_distance col-md-2">
                    <select class="def" aria-label="Default select example">
                        <option selected>Any Distance</option>
                        <option value="1">2 miles</option>
                        <option value="1">5 miles</option>
                        <option value="1">10 miles</option>
                        <option value="1">25 miles</option>
                        <option value="1">50 miles</option>
                    </select>
                </div>
                <div class="any_category col-md-2">
                    <select class="def" aria-label="Default select example">
                        <option selected>Any Category</option>
                        <option value="1">Any Category</option>
                        <option value="1">Any Category</option>
                        <option value="1">Any Category</option>
                        <option value="1">Any Category</option>
                        <option value="1">Any Category</option>
                    </select>
                </div>
                <div class="sort col-md-2">
                    <select class="def" aria-label="Default select example" style="width: 180px; color:white; background-color:	#006699">
                        <option selected>Sort by: Relavance</option>
                        <option value="1">date</option>
                        <option value="1">Relavance</option>
                    </select>
                </div>
            </div>
            <hr class="mt-4">
        </div>
        <!-- List Event -->
        <div class="list_groups">
            <div class="row g-0 position-relative">
                <div class="col-md-6 mb-md-0 p-md-3">
                    <img src="image/badminton_event.webp" class="group_image" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
                    <h7 style="color: #999966">SUN, JAN 9 @ 12:00 PM 2022</h7>
                    <h5 class="mt-0" style="color: black;">Funminton 2 - Every Sunday 12:00 - 14:00</h5>
                    <div class="mt-2">
                        <p>Hanoi Badminton . HN,VN </p>
                    </div>
                    <a href="signup.html" class="stretched-link"></a>
                </div>
                <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
                    24 attendees
                </div>
            </div>
            <hr>
            <div class="row g-0 position-relative">
                <div class="col-md-6 mb-md-0 p-md-3 ">
                    <img src="image/idea_to_ipo_events.webp" class="group_image" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
                    <h7 style="color: #999966">SUN, JAN 9 @ 12:00 PM 2022</h7>
                    <h5 class="mt-0" style="color: black;">How Non-Techies Can Launch Successful Tech Startups</h5>
                    <div class="mt-2">
                        <p>Group name:Ha Noi Startup: Idea to IPO • Ha Noi, VN</p>
                    </div>
                    <a href="signup.html" class="stretched-link"></a>
                </div>
                <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
                    8 attendees
                </div>
            </div>
            <hr>
            <div class="row g-0 position-relative">
                <div class="col-md-6 mb-md-0 p-md-3">
                    <img src="image/yoga_events.webp" class="group_image" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
                    <h7 style="color: #999966">SUN, JAN 9 @ 9:45 AM 2022</h7>
                    <h5 class="mt-0" style="color: black;">
                        Ha Noi Sunday Free Online Guided Meditation- Beginners and Intermediate</h5>
                    <div class="mt-2">
                        <p>Group name:Ha Noi Sahaja Yoga Meditation • Ha Noi, VN</p>
                    </div>
                    <a href="signup.html" class="stretched-link"></a>
                </div>
                <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
                    24 attendees
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <?php
        include("footer.php");
        ?>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>