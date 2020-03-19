<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidade::all();

        return view('Administrador.indexEspecialidade', ['especialidades'=>$especialidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.createEspecialidade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->foto->isValid()) {
            $nameFile = $request->nome . '.' . $request->foto->extension();

            $foto = $request->foto->storeAs('especialidadeImgs', $nameFile);
            
            $especialidade = new Especialidade();
            $especialidade->nome = $request->nome;
            $especialidade->foto = $nameFile;

            $especialidade->save();
        }

        return redirect()->route('admin.especialidades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidade $especialidade)
    {
        return view('Administrador.editEspecialidade', ['especialidade'=>$especialidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidade $especialidade)
    {
        // $especialidade->nome = $request->nome;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especialidade  $especialidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidade $especialidade)
    {
        $especialidade->delete();

        return redirect()->route('admin.especialidades.index');
    }
}
