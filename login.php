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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(to right, #007bff, #00c6ff);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    .login-card {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      border-radius: 15px;
      background: #fff;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

  <div class="login-card text-center">
      <h1 class="h4 mb-4">Admin Login</h1>
    <div id="msg"></div>
    <form action="admin_login.php" method="POST" id="login">
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
      </div>
      <div class="mb-3">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
                        $("#msg").html("<div class='alert alert-success py-2'>Login successful</div>");
                        window.location.href = "landing.php";
                        // location.reload(); // Reload the page on success
                    } else {
                        $("#msg").html("<div class='alert alert-danger py-2'>" + response + "</div>");
                    }
                }
            });
        });
    });
  </script>
</body>
</html>
