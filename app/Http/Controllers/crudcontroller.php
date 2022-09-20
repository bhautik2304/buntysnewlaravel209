<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pages;
class crudcontroller extends Controller
{
    //
    public function create_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }

    public function page(Request $req)
    {
        # code...
        $page=new pages;
        $page->name=$req->page;
        $page->Heading=$req->title;
        $page->img_url=$req->title;
        $page->img_alt=$req->title;
        $page->discription=$req->desc;
        $page->slug=$this->create_slug($req->title);
        $page->keyword=$req->pagekeyword;
        $page->page_title=$req->title;
        $page->meta_discription=$req->pageseodesc;
        // $page->robbost=$req->title;
        $suc= $page->save();

        if (!$suc) {
            # code...
            return response(["status"=>false,"msg"=>"Some Error"],200);
        }
        return response(["status"=>true,"msg"=>"Page Created Sucessfully"],200);
    }


}
