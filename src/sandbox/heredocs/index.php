<?php

$data = array(
    'title'   => 'My awesome blogpost',
    'author'  => 'Marco Rieser',
    'date'    => '14. Juni 2014',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias atque consequatur corporis enim fugit natus quae quisquam quos velit.'
);

/**
 * @var $title
 * @var $author
 * @var $date
 * @var $content
 */

// extract all keys in an array
// and assign them to a variable
extract($data);

// a here doc
$post = <<<EOT
<h1>$title</h1>
<p>By: $author at $date</p>
<div>$content</div>
EOT;

echo $post;