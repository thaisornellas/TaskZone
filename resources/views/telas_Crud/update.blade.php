<!DOCTYPE html>
<html lang="pt-br" style="height: 100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <title>atualizando</title>
</head>

<body class="bg-dark text-white bootstrap-dark" style="height: 100%">
    <div class="container w-100 h-100 d-flex justify-content-center align-items-center">

        <div class=" w-80 h-80 d-flex  align-items-center">
            <form action="" method="post" class="w-50 h-100">

                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="editar">voce pode editar a hora que quiser, isso ajuda a deixar suas metás mais realistas e adaptaveis a sua vida </label>

                    <label for="exampleInputEmail1" class="form-label">Atualize sua tarefa</label>

                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="tarefa" value="jogar lixo fora">
                        <label for="">descrição</label>
                        <input type="text" class="form-control" name="descricao" value="muita preguiça">
                        <input type="submit" name="" class="btn btn-outline-primary" id="" value="enviar">

                </div>

            </form>


        </div>



    </div>

</body>

</html>
