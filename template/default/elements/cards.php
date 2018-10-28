<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 22:40
 */

$_cards = [
    [
        'category' => "World",
        'title' => "Featured post",
        'date' => "Nov 12",
        'image_url' => "holder.js/200x250?theme=thumb",
        'description' => "This is a wider card with supporting text below as a natural lead-in to
                    additional content.",
        'link' => '#',
        'link_text' => "Continue reading"
    ],
    [
        'category' => "Design",
        'title' => "Post title",
        'date' => "Nov 11",
        'image_url' => "holder.js/200x250?theme=thumb",
        'description' => "This is a wider card with supporting text below as a natural lead-in to
                    additional content.",
        'link' => '#',
        'link_text' => "Continue reading"
    ],
];

?>

<div class="row mb-2">
    <?php
        foreach ($_cards as $_card){
            ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2"><?= $_card['category'] ?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#"><?= $_card['title'] ?></a>
                        </h3>
                        <div class="mb-1 text-muted"><?= $_card['date'] ?></div>
                        <p class="card-text mb-auto"><?= $_card['description'] ?></p>
                        <a href="<?= $_card['link'] ?>"><?= $_card['link_text'] ?></a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="<?= $_card['image_url'] ?>"
                         alt="Card image cap">
                </div>
            </div>
    <?php
        }
    ?>
</div>
