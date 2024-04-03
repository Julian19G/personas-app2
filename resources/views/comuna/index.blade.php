<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Comunas</title>

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
        <h1>Listado de Comunas</h1>
        <a href="{{ route('comunas.create') }}" class="btn btn-success mb-3">Agregar</a> <!-- Añadimos margen inferior -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Municipality</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comunas as $comuna)
                <tr>
                    <th scope="row">{{ $comuna->comu_codi }}</th>
                    <td>{{ $comuna->comu_nomb }}</td>
                    <td>{{ $comuna->muni_nomb }}</td>
                    <td>
                        <a href="{{route('comunas.edit',['comuna'=>$comuna->comu_codi]) }}"
                            class="btn btn-info"> Edit </a></li>
                        <form
                            action="{{ route('comunas.destroy',['comuna' => $comuna->comu_codi]) }}"
                            method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
        -->
</body>

</html>
