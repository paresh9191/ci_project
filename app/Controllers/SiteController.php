<?php

namespace App\Controllers;

class SiteController extends BaseController
{

    public function test()
    {
     return view ("site/test");
    }

    public function about_us()
    {
        $data['page_title'] = "About us";
        $data['load_page'] = "site/about_us";
            echo view('site/kernal', $data);
 
    }
    public function xyz()
    {
        echo view("includes/header");
        echo view("site/xyz");
        echo view ("includes/footer");
    }

}