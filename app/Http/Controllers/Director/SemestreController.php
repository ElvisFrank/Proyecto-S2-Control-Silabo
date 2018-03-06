<?php

namespace CSilabo\Http\Controllers\Director;

use Illuminate\Http\Request;
use CSilabo\Http\Controllers\Controller;

use CSilabo\Model\Semestre;
use CSilabo\Model\Curso;
use DB;
class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestres=Semestre::orderBy('id','DESC')->get();
        return view('director.semestre.index',compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('semestre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semestre=new Semestre($request->all());
        $semestre->save();
        flash('Registrado correctamente')->success();
        return redirect()->route('director.semestre.index');
    }
    public function storeCurso(Request $request)
    {
        $semestre=Semestre::find($request->semestreId);
        //dd($semestre);
        $semestre->cursos()->sync($request->cursosActivados);
        flash('Registrado correctamente')->success();
        return redirect()->route('director.semestre.show',$request->semestreId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semestre=Semestre::find($id);
        $semestre->cursos();
        //Esto solo en caso de agregacion manual...
        $i=0;
        $vector[0]=-1;
        foreach ($semestre->cursos as $key => $value) {
            $vector[$i]=$value->id;
            $i++;
        }   
        $cursosdisponibles=DB::table('cursos')
            ->select('cursos.id','cursos.nombre')
            ->whereNotIn('id', $vector)
            ->get();
        
       //$cursosdisponibles=Curso::orderBy('nombre','DESC')->lists('nombre','id');
       //$my_cursos = $semestre->cursos->lists('id')->ToArray();
        return view('director.semestre.show',compact('semestre','cursosdisponibles'));
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
        $semestre = Semestre::find($id);
        $semestre->delete();
        return redirect()->route('director.semestre.index');
    }
}
