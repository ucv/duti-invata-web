<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 18:58
 */
?>

<div class="container-fluid">
    <div class="row">

        <?php include 'elements/menu.php'?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><?=$title?></h1>
            </div>

            <h2>Basic Table</h2>
            <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Text</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($menuItems as $menuItem){

                    ?>
                    <tr>
                        <td><?=$menuItem['id']?></td>
                        <td><?=$menuItem['text']?></td>
                        <td><?=$menuItem['link']?></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>

                </tbody>
            </table>


        </main>
    </div>
</div>

