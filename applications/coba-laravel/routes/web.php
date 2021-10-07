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
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view('about', [
        "title" => "about",
        "name" => "Fahri Arliansyah",
        "email" => "193040011.Fahri@mail.unpas.com",
        "image" => "fahri.jpeg"
    ]);
});



Route::get('/', function () {
    $blog_post = [
        [
           "title" => "Judul Post Pertama",
           "slug" => "judul-post-pertama",
           "author" => "Fahri Arliansyah",
           "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, saepe! Quo perferendis impedit aut deleniti aperiam blanditiis temporibus repellendus qui suscipit repellat consequuntur quis at a quas, quia, odio ipsa dignissimos voluptate quidem, aspernatur dolore. Mollitia, officia est hic saepe suscipit omnis corporis aliquid doloremque, tempora officiis maxime non molestias, blanditiis quam ut. Dolorum aperiam voluptates facere tenetur beatae illo nemo, harum voluptatum odit eius! Doloribus in iure nobis est perferendis debitis, esse error iste quos voluptates voluptatibus ipsum porro.
           " 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jonathan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum deleniti quod molestiae fugiat, aperiam temporibus at dicta, architecto facilis dolorem aspernatur reprehenderit odio culpa itaque recusandae provident sunt maxime sed perspiciatis magnam quasi, consequuntur voluptate fuga ratione. Quaerat qui distinctio tenetur velit magnam adipisci consequuntur iste eligendi. Sunt suscipit voluptatibus magni reprehenderit esse aspernatur corporis nisi dignissimos quas, dicta dolorem cum, exercitationem ad maxime nulla veritatis? Cupiditate eos veritatis nobis a quasi! A, atque rerum, dicta labore reiciendis quae earum, nam officia tempore nobis accusantium consequuntur. Numquam, quaerat illo? Qui, ducimus alias eveniet tenetur repellendus ullam quidem veritatis porro libero." 
         ],
        ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_post
    ]);
});



// Halaman single post
Route::get('posts/{slug}'), function($slug) {

    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Fahri Arliansyah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, saepe! Quo perferendis impedit aut deleniti aperiam blanditiis temporibus repellendus qui suscipit repellat consequuntur quis at a quas, quia, odio ipsa dignissimos voluptate quidem, aspernatur dolore. Mollitia, officia est hic saepe suscipit omnis corporis aliquid doloremque, tempora officiis maxime non molestias, blanditiis quam ut. Dolorum aperiam voluptates facere tenetur beatae illo nemo, harum voluptatum odit eius! Doloribus in iure nobis est perferendis debitis, esse error iste quos voluptates voluptatibus ipsum porro.
        " 
     ],
     [
         "title" => "Judul Post Kedua",
         "slug" => "judul-post-kedua",
         "author" => "Jonathan",
         "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum deleniti quod molestiae fugiat, aperiam temporibus at dicta, architecto facilis dolorem aspernatur reprehenderit odio culpa itaque recusandae provident sunt maxime sed perspiciatis magnam quasi, consequuntur voluptate fuga ratione. Quaerat qui distinctio tenetur velit magnam adipisci consequuntur iste eligendi. Sunt suscipit voluptatibus magni reprehenderit esse aspernatur corporis nisi dignissimos quas, dicta dolorem cum, exercitationem ad maxime nulla veritatis? Cupiditate eos veritatis nobis a quasi! A, atque rerum, dicta labore reiciendis quae earum, nam officia tempore nobis accusantium consequuntur. Numquam, quaerat illo? Qui, ducimus alias eveniet tenetur repellendus ullam quidem veritatis porro libero." 
      ],
     ];

     $new_post = [];
     foreach($blog_post as $post) {
         if{$post["slug"] === $slug} {
             $new_post = $post;
         }
     }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
}