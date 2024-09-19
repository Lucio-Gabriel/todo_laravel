<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request){

        if($request->date) {
            $filteredDate = $request->date;
        } else {
            $filteredDate = date('Y-m-d');
        }

        // Formatando o traduzindo
        $carbonDate = Carbon::createFromDate($filteredDate);
        
        $data['date_as_string'] = $carbonDate->translatedFormat('d').' de '.ucfirst($carbonDate->translatedFormat('M'));

        // Usando pra fazer as setas funcionarem e formatar  os dias
        $data['date_prev_button'] = $carbonDate->addDay(-1)->format('Y-m-d');
        $data['date_next_button'] =  $carbonDate->addDay(2)->format('Y-m-d');

        // filtrando as tasks pela data
        $data['tasks'] = Task::whereDate('due_date', $filteredDate)->get();
        // dd($data['tasks']);
        $data['AuthUser'] = Auth::user();

        return view('home', $data);
    }
}
