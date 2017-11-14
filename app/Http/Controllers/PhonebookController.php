<?php

namespace App\Http\Controllers;


use App\Http\Requests\pbRequest;
use App\phonebook;
use App\User;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $user = auth()->id();
      $data = phonebook::where('user_id' , '=',  auth()->id())->get();
      return $data;

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

        public function store(pbRequest $request){
        $data = new phonebook;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->number = $request->number;
        $data->email = $request->email;
        $data->location = $request->location;
        $data->user_id = auth()->id();
        $data->save();
         }

    /**
     * Display the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(phonebook $phonebook)
    {
      $data = phonebook($request->id);
      return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(pbRequest $request)
    {
        $data = phonebook::find($request->id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->number = $request->number;
        $data->email = $request->email;
        $data->location = $request->location;
        $data->user_id = auth()->id();
        $data->save();
          }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = phonebook::find($request->id);
        $data->delete();
    }
}
