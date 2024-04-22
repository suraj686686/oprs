<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

nav {
  position: relative;
  z-index: 10;
  left: 0;
  right: 0;
  top: 0;
  height: 100px;
  background-color: #3e65da;
  padding: 0 5%;
}
nav .logo {
  float: left;
  width: 40%;
  height: 100%;
  display: flex;
  align-items: center;
  font-size: 24px;
  color: #fff;
}
nav .links {
  float: right;
  padding: 0;
  margin: 0;
  width: 60%;
  height: 100%;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
nav .links li {
  list-style: none;
}
nav .links a {
  display: block;
  padding: 1em;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  position: relative;
}
nav .links a:hover {
  color: white;
}
nav .links a::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: white;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out 0s;
}
nav .links a:hover::before {
  visibility: visible;
  transform: scaleX(1);
  color: white;
}
#nav-toggle {
  position: absolute;
  top: -100px;
}
nav .icon-burger {
  display: none;
  position: absolute;
  right: 5%;
  top: 50%;
  transform: translateY(-50%);
}
nav .icon-burger .line {
  width: 30px;
  height: 5px;
  background-color: #fff;
  margin: 5px;
  border-radius: 3px;
  transition: all 0.5s ease-in-out;
}
@media screen and (max-width: 768px) {
  nav .logo {
    float: none;
    width: auto;
    justify-content: center;
  }
  nav .links {
    float: none;
    position: fixed;
    z-index: 9;
    left: 0;
    right: 0;
    top: 100px;
    bottom: 100%;
    width: auto;
    height: auto;
    flex-direction: column;
    justify-content: space-evenly;
    background-color: rgba(0, 0, 0, 0.8);
    overflow: hidden;
    transition: all 0.5s ease-in-out;
  }
  nav .links a {
    font-size: 20px;
  }
  nav :checked ~ .links {
    bottom: 0;
  }
  nav .icon-burger {
    display: block;
  }
  nav :checked ~ .icon-burger .line:nth-child(1) {
    transform: translateY(10px) rotate(225deg);
  }
  nav :checked ~ .icon-burger .line:nth-child(3) {
    transform: translateY(-10px) rotate(-225deg);
  }
  nav :checked ~ .icon-burger .line:nth-child(2) {
    opacity: 0;
  }
}
</style>
</head>

<body>
    <nav>
    <input type="checkbox" id="nav-toggle">
        <div class="logo"><img src="images/logo.jpeg" alt="loading" height="80px" width="120px"
                style="border-radius: 50%;">
            <strong>Online Product Review System</strong>
        </div>

        <ul class="links">
            <li class="has-dropdown">

            <li><a href="index.php">HOME</a></li>
            <li><a href="aboutus.php" style=" line-height: 1; text-align: center;">ABOUT</a></li>
            <li><a href="index.php#Products/">PRODUCT</a></li>

            <li><a href="category.php">CATEGORIES</a></li>
            <li><a href="contactus.php" style="line-height: 1; text-align: center;">CONTACT</a></li>
            <li><a href="index.php#search">
                    <span class="icon">
                        <i class="uil uil-search search-icon"></i>
                    </span>
                    <i class="uil uil-times close-icon"></i>
                </a></li>
                
        </ul>
        
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <script>
        // Get references to the input box, search icon, and close icon
        let inputBox = document.querySelector(".input-box");
        let searchIcon = document.querySelector(".icon");
        let closeIcon = document.querySelector(".close-icon");

        // Add a click event listener to the search icon
        searchIcon.addEventListener("click", () => inputBox.classList.add("open"));

        // Add a click event listener to the close icon
        closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));

        document.addEventListener("DOMContentLoaded", function() {
    var loginContent = document.getElementById("loginContent");
    var menuContent = document.getElementById("menuContent");

    var toggleButton = document.getElementById("toggleButton");

    toggleButton.addEventListener("click", function () {
        if (loginContent.style.display === "block") {
            loginContent.style.display = "none";
            menuContent.style.display = "block";
        } else {
            loginContent.style.display = "block";
            menuContent.style.display = "none";
        }
    });
});
          
    </script>



</body>

</html>