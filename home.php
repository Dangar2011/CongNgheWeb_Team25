<?php
  // Trước khi cho người dùng xâm nhập vào bên trong
   // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:index.php");
    }

?>
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
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="js/js2.js">

</head>

<body>
    <!-- Narbar -->
    <header class="container-fluid bg-white position-fixed" style="padding-bottom:0px">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="col-md-6 row">
                            <div class="col-md-2 ">
                                <a class="navbar-brand" href="home.php">
                                    <img src="image/meetup-logo-1.png" class="logochange" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <form action="process-search.php" method="get" class="input-group mb-3">
                                        <input type="text" class="form-control" name="search"
                                            placeholder="Search for keywords" aria-label="">
                                        <input type="text" class="form-control" placeholder="New York,NY" name="find"
                                            aria-label="">
                                        <button class="btn btn-outline-secondary bg-danger" type="submit"
                                            name="btnSearch"
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
                                    <a class="text-decoration-none link-primary" href="post/post_add.php">Add Post</a>
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
                                        <li><a class="dropdown-item" href="../CongNgheWeb_Team25/account/logout.php">Log out</a></li>
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
    <main class="container-fluid">
        <!--Welcome new members -->
        <div class="welcome">
            <div class="header">
                <div class="col-md-12 text-center mb-5 mt-5">
                    <img src="image/welcomeBike.svg" alt="" class="img-fluid rounded mt-5">
                    <div class="mt-3">
                        <h1><strong>Welcome to Meetup,</strong></h1>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card__container"
                        style="display:flex;align-items:center;justify-content: space-between;border-radius: 10px;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="card-item">
                                        <div class="card-img">
                                            <svg width="90" height="80" viewBox="0 0 90 80" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M52.654 71.78a26.581 26.581 0 006.72-1.711 35.788 35.788 0 006.304-3.3 52.74 52.74 0 008.064-6.457c2.755-2.692 5.04-5.724 6.674-9.207.6-1.279 1.152-2.61 1.377-4.039.17-1.081.512-2.148.568-3.232.08-1.577.071-3.174-.078-4.745-.3-3.16-1.446-6.043-3.27-8.635-.997-1.418-2-2.852-3.17-4.125-1.212-1.32-2.615-2.468-3.959-3.664a108.527 108.527 0 00-3.474-2.971c-1.725-1.41-3.402-2.897-5.238-4.147-2.338-1.593-4.707-3.19-7.455-4.043-2.663-.829-5.394-1.124-8.127-.525-2.392.524-4.48 1.702-6.305 3.38-2.017 1.856-3.275 4.166-4.106 6.697-.607 1.849-.944 3.786-1.114 5.741-.14 1.611-.25 3.234-.54 4.82-.304 1.67-.592 3.357-1.23 4.952-.906 2.261-1.819 4.52-2.686 6.797-.76 2-1.232 4.078-1.563 6.194a17.38 17.38 0 00-.025 5.194c.468 3.236 1.417 6.293 3.463 8.944 1.217 1.577 2.471 3.098 4.11 4.25a22.584 22.584 0 002.488 1.543c1.05.551 2.15 1.005 2.768 1.29 3.537 1.111 6.627 1.377 9.804.999z"
                                                    fill="#E6A386"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M46.31 38.623c-1.18 1.015-2.567 1.713-4.03 2.288-2.092.823-4.183 1.651-6.302 2.422-1.354.492-2.719.987-4.148 1.295a17.19 17.19 0 01-6.095.208 19.885 19.885 0 01-5.73-1.727c-1.674-.79-3.23-1.823-4.707-3.063a24.068 24.068 0 01-4.461-4.973A21.184 21.184 0 018.4 30.207c-1.079-3.075-1.436-6.114-1.013-9.062.27-1.887.837-3.642 1.737-5.231.783-1.383 1.767-2.573 2.895-3.619.896-.831 1.971-1.45 3.09-1.999 1.337-.653 2.777-1.06 4.294-1.261 2.376-.316 4.816-.07 7.307.704 1.998.62 3.902 1.574 5.76 2.67.846.5 1.629 1.154 2.44 1.739 1.131.815 2.267 1.622 3.39 2.45 1.048.771 2.09 1.551 3.118 2.353 1.302 1.017 2.602 2.036 3.776 3.235 1.109 1.133 2.072 2.368 2.832 3.736a12.12 12.12 0 011.448 4.372c.303 2.363-.155 4.422-1.267 6.222-.509.824-1.17 1.498-1.897 2.107z"
                                                    fill="#97CAD1"></path>
                                                <path
                                                    d="M25.826 25.826a3.93 3.93 0 013.93-3.93h26.387a6.176 6.176 0 016.175 6.175v20.212a6.176 6.176 0 01-6.175 6.175H32a6.176 6.176 0 01-6.175-6.175V25.826z"
                                                    fill="#fff"></path>
                                                <rect x="24.141" y="20.211" width="36.493" height="32.563" rx="5.053"
                                                    stroke="#00455D" stroke-width="1.684" stroke-linecap="round"
                                                    stroke-linejoin="round"></rect>
                                                <path
                                                    d="M34.247 17.404V23.3M50.528 17.404V23.3M24.983 30.878h35.37M36.492 41.545l4.492 3.65 6.737-8.422"
                                                    stroke="#00455D" stroke-width="1.684" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <circle opacity="0.5" cx="11.509" cy="36.773" r="4.211" fill="#212121">
                                                </circle>
                                                <circle opacity="0.5" cx="42.668" cy="60.073" r="2.807" fill="#212121">
                                                </circle>
                                                <circle opacity="0.5" cx="71.02" cy="33.966" r="1.965" fill="#212121">
                                                </circle>
                                            </svg>
                                        </div>
                                        <div class="card-content">
                                            <h4 class="card-content-title">Find your first event</h4>
                                            <p class="card-content-text">Events are happening 24/7. What do you want to
                                                do?</p>
                                            <a class="btn-card" href="events.php">Discover Events</a>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6">

                                    <div class="card-item">
                                        <div class="card-img">
                                            <svg width="96" height="84" viewBox="0 0 96 84" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M47.936 66.71c-1.223 1.05-2.659 1.772-4.172 2.368-2.166.852-4.33 1.71-6.524 2.506-1.4.51-2.814 1.022-4.293 1.341a17.796 17.796 0 01-6.309.216 20.58 20.58 0 01-5.932-1.788c-1.732-.818-3.343-1.887-4.871-3.17a24.913 24.913 0 01-4.618-5.148 21.93 21.93 0 01-2.521-5.037c-1.117-3.183-1.487-6.328-1.05-9.38.281-1.953.867-3.769 1.8-5.415.81-1.43 1.829-2.663 2.995-3.745.928-.86 2.04-1.502 3.2-2.069 1.383-.677 2.874-1.097 4.444-1.306 2.459-.326 4.984-.072 7.563.729 2.069.642 4.038 1.63 5.962 2.764.876.517 1.686 1.194 2.526 1.8 1.17.844 2.346 1.68 3.51 2.536a144.71 144.71 0 013.226 2.436c1.348 1.053 2.693 2.107 3.909 3.348 1.148 1.173 2.144 2.451 2.93 3.867a12.548 12.548 0 011.5 4.525c.313 2.446-.16 4.578-1.312 6.44-.526.853-1.212 1.551-1.963 2.182z"
                                                    fill="#7A1D47"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M34.075 21.064a27.519 27.519 0 00-2.421 6.756 37.048 37.048 0 00-.817 7.32 54.59 54.59 0 00.872 10.657c.716 3.923 1.996 7.639 4.039 11.056.75 1.255 1.572 2.5 2.668 3.52.83.771 1.547 1.683 2.445 2.357 1.307.982 2.682 1.899 4.117 2.68 2.886 1.573 6.023 2.257 9.302 2.192 1.795-.035 3.606-.065 5.375-.332 1.834-.276 3.631-.815 5.436-1.277 1.528-.39 3.05-.807 4.56-1.261 2.208-.665 4.455-1.243 6.591-2.095 2.72-1.085 5.46-2.193 7.784-4.057 2.253-1.806 4.087-3.978 5.155-6.67.935-2.356 1.133-4.83.748-7.368-.424-2.804-1.679-5.22-3.37-7.399-1.235-1.59-2.702-3.001-4.282-4.279-1.301-1.052-2.63-2.086-3.823-3.252-1.257-1.228-2.538-2.452-3.537-3.923-1.417-2.086-2.827-4.177-4.279-6.239-1.276-1.81-2.786-3.418-4.41-4.926a17.99 17.99 0 00-4.443-3.028c-3.047-1.472-6.22-2.426-9.68-2.205-2.056.132-4.088.327-6.024 1.066-.944.36-1.878.764-2.766 1.243-1.08.582-2.107 1.263-2.708 1.629-3.001 2.391-5.017 4.889-6.532 7.835z"
                                                    fill="#E6A386"></path>
                                                <circle cx="27.604" cy="35.739" r="6.102" fill="#fff"></circle>
                                                <circle cx="61.309" cy="35.739" r="6.102" fill="#fff"></circle>
                                                <circle cx="44.456" cy="32.834" r="7.264" fill="#fff"></circle>
                                                <path
                                                    d="M27.604 43.003c-5.701 0-10.467 4.103-11.638 9.583-.304 1.425.907 2.62 2.364 2.62h18.548c1.457 0 2.668-1.195 2.364-2.62-1.171-5.48-5.937-9.583-11.638-9.583zM61.31 43.003c-5.702 0-10.468 4.103-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="M44.166 41.26c-7.482 0-13.694 5.647-14.898 13.061-.234 1.439.97 2.629 2.428 2.629h24.94c1.457 0 2.661-1.19 2.428-2.629-1.205-7.414-7.416-13.061-14.898-13.061z"
                                                    fill="#fff"></path>
                                                <circle cx="28.766" cy="34.577" r="6.102" stroke="#00455D"
                                                    stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <circle cx="62.471" cy="34.577" r="6.102" stroke="#00455D"
                                                    stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <circle cx="45.619" cy="31.671" r="7.264" stroke="#00455D"
                                                    stroke-width="1.979" stroke-linecap="round" stroke-linejoin="round">
                                                </circle>
                                                <path
                                                    d="M28.767 41.26c-5.702 0-10.468 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62H38.04c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.638-9.583zM62.472 41.26c-5.702 0-10.467 4.102-11.638 9.583-.305 1.425.906 2.62 2.364 2.62h18.547c1.458 0 2.669-1.195 2.364-2.62-1.17-5.48-5.936-9.583-11.637-9.583z"
                                                    fill="#fff" stroke="#00455D" stroke-width="1.979"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M45.329 39.516c-7.482 0-13.694 5.648-14.898 13.062-.234 1.438.97 2.629 2.428 2.629h24.94c1.457 0 2.662-1.19 2.428-2.63-1.204-7.413-7.416-13.06-14.898-13.06z"
                                                    fill="#fff" stroke="#00455D" stroke-width="1.979"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="card-content">
                                            <h4 class="card-content-title">Join your first group</h4>
                                            <p class="card-content-text">As a member, you’ll receive updates each time
                                                your group schedules new events.</p>
                                            <a class="btn-card" href="groups.php">Join group</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- find events -->
            <div class="find-events" style="background-color:white;padding-bottom:20px">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>
                                        <strong>Find your next event:</strong>
                                    </h2>
                                    <form action="process-search.php">
                                        <div class="row g-3" style="width: 92.5%;">
                                            <div class="col">
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Search for tennis" aria-label="Search for tennis">
                                            </div>
                                            <div class="col">
                                                <input type="text" name="find" class="form-control"
                                                    placeholder="Location" aria-label="Location">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-1" style="width: 92.5%;">
                                            <div class="col">
                                                <select class="col-md-6" style="height:40px;width:100%;">
                                                    <option value="">Online + In person</option>
                                                    <option>Online</option>
                                                    <option>In person</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input style="height:40px;width:100%;" type="date" id="birthday"
                                                    name="birthday"></input>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-success mt-4" type="submit" name="btnSearch"
                                            style="width:90%;background-color: red;color: white;border-radius: 10px;"><strong>Search</strong></button>
                                    </form>

                                </div>
                                <div class="col-md-6">
                                    <h2>
                                        <strong>Check out what’s happening:</strong>

                                    </h2>
                                    <button class="btnMenu" href="#">Starting Soon</button>
                                    <button class="btnMenu" href="#">Today</button>
                                    <button class="btnMenu" href="#">Tomorrow</button>
                                    <button class="btnMenu" href="#">This Week</button>
                                    <button class="btnMenu" href="#">Online</button>
                                    <button class="btnMenu" href="#">In person</button>
                                    <button class="btnMenu" href="#">Trending near you</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- events -->
            <div class="events" style="background-color:white;margin-top:15px;">
                <div class="container">
                    <div class="d-flex mb-5">
                        <div class="col-md-10">
                            <h3 class="d-inline fw-bold">Attend an event starting soon</h3>
                        </div>
                        <div class="col-md">
                            <a href="events.php" class="d-inline" style="color: rgb(197, 196 ,196);">Attend an event
                                starting
                                soon</a>
                        </div>

                    </div>

                    <!-- carousel -->
                    <div class="container text-center my-3" >
            
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card" style="border:white;">
                                        <div class="card-img">
                                            <a href="">
                                                <img src="image/event-1.jpg"
                                                class="img-fluid">
                                            </a>
                                            
                                        </div>
                                        <div class="px-2">
                                            <a class="text-decoration-none"href=""> <h6 class=" mt-2" style="color: rgb(197, 196 ,196);">MON, JAN 3 @ 7:00 AM ICT</h6>
                                                <h6 class="fw-bold link-dark" ><strong>New York & New Jersey Virtual  Dating</strong>   
                                                 </h6>   
                                                 <p class="text-muted mt-3 mb-5">New York
                                                    Matchmaking Dating
                                                </p>
                                             </a>
                                               
                                                <div class="avatar mt-4">
                                                    <div class="row ">
                                                        <div class="col">
                                                        </div>
                                                        <div class="col">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(197, 196 ,196);margin-left:100px;" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                        </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card" style="border:white;">
                                        <div class="card-img">
                                            <a href=""><img src="image/event-2.jpg"
                                                class="img-fluid"></a>
                                            
                                        </div>
                                        <div class="px-2">
                                            <a class="text-decoration-none"href=""> <h6 class=" mt-2" style="color: rgb(197, 196 ,196);">SAT, JAN 1 @ 7:00 AM ICT</h6>
                                                <h6 class="fw-bold link-dark" ><strong>OASIS CHRISTIAN  SINGLES NEW YEARS EVE ZOOM CELEBRATION</strong>   
                                                 </h6>   
                                                 <p class="text-muted mt-3 mb-5">OASIS
                                                 Tri-State Christian Singles Events
                                                </p>
                                             </a>
                                               
                                                <div class="avatar mt-4">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <!-- images -->
                                                        </div>
                                                        <div class="col">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(197, 196 ,196);margin-left:100px;" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                        </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card" style="border:white;">
                                        <div class="card-img">
                                            <img src="image/event-3.jpg"
                                                class="img-fluid">
                                        </div>
                                        <div class="px-2">
                                            <a class="text-decoration-none"href=""> <h6 class=" mt-2" style="color: rgb(197, 196 ,196);">SAT, JAN 1 @ 7:00 AM ICT</h6>
                                                <h6 class="fw-bold link-dark" ><strong>First Ever NYC Young Professionals Book Club Meeting</strong>   
                                                 </h6>   
                                                 <p class="text-muted mt-3 mb-5">NYC Young Professionals Book Club
                                                </p>
                                             </a>
                                               
                                                <div class="avatar mt-4">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <!-- images -->
                                                        </div>
                                                        <div class="col">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(197, 196 ,196);margin-left:100px;" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                        </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card" style="border:white;">
                                        <div class="card-img">
                                            <img src="image/event-4.jpg"
                                                class="img-fluid">
                                        </div>
                                        <div class="px-2">
                                            <a class="text-decoration-none"href=""> <h6 class=" mt-2" style="color: rgb(197, 196 ,196);">SAT, JAN 1 @ 7:00 AM ICT</h6>
                                                <h6 class="fw-bold link-dark" ><strong>Van Gogh Museum - Amsterdam: Livestream Art Tour</strong>   
                                                 </h6>   
                                                 <p class="text-muted mt-3 mb-5">New York
                                                    History and Culture
                                                </p>
                                             </a>
                                               
                                                <div class="avatar mt-4">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <!-- images -->
                                                        </div>
                                                        <div class="col">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(197, 196 ,196);margin-left:100px;" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                        </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card" style="border:white;">
                                        <div class="card-img">
                                            <img src="image/event-5.jpg"
                                                class="img-fluid">
                                        </div>
                                        <div class="px-2">
                                            <a class="text-decoration-none"href=""> <h6 class=" mt-2" style="color: rgb(197, 196 ,196);">SAT, JAN 1 @ 7:00 AM ICT</h6>
                                                <h6 class="fw-bold link-dark" ><strong>Online
                                                    Spanish-English Language Exchange - New Year's Resolution!</strong>   
                                                 </h6>   
                                                 <p class="text-muted mt-3 mb-5">Spanglish
                                                    Languages and Culture
                                                </p>
                                             </a>
                                               
                                                <div class="avatar mt-4">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <!-- images -->
                                                        </div>
                                                        <div class="col">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color:rgb(197, 196 ,196);margin-left:100px;" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                        </svg>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>


                </div>

            </div>

            <!-- stories -->
            <div class="stories">
                <div class="container mt-5">
                    <div class="stories mt-5">
                        <h2 class="display-9 mb-3 text-center fw-bold">Stories from Meetup</h2>
                        <p class="text-center mt-3 ">People on Meetup have fostered community, learned new skills,
                            started businesses, and made life-long friends. Learn how.</p>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card border-0">
                                    <a href="#"> <img src="image/story-1.webp" class="card-img-top" alt="..."></a>
                                    <div class="card-body px-0 ">
                                        <h5 class="card-title"><a href="#"
                                                class="link-dark text-decoration-none fw-bold">Three Ways To Make
                                                Coworker Friendships While Working From Home</a></h5>
                                        <p class="card-text text-muted mt-3">Work friendships don't need to fade just
                                            because you're working remotely. Here are three fun ways you can get to know
                                            your colleagues.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 ">
                                <div class="card border-0">
                                    <a href="#"><img src="image/story-2.webp" class="card-img-top" alt="..."></a>
                                    <div class="card-body px-0">
                                        <h5 class="card-title"><a href="#"
                                                class="link-dark text-decoration-none fw-bold">Get Creative: Artistic
                                                Hobbies Do More Than Pass the Time</a></h5>
                                        <p class="card-text text-muted mt-3">Reduce stress, improve your mood, and
                                            connect with others by pursuing your new artistic hobby through Meetup.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3 ">
                                <div class="card border-0">
                                    <a href="#"><img src="image/story-3.webp" class="card-img-top" alt="..."></a>
                                    <div class="card-body px-0">
                                        <h5 class="card-title"><a href="#"
                                                class="link-dark text-decoration-none fw-bold">Three Ways to Make
                                                Coworker Friendships While Working From Home</a></h5>
                                        <p class="card-text text-muted mt-3">Work friendships don’t need to fade just
                                            because you’re working remotely. Here are three fun ways you can get to know
                                            your colleagues.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


    </main>

    <?php
            include("template/footer.php");
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