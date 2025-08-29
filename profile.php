
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .card {
            max-width: 400px;
            width: 100%;
            border-radius: 12px;
            border: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        .profile-info {
            text-align: left;
            font-size: 16px;
        }
        .profile-info strong {
            color: #333;
        }
        .btn-primary {
            background-color: #6e8efb;
            border: none;
        }
        .btn-primary:hover {
            background-color: #5a7de7;
        }
    </style>
</head>
<body>
<center>
    <div class="container text-center">
        <div class="card">
          
            <h3 class="text-center mb-4">User Profile</h3>
            <form action="update_profile.php" method="POST">
                <div class="mb-3 text-start">
                    <label for="username" class="form-label"><strong>Username:</strong></label>
                    <input type="text" class="form-control" id="username" name="username" value="" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label"><strong>Email:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="contact" class="form-label"><strong>Contact:</strong></label>
                    <input type="text" class="form-control" id="contact" name="contact" value="" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="reg_date" class="form-label"><strong>Registration Date:</strong></label>
                    <input type="text" class="form-control" id="reg_date" name="reg_date" value="" readonly>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update Profile</button>
            </form>
        </div>
    </div>
    </center>
</body>
</html>
