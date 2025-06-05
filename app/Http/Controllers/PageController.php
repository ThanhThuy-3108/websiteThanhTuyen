<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // hoặc chỉ cần extends Controller cũng được nếu Controller ở cùng namespace

class PageController extends Controller
{
    public function home()       { return view('pages.home'); }
    public function about()      { return view('pages.about'); }
    public function activities() { return view('pages.activities'); }
    public function testimonies(){ return view('pages.testimonies'); }
    public function gallery()    { return view('pages.gallery'); }
    public function contact()    { return view('pages.contact'); }
}
