<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
//use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        
        return view('components.admin.index');
    }
}
