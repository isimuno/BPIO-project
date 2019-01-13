<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PensionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pension_types = \App\PensionType::with('pensioner')->paginate();
        return view('pension_types/index', ['pension_types' => $pension_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $pension_types = \App\PensionType::all();
        return view('pension_types/create', ['pension_types' => $pension_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //

     public function store(Request $request)
     {
         $validator = \Validator::make($request->all(), [
             'name' => 'required|max:30'
         ]);
     
         if ($validator->fails()) {
             return redirect()->action('PensionTypeController@create')
                 ->withErrors($validator);
         }
     
     
         $data = $request->input();
         \App\PensionType::create($data);
         return redirect()->action('PensionTypeController@index');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
