<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 11:12
 */

include "../src/database.php";
include "../config/template.php";

$title = 'Dashboard';

$activeMenu = $title;
$siteName = $config['siteName'] . ' - ' . $title . '';

include '../template/base_admin_top.php';

include "../template/admin/header.php";

include "../template/admin/dashboard.php";

include "../template/base_admin_bottom.php";

?>

