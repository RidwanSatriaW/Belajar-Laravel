<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "tittle"=>"Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Ridwan Satria Wicaksana",
            "body"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi debitis facilis magnam eaque fuga. Aut iure perspiciatis, doloremque explicabo, fugit, libero aliquam nostrum esse modi maxime ratione eius tempora illo provident optio. In ipsam, blanditiis quasi veritatis minus commodi sit ad nihil corporis exercitationem, necessitatibus a adipisci eveniet architecto dolorum quia doloribus facere placeat laboriosam laudantium corrupti atque voluptatum ducimus natus. Quam minima obcaecati rerum corporis a dolorem et expedita ipsa harum magni? Autem rerum incidunt similique ab expedita ratione!"
        ],
        [
            "tittle"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"Restu Alam Bagaskara",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia aliquam enim ullam. Consequuntur, veniam a. Deserunt sit animi non odio quasi in accusamus, voluptatibus recusandae, aliquam veritatis nisi esse modi ducimus? Provident molestiae voluptatum numquam esse nulla dignissimos vel minima blanditiis, eius expedita ipsum veniam unde aut rerum nobis placeat odio dolor dolores? Tempore id cupiditate animi minus assumenda amet voluptates natus quos voluptatem. Natus commodi facere laboriosam ad rem facilis perferendis impedit exercitationem minima, suscipit accusantium. Vel incidunt cumque culpa possimus delectus, aperiam aut voluptate vitae deserunt! Molestias neque quibusdam quisquam atque natus ullam sit perspiciatis eligendi ducimus."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
