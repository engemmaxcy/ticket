
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
<center>
    <div class="container text-center">
        <div class="card p-4">
            <h3 class="text-center mb-4">Change Password</h3>
            <form action="change_password.php" method="POST">
                <div class="mb-3 text-start">
                    <label for="currentPassword" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" name="current_password" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="new_password" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="confirmPassword" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Change Password</button>
            </form>
        </div>
    </div>
    </center>
