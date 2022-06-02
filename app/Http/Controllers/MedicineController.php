<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listdata= DB::select(DB::raw('select * from medicines'));
        // //dd($listdata);

        // $listdata=DB::table('medicines')->get();

        // $listdata= Medicine::all();
        
        // return view('medicine.index',compact('listdata'));

        $datasmed = Medicine::all();
        return view('medicine.index',compact('datasmed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("medicine.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Medicine();
        $data->generic_name=$request->get('name');
        $data->form=$request->get('form');
        $data->restriction_formula=$request->get('frm');
        $data->description=$request->get('dsc');
        $data->faskes_tk1=$request->get('fk1');
        $data->faskes_tk2=$request->get('fk2');
        $data->faskes_tk3=$request->get('fk3');
        $data->category_id=$request->get('category_id');
        $data->save();
        return redirect()->route('obat.index')->with('status','obat is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        // dd($medicine);

        $res = Medicine::find($medicine);
        $message = "";
        if($res)
        {
            $message = $res;
        }
        else
        {
            $message = null;
        }
        return view('medicine.show',compact('message'));
        // return view('medicine.show',['message=> $message']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
