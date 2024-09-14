<x-layout page="TodoList: login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1> Criar Tarefa </h1>

        <form>

            <x-form.text_input name="title" label="Titulo da Task" placeholder="Digite o título da sua task" required="required"/>

            <x-form.text_input name="due_date" label="Data de Realização" type="date"/>

            <x-form.select_input name="category" label="Categoria">

                <option>Selecione uma de Teste Opção</option>
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
