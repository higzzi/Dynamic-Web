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
    <title>Most Popular Social Media Apps - Social Media Safety Campaign</title>
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
                           echo "<h3>Welcome, " . $_SESSION['uname'] .  "</h3>";
                            echo "<h3>You are currently logged in.</h3>";
                            echo '<a href="logout.php" class="btn btn-primary"><h3>Logout</h3></a>';

                        } else {
                            // Display content for users who are not logged in
                            echo "<h3>Welcome Guest!</h3>";
                            echo "<h3> Please <a href='login.php'>login</a> or <a href='register.php' >register</a> to access more features.</h3>";
                        }
                        ?>
                    <form class="d-flex mx-2 pt-0 pt-3" >
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                    
                        
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="container mt-5 ">
        <div class="transparent-box">
            <div class="py-3">
                <h2>Most Popular Social Media Apps</h2>
            </div>

            <!-- Search form -->
            <form action="https://www.google.com/search" method="get" class="mb-3">
                <div class="input-group">
                    <input name="q" type="text" class="form-control" placeholder="Search for Social Media Apps...">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </form>

            <!-- Results display (To be populated dynamically from the database) -->
            <div id="results">
                <!-- Results will be displayed here -->
            </div>

            <!-- Social Media Apps List -->
            <ul class="list-unstyled">
                <!-- Instagram -->
                <li class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-first">
                        <h4>Instagram</h4>
                        <p>Instagram is a popular photo and video sharing social networking platform. Stay safe on
                            Instagram by:</p>
                        <ul>
                            <li>Adjusting privacy settings to control who can see your posts.</li>
                            <li>Avoiding sharing personal information publicly.</li>
                            <li>Being cautious about interacting with strangers and accepting friend requests only from
                                people you know.</li>
                            <li>Reporting any inappropriate content or behavior.</li>
                            <li>Being mindful of the impact of your posts on your mental health.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-last text-md-end">
                        <div class="scene">
                            <div class="cube">
                                <div class="face front">
                                    <i class="fab fa-instagram-f"><img src="Images/instagram.png"
                                            class="img-fluid  rounded-4" alt=""></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Facebook -->
                <li class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-last">
                        <h4>Facebook</h4>
                        <p>Facebook is a widely used social networking platform. Stay safe on Facebook by:</p>
                        <ul>
                            <li>Setting strong privacy settings to limit who can see your posts and personal
                                information.</li>
                            <li>Avoiding clicking on suspicious links or friend requests from unknown users.</li>
                            <li>Being cautious about sharing sensitive information, such as your address or phone
                                number.</li>
                            <li>Being aware of the risks of oversharing personal information.</li>
                            <li>Reporting any bullying or harassment.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <div class="scene">
                            <div class="cube">
                                <div class="face front">
                                    <i class="fab fa-facebook-f"><img src="Images/Facebook.png"
                                            class="img-fluid w-75 rounded-4" alt=""></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Twitter -->
                <li class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-first">
                        <h4>Twitter</h4>
                        <p>Twitter is a popular social networking platform for sharing news and updates. Stay safe on
                            Twitter by:</p>
                        <ul>
                            <li>Using a strong, unique password for your Twitter account.</li>
                            <li>Enabling two-factor authentication for added security.</li>
                            <li>Avoiding clicking on suspicious links or messages.</li>
                            <li>Being cautious about sharing personal information publicly.</li>
                            <li>Reporting any abusive behavior or harassment.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-last text-md-end">
                        <div class="scene">
                            <div class="cube">
                                <div class="face front ">
                                    <i class="fab fa-twitter"><img src="Images/twitter.png" class="img-fluid  rounded-4"
                                            alt=""></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Snapchat -->
                <li class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-last">
                        <h4>Snapchat</h4>
                        <p>Snapchat is a multimedia messaging app used to share photos and videos. Stay safe on Snapchat
                            by:</p>
                        <ul>
                            <li>Adjusting privacy settings to control who can view your snaps.</li>
                            <li>Only accepting friend requests from people you know in real life.</li>
                            <li>Being cautious about sharing your location through the app.</li>
                            <li>Avoiding sharing sensitive information through snaps.</li>
                            <li>Reporting any inappropriate content or behavior.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <div class="scene">
                            <div class="cube">
                                <div class="face front">
                                    <i class="fab Snapchat"><img src="Images/Snapchat.png"
                                            class="img-fluid w-75 rounded-4" alt=""></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- WhatsApp -->
                <li class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-first">
                        <h4>WhatsApp</h4>
                        <p>WhatsApp is a messaging app used for sending text messages, voice messages, images, and
                            videos. Stay safe on WhatsApp by:</p>
                        <ul>
                            <li>Keep your WhatsApp updated to the latest version to ensure security patches are applied.
                            </li>
                            <li>Use the "block" feature to prevent unwanted contacts from messaging you.</li>
                            <li>Avoid sharing sensitive personal information in group chats or with unknown contacts.
                            </li>
                            <li>Enable two-step verification for added security.</li>
                            <li>Be cautious about clicking on links or downloading attachments from unknown contacts.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-md-last text-md-end">
                        <div class="scene">
                            <div class="cube">
                                <div class="face front">
                                    <i class="fab fa-Whatapp-f"><img src="Images/WhatsApp.png"
                                            class="img-fluid w-75 rounded-4" alt=""></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>

        </div>
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
            <p class="mt-3" id="youAreHereCounter">You are here: (Most Popular Apps)</p>

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