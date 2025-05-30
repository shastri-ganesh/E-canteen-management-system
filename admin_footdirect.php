<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../head.php'); ?>
    <meta charset="UTF-8">
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <link href="../img/Color Icon with background.png" rel="icon">

    <title>About Us | FOODCAVE</title>
    <style>
       html,body {
  height:100%;
  min-height:100%;
  max-height:100%;
}
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow-sm mb-auto">
        <div class="container-fluid mx-4">
            <a href="index.php">
                <img src="../img/Color logo - no background.png" width="125" class="me-2" alt="FOODCAVE Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <div class="d-flex text-end"></div>
            </div>
        </div>
    </header>
    <div class="mt-5"></div>
    <div class="container form-signin text-center restricted mt-auto">
            <i class="mt-4 bi bi-telephone-fill text-danger h1 display-2"></i>
            <h3 class="mt-2 mb-3 fw-normal text-bold">About Us</h3>
            <p class="mb-3 fw-normal text-bold text-wrap">The Alpha Achievers</p>
            <a class="btn btn-danger btn-sm w-50" href="admin_home.php">Return To Home</a>
    </div>

    <?php include('admin_footer.php')?>
</body>

</html>
