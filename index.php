<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 11:12
 */

include "config/template.php";

$siteName = $config['siteName'] . ' - Prima pagina';

include 'template/base_top.php';

include 'template/default/header.php';
include 'template/default/homepage.php';
include "template/default/footer.php";

include "template/base_bottom.php";


?>

