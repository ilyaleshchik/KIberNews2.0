<?php
require 'config.php';
session_start();
require "rb.php";
R::setup( 'mysql:host=localhost;dbname=accs',
        'root', '' );
$connection = mysqli_connect('localhost','root','','accs');
?>