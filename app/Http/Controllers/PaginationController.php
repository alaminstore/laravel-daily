<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function index()
    {
        $data = User::paginate(8);
        return view('pagination', compact('data'));
    }
    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = User::paginate(8);
            return view('pagination_data', compact('data'))->render();
        }
    }
}
