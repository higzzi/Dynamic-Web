<?php
session_start();
function isLoggedIn()
{
    return isset($_SESSION['uname']);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Safety Campaign</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">


</head>

<body>
    <div class="cursor"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid"> <!-- Change container to container-fluid for full width -->
                <a class="navbar-brand" href="home.php">
                    <img src="Images/logo.png" alt="Logo" class="image-container" height="90">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Campaign Information
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown1">
                                <!-- Add bg-dark class to change dropdown background color -->
                                <li><a class="dropdown-item text-light" href="information.php">Information</a></li>
                                <!-- Add text-light class to change text color -->
                                <li><a class="dropdown-item text-light" href="popular-apps.php">Popular Social Media
                                        Apps</a></li> <!-- Add text-light class to change text color -->
                                <li><a class="dropdown-item text-light" href="parents.php">How Parents Can Help</a></li>
                                <!-- Add text-light class to change text color -->
                                <li><a class="dropdown-item text-light" href="livestreaming.php">Livestreaming</a></li>
                                <!-- Add text-light class to change text color -->
                                <li><a class="dropdown-item text-light" href="legislation.php">Legislation and
                                        Guidance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Account Options
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item text-light" href="contact.php">Contact</a></li>
                                <li><a class="dropdown-item text-light" href="newsletter.php">Newsletter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-md-end pt-0">
                    <li class="nav-item p-3 text-md-end fs-4">
                        <?php
                        if (isLoggedIn()) {
                            // Display content for logged-in users
                            echo "<h3>Welcome, " . $_SESSION['uname'] . "</h3>";
                            echo "<h3>You are currently logged in.</h3>";
                            echo '<a href="logout.php" class="btn btn-primary"><h3>Logout</h3></a>';

                        } else {
                            // Display content for users who are not logged in
                            echo "<h3>Welcome Guest!</h3>";
                            echo "<h3> Please <a href='login.php'>login</a> or <a href='register.php'>register</a> to access more features.</h3>";
                        }
                        ?>
                        <form class="d-flex mx-2 pt-0 pt-3">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>



                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <header class="pb-3">
        <div class="page-header min-vh-75 pt-2"  >
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-9 text-center mx-auto">
                        <h1 class="text-white mb-4 fs-1" spellcheck="false">Welcome to Social Media Campaign</h1>
                        <p class="lead text-white mb-sm-6 mb-4 fs-4">Join us in making a difference by spreading awareness and driving change.</p>

                    </div>
                </div>
            </div>
        </div>
        
    </header>

    <section id="home" class="container mt-5 text-center">
        <div class="transparent-box">


            <div class="row align-items-center">
                <div class="col-md-6 text-md-start"> <!-- Changed from text-md-end to text-md-start -->
                    <h2>Introducing Our Campaign</h2>
                    <p>Our campaign aims to raise awareness about the risks teenagers face on social media platforms. We
                        strive to provide valuable resources and information to help teenagers stay safe online.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="Images/SocialMediaRisks.jpg" class="img-fluid h-auto w-75 rounded-3"
                            alt="Social Media Risks">
                        <div class="pt-3 text-center">
                            <p>SocialMediaRisks</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Minimal text and good use of visuals to break up the text -->
            <div class="row align-items-center mt-5">

                <div class="col-md-6 ">
                    <div class="image-container">
                        <img src="Images/SocialMediaApps.png" class="img-fluid h-auto w-75 rounded-3"
                            alt="Social Media Apps">
                        <div class="pt-3">
                            <p>SocialMediaApps</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 text-md-start px-5 ">
                    <h3>Most Popular Social Media Apps</h3>
                    <p>Here are some of the most popular social media apps:</p>
                    <ul>
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Snapchat</li>
                        <li>TikTok</li>
                        <!-- Add more social media apps as needed -->
                    </ul>
                </div>
            </div>

            <!-- How to stay safe online -->
            <div class="row align-items-center mt-5">
                <div class="col-md-6 text-md-start"> <!-- Changed from text-md-end to text-md-start -->
                    <h3>How to Stay Safe Online</h3>
                    <p>Here are some tips to stay safe online:</p>
                    <ul>
                        <li>Keep your personal information private.</li>
                        <li>Be cautious when interacting with strangers online.</li>
                        <li>Think before you click on links or download files.</li>
                        <li>Use strong, unique passwords for your accounts.</li>
                        <!-- Add more safety tips as needed -->
                    </ul>
                </div>

                <div class="col-md-6">
                    <div class="image-container">
                        <img src="Images/StaySafe.jpg" class="img-fluid h-auto w-75 rounded-3" alt="Stay Safe Online">
                        <div class="pt-3">
                            <p>StaySafe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other content as specified -->
    </section>

   
        <footer class="mt-5 text-center">

            <!-- Motion word -->
            <p>Stay Safe. Stay Informed. Stay Connected.</p>

            <!-- Logo -->
            <img src="Images/logo.png" alt="Logo" class="image-container " height="90">


            <!-- Links -->
            <div class="mt-3">
                <a href="information.php" class="me-3">Information</a>
                <a href="popular-apps.php" class="me-3">Popular Social Media Apps</a>
                <a href="parents.php" class="me-3">How Parents Can Help</a>
                <a href="legislation.php" class="me-3">Legislation and Guidance</a>
                <a href="livestreaming.php" class="me-3">Livestreaming</a>
                <a href="Contact.php" class="me-3">Contact Us</a>
            </div>

            <!-- Additional links and information -->
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-6 text-md-end">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                    <div class="col-md-6 text-md-start">
                        <p>If you don't have an account, <a href="register.php">Register</a></p>
                    </div>
                </div>
            </div>

            <!-- You are here with page name counter -->
            <p class="mt-3" id="youAreHereCounter">You are here: (Home)</p>

            <!-- Copyright information -->
            <p>&copy; 2024 Social Media Safety Campaign</p>
        </footer>




    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cursor = document.querySelector(".cursor");

            // Function to set cursor position in local storage
            function setCursorPosition(x, y) {
                localStorage.setItem("cursorX", x);
                localStorage.setItem("cursorY", y);
            }

            // Function to get cursor position from local storage
            function getCursorPosition() {
                const x = localStorage.getItem("cursorX");
                const y = localStorage.getItem("cursorY");
                return { x: x, y: y };
            }

            // Set initial cursor position or get stored position
            const storedPosition = getCursorPosition();
            if (storedPosition.x && storedPosition.y) {
                cursor.style.top = storedPosition.y + "px";
                cursor.style.left = storedPosition.x + "px";
            }

            // Event listener for mousemove events to update cursor position
            document.addEventListener("mousemove", function (e) {
                const x = e.pageX;
                const y = e.pageY;
                cursor.style.top = y + "px";
                cursor.style.left = x + "px";
                setCursorPosition(x, y); // Update cursor position in local storage
            });

            // Event listener for click events to add and remove the expand class
            document.addEventListener('click', () => {
                cursor.classList.add("expand");
                setTimeout(() => {
                    cursor.classList.remove("expand");
                }, 500);
            });
        });
    </script>




</body>

</html>