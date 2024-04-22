<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Product Review System</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <link href="css/index.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/productsearch.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <style>

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="Username()">
<!--header-->
<?php
session_start();
include("php/header.php");
include 'class/Rating.php';
?>
  <b>
    <div id="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/electronics_adv.jpg" alt="electronics_adv" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Top Electronics Items</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/top_game.jpg" alt="top_game" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Top Games</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/grocery_adv.jpg" alt="grocery_adv" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Top Grocery Items</h3>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </b>
  <!-- Top Products -->
  <center>
    <h1 id="Products"><strong>PRODUCTS</strong></h1>
  </center>
  <div class="container">
    <?php
    $rating = new Rating();
    $itemList = $rating->getItemList();
    foreach ($itemList as $item) {
      $average = $rating->getRatingAverage($item["id"]);
      ?>
      <div class="row">
        <div class="col-sm-2" style="width:150px">
          <img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:300%;height:100%;">
        </div>
        <div class="col-sm-4" style="text-align: left; margin-left: 40%;">
          <h4>
            <?php echo $item["name"]; ?>
          </h4>
          <div><span class="average">
              <?php printf('%.1f', $average); ?> <small>/ 5</small>
            </span>
            <span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">
                <br><br><input type="submit" value="Rating & Reviews"
                  style="font-size: 30px; background-color: blue; color: white;"></a>
            </span>
          </div>
          <?php echo $item["description"]; ?>
        </div>
      </div>
      <hr style="
            border: none;
            height: 3px;
            background-color: blue;">
    <?php } ?>
  </div>
  </div>
  <!-- search -->
  <div id="search" >
    <a name="search"></a>
    <h1>PRODUCT SEARCH</h1>
    <form action="productsearch.php" class='searchtext' method="POST">
      <img src="images/search.jpeg" height="30%" width="30%" alt=" "><br>
      <input type="text" placeholder="Find your products" name="productname" />
      <input class="search" type="submit" value="search" />
    </form>
    <script>
        function navigateToSearchPage() {
            window.location.href = "productsearch.php";
            return false; 
        } 
    </script>
  </div>
  <!-- Footer -->
  <?php
  include('php/footer.php');
  ?>
</body>
</html>
