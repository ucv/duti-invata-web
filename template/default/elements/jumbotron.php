<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 22:34
 */

$_jumbotron = [
    'title' => "Title of a longer featured blog post",
    'description' => "Multiple lines of text that form the lede, informing new readers quickly and
            efficiently about what's most interesting in this post's contents.",
    'link' => '#',
    'link_text' => 'Continue reading...'
];

?>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?=$_jumbotron['title']?></h1>
        <p class="lead my-3"><?=$_jumbotron['description']?></p>
        <p class="lead mb-0"><a href="<?=$_jumbotron['link']?>" class="text-white font-weight-bold"><?=$_jumbotron['link_text']?></a></p>
    </div>
</div>
