<h1>Login Required</h1>
<?php
session_start();
if(isset($_SESSION['name'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="includes/jquery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            background-color: #1abc9c;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            background: white;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, button {
            width: 100%;
            height: 40px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            background: #16a085;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #138d75;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <div id="msg"></div>
        <form action="admin_login.php" method="POST" id="login">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
<script>
        $(document).ready(function(){
            $("#login").submit(function(event){
                event.preventDefault(); // Prevent normal form submission

                $.ajax({
                    url: "admin_login.php", 
                    type: "POST",
                    data: $(this).serialize(), // Serialize form data
                    success: function(response){
                        if(response.trim() === "ok"){
                            $("#msg").html("<span style='color: green;'>Loggin successful</span>");
                            location.reload(); // Reload the page on success
                        } else {
                            $("#msg").html("<span style='color: red;'>" + response + "</span>");
                        }
                    }
                });
            });
        });
    </script>
</html>
