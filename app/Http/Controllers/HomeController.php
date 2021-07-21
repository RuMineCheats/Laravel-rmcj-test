<?php

namespace App\Http\Controllers;

use App\Models\Message;

class HomeController extends Controller
{
    public function Home(){

        return view('home',[
            'msg' => Message::inRandomOrder()->first()
        ]);

    }
}
