<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
    .styled {
  border: 0;
  line-height: 2.5;
  padding: 0 20px;
  font-size: 1rem;
  text-align: center;
  color: white;
  text-shadow: 1px 1px 1px #000;
  border-radius: 10px;
  background-color:  #0800ff;
  background-image: linear-gradient(
    to top left,
    rgba(0, 0, 0, 0.2),
    rgba(0, 0, 0, 0.2) 30%,
    rgba(0, 0, 0, 0)
  );
  box-shadow:
    inset 2px 2px 3px rgba(255, 255, 255, 0.6),
    inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.styled:hover {
  background-color: #0800ff;
}

.styled:active {
  box-shadow:
    inset -2px -2px 3px rgba(255, 255, 255, 0.6),
    inset 2px 2px 3px rgba(0, 0, 0, 0.6);
}

</style>
</head>
<body>
 
<div >
    <input type="submit" value="Login" id="rateProduct" style="display: block; width: 100%; background-color: red; text-align: center; padding: 10px; color: white; text-decoration: none; border: 2px solid red;
  border-radius: 0px;"   <?php if (!empty($_SESSION['userid']) && $_SESSION['userid']) {
        echo 'login'; $a=true ;
    } ?>">
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <button class="favorite styled"  type="button" >
                <a href="index.php" style="white" >Back</a>
            </button>
            <h1>Login to rate this product</h1><br>
            <div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
            <form method="post" id="loginForm" name="loginForm">
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="hidden" name="action" value="userLogin">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login" id="toggleButton">
            </form>
            <div class="login-help">
                <button class="favorite styled" type="button" id="openModalButton">Register</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <button class="favorite styled back-to-login" type="button">
                <a href="./" >Back</a>
            </button>
            <h1>Create an Account</h1><br>
            <div style="display:none;" id="registerError" class="alert alert-danger">Registration failed. Please try
                again later.</div>
            <form method="post" id="registerForm" name="registerForm">
                <input type="text" name="name" placeholder="Full Name" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="email" name="remail" placeholder="E-Mail" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="password" name="rpassword" placeholder="Password" minlength="5" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="password" name="cpassword" placeholder="Confirm Password" minlength="5" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="hidden" name="action" value="userRegister">

                <input type="submit" name="register" class="login loginmodal-submit" value="Register"
                    style="background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">

            </form>
        </div>
    </div>
</div>

<script>
   document.getElementById("openModalButton").addEventListener("click", function () {
        $("#registerModal").modal("show");
        $("#loginModal").modal("hide");
    });

    $(".back-to-login").click(function () {
        $("#loginModal").modal("show");
        $("#registerModal").modal("hide");
    });
</script>
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
    'image/userpics/profile.jpg',

];
$randomIndex = array_rand($avatarImages);
$randomAvatar = $avatarImages[$randomIndex];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    // Validate and sanitize user input
    $name = $conn->real_escape_string($_POST['name']);
    $username = $conn->real_escape_string($_POST['remail']);
    $password = intval($_POST['rpassword']);

    $insertUserSQL = "INSERT INTO item_users (name, username, password, avatar) VALUES ('$name', '$username', '$password', '$randomAvatar')";

    if ($conn->query($insertUserSQL) === TRUE) {
        $res = TRUE;
    }else {
        $res = FALSE;
    }

    if ($res) {
        echo '<script>alert("Registration successful.");</script>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Validate and sanitize user input
    $username = $conn->real_escape_string($_POST['user']);
    $password = $conn->real_escape_string($_POST['pass']);

    // Query to check if the user exists with the given credentials
    $query = "SELECT * FROM item_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // User found, set session variables and return success response
        $_SESSION['userid'] = $result->fetch_assoc()['id'];
        $_SESSION['username'] = $username;
        echo "success"; // You can customize this response based on your needs
    } else {
        // User not found, return error response
        echo "error";
    }
}

// Close the database connection
$conn->close();
?>

</div>
<script>
        // Get references to the input box, search icon, and close icon
        let inputBox = document.querySelector(".input-box");
        let searchIcon = document.querySelector(".icon");
        let closeIcon = document.querySelector(".close-icon");

        // Add a click event listener to the search icon
        searchIcon.addEventListener("click", () => inputBox.classList.add("open"));

        // Add a click event listener to the close icon
        closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));

          
    </script>
    
</body>
</html>