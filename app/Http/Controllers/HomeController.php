<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user != null) {
            if ($user->role == 'adminit') {
                return view('IT.dashboard_IT');
            } else if ($user->role == 'adminkeuangan') {
                return view('keuangan.dashboard_keuangan');
            } else if ($user->role == 'adminsdm') {
                return view('SDM.dashboard_sdm');
            }
        }
        return redirect('/login');
    }
}
