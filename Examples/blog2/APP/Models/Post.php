<?php

namespace Examples\blog2\APP\Models;

class Post
{
    public static function getAll()
    {
        return [
            ['title' => 'post1', 'content' => str_repeat('Lorem ipsum... ', 15)],
            ['title' => 'post2', 'content' => str_repeat('More Lorem ipsum... ', 15)],
            ['title' => 'post3', 'content' => str_repeat('Even More Lorem ipsum... ', 7)],
        ];
    }
}