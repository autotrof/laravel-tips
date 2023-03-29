<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return inertia('Dashboard');
    }
}

// inertia
// vue
// admin-let npm
// pasang di app.css
// pasang di bootstrap.js
