<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 23:18
 */

$_links = [
    'title' => 'Archive',
    'items' => [
        [
            'link' =>'#',
            'text' => 'March 2014',
        ],
        [
            'link' =>'#',
            'text' => 'February 2014',
        ],
        [
            'link' =>'#',
            'text' => 'January 2014',
        ],
        [
            'link' =>'#',
            'text' => 'December 2013',
        ],
        [
            'link' =>'#',
            'text' => 'November 2013',
        ],
        [
            'link' =>'#',
            'text' => 'October 2013',
        ],
        [
            'link' =>'#',
            'text' => 'September 2013',
        ],
        [
            'link' =>'#',
            'text' => 'August 2013',
        ],
        [
            'link' =>'#',
            'text' => 'July 2013',
        ],
        [
            'link' =>'#',
            'text' => 'June 2013',
        ],
        [
            'link' =>'#',
            'text' => 'May 2013',
        ],
        [
            'link' =>'#',
            'text' => 'April 2013',
        ],
    ]
];

if(isset($links) && is_array($links)){
    $_links = $links;
}

?>

<div class="p-3">
    <h4 class="font-italic"><?=$_links['title']?></h4>
    <ol class="list-unstyled mb-0">
        <?php
        foreach ($_links['items'] as $item){
            ?>
            <li><a href="<?= $item['link']?>"><?= $item['text']?></a></li>
        <?php
        }
        ?>
    </ol>
</div>
