<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar País</title>
</head>
<body>
@include('navbar')
    <div class="p-5 mb-4 text-bg-dark container-fluid">
        <div class="container">
          <h1 class="display-5 fw-bold">Editar País</h1>
        </div>
      </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span class="text-primary">Datos del País</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">Código Pais:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código del pais"
                                disabled value="{{ $pais -> pais_codi }}">
                            <small id="idlHelp" class="form-text text-muted">ID del pais</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Nombre Pais:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre del municipio"
                                value="{{ $pais -> pais_nomb }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="capital">Departamento:</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="capital" name="code" required>
                                <option disabled value="">Seleccione una...</option>
                                @foreach ($capitales as $capital)
                                    @if ($capital->pais_capi == $capital->pais_capi)
                                        <option value="{{ $capital->pais_capi }}" selected>{{ $capital->pais_capi }}</option>
                                    @else
                                        <option value="{{ $capital->pais_capi }}">{{ $capital->pais_capi }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn-secondary" href="{{ route('paises.index') }}" role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>