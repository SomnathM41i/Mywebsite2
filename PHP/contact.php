
<?php
$insert = false;
if(isset($_POST['name'])){
// Database configuration
$host = "localhost"; // Host name
$username = "id20017706_admin"; // Mysql username
$password = "Y2%w<q}Hn_5[A*rO"; // Mysql password
$dbname = "id20017706_contact"; // Database name

// Create a connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = $_POST['name'];
$Lastn = $_POST['Lastn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO Users (`First Name`, `Lastn`, Email, Phone, Message) VALUES ('$first_name', '$Lastn', '$email', '$phone', '$message')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>cyber security</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="div">
    <header class="ib body">
        <h1 class="">Emperor.of.Battles</h1>
        <nav class="">
            <ul class="nav nav-pills  justify-content-center">
                <li class=" nav-item btn btn-outline-primary">
                    <a class="nav-link " href="index.html">HOME</a>
                </li>
                <li class=" nav-item btn btn-outline-primary">
                    <a class="nav-link" href="about.html">About us</a>
                </li>
                <li class="nav-item btn btn-outline-primary">
                    <a class="nav-link" href="contact.php">contact</a>
                </li>
            </ul>
        </nav>
        <div class="ib">
        <a class=" bi bi-whatsapp" style="font-size:48px;color:green"; href="https://wa.me/919022357293?text=Hello"></a>
        <a class="bi bi-instagram" style="font-size:48px;color:#E75480" href="https://instagram.com/somnath.m41i"></a>
  </div>
    </header>
    <main class="">
        <div class="con">
            <h1 class="head">contact us</h1>
            
        <form class="f" action="contact.php" method="post" accept-charset="utf-8">
            <label for="Name">First Name:</label>
        <input type="text" name="name" id="name" value="" placeholder="enter your first name" />
        <br />
        <hr />
        <label for="Last_name">Last Name  :</label>
        <input type="text" name="Lastn" id="Lastn" value="" placeholder="enter your Last name" />
        <br />
        <hr />
        <label for="Email">Email :</label>
        <input type="email" name="email" id="email" value="" placeholder="enter your email" />
        <br />
        <hr />
        <label for="Phone">Phone :</label>
        <input type="number" name="phone" id="phone" value="" placeholder="enter your phone number" />
        <br />
        <hr />
        <label for="suggestion">suggestion :</label>
        <textarea name="message" id=message rows="8" cols="40" placeholder="Tell us your suggestion about our website development "></textarea>
        <br />
        <hr />
        <button class="tb" type="submit">submit</button>
        
        
        </form>
        </div>
</main>

<footer class="body ib foot ">
    <div class=" ib ">
        <p>
            <b>
                © Copyright Somnath Mali. All Rights Reserved
            </b>
        </p>
        <p>
            Designed by : <a href="https://instagram.com/somnath.m41i">Somnath Mali</a>
        </p>
    </div>
    <a class=" bi bi-whatsapp" style="font-size:48px;color:green"; href="https://wa.me/919022357293?text=Hello"></a>
    <a class="bi bi-instagram" style="font-size:48px;color:#E75480" href="https://instagram.com/somnath.m41i"></a>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>