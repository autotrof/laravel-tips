<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return inertia('Dashboard');
    }
    public function tes()
    {
        return inertia('Tes');
    }
}

// layout
// controller
// routes -> web.php
