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

        return view('Administrador.especialidades.index', ['especialidades'=>$especialidades]);
    }

    public function show(Especialidade $especialidade) {
        if (isset($especialidade->id) && $especialidade->id > 0) {
            return view('Administrador.especialidades.show', ['especialidade'=>$especialidade]);
        }

        return redirect()->route('admin.especialidades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.especialidades.create');
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
            $nameFile = $request->nome . date('dmy') . '.' . $request->foto->extension();

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
        return view('Administrador.especialidades.edit', ['especialidade'=>$especialidade]);
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
        if (!empty($request->nome) && strlen($request->nome) <= 255) {
            $especialidade->nome = $request->nome;

            if ($request->foto->isValid()) {
                $nameFile = $request->nome. date('dmy') . '.' . $request->foto->extension();
    
                $foto = $request->foto->storeAs('especialidadeImgs', $nameFile);
            }

            $especialidade->save();
        }
        
        return redirect()->route('admin.especialidades.index');
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
