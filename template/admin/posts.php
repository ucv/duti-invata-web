<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 28-Oct-18
 * Time: 18:58
 */
if(isset($_GET['remove_id']) && is_numeric($_GET['remove_id'])){
    $sql = "DELETE FROM post WHERE id = ".$_GET['remove_id'];
    $result = $DB->query($sql);
}

$result = $DB->query("SELECT * FROM post");
$_postItems = $result->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['save']) && $_GET['save'] == true) {
    if (isset($_GET['title']) && isset($_GET['content']) && isset($_GET['author'])) {
        $title = htmlspecialchars($_GET['title'],ENT_QUOTES);
        $content = htmlspecialchars($_GET['content'],ENT_QUOTES);
        $author = htmlspecialchars($_GET['author'],ENT_QUOTES);

        $sql = "INSERT INTO post VALUES (null,'$title','$content','$author')";

        /**
         * $DB->query returneaza adevarat daca postarea a fost inserata cu succes
         * Spre exemplu daca in postarea ta exista caracterul ' iti failuieste
         *
         * Exsita solutii mai bune dar este suficienta asta acum
         *
         * Having fun ? :D
         */
        $postSaved = $DB->query($sql);
    }
}
?>

<div class="container-fluid">
    <div class="row">

        <?php include 'elements/menu.php' ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div class="container">

                    <?php
                    if(isset($postSaved) && $postSaved){
                        ?>
                        Postarea a fost salvata !
                    <?php
                    }
                    ?>
                    <h2>Compose Post's:</h2>
                    <form>
                        <div class="form-group">
                            <label for="comment">Title:</label>
                            <textarea class="form-control" rows="1" id="comment" name="title"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Content:</label>
                            <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Author:</label>
                            <textarea class="form-control" rows="1" id="comment" name="author"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success float-right" name="save" value="true">Save</button>
                    </form>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>title</th>
                            <th>content</th>
                            <th>author</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($_postItems as $postItem){
                            ?>
                            <tr>
                            <td><?=$postItem['id']?></td>
                            <td><?=$postItem['title']?></td>
                            <td><?=$postItem['content']?></td>
                            <td><?=$postItem['author']?></td>
                            <td>
                                <a href="edit.php?id=<?=$postItem['id']?>" class="btn btn-danger">Edit</a>

                                <a href="?remove_id=<?=$postItem['id']?>" class="btn btn-dark">Sterge <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

