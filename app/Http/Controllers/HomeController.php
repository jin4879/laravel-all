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

        $popular_board = Board::orderBy('view_count', 'desc')->paginate(6,['*'],'popular');
        $latest_board = Board::latest('updated_at')->paginate(6);

        return view('home',[
            'latest_board' => $latest_board,
            'popular_board' => $popular_board,
        ]);
    }
}
