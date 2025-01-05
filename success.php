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
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
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
                            echo "<h3> Please <a href='login.php'>login</a> or <a href='register.php' >register</a> to access more features.</h3>";
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
    <div class="container mt-5  text-center">
        <div class="transparent-box">
            <section class="text-center p-5 py-5" style="color: white;">
                <div class="py-3">
                    <h1>Thank you for Subscribing Please Check Your Email</h1>
                </div>
                <a href="home.php" class="btn btn-primary">Go back</a>
            </section>
            <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require 'phpmailer/src/Exception.php';
            require 'phpmailer/src/PHPMailer.php';
            require 'phpmailer/src/SMTP.php';

            $email = ""; // Initialize email variable
            
            if (isset($_POST['submit'])) { // Check if form is submitted
                $email = $_POST['email']; // Get user-entered email
            
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate email format
                    if (isset($_POST['subscribe']) && $_POST['subscribe'] === 'true') { // Check if user opted to subscribe
                        // Using PHPMailer
                        try {
                            // Initialize PHPMailer object
                            $mail = new PHPMailer(true);

                            // SMTP configuration
                            $mail->isSMTP();
                            $mail->Host = ""smtp.gmail.com"";
                            $mail->SMTPAuth = true;
                            $mail->Username = 'YourGmail@gmail.com'; // Replace with your Gmail username
                            $mail->Password = 'YourPassword'; // Replace with your Gmail password
                            $mail->SMTPSecure = 'tls'; // Use TLS encryption
                            $mail->Port = 587; // Port for TLS (587)
            
                            // Email content
                            $mail->setFrom('abdiqanibashir.h@gmail.com'); // Replace with your Gmail username
                            $mail->addAddress($email);
                            $mail->isHTML(true);
                            $mail->Subject = "Monthly Newsletter Subscription - SMC";
                            $mail->Body = " <h2 class='text-center'>Thank you for subscribing to our monthly newsletter!</h2>
                             <div style='text-align:center;'>
                             <img src='https://digitallinkspro.qa/wp-content/uploads/2023/10/smm.png' alt='Newsletter Image' style='max-width: 100%; height: auto;'>
                            </div>
                            <div>
                                <h4>Join Our Exciting Social Media Campaign!</h4>

                                <p>Dear $email,</p>

                                <p>We're thrilled to extend a special invitation to you for our upcoming social media campaign at SMC ! 🌟</p>

                                <p>At SMC, we deeply value community and connection, and we're committed to creating meaningful interactions with our audience. 
                                That's why we're launching this exciting campaign centered around Brief Description of  the Campaign Theme.</p>

                                <p>Throughout the campaign, we'll be sharing inspiring stories, engaging content, 
                                and exclusive updates that we're sure you'll find both valuable and enjoyable.</p>

                                <p>We can't wait to have you join us on this journey of connection and inspiration! 
                                Stay tuned for more details on how you can get involved.</p>

                                <p>Warm regards,</p>
                                <p>Abdiqani Bashir</p>
                                <p>SMC</p>
                            </div>
                            <div>
                            <div style='text-align:left;'>
                             <img src='https://static.vecteezy.com/system/resources/previews/009/632/584/non_2x/smc-letter-logo-design-with-polygon-shape-smc-polygon-and-
                             cube-shape-logo-design-smc-hexagon-logo-template-white-and-black-colors-smc-monogram-business-and-real-estate-logo-vector.jpg'
                              alt='Newsletter Image' style='max-width: 25%; height: auto; border-radius: 35px;'>
                            </div>";


                            // Send email using PHPMailer
                            $mail->send();

                            // Provide specific feedback about the email sending process
                            echo "";
                        } catch (Exception $e) {
                            // Handle any exceptions that occur during the sending process
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    } else {
                        ?>
                        <!-- Show message if user did not opt to subscribe -->
                        <div class="alert">
                            <?php echo "You did not choose to subscribe to the newsletter." ?>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <!-- Show error message if user entered email is not valid -->
                    <div class="alert error-alert">
                        <?php echo "$email is not a valid email address!" ?>
                    </div>
                    <?php
                }
            }
            ?>




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
            <p class="mt-3" id="youAreHereCounter">You are here: (Success)</p>

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
