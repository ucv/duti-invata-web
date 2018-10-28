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

        'items' => [
            [
                'title' => 'Sample blog post',
                'date' => 'January 1, 2014',
                'author' => 'Mark',
                'author_link' => '#',
                'html_content' => "
                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap.
                    Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus.
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                    consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare
                        vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <h2>Heading</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <pre><code>Example code block</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia
                    bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                    risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                </ol>
                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                "
            ],
            [
                'title' => 'Another blog post',
                'date' => 'December 23, 2013',
                'author' => 'Jacob',
                'author_link' => '#',
                'html_content' => "
                <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus.
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                    consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare
                        vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros.</p>
                "
            ],
            [
                'title' => 'New feature',
                'date' => 'December 14, 2013',
                'author' => 'Chris',
                'author_link' => '#',
                'html_content' => "
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia
                    bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus,
                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                    risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                "
            ],
        ]
    ]

?>

<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        <?= $_blog_listing['name'] ?>
    </h3>
    <?php
    foreach ($_blog_listing['items'] as $blog_item){
        ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?=$blog_item['title']?></h2>
            <p class="blog-post-meta"><?=$blog_item['date']?> by <a href="<?=$blog_item['author_link']?>"><?=$blog_item['author']?></a></p>
            <?=$blog_item['html_content']?>
        </div><!-- /.blog-post -->
        <?php
    }
    ?>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=$_blog_listing['older']['link'] ?>"><?=$_blog_listing['older']['text']?></a>
        <a class="btn btn-outline-secondary disabled" href="<?=$_blog_listing['newer']['link'] ?>"><?=$_blog_listing['newer']['text']?></a>
    </nav>

</div><!-- /.blog-main -->
