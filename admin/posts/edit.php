<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 11/11/2018
 * Time: 1:20 AM
 */
include "../../src/database.php";
include "../../config/template.php";

$title = 'Post - Edit';

$activeMenu = $title;
$siteName = $config['siteName'] . ' - '.$title;

include '../../template/base_admin_top.php';

include "../../template/admin/header.php";

$result = $DB->query("SELECT * FROM post");
$menuItems = $result->fetch_all(MYSQLI_ASSOC);

//include "../../template/admin/menu_items_edit.php";

include "../../template/base_admin_bottom.php";


?>