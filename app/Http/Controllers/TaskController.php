<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class TaskController extends Controller
{
    //
    public function index(){

    }

    public function create(Request $request){
        // pegando todas as categorias
        $categories = Category::all();

        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function create_action(Request $request){
        // dados que vão ser preenchidos
        $task = $request->only(['title', 'category_id', 'description', 'due_date']);

        $task['user_id'] = 1;

        // O que vai ser salvo no banco de dados
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $request){
        return view('tasks.edit');
    }

    public function delete(Request $request){
        // deleta e redireciona de volta para home
        return redirect(route('home'));
    }
}
