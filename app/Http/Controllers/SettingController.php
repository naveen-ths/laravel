<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Auth;

class SettingController extends Controller {

    public function __construct()
    {
        $this->middleware(['auth', 'clearance']);
    }

}
