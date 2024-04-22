<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productrate";
include("class/Rating.php");
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["productname"])) {
  $searchQuery = htmlspecialchars($_POST["productname"]);
  try {
    $stmt = $conn->prepare("SELECT * FROM item WHERE MATCH(name) AGAINST(:searchQuery IN BOOLEAN MODE)");
    $stmt->bindValue(':searchQuery', $searchQuery, PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($results)) {
      echo "<script>alert('No products found for your search: " . $searchQuery . "');</script>";
    } else {
      echo '<div class="container">';
      $rating = new Rating(); 
      foreach ($results as $item) {
        $average = $rating->getRatingAverage($item["id"]);
        echo '<div class="row" style="margin: 20px; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9; box-shadow: 2px 2px 5px #888888;">';
        echo '<div class="col-sm-2" >';
        echo '<center><img class="product_image" src="image/' . $item["image"] . '" style="width:30%; height:60%;" ></center>';
        echo '</div>';
        echo '<div class="col-sm-4">';
        echo '<h4 style="font-size: 24px; margin: 10px 0;">' . $item["name"] . '</h4>';
        echo '<div style="text-align: center; background-color: #f9f9f9; padding: 5px;">';
        echo '<span class="average" style="font-size: 18px; color: blue;">';
        echo sprintf('%.1f', $average) . ' <small>/ 5</small>';
        echo '</span>';
        echo '<span class="rating-reviews" style="margin: 10px 0;">';
        echo '<a href="show_rating.php?item_id=' . $item["id"] . '">';
        echo '<br><br><input type="submit" value="Rating & Reviews" style="font-size: 30px; background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;"></a>';
        echo '</span>';
        echo '</div>';
        echo $item["description"];
        echo '</div>';
        echo '</div>';
      }
      echo '</div>';

    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
} else {
}
$conn = null;
?>