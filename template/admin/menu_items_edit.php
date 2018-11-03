<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 18:58
 */

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = $_GET['id'];


    if(isset($_GET['edit']) && $_GET['edit'] == true){
        if(isset($_GET['text']) && isset($_GET['link'])){
            $_text = $_GET['text'];
            $_link = $_GET['link'];
            $sql = "UPDATE admin_menu SET link = '$_link', text = '$_text' WHERE id = $id";
            $DB->query($sql);
        }
    }

    if(is_numeric($id)){
        $sql = "SELECT * FROM admin_menu WHERE id = $id";
        $result = $DB->query($sql);
        $_menuItem = $result->fetch_assoc();
    }

}

?>

<div class="container-fluid">
    <div class="row">

        <?php include 'elements/menu.php'?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><?=$title.' '.$_menuItem['id']?> </h1>
            </div>

            <?php
            if(!$_menuItem){
                ?>
                <h1>The cake is a lie!</h1>
                <?php
            }
            ?>

            <form action="">
                <input type="hidden" name="id" value="<?=$_menuItem['id']?>" >
                <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" name="text" value="<?=$_menuItem['text']?>">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" value="<?=$_menuItem['link']?>">
                </div>

                <button type="submit" class="btn btn-primary float-right" name="edit" value="true">Save</button>
            </form>


        </main>
    </div>
</div>

