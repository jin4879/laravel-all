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

        $popular_board = Board::limit(6)->orderBy('view_count', 'desc')->get();
        $latest_board = Board::limit(6)->latest('updated_at')->get();

        $comments = Board::find(6)->comments;



        return view('home',[
            'latest_board' => $latest_board,
            'popular_board' => $popular_board,
        ]);
    }
}
