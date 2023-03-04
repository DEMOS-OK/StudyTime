<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class StudytimeController extends Controller
{
    public function index()
    {
        return Inertia::render('Test');
    }
}
