<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cursor"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">
                    <img src="Images/logo.png" alt="Logo" class="image-container" height="90">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Campaign Information
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item text-light" href="information.php">Information</a></li>
                                <li><a class="dropdown-item text-light" href="popular-apps.php">Popular Social Media Apps</a></li>
                                <li><a class="dropdown-item text-light" href="parents.php">How Parents Can Help</a></li>
                                <li><a class="dropdown-item text-light" href="livestreaming.php">Livestreaming</a></li>
                                <li><a class="dropdown-item text-light" href="legislation.php">Legislation and Guidance</a></li>
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
                        <button class="btn btn-outline-success" type="submit">Search</button> 
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 text-center">
        <div class="transparent-box">
            <?php 
            
            include("connection.php");

            function calculateLockoutEndTime() {
                return time() + 600; // 600 seconds = 10 minutes
            }

            if(isset($_POST['submit'])) {
                $uname = mysqli_real_escape_string($conn, $_POST['uname']);
                $upass = mysqli_real_escape_string($conn, $_POST['upass']);

                if(isset($_SESSION['lockout_end_time']) && $_SESSION['lockout_end_time'] > time()) {
                    $remaining_time = $_SESSION['lockout_end_time'] - time();
                    echo "<script>alert('Login is temporarily locked. Please try again after $remaining_time seconds.');</script>";
                    exit();
                }

                $stmt = $conn->prepare("SELECT * FROM users WHERE uname=?");
                $stmt->bind_param("s", $uname);
                $stmt->execute();
                $result = $stmt->get_result();

                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();    

                    if($row['upass'] === $upass) {
                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['sname'] = $row['sname'];
                        $_SESSION['login_attempts'] = 0;
                        
                        header("Location:newsletter.php");
                        echo "<script>alert('You have been logged in!');</script>";
                        exit();
                    } else {
                        $_SESSION["error"] = "<alert>Wrong Password</alert>";
                        $_SESSION['login_attempts'] = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] + 1 : 1;
                        if($_SESSION['login_attempts'] >= 3) {
                            $_SESSION['lockout_end_time'] = calculateLockoutEndTime();
                            echo "<script>alert('You have exceeded the maximum login attempts. Your account is locked for 10 minutes.');</script>";
                        }
                        exit();
                    }
                } else {
                    echo "<script>alert('User not found');</script>";
                    
                }
            }
            ?>

            <h2>Login</h2>
            <form method="POST" action="login.php">
                <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="uname" name="uname" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="upass" name="upass" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
            <div><p>Not registered yet <a href="register.php">Register Here</a></p></div>
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
<p class="mt-3" id="youAreHereCounter">You are here: (Login)</p>

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

