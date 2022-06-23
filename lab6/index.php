<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css" type="text/css"/>
    <script type="text/javascript" src="script/ajax.js"></script>
</head>
<body>
    <div class="square">
    <br><br><br>
    <h2 class="titlu">Menu</h2>
    <ul>
        <i> <p><a href="http://localhost/LAB.5%20TW%20TINCO%20DAN/3D%20Software.php">3D Softwares</a></p></i>
        <i> <p><a href="http://localhost/LAB.5%20TW%20TINCO%20DAN/Rezumat%20la%20the%20fight%20club.php">Rezumat la 'The Fight Club'</a></p></i>
        <i> <p><a href="http://localhost/LAB.5%20TW%20TINCO%20DAN/Reteta%20la%20Pizza%20Capricioasa.php">Receta la Pizza Capricioasa</a></p></i>
        <i> <p><a href="http://localhost/LAB.5%20TW%20TINCO%20DAN/Do_not_press.php">Do not press</a></p></i>
        <i> <p><a href="http://localhost/LAB.5%20TW%20TINCO%20DAN/contact.php"> Contact</a></p></i>

    <?php if (isset($_SESSION['user_id'])) { ?>
				<li><p ><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Logare</a></li>
				<li><a href="register.php">Registrare</a></li>
				<?php } ?>
    </ul>
    
				
			


</body>
</html>