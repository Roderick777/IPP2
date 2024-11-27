<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notices;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notices::all();
        return view('notices.index', compact('notices'));
    }
}
