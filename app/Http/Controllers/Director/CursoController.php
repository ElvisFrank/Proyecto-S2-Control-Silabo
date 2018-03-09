<?php

namespace CSilabo\Http\Controllers\Director;

use Illuminate\Http\Request;
use CSilabo\Http\Controllers\Controller;

use CSilabo\Model\Curso;
use CSilabo\Model\curso_requisito;
use CSilabo\Model\Sumilla;
use Validator;
use DB;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cursos = Curso::all()->select('id','codigo','nombre')->orderBy('codigo','ASC')->get();
        $cursos=DB::table('cursos')
            ->select('id','codigo','nombre')
            ->orderBy('codigo','ASC')
            ->get();
        //dd($cursos);
        return view('director.curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::orderBy('id','DESC')->get();
        return view('director.curso.create', compact('cursos'));
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
            'nombre' => 'required|min:2|max:100|unique:cursos',
            'codigo' => 'required|min:10|max:10|unique:cursos',
            /*'creditos' => 'required|min:2|max:100',
            'codigo' => 'required|numeric|min:10|max:10',
            'creditos' => 'required|numeric|min:10|max:10',*/
        ]);

        if($validator->fails()){
            flash('Informacion ya exitente')->error();
            return redirect()->route('director.curso.index')
                        ->withErrors($validator)
                        ->withInput();
        }
        $curso=new Curso($request->all());
        $curso->save();
        $sumilla=new sumilla();
        $sumilla->descripcion=$request->sumilla;
        $sumilla->estado='vigente';
        $sumilla->fecha=date('Y-m-d');
        $sumilla->curso_id=$curso->id;
        $sumilla->save();

        //$curso->curso_requisito()->sync($request->curso_requisito);
        if ($request->curso_requisito!=null) {
            foreach ($request->curso_requisito as $c_requisito) {
                $curso_requisito= new curso_requisito();
                $curso_requisito->curso_id=$curso->id;
                $curso_requisito->curso_requisito_id=$c_requisito;
                $curso_requisito->save();
            }
        }
        

        flash('Registrado correctamente')->success();
        return redirect()->route('director.curso.index');
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
        $curso=Curso::find($id);
        $curso->delete();
        flash('Curso '.$curso->nombre.' Eliminado')->error();
        return redirect()->route('director.curso.index');
    }
}
