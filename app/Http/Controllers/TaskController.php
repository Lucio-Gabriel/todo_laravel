<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class TaskController extends Controller
{
    //
    public function update(Request $request){
        $task = Task::findOrFail($request->taskId);
        $task->is_done = $request->status;
        $task->save();
        return ['success' => true];
    }

    public function index(){
        // return view('home');
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
        $id = $request->id;

        // validadando ID
        $task = Task::find($id);
        if (!$task){
            return redirect(route('home'));
        }

        // alimentando categorias
        $categories = Category::all();
        $data['categories'] = $categories;

        $data['task'] = $task;
        return view('tasks.edit', $data);
    }

    public function edit_action(Request $request){
        $request_data = $request->only(['title', 'due_time', 'category_id', 'description']);

        // selecionando o valor do nosso checkbox
        $request_data['is_done'] = $request->is_done ? true : false;

        // pegando o ID
        $task = Task::find($request->id);
        // verificando se o ID existe
        if(!$task) {
            return 'Erro de task não existente';
        }
        $task->update($request_data);
        $task->save();
        return redirect(route('home'));

    }

    public function delete(Request $request){
        // deleta e redireciona de volta para home

        $id = $request->id;

        $task = Task::find($id);

        if($task){
            $task->delete();
        }

        return redirect(route('home'));
    }


}
