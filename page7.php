<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes.io</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="images\logo.png" rel="icon">
</head>
<body>
    <header>
        <div class="head">
            <h1>Notes . IO</h1>
            <p> Contribute </p>
        </div>
        <div class="block">
            <div class="nav">
                <a href="index.html"><h1 class="nav-c">Home</h1></a>
                <a href="page2.html"><h1 class="nav-b">Services</h1></a>
                <a href="page7.html"><h1 class="nav-d">Contribute</h1></a>
                <a href="page8.html"><h1 class="nav-b">Portals</h1></a>
                <a href="page9.html"><h1 class="nav-b">Contact Us</h1></a>
            </div>
        </div>
    </header>
    <!--------Body---------->
    <div class="form">
        <form action="/action_page.php">
            <h1 class="h1">Name</h1>
            <input type="text" name="name" placeholder="Your name">
            <h1 class="h1">Email</h1>
            <input type="email" name="email" placeholder="Your email">
            <h1 class="h1">File</h1>
            <input type="file" name="message" placeholder="Your message">
            <br><br>
            <button type="submit">Submit</button>
          </form>
    </div>
    <br><br><br><br><br>
    <!---Footer---->    
        <footer>
            <div class="footer">
                <div class="name"><br>
                    <h1 class="name">Grapaxels</h1>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/Grapaxels" class="fa fa-facebook" style="text-decoration: none; color:black "></a>
                        <a href="https://github.com/Grapaxels" class="fa fa-github" style="text-decoration: none; color:black; margin-left:10px "></a>
                        <a href="https://www.linkedin.com/in/nikhil-k-gupta-554567262/" class="fa fa-linkedin" style="text-decoration: none; color:black; margin-left:10px "></a>
                        <a href="https://www.instagram.com/grapaxels/" class="fa fa-instagram" style="text-decoration: none; color:black; margin-left:10px "></a>
                     </div>
                    <div class="footer-a">
                        <h1>Contact US</h1>
                        <h1 class="a">Notes.io</h1>
                            <p class="aa">E-mail: grapaxels@gmail.com</p>
                    </div>
                </div>            
            </div>
        </footer>
</body>
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Print the form data
  echo "Your name is: $name";
  echo "<br>";
  echo "Your email is: $email";
  echo "<br>";
  echo "Your message is: $message";
}
?>
</html>