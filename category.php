<!DOCTYPE html>
<html lang="en">

<head>
  <title>category</title>
  <link rel="stylesheet" href="css/bootstrap_new.css">
  <link href="css/index.css" rel="stylesheet" />
  <link href="css/category.css" rel="stylesheet" />
  <link href="css/popover.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/header&footer.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="Username()">
  <?php
  include('php/header.php');
  ?>

  <div class="contenta">


    <p class="title"> Category </p>

    <div class="group electronics">
      <label class="label" for="password"><a href="category_detail.html?id=1" target="_blank"
          class="line">Electronics</a></label>
    </div>

    <div class="group computers">
      <label class="label" for="password"><a href="category_detail.html?id=2" target="_blank"
          class="line">Computers</a></label>
    </div>

    <div class="group vadiogames">
      <label class="label" for="password"><a href="category_detail.html?id=3" target="_blank" class="line">video
          games</a></label>
    </div>

    <div class="group software">
      <label class="label" for="password"><a href="category_detail.html?id=4" target="_blank"
          class="line">Software</a></label>
    </div>

    <div class="group clothes">
      <label class="label" for="password"><a href="category_detail.html?id=5" target="_blank"
          class="line">Clothes</a></label>
    </div>
  </div>
  <?php include('php/footer.php');?>
  <script src="js/footer_new.js" crossorigin="anonymous"></script>
  <script>
    let inputBox = document.querySelector(".input-box"),
      searchIcon = document.querySelector(".icon"),
      closeIcon = document.querySelector(".close-icon");
    searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
    closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
  </script>
  </div>
</body>

</html>