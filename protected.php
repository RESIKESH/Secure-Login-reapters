<?php
session_start();
if (isset($_SESSION['session_uid'])) {
    echo "<script>alert('Authenticated successfully.');</script>";
} else {
    # if not authenticated redirect to index.php
    header("Location: index.php?auth_code=1501");
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Secure Login - by mtcs20ck</title>
</head>

<body>
    <div class="jumbotron">
        <h1>Protected Resources</h1>
        <h3>This page should only be visible to authenticated users. If you can see this message without logging in, congratulations, you have broken my secure coding.</h3>
    </div>

    <div class="form-group">
        <form action="protected.php" method="POST">
            <button name="logout" class="btn btn-danger">Log out</button>
        </form>
    </div>
    <?php
    if (isset($_POST['logout'])) {
        unset($_SESSION['session_uid']);
        session_destroy();
        header("Location: index.php?auth_code=1403");
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>