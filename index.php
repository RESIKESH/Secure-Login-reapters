<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Secure Login</title>
</head>

<body>
    <?php
    if (isset($_GET['auth_code'])) {
        $auth_code = $_GET['auth_code'];
        if ($auth_code == 1501) {
            echo "<script>alert('Not Authenticated');</script>";
        } elseif ($auth_code == 1403) {
            echo "<script>alert('Successfully logged out.');</script>";
        }
    }
    ?>
    <div class="jumbotron">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Login</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>