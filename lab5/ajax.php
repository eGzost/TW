<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body {
    background-color: rgb(11, 137, 146);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    display: flex;
    justify-content: center;
    margin-top: 250px;
}

    .container {
        background-color: aliceblue;
        border-radius: 10px;
        box-shadow: 0 2px 10px black;
        width: 400px;
        height: 420px;
        text-align: center; 
}
</style>

    <meta charset="UTF-8">
    <title>Feedback</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
</head>
<body>
   <div class="container">
    <h1>Feedback</h1>
    <form action="output.php" method="post">
    <br><label for="name">Numele/Username:</label>
    <br><input type="text" class="name" name="name" placeholder="Dan"></br>

    <br><label for="email">Email:</label> 
    <br><input type="email" class="email" name="email" placeholder="dan2001@mail.com"></br>
    
    <br><label for="message">Mesajul</label>
    <br><textarea name="message" class="message" cols="45" rows="6" placeholder="text"></textarea></br>

    <br><button>Trimite</button></br>
</form>
</div>

<script>
    $(document).ready(function(){
        $('button').on('click', function() {
            var name_info = $('input.name').val();
            var email_info = $('input.email').val();
            var message_info = $('input.message').val();
            
            $.ajax({
            method: "POST",
            url: "output.php",
            data: { name: name_info, email: email_info, message: message_info }
            })
            
            .done(function() {
                $('input.name').val('');
                $('input.email').val('');
                $('input.message').val('');
            });
        })
    });
</script>
</body>
</html>