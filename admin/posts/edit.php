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

$result = $DB->query("SELECT * FROM admin_menu");
$postItems = $result->fetch_all(MYSQLI_ASSOC);

include "../../template/admin/post_item_edit.php";

include "../../template/base_admin_bottom.php";


?>