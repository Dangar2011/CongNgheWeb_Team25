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
                    <a class="navbar-brand ms-4" href="../CongNgheWeb_Team25/index.php"><img src="image/meetup-logo-1.png" style="height: 32px; width: 100px;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Form Search -->
                    <div class=" ms-4">
                        <div>

                            <form action="process-search.php" class="input-group">
                                <input type="text" class="form-control" placeholder="Search for keywords" aria-label="" name="search">
                                <input type="text" class="form-control" placeholder="Enter Location" aria-label="" name='find'>
                                <button class="btn btn-outline-secondary bg-danger" type="submit" name='btnSearch'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 20 20" style="color:white">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-0 mb-lg-0 ">
                                <button class="nav-item bg-white border-0">
                                    <a class="nav-link text-decoration-none link-primary"
                                        style="color:rgb(170, 170 ,170);" href="#">Start a new group-30% off!</a>
                                </button>
                                <button class="nav-item bg-white border-0">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            style="color: black" fill="currentColor" class="bi bi-chat-left"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        </svg>

                                    </a>
                                </button>
                                <button class="nav-item bg-white border-0">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
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
            <?php
            require('C:\xampp\htdocs\CongNgheWeb_Team25\post\post_connect.php');
            $sql = "SELECT idPost,title,images,openday,address FROM posts";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $imageURL = 'photo/' . $row["images"];

            ?>
                    <div class="row g-0 position-relative">
                        <div class="col-md-6 mb-md-0 p-md-3">
                            <img src="<?php echo $imageURL;  ?>" class="group_image" alt="...">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">

                            <h7 style="color: #999966">Openday: <?php echo $row['openday'];   ?></h7>
                            <h5 class="mt-0" style="color: black;"><?php echo $row['title']; ?></h5>
                            <div class="mt-2">
                                <p>Address: <?php echo $row['address']; ?> </p>
                            </div>
                            <a href="post/post_view.php?id=<?php echo $row['idPost']; ?>" class="stretched-link"></a>
                        </div>
                        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
                            24 attendees
                            <hr>
                    <?php
                }
            }
            // Bước 04: Đóng kết nối Database Server
            mysqli_close($conn);
                    ?>
                        </div>
                    </div>
                    <hr>

        </div>
    </main>
    <!-- Footer -->
    <footer>
        <?php
        include("template/footer_1.php");
        ?>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>