<?php

namespace App\Http\Controllers;

use App\Models\identity;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Identity as BuilderIdentity;

class IdentityController extends Controller
{
    public function index() {
        return view('identities.index');
    }

    public function create() {
        return view('identities.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'FirstName' => 'required',
            'MiddleName' => 'required',
            'SecondName' => 'required',
            'LastName' => 'required',
            'CI' => 'required',
            'Number' => 'required',
            'Direction' => 'required',
            'BirthDate' => 'required'
        ]);

        $new_identity = Identity::create($data);

        return redirect(route('identity.index'));
    }
}
