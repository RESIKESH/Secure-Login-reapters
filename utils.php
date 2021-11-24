<?php

$__PREFIX__ = "__s3cur3_l0gin_mtcs20ck_s4inya_ran4kshetram_".time()."__16546816817873";
$__SALT__ = "1128__asbhabj~!@%%E*&&vc91!#$#^css2d548!23!";

function sanitize_email($input)
{
    # function to sanitize emails

    $sanitized_email = filter_var($input, FILTER_SANITIZE_EMAIL);
    return $sanitized_email;
}

function sanitize_input($input)
{
    # function to sanitize all inputs

    $sanitized_input = filter_var(filter_var(filter_var($input, FILTER_SANITIZE_STRING), FILTER_SANITIZE_ENCODED), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    return $sanitized_input;
}

function process_password($password)
{
    # function to return hash of passwords
    # HASH - d5cce3b36ae77e4f30284c1dc7b7083217ec24858d2fd739fd4b4bdfc0a25745
    global $__SALT__;
    $hashed_password = hash("sha256", $__SALT__.$password);
    return $hashed_password;
}

function generate_session_id()
{
    # generating a unique session id for the user
    global $__PREFIX__;
    $session_uuid = uniqid($__PREFIX__, true);
    $session_hash = hash("sha256", $session_uuid);
    return $session_hash;
}