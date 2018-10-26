<?php

class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('First Post', 'LL', true),
    new Post('Second Post', 'AI', true),
    new Post('Third Post', 'ML', true),
    new Post('Fourth Post', 'QH', false)
];

// first array then function
// $unpublishedPosts = array_filter($posts, function ($post){
//     return ! $post->published;
// });

// first func then array - lets you transform object in some way
// $modified = array_map(function ($post){
    // return (array) $post;
    // return ['title'=>$post->title];
// }, $posts);

// $titles = array_column($posts, 'title');


// foreach($posts as $key => $post){
//     $posts[$key] = (array) $post;
// }

$posts = array_map(function($post){
    return (array) $post;
}, $posts);

$author = array_column($posts, 'author', 'title');

var_dump($author);