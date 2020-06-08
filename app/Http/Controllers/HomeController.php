<?php

namespace App\Http\Controllers;

use App\Model\Board;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $latest_board = Board::latest('updated_at')->paginate(2);
        $latest_board = DB::table('board')->latest('updated_at')->paginate(2);

        return view('home',[
            'latest_board' => $latest_board,
            'popular_board' => $popular_board,
        ]);
    }
}
