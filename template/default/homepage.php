<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 11:48
 */
?>
<div class="container">
    <?php include 'elements/jumbotron.php'?>
    <?php include 'elements/cards.php'?>

    <div class="row">

        <?php include 'elements/blog_listing.php'?>

        <aside class="col-md-4 blog-sidebar">

            <?php include 'elements/about.php'?>

            <?php include  'elements/links.php' ?>

            <?php
            $links = [
                'title' => 'Elsewhere',
                'items' => [
                    [
                        'link' => '#',
                        'text' => 'GitHub'
                    ],
                    [
                        'link' => '#',
                        'text' => 'Twitter'
                    ],
                    [
                        'link' => '#',
                        'text' => 'Facebook'
                    ],
                ],
            ];
            include  'elements/links.php'
            ?>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->
