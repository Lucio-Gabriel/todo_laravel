<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page ?? 'TodoList - Genérico'}}</title>
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
                {{$btn ?? null}} 
            </nav>
            <main>
                {{$slot}}
            </main>

        </div>
    </div>
</body>

</html>
