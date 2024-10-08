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

                <a href="{{route('home', ['date' => $date_prev_button])}}">
                    <img src="/assests/imagens/icon-prev.png" alt="">
                </a>
                    {{$date_as_string}}
                <a href="{{route('home', ['date' => $date_next_button])}}">
                    <img src="/assests/imagens/icon-next.png" alt="">
                </a>

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
            <select class="list_header-select" onChange="changeTaskStatusFilter(this)">
            <option value="all_task">Todas as Tarefas</option>
            <option value="task_pending">Todas as Pendentes</option>
            <option value="task_done">Todas as Realizadas</option>
            </select>
        </div>

        <div class="task_list">


            @foreach ($tasks as $task)
            <x-task :data=$task/>
            @endforeach


        </div>
    </section>
<script>
    // filtrar
    function changeTaskStatusFilter(e){

        if(e.value == 'task_pending') {
            showAllTask();
            documento.querySelectorAll('.task_done').forEach(function(element) {
                element.style.display = 'none';
            });
        } else if (e.value == 'task_done') {
            showAllTask();
            documento.querySelectorAll('.task_pendinng').forEach(function(element) {
                element.style.display = 'none';
            });
        }
    }

    function showAllTask(){
        documento.querySelectorAll('.block').forEach(function(element) {
                element.style.display = 'block';
            });
    } else{
        showAllTask();
    }
</script>

    {{-- componentizando nosso check e salvando no banco  --}}
<script>
    function taskUpdate(element) {
        let status = element.checked;
        let taskId = element.dataset.id;
        let url = '{{route('task.update')}}';
        let rawResult = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
                'accept': 'application/json'
            },
            body: JSON.stringify({status, taskId, _token: '{{ csrf_token() }}'})
        });
        result = await rawResult.json();
        if (result.success) {
            alert('Task  Atualizada com Sucesso!');
        } else {
            element.checked = !status;
        }
    }
</script>

</x-layout>
