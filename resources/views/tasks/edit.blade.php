<x-layout page="TodoList: login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1> Editar Tarefa </h1>

        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf

            {{-- Pega um ID e deixa ele invisivel para  o usuario --}}
            <input type="hidden" name="id" value="{{$task->id}}">


            <x-form.checkbox_input
            name="is_done"
            label="Tarefa Realizada?"
            checked="{{$task->is_done}}"
            />

            <x-form.text_input
            name="title"
            label="Titulo da Task"
            placeholder="Digite o título da sua task"
            required="required"
            value="{{$task->title}}"
            />

            <x-form.text_input
            name="due_date"
            label="Data de Realização"
            type="datetime-local"
            value="{{$task->due_date}}"
            />


            <x-form.select_input
            name="category_id"
            label="Categoria">

                {{-- pegando todas as categorias do banco --}}
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"
                        @if($category->id == $task->category_id)
                        selected
                        @endif
                        >{{$category->title}}</option>
                @endforeach
            </x-form.select_input>


            <x-form.textarea_input
            label="Descrição da Tarefa"
            name="description"
            placeholder="Digite a descrição da tarefa"
            value="{{$task->description}}"
            />

            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizr Tarefa"/>

        </form>

    </section>

</x-layout>
