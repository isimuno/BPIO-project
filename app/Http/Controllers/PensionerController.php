<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PensionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pensioners = \App\Pensioner::with('place')->paginate();
        return view('pensioners/index', ['pensioners' => $pensioners]);

        $pensioners = \App\Pensioner::with('PensionType')->paginate();
        return view('pensioners/index', ['pensioners' => $pensioners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $places = \App\Place::all();
        $pension_types = \App\PensionType::all(); 
        return view('pensioners/create', ['places' => $places, 'pension_types' => $pension_types]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:25',
            'lastname' => 'required|max:35',
            'sex' => 'required',
            'date_of_birth' => 'required|Date',
            'year_carer' => 'required|Numeric',
            'amount_pension' => 'required|Numeric',
            'pension_type_id' => 'required',
            'place_id' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->action('PensionerController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\Pensioner::create($data);
        return redirect()->action('PensionerController@index');
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
