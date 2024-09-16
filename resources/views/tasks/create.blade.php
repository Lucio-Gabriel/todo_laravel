<x-layout page="TodoList: login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1> Criar Tarefa </h1>

        <form method="POST" action="{{route('task.create_action')}}">
            @csrf

            <x-form.text_input name="title" label="Titulo da Task" placeholder="Digite o título da sua task" required="required"/>

            <x-form.text_input name="due_date" label="Data de Realização" type="date"/>

            <x-form.select_input name="category_id" label="Categoria">

                {{-- pegando todas as categorias do banco --}}
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>


            <x-form.textarea_input
            label="Descrição da Tarefa"
            name="description"
            placeholder="Digite a descrição da tarefa"
            />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>

        </form>

    </section>

</x-layout>
