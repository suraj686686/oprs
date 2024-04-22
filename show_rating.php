<?php
session_start();

?>
	<?php include('php/header.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Product Review and Rating</title>
	<script src="js/rating.js"></script>
	<link rel="stylesheet" href="css/style.css">

</head>

           
	<div id="menuContent" >
        <div id="loginContent">
            <?php include 'inc/login.php'; ?>
        </div>
        <div id="menuContent">
            <?php include 'inc/menu.php'; ?>
        </div>
    </div>
	<br>
	<?php
	include 'class/Rating.php';
	$rating = new Rating();
	$itemDetails = $rating->getItem($_GET['item_id']);
	foreach ($itemDetails as $item) {
		$average = $rating->getRatingAverage($item["id"]);
		?>
		<div class="row">
			<div class="col-sm-2" style="width:150px">
				<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:300%;height:100%;">
			</div>

			<div class="col-sm-4" style="text-align: left; margin-left: 40%;">
				<h4 style=" ">
					<?php echo $item["name"]; ?>
				</h4>
				<div><span class="average">
						<?php printf('%.1f', $average); ?> <small>/ 5</small>
					</span>
					<span class="rating-reviews">
					</span>
				</div>

				<br><br>
				<a href="#ratingForm"><button type="button" id="rate" class="btn btn-info">Give Review and Rating</button></a> 
				<?php echo $item["description"]; ?>
			</div>
		</div>
	<?php } ?>
	</div>
	</div>


	<?php
	$itemRating = $rating->getItemRating($_GET['item_id']);
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;
	foreach ($itemRating as $rate) {
		$ratingNumber += $rate['ratingNumber'];
		$count += 1;
		if ($rate['ratingNumber'] == 5) {
			$fiveStarRating += 1;
		} else if ($rate['ratingNumber'] == 4) {
			$fourStarRating += 1;
		} else if ($rate['ratingNumber'] == 3) {
			$threeStarRating += 1;
		} else if ($rate['ratingNumber'] == 2) {
			$twoStarRating += 1;
		} else if ($rate['ratingNumber'] == 1) {
			$oneStarRating += 1;
		}
	}
	$average = 0;
	if ($ratingNumber && $count) {
		$average = $ratingNumber / $count;
	}
	?>
	<br>
	<div id="ratingDetails">
		<div class="row">
			<div class="col-sm-3">
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7">
					<?php printf('%.1f', $average); ?> <small>/ 5</small>
				</h2>
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if ($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
					?>
					<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				<?php } ?>
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating / 5) * 100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent) ? $fiveStarRatingPercent . '%' : '0%';

				$fourStarRatingPercent = round(($fourStarRating / 5) * 100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent) ? $fourStarRatingPercent . '%' : '0%';

				$threeStarRatingPercent = round(($threeStarRating / 5) * 100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent) ? $threeStarRatingPercent . '%' : '0%';

				$twoStarRatingPercent = round(($twoStarRating / 5) * 100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent) ? $twoStarRatingPercent . '%' : '0%';

				$oneStarRatingPercent = round(($oneStarRating / 5) * 100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent) ? $oneStarRatingPercent . '%' : '0%';

				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
								aria-valuemin="0" aria-valuemax="5"
								style="width: <?php echo $fiveStarRatingPercent; ?>">
								<span class="sr-only">
									<?php echo $fiveStarRatingPercent; ?>
								</span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
						<?php echo $fiveStarRating; ?>
					</div>
				</div>

				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
								aria-valuemin="0" aria-valuemax="5"
								style="width: <?php echo $fourStarRatingPercent; ?>">
								<span class="sr-only">
									<?php echo $fourStarRatingPercent; ?>
								</span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
						<?php echo $fourStarRating; ?>
					</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
								aria-valuemin="0" aria-valuemax="5"
								style="width: <?php echo $threeStarRatingPercent; ?>">
								<span class="sr-only">
									<?php echo $threeStarRatingPercent; ?>
								</span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
						<?php echo $threeStarRating; ?>
					</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
								aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
								<span class="sr-only">
									<?php echo $twoStarRatingPercent; ?>
								</span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
						<?php echo $twoStarRating; ?>
					</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
								aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
								<span class="sr-only">
									<?php echo $oneStarRatingPercent; ?>
								</span>
							</div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">
						<?php echo $oneStarRating; ?>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-7">
				<hr />
				<div class="review-block">
					<?php
					$itemRating = $rating->getItemRating($_GET['item_id']);
					foreach ($itemRating as $rating) {
						$date = date_create($rating['created']);
						$reviewDate = date_format($date, "M d, Y");
						$profilePic = "profile.png";
						if ($rating['avatar']) {
							$profilePic = $rating['avatar'];
						}
						?>
						<div class="row">
							<div class="col-sm-3">
								<img src="image/userpics/<?php echo $profilePic; ?>" class="img-rounded user-pic">
								<div class="review-block-name">By <a href="#">
										<?php echo $rating['username']; ?>
									</a></div>
								<div class="review-block-date">
									<?php echo $reviewDate; ?>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="review-block-rate">
									<?php
									for ($i = 1; $i <= 5; $i++) {
										$ratingClass = "btn-default btn-grey";
										if ($i <= $rating['ratingNumber']) {
											$ratingClass = "btn-warning";
										}
										?>
										<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>"
											aria-label="Left Align">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</button>
									<?php } ?>
								</div>
								<div class="review-block-title">
									<?php echo $rating['title']; ?>
								</div>
								<div class="review-block-description">
									<?php echo $rating['comments']; ?>
								</div>
							</div>
						</div>
						<hr />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">
					<div class="form-group">
						<h4>Rate this product</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton"
							aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton"
							aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton"
							aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton"
							aria-label="Left Align">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="itemId" name="itemId"
							value="<?php echo $_GET['item_id']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button
							type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPassword = '';
	$dbName = 'productrate';

	// Establish a database connection
	$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$avatarImages = [
		'image/userpics/user1.jpg',
		'image/userpics/user2.jpg',
		'image/userpics/user2.jpg',
		'image/userpics/user3.jpg',
		'image/userpics/user4.jpg',
		'image/userpics/user5.jpg',
		'image/userpics/user6.jpg',
		'image/userpics/profile.png',

	];
	$folderPath = 'image/userpics/';
	$jpgFiles = glob($folderPath . '*.jpg');

	if (!empty($jpgFiles)) {
		$randomIndex = array_rand($jpgFiles);
		$randomAvatar = str_replace($folderPath, '', $jpgFiles[$randomIndex]);
	} else {
		// Handle the case where no JPEG files are found in the folder
		$randomAvatar = 'default.jpg'; // You can set a default image
	}

	// Now, $randomAvatar contains the file name of a randomly selected JPEG image.
	

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Validate and sanitize user input
		$name = $conn->real_escape_string($_POST['name']);
		$email = $conn->real_escape_string($_POST['remail']);
		$password = intval($_POST['rpassword']);

		$insertUserSQL = "INSERT INTO item_users (name, username, password, avatar) VALUES ('$name', '$username', '$password', '$randomAvatar')";

	}

	// Close the database connection
	$conn->close();
	?>
	<div class="insert-post-ads1" style="margin-top:20px;">
		<?php include('php/footer.php'); ?>
	</div>
	</div>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const rateProductButton = document.getElementById("rate");
			const ratingDetails = document.getElementById("ratingDetails");

			rateProductButton.addEventListener("click", function () {
				// Check if the user is logged in (adjust this condition to your login logic)
				const isLoggedIn = <?php echo (isset($_SESSION['userid']) && $_SESSION['userid']) ? 'true' : 'false'; ?>;

				if (!isLoggedIn) {
					// If not logged in, show an alert message
					alert("Please log in to give a review and rating.");
				} 
			});
		});
	</script>
	</body>

</html>