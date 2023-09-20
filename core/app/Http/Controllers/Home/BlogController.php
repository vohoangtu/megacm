<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\NewsList;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class BlogController extends HomeController
{
    public function index(){
        $newsLists = NewsList::with("news")
            ->where("type", "=", "blog")
            ->whereRaw("FIND_IN_SET ('hienthi', status) and FIND_IN_SET ('noibat', status)")
            ->get();

        $newestBlog = News::with("list")->where("type", "=", "blog")->orderByDesc("id")->first();

        $blogs = News::with("list")->where("type", "=", "blog")->whereRaw("FIND_IN_SET ('hienthi', status)")->paginate(12);

        return view("index.blog", [
            'newsLists' => $newsLists,
            'newestBlog' => $newestBlog,
            'blogs' => $blogs
        ]);
    }

    public function category($category){
        $newsLists = NewsList::with("news")
            ->where("type", "=", "blog")
            ->whereRaw("FIND_IN_SET ('hienthi', status) and FIND_IN_SET ('noibat', status)")
            ->get();

        $category = NewsList::with("news")->where("type", "=", "blog")
            ->where("slug".app()->getLocale(), "=", $category)
            ->whereRaw("FIND_IN_SET ('hienthi', status)")->first();

        $blogs = News::with("list")
            ->where("type", "=", "blog")
            ->where("id_list", "=", $category->id)
            ->whereRaw("FIND_IN_SET ('hienthi', status)")
            ->paginate(12);

        return view("index.blog.category", [
            'newsLists' => $newsLists,
            'blogs' => $blogs
        ]);
    }


    public function item($blog){

        $blog = News::with("list")->where("type", "=", "blog")
            ->whereRaw("FIND_IN_SET ('hienthi', status)")
            ->where("slug".app()->getLocale(), "=", $blog)
            ->first();

        return view("index.blog.detail", [
            'blog' => $blog,
        ]);
    }
}
