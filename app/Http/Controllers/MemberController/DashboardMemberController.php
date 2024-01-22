<?php

namespace App\Http\Controllers\MemberController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardMemberController extends Controller
{
    public function index()
    {
        echo "<h1> Ini adalah halaman admin. Halo " . Auth::user()->name . "</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
