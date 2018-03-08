<?php

namespace CSilabo\Http\Controllers\Docente;

use Illuminate\Http\Request;
use CSilabo\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use CSilabo\Model\Semestre;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = DB::table('curso_docente')
            ->join('curso_activado','curso_docente.curso_id','=','curso_activado.id')
            ->join('cursos','curso_activado.curso_id','=','cursos.id')
            ->join('semestres','semestres.id','=','curso_activado.semestre_id')
            ->selectRaw("CONCAT(semestres.año,' - ',semestres.numero) as semestre,
                curso_activado.semestre_id as semestre_id,
                curso_activado.curso_id as curso_id,
                cursos.nombre as curso_nombre,
                cursos.codigo as curso_codigo")
            //->select('cursos.*','semestres.año as semestre_año','semestres.numero as semestre_numero','curso_activado.id as curso_activado_id')
            ->where('curso_docente.persona_id','=',Auth::user()->id)
            ->orderBy('semestres.año','DESC')
            ->orderBy('semestres.numero','DESC')
            ->get();
        //dd($cursos);
       return view('docente.curso.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $semestre = Semestre::find($request->semestre_id);
        dd($semestre);
        return view('docente.curso.create');
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
