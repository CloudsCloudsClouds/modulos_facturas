<?php

namespace App\Http\Controllers;

use App\Models\identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    public function index() {
        return view('identities.index');
    }

    public function create() {
        return view('identities.create');
    }
}
