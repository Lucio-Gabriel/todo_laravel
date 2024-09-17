<x-layout>

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2> Progresso do Dia  </h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">

                <img src="/assests/imagens/icon-prev.png" alt="">
                    12 de Set
                <img src="/assests/imagens/icon-next.png" alt="">

            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph-placeholder" >
        </div>

        <div class="tasks_left_footer">
            <img src="/assests/imagens/icon-info.png" alt="">
             Restam 3 tarefas para serem realizdas
        </div>



    </section>
    <section class="list">

        <div class="list_header">
            <select class="list_header-select">
            <option value="1">Todas as Tarefas</option>
            </select>
        </div>

        <div class="task_list">


            @foreach ($tasks as $task)
            <x-task :data=$task/>
            @endforeach


        </div>
    </section>
</x-layout>
