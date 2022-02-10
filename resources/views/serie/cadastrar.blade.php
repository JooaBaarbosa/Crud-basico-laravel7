<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filme</title>
</head>

<body>
    <div class="container">
        <h1 class='text-center'>Cadastrar Serie</h1>
        <form action="{{route('salvar_serie')}}" method="post">
          @csrf
            <div class="form-group">
                <label for="nomeserie">Serie</label>
                <input type="text" class="form-control" name="nomeserie" id="nomeserie" value=" ">
                @if ($errors->has('nomeserie'))
                    <span class="text-danger">{{ $errors->first('nomeserie') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="categoriaserie">Categoria do Serie</label>
                <input type="text" class="form-control" name="categoriaserie" id="categoriaserie" value=" ">
                @if ($errors->has('categoriaserie'))
                    <span class="text-danger">{{ $errors->first('categoriaserie') }}</span>
                @endif
            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
