<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Inregistrare.css" type="text/css"/>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script>
        $('#Form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                login: {
                    required: true,
                    minlength: 5,
                    login: true
                },
                number: {
                    required: true,
                    minlength: 9,
                    number: true
                },
                password: {
                    required: true,
                    minlength: 10,
                    password: true
                },
            },

            messages: {
                email: {
                    required: '<br>Introduceti un email</br>',
                },
                login: {
                    required: '<br>Introduceti un login</br>',
                    minlength:'<br> Lungimea login-ului trebuie sa fie mai lunga de 5 caractere </br>',
                    
                },
                number: {
                    required: '<br>Introduceti nr. de telefon</br>',
                    minlength: '<br> Numar invalid</br>',
                },
                password: {
                    required: '<br>Introduceti o parola</br>',
                    minlength: '<br> Parola e prea scurta</br>',
                },
            }
            window.location.href = 'http://localhost/LAB.4%20TW%20TINCO%20DAN/succes.php',
        })

    </script>

    <form action="validare.php" method="POST">    

    <div class= "container">
        
        <h1>Inregistrare</h1>

        <form class="form" id="myForm" role="form">
            <br><div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail"
                placeholder="dan2001@gmail.com" required>
            </div></br>
            <?php if(isset($email_error)) { ?>
                <p><?php echo $email_error ?></p>
        <?php } ?>
            <br><div class="form-group">
                <label for="inputLogin">Login:</label>
                <input type="text" class="form-control" name="login" id="inputLogin"
                placeholder="dan2001" required>
            </div></br>
            <?php if(isset($login_error)) { ?>
                <p><?php echo $login_error ?></p>
        <?php } ?>
            <br><div class="form-group">
                <label for="inputnumber">Numarul de telefon:</label>
                <input type="text" class="form-control" name="number" id="inputnumber"
                placeholder="022112233" required>
            </div></br>
            <?php if(isset($number_error)) { ?>
                <p><?php echo $number_error ?></p>
        <?php } ?>
            <br><div class="form-group">
                <label for="inputpassword">Parola:</label>
                <input type="password" class="form-control" name="password" id="inputpassword"
                placeholder="parola" required>
            </div></br>
            <?php if(isset($password_error)) { ?>
                <p><?php echo $password_error ?></p>
        <?php } ?>

        <br>
        <button type="submit"> Finiseaza </button></br>
    </form>
</div>

</body>
</html>