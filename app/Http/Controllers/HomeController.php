<?php

namespace App\Http\Controllers;

use App\Data\Model\Category;
use App\Data\Model\Jadwal;
use App\Data\Model\Notification;
use App\Data\Model\Reader;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jadwal_count         = Jadwal::all()->count();
        $category_count     = Category::all()->count();
        $notification_count = Notification::all()->count();
        $reader_count       = Reader::all()->count();

        return view('admin.dashboard.dashboard', compact(
            'jadwal_count',
            'category_count',
            'notification_count',
            'reader_count'
        ));
    }
}
