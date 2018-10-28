<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 27-Oct-18
 * Time: 23:11
 */

$_about = [
  'title' => 'About',
  'description' => 'Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus
        sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.',
];
?>

<div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic"><?= $_about["title"] ?></h4>
    <p class="mb-0"><?= $_about["description"] ?></p>
</div>
