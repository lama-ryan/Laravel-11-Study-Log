<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id'        => '1',
                'slug'      => 'judul-article-1',
                'title'     => 'Judul Article 1',
                'author'    => 'Mahatma Arrayyan',
                'publish'   => '1 July 2024',
                'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum odit magnam ipsa ab voluptatibus nisi maiores recusandae quibusdam similique non?',
            ],
            [
                'id'        => '2',
                'slug'      => 'judul-article-2',
                'title'     => 'Judul Article 2',
                'author'    => 'Mahatma Arrayyan',
                'publish'   => '2 July 2024',
                'content'   => 'Laborum odit magnam ipsa ab voluptatibus nisi maiores recusandae quibusdam similique non? Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if ( !$post ) 
        {
            abort(404);
        }

        return $post;
    }
}