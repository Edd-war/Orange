@extends('layouts.orange')

@section('content')
<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
                <div class="col-md-10 col-md-push-1 animate-box">
                    <h3>Detalle del empleado: </h3>
                    <table class="table table-default">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Genero</th>
                            <th>Id Departamento</th>
                            <th>Optiones</th>
                        </tr>
                        
                        @foreach ($employeearray as $employee)
                            <tr>
                                <td>{{$employee["first_name"]}}</td>
                                <td>{{$employee["last_name"]}}</td>
                                <td>{{$employee["gender"]}}</td>
                                <td>{{$employee["departamentid"]}}</td>
                                <td><a href="" class="btn btn-success">Detalles</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>        
		</div>
</div>
@endsection