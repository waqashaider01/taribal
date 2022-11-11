<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }
    public function house()
    {
        return view("frontend.house");
    }
    public function commercial()
    {
        return view("frontend.commercial");
    }

   



    public function portfolio()
    {
    return view("frontend.portfolio-masonry");

    }
    

    public function servciesdetail()
    {
    return view("frontend.servcies-detail-1");

    }




    public function portfoliostandar()
    {
    return view("frontend.portfolio-standar");

    }



    public function blog()
    {
    return view("frontend.blog");

    }

    public function singleproduct()
    {
    return view("frontend.single-product");

    }

    public function cartpage()
    {
    return view("frontend.cart-page");

    }

    public function checkoutpage()
    {
    return view("frontend.checkout-page");

    }

    public function post()
    {
    return view("frontend.post");

    }
    public function servciesdetail2()
    {
    return view("frontend.servcies-detail-2");

    }
    
    public function servciesdetail3()
    {
    return view("frontend.servcies-detail-3");

    }
    public function servciesdetail4()
    {
    return view("frontend.servcies-detail-4");

    }
    public function servciesdetail5()
    {
    return view("frontend.servcies-detail-5");

    }
    public function servciesdetail6()
    {
    return view("frontend.servcies-detail-6");

    }

    public function portfoliodetailslider()
    {
    return view("frontend.portfolio-detail-slider");

    }
    public function portfolioleft()
    {
    return view("frontend.portfolio-left");

    }


}

