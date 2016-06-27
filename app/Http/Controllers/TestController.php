<?php

namespace Sigo\Http\Controllers;

use App\Http\Controllers\TestCustomController;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        //$c = new TestCustomController();
        //return $c->index();
        return view('sigo::welcome');
    }
}
