<?php
  // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    // session_start();
    // if(isset($_SESSION['isLoginOK'])){
    //     header("location:home.php");
    // }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meetup-We are what we do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" href="image/Meetup_Logo.png">
    <link rel="stylesheet" href="js/script.js">


</head>
<body>
<div class="background">
        <img class="imgbackgroud-1" src="https://secure.meetupstatic.com/next/images/blobs/red-blob.svg" alt="">
        <img class="imgbackgroud-2" src="https://secure.meetupstatic.com/next/images/blobs/yellow-blob.svg" alt="">
        <img class="imgbackgroud-3" src="https://secure.meetupstatic.com/next/images/blobs/green-blob.svg" alt="">
    </div>
    
    <!-- header -->
    <header class="container-fluid" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-transpent">
                    <div class="container-fluid">
                        <a class="navbar-brand logochange" href="index.php"><img src="image/meetup-logo-1.png" alt=""
                                class="logochange"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html"><i class="bi bi-globe"></i>
                                        <strong>English</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account/login.php"><strong>Log In</strong></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="account/signup.php"><strong>Sign Up</strong> </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- main -->

    <main class="container mt-5">
        <!-- 1.Intro-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="row">

                        <div class="col-md-6 ">
                            <h1>
                                <strong>Dive in! There are so many things to do on Meetup</strong>
                            </h1>
                            <p>
                                <strong>Join a group to meet people, make friends, find support, grow a business, and
                                    explore your interests. Thousands of events are happening every day, both online and
                                    in person!</strong>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img alt="Meetup Online"
                                src="image/fisrt.png"
                                class="imgchange">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <a href="">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail First"
                                    src="image/Intro-1.jpg" /> 
                                 </a>                           
                            </div>
                            <p>
                                <a class="btn" href="#" style="color: rgb(88, 88, 177);"><strong>Make new friends<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></strong></a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="#">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail Second"
                                    src="image/Intro-2.jpg" />
                                </a>                  
                            </div>
                            <p>
                                <a class="btn" href="#" style="color: rgb(88, 88, 177);"><strong>Explore the outdoors<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></strong> </a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="#"> 
                                    <img class="card-img-top" alt="Bootstrap Thumbnail Third"
                                    src="image/Intro-3.jpg" />
                                </a>
                            </div>
                            <p>
                                <a class="btn" href="#" style="color: rgb(88, 88, 177);"><strong>Connect overtech<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></strong> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- 3z -->
        <center>
            <div class="container mt-5 mb-5">
                <button class="btnMenu" href="#">Boost your career</button>
                <button class="btnMenu" href="#">Find your zen</button>
                <button class="btnMenu" href="#">Get moving</button>
                <button class="btnMenu" href="#">Share language+culture</button>
                <button class="btnMenu" href="#">Read with friends</button>
                <button class="btnMenu" href="#">Write together</button>
                <button class="btnMenu" href="#">Hone your craft</button>
            </div>
        </center>
        <!-- 4.Find events or group -->
        <div class="container mt-5 mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>
                                    <strong>What do you want to do?</strong>
                                </h2>
                                <form action="">
                                    <div class="row g-3" style="width: 92.5%;">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Search for tennis"
                                                aria-label="Search for tennis">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Location"
                                                aria-label="Location">
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-success mt-4" type="submit"
                                        style="width:90%;background-color: red;color: white;border-radius: 10px;"><strong>Search</strong></button>
                                </form>

                            </div>
                            <div class="col-md-6">
                                <h2>
                                    <strong>See what’s happening</strong>

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
        <!-- 5.How Meetup Work -->
        <center>
            
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            <strong> How Meetup works</strong>
                        </h2>
                        <p>Meet new people who share your interests through online and in-person events. It’s free to
                            create an account.</p>
                    </div>
                </div>
            </div>
        

            <div class="container mt-5">
                <div class=" flext flex-row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <img alt="Bootstrap Image Preview"
                                    src="https://secure.meetupstatic.com/next/images/shared/handsUp.svg?w=256" />
                                <a href="" class="text-decoration-none">
                                    <h5 class="font-semibold text-xl mb-3">
                                        Join a group
                                    </h5>
                                </a>

                                <p class="">
                                    Do what you love, meet others who love it, find your community. The rest is history!
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img alt="Bootstrap Image Preview"
                                    src="https://secure.meetupstatic.com/next/images/shared/ticket.svg?w=256" />
                                <a href="" class="text-decoration-none">
                                    <h5 class="font-semibold text-xl mb-3">
                                        Find an event
                                    </h5>
                                </a>
                                <p>
                                    Events are happening on just about any topic you can think of, from online gaming
                                    and photography to yoga and hiking.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img alt="Bootstrap Image Preview"
                                    src="https://secure.meetupstatic.com/next/images/shared/joinGroup.svg?w=256" />
                                <a href="" class="text-decoration-none">
                                    <h5 class="font-semibold text-xl mb-3">
                                        Start a group
                                    </h5>
                                </a>
                                <p>
                                    You don’t have to be an expert to gather people together and explore shared
                                    interests.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                style="margin-top: 120px ;margin-bottom:100px;border-radius: 8px;color: white; background-color: rgb(23, 97, 156);height: 40px;">Join
                Meetup</button>
        </center>
        <!-- 7.Events -->
        <div class="events">
            <div class="d-flex mb-5">
                        <div class="col-md-10">

                            <h3 class="d-inline fw-bold">Upcoming online events</h3>
                        </div>
                        <div class="col-md" style="margin-left:40px">

                            <a href="" class="d-inline" style="color: rgb(197, 196 ,196);">Explore more events</a>
                        </div>
                    </div>
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
        
        <!-- 8.Groups -->
       <div class="groups">
        <div class="d-flex mb-5">
                            <div class="col-md-10">

                                <h3 class="d-inline fw-bold">Popular groups</h3>
                            </div>
                            <div class="col-md" style="margin-left:40px">

                                <a href="" class="d-inline" style="color: rgb(197, 196 ,196);">Explore more events</a>
                            </div>
                        </div>
                <div class="container text-center my-3" >
        
       </div>
       
      


        <!-- 9 Stories from Meetup -->
         <div class="stories">
            <div class="container mt-5">
               <div class="stories mt-5">
                    <h2 class="display-9 mb-3 text-center fw-bold">Stories from Meetup</h2>
                    <p class="text-center mt-3 ">People on Meetup have fostered community, learned new skills, started businesses, and made life-long friends. Learn how.</p>
                <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0" >
                        <a href="#"> <img src="image/story-1.webp" class="card-img-top" alt="..."></a>
                        <div class="card-body px-0 ">
                            <h5 class="card-title"><a href="#" class="link-dark text-decoration-none fw-bold">Three Ways To Make Coworker Friendships While Working From Home</a></h5>
                                <p class="card-text text-muted mt-3">Work friendships don't need to fade just because you're working remotely. Here are three fun ways you can get to know your colleagues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card border-0" >
                        <a href="#"><img src="image/story-2.webp" class="card-img-top" alt="..."></a> 
                        <div class="card-body px-0">
                            <h5 class="card-title"><a href="#" class="link-dark text-decoration-none fw-bold">Get Creative: Artistic Hobbies Do More Than Pass the Time</a></h5>
                            <p class="card-text text-muted mt-3">Reduce stress, improve your mood, and connect with others by pursuing your new artistic hobby through Meetup.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 ">
                    <div class="card border-0" >
                        <a href="#"><img src="image/story-3.webp" class="card-img-top" alt="..."></a>
                        <div class="card-body px-0">
                        <h5 class="card-title"><a href="#" class="link-dark text-decoration-none fw-bold">Three Ways to Make Coworker Friendships While Working From Home</a></h5>
                        <p class="card-text text-muted mt-3">Work friendships don’t need to fade just because you’re working remotely. Here are three fun ways you can get to know your colleagues.</p>
                    </div>
                </div> 
            </div>
        </div>
      
      
      
        <!-- <center>
            <div  style="margin-top:150px;">
                <h2><strong>Stories from Meetup</strong></h2>
                <p>People on Meetup have fostered community, learned new skills, started businesses, and made life-long
                    friends. Learn how.</p>
            </div>
            <div class="container" style="margin-bottom:150px;"> 
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" type="button">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail First"
                                        src="https://secure.meetupstatic.com/next/images/indexPage/first_article.webp?w=1920" />


                                </div>
                                <a class="btn" href="#"><strong>Three Ways To Make Coworker Friendships While Working
                                        From Home</strong></a>
                                <p>

                                    Work friendships don’t need to fade just because you’re working remotely. Here are
                                    three fun ways you can get to know your colleagues.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="card"  type="button">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail Second"
                                        src="https://secure.meetupstatic.com/next/images/indexPage/second_article.webp?w=1920" />


                                </div>
                                <a class="btn" href="#"><strong>Three Ways To Make Coworker Friendships While Working
                                        From Home</strong> </a>
                                <p>

                                    Since Meetup began nearly 20 years ago, we’ve fostered connections between more than
                                    50 million people in 190 countries worldwide. Here are five simple strategies to
                                    help you feel more connected and improve your wellbeing.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="card"  type="button">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail Third"
                                        src="https://secure.meetupstatic.com/next/images/indexPage/third_article.webp?w=1920" />


                                </div>
                                <a class="btn" href="#"><strong>How To Live Your Best Social Life</strong> </a>
                                <p>
                                    Social interaction is a key part of any healthy lifestyle. Discover all different
                                    kinds of events that’ll help you maintain a fun and fulfilling social life.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center> -->


   
    </main>
    
        <!-- Footer -->
    <?php
            include ("template/footer.php");
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/script.js" > </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>    
        
</body>

</html>