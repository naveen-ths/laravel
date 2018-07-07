<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::id();
        return view('backend.auth.profile', ['user' => User::findOrFail($id)]);
    }

}
