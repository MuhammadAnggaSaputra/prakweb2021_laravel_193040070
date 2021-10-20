<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
       "tittle" => "Home" 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Muhammad Angga Saputra",
        "email" => "manggas703@gmail.com",
        "image" => "angga.jpg"
    ]);
});



Route::get('/blog', function () { $blog_posts = [
    [
        "tittle" => "judul post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Muhammad Angga Saputra",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eum quod explicabo tempore, quis impedit atque laboriosam aut quidem harum! Repellat hic officia expedita quisquam obcaecati, ut quam pariatur iusto earum molestias similique omnis distinctio minus illo! Itaque quia quam porro sunt quaerat, tempora repellendus non quidem earum consectetur tempore, ipsam officiis voluptate dolores ea commodi quasi sapiente error voluptatibus repellat est! Officia natus nihil iure, quasi voluptatum deserunt culpa doloremque odit vero accusamus vitae quis aliquam. Numquam, culpa veniam?"
    ],
    [
        "tittle" => "judul post Kedua",
        "slug" => "Judul-post-kedua",
        "author" => "Hannan Fakhrul hakim",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eum quod explicabo tempore, quis impedit atque laboriosam aut quidem harum! Repellat hic officia expedita quisquam obcaecati, ut quam pariatur iusto earum molestias similique omnis distinctio minus illo! Itaque quia quam porro sunt quaerat, tempora repellendus non quidem earum consectetur tempore, ipsam officiis voluptate dolores ea commodi quasi sapiente error voluptatibus repellat est! Officia natus nihil iure, quasi voluptatum deserunt culpa doloremque odit vero accusamus vitae quis aliquam. Numquam, culpa veniam? sdadsasdawaeatsrt."
    ],
];
    return view('posts', [
       "tittle" => "Posts",
       "posts" => $blog_posts 
    ]);
});



//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "tittle" => "judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Angga Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eum quod explicabo tempore, quis impedit atque laboriosam aut quidem harum! Repellat hic officia expedita quisquam obcaecati, ut quam pariatur iusto earum molestias similique omnis distinctio minus illo! Itaque quia quam porro sunt quaerat, tempora repellendus non quidem earum consectetur tempore, ipsam officiis voluptate dolores ea commodi quasi sapiente error voluptatibus repellat est! Officia natus nihil iure, quasi voluptatum deserunt culpa doloremque odit vero accusamus vitae quis aliquam. Numquam, culpa veniam?"
        ],
        [
            "tittle" => "judul post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Hannan Fakhrul hakim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eum quod explicabo tempore, quis impedit atque laboriosam aut quidem harum! Repellat hic officia expedita quisquam obcaecati, ut quam pariatur iusto earum molestias similique omnis distinctio minus illo! Itaque quia quam porro sunt quaerat, tempora repellendus non quidem earum consectetur tempore, ipsam officiis voluptate dolores ea commodi quasi sapiente error voluptatibus repellat est! Officia natus nihil iure, quasi voluptatum deserunt culpa doloremque odit vero accusamus vitae quis aliquam. Numquam, culpa veniam? sdadsasdawaeatsrt."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

        return view('post', [
           "tittle" => "Single Post",
           "post" => $new_post
        ]);
    });