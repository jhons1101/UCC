<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the UCC public page .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = DB::table('blogs as b')
                ->select('b.*', 'u.name')
                ->join('users as u', 'b.user_id', '=', 'u.id')
                ->orderBy('b.updated_at', 'desc')
                ->paginate(3);

        return View(
            'app', array(
                'blogs'    => $blog
            )
        );
    }
}
