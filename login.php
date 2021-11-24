<?php
if (!(isset($_POST['email']) || isset($_POST['password']))) {
    header("Location: index.php");
}
include "connection.php";
include "utils.php";
session_start();

# SQL prepared statmetns to prevent against SQLi
$login_stmt = $connection->prepare("SELECT * FROM users WHERE email= ? AND password= ? LIMIT 1");
$login_stmt->bind_param("ss", $email, $password);

# sanitizing input for preventing XSS 
$email = sanitize_email($_POST['email']);
# Hashing password to be compared with the one in the DB
$password = process_password(sanitize_input($_POST['password']));

# Executing SQL query
$login_stmt->execute();

$login_stmt->store_result();
$num_rows = $login_stmt->num_rows;

if ($num_rows == 1) {
    # Auth Success, setting session params
    $session_id = generate_session_id();
    
    $_SESSION['session_uid'] = $session_id;
    
    header("Location: protected.php");
} else {
    # if not authenticated redirect to index.php
    header("Location: index.php?auth_code=1501");
}
