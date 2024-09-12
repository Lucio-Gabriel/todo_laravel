<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assests/css/style.css">

</head>

<body>
    <div class="container">
        <div class="sidebar">

            <img src="/assests/imagens/logo.png" alt="">

        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa

                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2> Progresso do Dia  </h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">
                            Data
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
                        <div class="task">
                            <div class="title">
                                <input type="checkbox">
                                <div class="task_title"> Titulo da tarefa </div>
                            </div>

                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo da Tarefa</div>
                            </div>

                            <div class="actions">
                                <a href="#">
                                <img src="/assests/imagens/icon-edit.png" alt="">
                                </a>

                                <a href="#">
                                    <img src="/assests/imagens/icon-delete.png" alt="">
                                </a>

                            </div>

                        </div>

                        <div class="task">
                            <div class="title">
                                <input type="checkbox">
                                <div class="task_title"> Titulo da tarefa </div>
                            </div>

                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo da Tarefa</div>
                            </div>

                            <div class="actions">
                                Editar - Excluir
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
