<?php

register_nav_menus(array(
    'main-nav' => 'Hovedmenu', 
));

add_theme_support( 'post-thumbnails' );


$conn = mysqli_connect ('mysql11.gigahost.dk', 'casperstorm', 'Vfa8criwxe7rooTobiqui1', 'casperstorm_ladby');
$error = '';

function newsletter_signup()
{
    global $error;
    
    $email = $_POST['email'];
    
    if(empty($email))
    {
        $error = 'Venligst udfyld felterne';
        return false;
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = 'Venligst indtast korrekt email';
        return false;
    }
    
    
    insert("INSERT INTO newsletter (id, email) " . "VALUES (NULL, '$email')");
}

function insert($sql)
{
    global $conn;
    $insert = mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

if(isset($_POST['email'])) 
{
    newsletter_signup();
}