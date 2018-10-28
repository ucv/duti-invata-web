<?php

/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 19:12
 */
$_menu = [
    [
        'link' => '/admin/',
        'text' => 'Dashboard',

    ],
    [
        'link' => '/admin/posts/',
        'text' => 'Posts',

    ],
    [
        'link' => '/admin/menu/',
        'text' => 'Menu Items',
    ],
];

$result = $conn->query("SELECT * FROM admin_menu");
$menu = $result->fetch_all(MYSQLI_ASSOC);

$_activeMenu = '';
if(isset($activeMenu)){
    $_activeMenu = $activeMenu;
}

if(isset($menu)){
$_menu = $menu;
}

?>

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <?php
            foreach ($_menu as $menuItem){

                ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($_activeMenu == $menuItem['text'])echo "active" ?>" href="<?=$menuItem['link'] ?>">
                        <span data-feather="home"></span>
                        <?=$menuItem['text'] ?> <span class="sr-only">(current)</span>
                    </a>
                </li>
            <?php
            }
            ?>




        </ul>
    </div>
</nav>
