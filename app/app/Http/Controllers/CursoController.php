<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\DataFormCursos;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show(Curso $curso, $categoria = null)
    {
        $curso = Curso::findOrFail($curso->id);
        return view('cursos.show', compact('curso', 'categoria'));
    }

    public function dataFormCursos(DataFormCursos $request)
    {
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function edit(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(DataFormCursos $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
