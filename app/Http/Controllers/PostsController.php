<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Table;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('nicno', 'LIKE', "%{$search}%")
            ->orWhere('empno', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function recption(Request $request)
    {
        // Get the search value from the request
        $recption = $request->input('recption');
    
        // Search in the title and body columns from the posts table
        $tables = Table::query()
            ->where('nicno', 'LIKE', "%{$recption}%")
            ->orWhere('empno', 'LIKE', "%{$recption}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('recption',compact('tables'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
