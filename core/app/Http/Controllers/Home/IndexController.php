<?php

namespace App\Http\Controllers\Home;


use App\Models\News;
use App\Models\ProductBrand;
use Illuminate\Support\Str;

class IndexController extends HomeController
{
    public function index(){
        return view("index.home");
    }

    public function cleaningBranch($branch){
        $branch = ProductBrand::branch($branch)->first();

        if(view()->exists("index.cleaning.branch.$branch")){
            return view("index.cleaning.branch.$branch", [
                'branch' => $branch
            ]);
        }
        return view("index.cleaning.branch", [
            'branch' => $branch
        ]);
    }

    public function allBranchs(){
        return view("index.branchs.all", [
        ]);
    }

    public function aboutus(){
        return view("index.aboutus");
    }
}
