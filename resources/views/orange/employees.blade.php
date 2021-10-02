@extends('layouts.orange')

@section('content')  
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
            @csrf
                <div class="col-md-10 col-md-push-1 animate-box">
                    <div class="card">
                        <h3>Employee Card ID</h3>
                        <img @switch($employee['gender'])
                                @case('Female')
                                    src="https://cdn.pixabay.com/photo/2014/03/25/16/24/female-296989_960_720.png"
                                    @break
                                @case('Male')
                                    src="https://cdn.freelogovectors.net/wp-content/uploads/2013/02/worker.png"
                                    @break
                            
                                @default
                                src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                            @endswitch  
                        alt="John" style="width:100%">
                        <h1>{{ $employee["first_name"]}} {{$employee["last_name"]}}</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Department: {{ $employee['departmentid'] }}</p>
                        <p>Birthday: {{ $employee['birth_date'] }}</p>
                        <p>Género: {{ $employee['gender'] }}</p>
                        <p>Hire date: {{ $employee['hire_date'] }}</p>
                        <p>Status: @if ($employee['active']==0)
                                        Inactivo
                                    @else
                                        Activo
                                    @endif
                        </p>
                        {{-- <p class="text-justify"><b>Foto:</b>{{ $employee['photo'] }} --}}

                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <p><button>Contact</button></p>
                    </div>
                    {{-- <div class="col-lg-12">
                        <hr>
                        <h2 class="into-text text-center">
                            <p class="text-justify"><b>Nombre:</b>
                            <p class="text-justify"><b>Apellidos:</b>{{ }}
                            <p class="text-justify"><b>Genero:</b>
                            <p class="text-justify"><b>Fecha Nacimiento:</b>
                            <p class="text-justify"><b>Fecha Contrato:</b>
                            <p class="text-justify"><b>Estatus:</b>
                            
                            <p class="text-justify"><b>ID Departamento:</b>
                        </h2>
                        <hr>    
                    </div> --}}
                </div>
            </div>        
		</div>
</div>

<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
@endsection