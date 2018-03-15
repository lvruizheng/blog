<?php

namespace App\Http\Controllers\Admin;

use App\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    //
    public function index()
{
  return view('AdminHome')->withPages(Page::all());
}
}
