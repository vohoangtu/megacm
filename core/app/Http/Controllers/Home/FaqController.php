<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\NewsList;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class FaqController extends HomeController
{
    public function index($newslist = null){
        $faqLists = NewsList::with("news")
            ->where("type", "=", "faq")
            ->whereRaw("FIND_IN_SET ('hienthi', status)")
            ->get();
        if($newslist){
            $list = $faqLists->where("slug". app()->getLocale(), "=",$newslist)->first();
        }else{
            $list = $faqLists->first();
        }
        $newsItems = $list->news;

        return view("index.faq", [
            'faqLists' => $faqLists,
            'newsList' => $list,
            'newsItems' => $newsItems
        ]);
    }

}
