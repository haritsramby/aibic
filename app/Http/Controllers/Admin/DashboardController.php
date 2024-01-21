<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Berita::paginate(4);

        return view('pages.admin.index', [
            'items' => $items
        ]);
    }
}
