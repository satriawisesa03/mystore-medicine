<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::all();
        return view('category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatecoryModel  $catecoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(CatecoryModel $catecoryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatecoryModel  $catecoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CatecoryModel $catecoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatecoryModel  $catecoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatecoryModel $catecoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatecoryModel  $catecoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatecoryModel $catecoryModel)
    {
        //
    }
}
