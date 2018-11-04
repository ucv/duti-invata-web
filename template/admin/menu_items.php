<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 18:58
 */

if(isset($_GET['remove_id']) && is_numeric($_GET['remove_id'])){
    $sql = "DELETE FROM admin_menu WHERE id = ".$_GET['remove_id'];
    $result = $DB->query($sql);
}

$result = $DB->query("SELECT * FROM admin_menu");
$menuItems = $result->fetch_all(MYSQLI_ASSOC);

if(isset($_GET['save']) && $_GET['save'] == true){

    if(isset($_GET['link']) && isset($_GET['text'])){
        $link = $_GET['link'];
        $text = $_GET['text'];

        $sql = "INSERT INTO admin_menu VALUES (null ,'$text', '$link')";
        $DB->query($sql);
    }
}

?>

<div class="container-fluid">
    <div class="row">

        <?php include 'elements/menu.php'?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><?=$title?></h1>
            </div>
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
                var_dump($sql);
                foreach ($menuItems as $menuItem){

                    ?>
                    <tr>
                        <td><?=$menuItem['id']?></td>
                        <td><?=$menuItem['text']?></td>
                        <td><?=$menuItem['link']?></td>
                        <td>
                            <a href="edit.php?id=<?=$menuItem['id']?>" class="btn btn-danger">Edit</a>
                            <a href="?remove_id=<?=$menuItem['id']?>" class="btn btn-dark">Sterge <i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>

            <h2>Add new Menu</h2>

            <form action="">
                <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" name="text">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link">
                </div>

                <button type="submit" class="btn btn-success float-right" name="save" value="true">Save</button>
            </form>
        </main>
    </div>
</div>