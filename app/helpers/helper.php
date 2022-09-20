<?php
use App\Models\{pages,blog};

function Services()
{
    # code...
    return pages::all();
}

function checkrobost($data)
{
    # code...
    if(!$data){
        return "noindex";
    }
    return "index";

}

function blog()
{
    # code...
    return blog::all();
}

function findblog($id)
{
    # code...
    return blog::find($id);
}
?>
