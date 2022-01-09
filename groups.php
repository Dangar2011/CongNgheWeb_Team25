<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Groups</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/style-groups.css">
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
          <!-- Search -->
          <div class="search_location input-group ms-4">
            <div class="form-outline">
              <label class="form-label" for="form1"></label>
              <input type="search" id="form1" class="form-control" placeholder="Search for keywords"/>
            </div>
            <button type="button" class="btn_search" style="height: 38px; width: 38px;">
              <i class="fas fa-search"></i>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
        <a href="" style="text-decoration:none; color: rgb(156, 148, 148)">
          <h4>Events</h4>
        </a>
      </div>
      <div class="col-md-6">
        <a href="groups.php" style="color: rgb(42, 167, 42)">
          <h4>Groups</h4>

        </a>
      </div>

      <!-- Default -->
      <div class="mt-3" style="color: rgb(156, 148, 148)">
        <p>Suggested Groups near Ha Noi, VN</p>
      </div>
      <div class="Default row">
        <div class="any_distance col-sm-2">
          <select class="def" aria-label="Default select example">
            <option selected>Any Distance</option>
            <option value="1">2 miles</option>
            <option value="1">5 miles</option>
            <option value="1">10 miles</option>
            <option value="1">25 miles</option>
            <option value="1">50 miles</option>
          </select>
        </div>
        <div class="any_category col-sm-5">
          <select class="def" aria-label="Default select example">
            <option selected>Any Category</option>
            <option value="1">Any Category</option>
            <option value="1">Any Category</option>
            <option value="1">Any Category</option>
            <option value="1">Any Category</option>
            <option value="1">Any Category</option>
          </select>
        </div>
      </div>
      <hr class="mt-4">
    </div>
    <!-- List Groups -->
    <div class="list_groups">
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-3">
          <img src="image/idea_to_ipo.jpg" class="group_image" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
          <h5 class="mt-0" style="color: black;">Ha Noi Startup: Idea to IPO</h5>
          <h6>HA NOI, VN</h6>
          <div class="mt-2">
            <p>Entrepreneurship permeates the culture of Silicon Valley - the innovation capital of the world...</p>
          </div>
          <a href="signup.html" class="stretched-link"></a>
        </div>
        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
          969 members . Public
          <img style="height: 20px;" src="https://img.icons8.com/ios-glyphs/30/000000/help.png" />
        </div>
      </div>
      <hr>
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-3 ">
          <img src="image/Sahaja Yoga.jpeg" class="group_image" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
          <h5 class="mt-0" style="color: black;">Ha Noi Sahaja Yoga Meditation</h5>
          <h6>HA NOI, VN</h6>
          <div class="mt-2">
            <p>Looking for peace, balance, joy, overcome stress, transform and meet other seekers?...</p>
          </div>
          <a href="signup.html" class="stretched-link"></a>
        </div>
        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
          369 members . Public
          <img style="height: 20px;" src="https://img.icons8.com/ios-glyphs/30/000000/help.png" />
        </div>
      </div>
      <hr>
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-3">
          <img src="image/badminton.jpeg" class="group_image" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
          <h5 class="mt-0" style="color: black;">Hanoi Badminton</h5>
          <h6>HA NOI, VN</h6>
          <div class="mt-2">
            <p>This group is for Badminton players of all abilities. We will meet regularly to play mainly doubles games....</p>
          </div>
          <a href="signup.html" class="stretched-link"></a>
        </div>
        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
          893 members . Public
          <img style="height: 20px;" src="https://img.icons8.com/ios-glyphs/30/000000/help.png" />
        </div>
      </div>
      <hr>
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-3">
          <img src="image/language.png" class="group_image" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
          <h5 class="mt-0" style="color: black;">
            Hanoi International Language Exchange</h5>
          <h6>HA NOI, VN</h6>
          <div class="mt-2">
            <p>In the group, attendances will chat with other languages that they want to learn in Cafe....</p>
          </div>
          <a href="signup.html" class="stretched-link"></a>
        </div>
        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
          478 members . Public
          <img style="height: 20px;" src="https://img.icons8.com/ios-glyphs/30/000000/help.png" />
        </div>
      </div>
      <hr>
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-3">
          <img src="image/girl.png" class="group_image" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0" style="color: rgb(156, 148, 148)">
          <h5 class="mt-0" style="color: black;">Hanoi I Girl Gone International</h5>
          <h6>HA NOI, VN</h6>
          <div class="mt-2">
            <p>Quynh Nga is the GGI Ha Noi COMMUNITY MANAGER....</p>
          </div>
          <a href="signup.html" class="stretched-link"></a>
        </div>
        <div class="members" style="text-align: center; color: rgb(156, 148, 148)">
          569 members . Public
          <img style="height: 20px;" src="https://img.icons8.com/ios-glyphs/30/000000/help.png" />
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