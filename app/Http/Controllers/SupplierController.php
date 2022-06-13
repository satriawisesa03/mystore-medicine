<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSup=Supplier::all();
        return view('supplier.index', compact('dataSup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Supplier();
        $data->name=$request->get('name');
        $data->address=$request->get('adr');
        $data->save();
        return redirect()->route('suppliers.index')->with('status','supplier is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $data=$supplier;
        //return view('supplier.edit',compact('data'));
        dd($supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name=$request->get('name');
        $supplier->address=$request->get('adr');
        $supplier->save();
        return redirect()->route('suppliers.index')->with('status','Supplier data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {

        $this->authorize('delete-permission',$supplier); 

        try{
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status','Data Supplier berhasil dihapus');

        }catch (\PDOException $e){
            $msg="Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('suppliers.index')->with('error',$msg);
        }
        //dd($supplier);
    }
}
