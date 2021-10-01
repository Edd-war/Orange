@extends('layouts.orange')

@section('content')
<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
                <h3> Selecciona un departamento y busca sus empleados</h3>
                <label>Departamentos</label>
                <select name="departament" id="id">
                @foreach($departamentsarray as $departament)
                        <option value="{{ $departament['id'] }}">{{ $departament['name'] }}</option>
                @endforeach
                </select>
                <a href="{{route('show', $departament['id'])}}" class="btn btn-primary">Buscar</a>
			</div>
            <br><br><br><br>
            <div class="col-md-10 col-md-push-1 animate-box">
                <h3>Lista de empleados</h3>
                <table class="table table-default">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Id Departamento</th>
                        <th>Optiones</th>
                    </tr>
                    
                    @foreach ($employeesarray as $employees)
                        <tr>
                            <td>{{$employees['first_name']}}</td>
                            <td>{{$employees['last_name']}}</td>
                            <td>{{$employees['gender']}}</td>
                            <td>{{$employees['departamentid']}}</td>
                            <td><a href="" class="btn btn-success">Detalles</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>        
		</div>
</div>
@endsection