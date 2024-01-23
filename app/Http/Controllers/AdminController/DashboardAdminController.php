<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // echo "<h1> Ini adalah halaman admin. Halo " . Auth::user()->name . "</h1>";
        // echo "<a href='/logout'>Logout</a>";

        return view('admin.index');
    }
}
