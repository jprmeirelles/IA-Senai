<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Team;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Http\Request;

class Xz_aiController extends Controller
{
    public function createTeam(Request $request){
        $request->validate(['name'=>['required','max:255']
        ]);
    
        $teams = new Team();
        $teams->name = $request->name;
        $teams->descrição = $request->descrição;
        $teams->senha = $request->senha;
        $teams->teachers_id = $request->teachers_id;

        $teams->save();

        return redirect()->route('Turma.create')->with('success', 'Turma criada com sucesso');
    }
    
    public function teacher($name){
        $teacher = new Teacher();
        $teacher = $teacher->where('name', 'like', '%'.$name.'%')->get();

        if(!$teacher){
            return response()->json(['error' => 'Professor não encontrado']);
        }

        return response()->json($teacher);
    }

    public function team($name){
        $team = new Team();
        $team = $team->where('name', 'like', '%'.$name.'%')->get();

        if(!$team){
            return response()->json(['error' => 'Professor não encontrado']);
        }

        return response()->json($team);
    }

    
}
