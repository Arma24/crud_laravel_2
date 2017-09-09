<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('index', ['users' => $user->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {
        $user->create([
            'name' => $request->name,
            'class' => $request->class,
            'number' => $request->number,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()
            ->route('biodata.index');
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
    public function edit(User $biodatum)
    {
        return view('edit', [
            'user' => $biodatum
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $biodatum, Request $request)
    {
        $biodatum->update([
            'name' => $request->name,
            'class' => $request->class,
            'number' => $request->number,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()
            ->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $biodatum)
    {
        $biodatum->delete();

        return redirect()
            ->route('biodata.index');
    }
}
