<?php

namespace App\Http\Controllers;

use App\Model\Board;
use App\Model\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $popular_board = Board::orderBy('view_count', 'desc')->limit(6)->get();
        $latest_board = Board::latest('updated_at')->limit(6)->get();

        return view('home',[
            'latest_board' => $latest_board,
            'popular_board' => $popular_board,
        ]);
    }
}
