<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts =[
        [
            "title"=> "Post Pertama",
            "slug"=> "post-pertama",
            "author"=> "Yanto",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus tempora quo pariatur exercitationem esse harum nam explicabo sint, recusandae odio deserunt saepe voluptatibus magni est ea ullam alias necessitatibus illo reprehenderit nulla itaque eius autem! Magni, tempora et? Eveniet incidunt est esse, quis totam consequuntur labore, blanditiis eum, corporis aut libero maiores! Iure eos id porro, expedita modi fugiat odio nisi doloremque quas harum officia omnis vero voluptas aut, reprehenderit similique suscipit ipsam accusantium, repellendus distinctio? Tenetur, doloribus aliquid?"
        ],
        [
            "title"=> "Post Kedua",
            "slug"=> "post-kedua",
            "author"=> "Risky",
            "body"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium sint enim culpa numquam ratione. Corporis quam minima ut illum! Reprehenderit suscipit modi perspiciatis error deleniti iure ab qui aspernatur mollitia officiis minus veritatis rerum in vitae unde blanditiis placeat similique, expedita quia! Autem cum reprehenderit ab ex repellat quidem, dignissimos culpa error repellendus non aspernatur ea doloribus repudiandae atque explicabo obcaecati vel labore veniam eum dolore, similique numquam blanditiis voluptatum alias! Corrupti laboriosam ex illum quidem velit sit non tempore excepturi. Sunt ut reiciendis ab alias magni, mollitia excepturi laboriosam perferendis. Voluptates officiis quo earum dolor. Velit reiciendis quis doloribus!"
        ]
    ];
    public static function all()
    {
        return collect (self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
