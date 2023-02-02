<?php

namespace App\Http\Controllers\Kasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('kasi.dashboard.index');
    }
}
