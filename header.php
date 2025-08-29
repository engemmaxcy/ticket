<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Emma</title>
    <!-- jQuery (Required for DataTables) -->
<script src="includes/jquery.js"></script>
<link rel="stylesheet" href="includes/all.min.css">
<!-- DataTables JS -->
<script src="includes/jquery.dataTables.min.js"></script>

    <!-- DataTables CSS -->
<link href="includes/dataTables.min.css" rel="stylesheet">

    <link href="includes/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-primary px-3 shadow-sm">
    <a class="navbar-brand fw-bold text-white" href="#">MyApp</a>

    <div class="ms-auto d-flex align-items-center">
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                <img src="<?=$_SESSION['image'] ?>" class="rounded-circle me-2" alt="Profile" width="40" height="40">
                <span><?=$_SESSION['name'] ?></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"onclick="window.location.href='profile.php';">Profile</a></li>
                <li><a class="dropdown-item" href="#"onclick="window.location.href='setting.php';">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#" onclick="window.location.href='logout.php';">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


