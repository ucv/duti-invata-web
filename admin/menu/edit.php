<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 11:12
 */
include "../../src/database.php";
include "../../config/template.php";

$title = 'Menu Items - Edit';

$activeMenu = $title;
$siteName = $config['siteName'] . ' - '.$title;

include '../../template/base_admin_top.php';

include "../../template/admin/header.php";

$result = $DB->query("SELECT * FROM admin_menu");
$menuItems = $result->fetch_all(MYSQLI_ASSOC);

include "../../template/admin/menu_items_edit.php";

include "../../template/base_admin_bottom.php";


?>

