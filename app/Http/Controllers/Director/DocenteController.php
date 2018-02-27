<?php

namespace CSilabo\Http\Controllers\Director;

use Illuminate\Http\Request;
use CSilabo\Http\Controllers\Controller;

use CSilabo\Model\Persona;
use CSilabo\Model\Role;
use DB;
use Validator;
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = DB::table('personas')
            ->join('persona_role', 'persona_role.persona_id', '=', 'personas.id')
            ->select('personas.*')
            ->where('persona_role.role_id', '=', 1)
            ->orderBy('personas.id', 'desc')
            ->get();
        return view('director.docente.index',compact('docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|min:2|max:100',
            'paterno' => 'required|min:2|max:100',
            'materno' => 'max:100',
            'email' => 'email|required|unique:personas',
            'password' => 'required|min:4|max:255',
        ]);
        if($validator->fails()){
            return redirect()->route('director.docente.index')
                        ->withErrors($validator)
                        ->withInput();
        }
        $persona=new Persona($request->all());
        //$user->fill($request->all());
        $persona->password=bcrypt($request->password);
        $persona->save();

        $role=Role::where('nombre','Docente')->select('id')->get();

        $persona->roles()->sync($role);
        flash('Registrado correctamente')->success();
        return redirect()->route('director.docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Persona::find($id);
        return view('director.docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Persona::find($id);
        return view('director.docente.edit', compact('docente'));
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|min:2|max:100',
            'paterno' => 'required|min:2|max:100',
            'materno' => 'required|min:2|max:100',
            'codigo' => 'required|min:10|max:10',
            'email' => 'email|required',
            'password' => 'required|min:4|max:255',
        ]);
        //dd($request->email);
        $var = DB::table('personas')
                ->where('personas.email','=',$request->email)
                ->where('personas.id','<>',$id)
                ->count();
        //dd($var);
        if($var){
            $validator->errors()->add('field', 'Email registrado a otra persona');
            flash('Email existente');
        }

        if($validator->fails() || $var){
            return redirect()->route('director.docente.index')
                        ->withErrors($validator)
                        ->withInput();
        }
        $docente=Persona::find($id);
        $docente->fill($request->all());
        $docente->password=bcrypt($request->password);
        $docente->save();
        flash('Modificado Correctamente')->success();
        return redirect()->route('director.docente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente=Persona::find($id);
        $docente->delete();
        flash('Docente '.$docente->nombre.' Eliminado')->error();
        return redirect()->route('director.docente.index');
    }
}
