<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Departamentos</title>

    <style>
        body {
            background-color: #222; /* Color de fondo oscuro */
            color: #fff; /* Color del texto */
        }

        table {
            background-color: #fff; /* Color de fondo de la tabla en modo oscuro */
            color: #000; /* Color del texto en la tabla en modo oscuro */
            border-radius: 10px; /* Bordes redondeados */
        }

        .btn {
            border-color: #444; /* Color del borde de los botones en modo oscuro */
        }

        .btn:hover {
            background-color: #555; /* Color de fondo de los botones al pasar el ratón en modo oscuro */
            border-color: #555; /* Color del borde de los botones al pasar el ratón en modo oscuro */
        }

        .btn-info {
            background-color: #0056b3; /* Color de fondo del botón Edit en modo oscuro */
            border-color: #0056b3; /* Color del borde del botón Edit en modo oscuro */
        }

        .btn-info:hover {
            background-color: #007bff; /* Color de fondo del botón Edit al pasar el ratón en modo oscuro */
            border-color: #007bff; /* Color del borde del botón Edit al pasar el ratón en modo oscuro */
        }

        .btn-danger {
            background-color: #dc3545; /* Color de fondo del botón Delete en modo oscuro */
            border-color: #dc3545; /* Color del borde del botón Delete en modo oscuro */
        }

        .btn-danger:hover {
            background-color: #ff4242; /* Color de fondo del botón Delete al pasar el ratón en modo oscuro */
            border-color: #ff4242; /* Color del borde del botón Delete al pasar el ratón en modo oscuro */
        }
    </style>

</head>

<body>
    @include('navbar')
    <div class="container mt-3"> <!-- Añadimos margen superior -->
        <h1>Listado de Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-success mb-3">Agregar</a> <!-- Añadimos margen inferior -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Department</th>
                    <th scope="col">Country</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                <tr>
                    <th scope="row">{{ $departamento -> depa_codi }}</th>
                    <td> {{$departamento -> depa_nomb}} </td>
                    <td> {{$departamento -> pais_nomb}} </td>
                    <td>
                        <a href="{{route('departamentos.edit', ['departamento'=>$departamento->depa_codi]) }}"
                            class="btn btn-info"> Editar </a></li>
                        <form
                            action="{{route('departamentos.destroy', ['departamento' => $departamento -> depa_codi])}}"
                            method='POST' style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
