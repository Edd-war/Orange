@extends('layouts.orange')

@section('content')
<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
                <h3> Selecciona un departamento y busca sus empleados</h3>
                <label>Departamentos</label>
                <form method="GET" action="{{route('show')}}">
                    <select name="department" id="id">
                    @foreach($departmentsarray as $department)
                            <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
                    @endforeach
                    </select>
                    <input type="submit" class="btn btn-primary" />
                </form>
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
                            <td>{{$employees['departmentid']}}</td>
                            <td><a href="{{route('/employee/details', $employees['id'])}}" class="btn btn-success">Detalles</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>        
		</div>
</div>
@endsection