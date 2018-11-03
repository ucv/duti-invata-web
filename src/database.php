<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 19:54
 */

$servername = "127.0.0.1";
$username = "root";
$password = "asdx32";
$database = 'duti_blog';

// Create connection
$DB = new mysqli($servername, $username, $password, $database);

// Check connection
if ($DB->connect_error) {
    die("Connection failed: " . $DB->connect_error);
}

