<?php

namespace shop\Http\Controllers\Admin;

use shop\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index() {
        return view('admin.products.index');
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    
}
