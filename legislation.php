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
    <title>Legislation and Guidance - Social Media Safety Campaign</title>
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
                            echo "<h3> Please <a href='login.php'>login</a> or <a href='register.php' '>register</a> to access more features.</h3>";
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

    <section class="container mt-5 ">
        <div class="transparent-box">
            <div class="py-3">
                <h2>Legislation and Guidance</h2>
            </div>
            <h3>Relevant Legislation</h3>
            <p>Below are some of the key legislations related to online social media use:</p>
            <ul>
                <li>Children's Online Privacy Protection Act (COPPA): This act protects the online privacy of children
                    under 13 years of age by requiring parental consent for the collection of personal information.</li>
                <li>General Data Protection Regulation (GDPR): GDPR is a European Union regulation that governs data
                    protection and privacy for individuals within the EU and the European Economic Area.</li>
                <li>Electronic Communications Privacy Act (ECPA): ECPA sets out the legal framework for the interception
                    of electronic communications and protects the privacy of electronic communications.</li>
                <li>Communications Decency Act (CDA): CDA regulates online content and addresses issues such as online
                    obscenity, indecency, and the protection of minors from harmful material.</li>
                <li>Family Educational Rights and Privacy Act (FERPA): FERPA protects the privacy of student education
                    records and regulates their disclosure.</li>
            </ul>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="Images/COPPA.jpg" alt="Children's Online Privacy Protection Act (COPPA)"
                        class="legislation-image   h-auto w-75 rounded-3">
                </div>
                <div class="col-md-4">
                    <img src="Images/GDPR.jpg" alt="General Data Protection Regulation (GDPR)"
                        class="legislation-image  h-auto w-75 rounded-3">
                </div>
                <div class="col-md-4">
                    <img src="Images/ECPA.jpg" alt="Electronic Communications Privacy Act (ECPA)"
                        class="legislation-image   h-auto w-75 rounded-3">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <img src="Images/CDA.png" alt="Communications Decency Act (CDA)"
                        class="legislation-image  h-auto w-75 rounded-3">
                </div>
                <div class="col-md-4">
                    <img src="Images/FERPA.jpg" alt="Family Educational Rights and Privacy Act (FERPA)"
                        class="legislation-image  h-auto w-75 rounded-3">
                </div>
            </div>
            <div class="pt-5">
                <h3>Best Practice Guidance</h3>
                <p>Here are some best practice guidance for safe and responsible social media use:</p>
                <ul>
                    <li>Be mindful of what you post online and consider the potential consequences. Avoid sharing
                        personal information that could be used to identify or locate you.</li>
                    <li>Respect others' privacy and avoid sharing sensitive or confidential information without their
                        consent. Be cautious about tagging or mentioning others in posts.</li>
                    <li>Think critically about the content you consume and share online. Be aware of misinformation and
                        fake news, and verify information before sharing it.</li>
                    <li>Be cautious of online scams and phishing attempts. Avoid clicking on suspicious links or
                        providing personal information to unknown sources.</li>
                    <li>Use strong, unique passwords for your online accounts and enable two-factor authentication where
                        possible. Regularly update your passwords and be cautious about sharing them with others.</li>
                    <li>Be aware of cyberbullying and harassment, and report any abusive behavior to the platform's
                        moderation team. Support others who may be experiencing online abuse.</li>
                </ul>

                <!-- Images for relevant legislation -->
            </div>
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
            <p class="mt-3" id="youAreHereCounter">You are here: (Leglisation and Guidance)</p>

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