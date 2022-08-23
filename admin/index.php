<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YANZ CODE | ADMIN</title>
    <link rel="stylesheet" href="../src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../src/animasi/animasi.css">
</head>

<body>

    <!-- header -->
    <nav class="nav d-flex justify-content-between bg-light shadow-sm p-2">
        <div>
            <a class="nav-link text-dark" href="#">Hai Admin</a>
        </div>
        <div class="d-flex">
            <a href="" class="nav-link text-dark">
                <i class="bi bi-envelope"></i>
            </a>
            <div class="dropdown">
                <a class="nav-link text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change password</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end header -->

    <!-- sidebar -->
    <ul class="nav flex-column bg-light p-2 shadow-sm" style="width: 200px;">
        <li class="nav-item">
            <a class="nav-link text-dark active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="bi bi-archive-fill"></i> Post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="bi bi-archive-fill"></i> Message</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="bi bi-gear-fill"></i> Setting</a>
        </li>
    </ul>
    <!-- end sidebar -->

    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>