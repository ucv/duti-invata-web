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
        if(isset($_GET['title']) && isset($_GET['content']) && isset($_GET['author'])){

            $_title = $_GET['title'];
            $_content = $_GET['content'];
            $_author = $_GET['author'];
            $sql = "UPDATE post SET title = '$_title', content = '$_content', author = '$_author' WHERE id = $id";
            $DB->query($sql);
        }
    }

    if(is_numeric($id)){
        $sql = "SELECT * FROM post WHERE id = $id";
        $result = $DB->query($sql);
        $_postItem = $result->fetch_assoc();
    }

}

?>

<div class="container-fluid">
    <div class="row">

        <?php include 'elements/menu.php'?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><?=$title.' '.$_postItem['id']?> </h1>
            </div>

            <?php
            if(!$_postItem){
                ?>
                <h1>The cake is a lie!</h1>
                <?php
            }
            ?>

            <form action="">
                <input type="hidden" name="id" value="<?=$_postItem['id']?>" >

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="<?=$_postItem['title']?>">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" value="<?=$_postItem['author']?>">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea  class="form-control" name="content">
                        <?=$_postItem['title']?>
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary float-right" name="edit" value="true">Save</button>
            </form>


        </main>
    </div>
</div>

