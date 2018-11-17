<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 11/16/2018
 * Time: 11:32 PM
 */
if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = $_GET['id'];


    if(isset($_GET['save']) && $_GET['save'] == true){
        if(isset($_GET['post_id']) && isset($_GET['comment'] )&& isset($_GET['author'])){

            $_post_id = $_GET['post_id'];
            $_comment = $_GET['comment'];
            $_author = $_GET['author'];
            $sql = "UPDATE comment SET post_id = '$_post_id', comment = '$_comment', author = '$_author' WHERE id_comment = $id";
            $DB->query($sql);
        }
    }

    if(is_numeric($id)){
        $sql = "SELECT * FROM comment WHERE id_comment = $id";
        $result = $DB->query($sql);
        $_comment = $result->fetch_assoc();

    }

}
?>
<div class="container-fluid">
    <div class="row">
        <?php include 'elements/menu.php' ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <h2>Compose Post's:</h2>
            <form>

                <input type="hidden" class="form-control" id="id" name="id" value="<?=$_GET['id'] ?>">
                <input type="hidden" class="form-control" id="post_id" name="post_id" value="<?=$_comment['post_id'] ?>">
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?=$_comment ['author']?>">
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment"><?=$_comment ['comment']?></textarea>
                </div>
                <button type="submit" class="btn btn-success float-right" name="save" value="true">Save</button>
            </form>

        </main>


    </div>
</div>

