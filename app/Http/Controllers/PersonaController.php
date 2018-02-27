<?php

namespace CSilabo\Http\Controllers;

use Illuminate\Http\Request;

use CSilabo\User;
use Illuminate\Support\Facades\Auth;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona=Auth::user();
        if($persona->id != $id){
            flash('Este no es su perfil!')->error();
            return redirect()->route('home');
        }else{
            return view('persona.show',compact('persona'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Auth::user();
        if($persona->id != $id){
            flash('Este no es su perfil!')->error();
            return redirect()->route('home');
        }else{
            return view('persona.edit',compact('persona'));
        }
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
        //dd($request);

        $persona=Auth::user();
        if($persona->id != $id){
            flash('Este no es su perfil!')->error();
            return redirect()->route('home');
        }else{
            $user=User::find($id);
            $user->fill($request->all());
            $user->password=bcrypt($request->password);
            $user->save();
            flash('Editado correctamente')->success();
            return redirect()->route('home');
        }
        
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
