<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 22:50
 */

    $_blog_listing = [
        'name' => 'From the Firehose',
        'older' => [
            'text' => "Older",
            'link' => "#",
        ],
        'newer' => [
            'text' => "Newer",
            'link' => "#",
        ],


    ];


    $result = $DB->query("SELECT * FROM post");
    $_blog_listing['items'] = $result->fetch_all(MYSQLI_ASSOC);

    if (isset($_POST['submit_comment']) ) {
        if (isset($_POST['post_id']) && isset($_POST['author']) && isset($_POST['comment'])) {

            $_post_id = $_POST['post_id'];
            $_author = $_POST['author'];
            $_comment = $_POST['comment'];
            $sql = "INSERT INTO comment values (null, '$_post_id','$_comment','$_author')";
            $DB->query($sql);
        }
    }


?>

<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        <?= $_blog_listing['name'] ?>
    </h3>
    <?php
    foreach ($_blog_listing['items'] as $blog_item){

        $_id = $blog_item['id'];

        $sql = "SELECT * FROM comment WHERE post_id = $_id";
        $result = $DB->query($sql);
        $_commentItems = $result->fetch_all(MYSQLI_ASSOC);


        ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?=$blog_item['title']?></h2>

            <p class="blog-post-meta"><?=null?> by <a href="#?>"><?=$blog_item['author']?></a></p>
            <?=html_entity_decode($blog_item['content'])?>


            <ul>

                <?php
                foreach ($_commentItems as $_commentItem){
                    ?>

                    <li>
                        <h3><?=$_commentItem['author']?></h3>
                        <p><?=$_commentItem['comment']?></p>
                    </li>

                <?php
                }
                ?>




            </ul>
            <form method="post">
                <input type="hidden" id="post_id" name="post_id" value="<?= $blog_item['id'] ?>">
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                </div>
                <button type="submit" class="btn" name="submit_comment">Submit</button>
            </form>


        </div><!-- /.blog-post -->
        <?php
    }
    ?>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=$_blog_listing['older']['link'] ?>"><?=$_blog_listing['older']['text']?></a>
        <a class="btn btn-outline-secondary disabled" href="<?=$_blog_listing['newer']['link'] ?>"><?=$_blog_listing['newer']['text']?></a>
    </nav>

</div><!-- /.blog-main -->
