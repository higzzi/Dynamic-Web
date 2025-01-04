<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                                <li><a class="dropdown-item text-light" href="information.php">Information</a></li>
                                <li><a class="dropdown-item text-light" href="popular-apps.php">Popular Social Media
                                        Apps</a></li>
                                <li><a class="dropdown-item text-light" href="parents.php">How Parents Can Help</a></li>
                                <li><a class="dropdown-item text-light" href="livestreaming.php">Livestreaming</a></li>
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
                    <form class="d-flex mx-2">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <div class="container mt-5 ">
        <div class="transparent-box">
            <?php
            include("connection.php");

            if (isset($_POST['submit'])) {
                $fname = $_POST['fname'];
                $Sname = $_POST['sname'];
                $uname = $_POST['uname'];
                $email = $_POST['email'];
                $upass = $_POST['upass'];
                $passwordrepeat = $_POST['cpass'];
                if ($upass !== $passwordrepeat) {
                    echo "<script>alert('passwords dont match');</script>";
                    exit();
                }
                // Verifying the unique email
                $verify_query = mysqli_query($conn, "SELECT uname FROM users WHERE uname='$uname'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<script>alert('This username is already in use. Please try another one.');</script>";
                    exit();
                } else {
                    // Only insert the hashed password into the database
                    mysqli_query($conn, "INSERT INTO users(fname,sname,uname,email,upass,cpass) VALUES('$fname','$Sname','$uname','$email','$upass','$passwordrepeat')") or die("Error Occurred");
                    echo "<script>alert('Registration Success!');</script>";
                    // Redirect to login page after successful registration
                    header("Location: login.php");
                    exit();
                }
            }
            ?>
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <div class="mb-3">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Sir Name</label>
                    <input type="text" class="form-control" id="sname" name="sname" required>
                </div>
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="uname" name="uname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="upass" name="upass" required>
                </div>
                <div class="mb-3">
                    <label for="confirm password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpass" name="cpass" required>
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="mb-3">
                    <p>Already Registered <a href="login.php">Login Here</a></p>
                </div>
                
            </form>



        </div>
    </div>

   
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
            <p class="mt-3" id="youAreHereCounter">You are here: (Register)</p>

            <!-- Copyright information -->
            <p>&copy; 2024 Social Media Safety Campaign</p>
        </footer>
  


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