@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron centrar">
			<div class="row">
				<div class="col-sm text-md-right">
				@foreach ($user_data as $user)
				<img class="img-avatar" src="{{asset('img/avatar1.jpg')}}" alt="Avatar"> 				                
            	@endforeach
				</div>
				<div class="col-sm text-md-left">
				@foreach ($user_data as $user)
                <h1 class="display-4">{{ $user->name }}</h1>
				<p class="lead">Edad:{{ $user->edad }}  | {{ $user->pais }}</p>				
                <hr class="my-4">
                <p>Ubicación - 	Teléfono</p>   				                
            	@endforeach
				</div>								
			</div>	
        </div>
        <div id="accordion">
		  <div class="card bg">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Educación
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		      </div>
		    </div>
		  </div>
		  <div class="card bg">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Experiencia
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		      </div>
		    </div>
		  </div>
		  <div class="card bg">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Habilidades
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body prog">
		      		<p>HTML</p>	
					<div class="progress">							
					  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p>CSS</p>
					<div class="progress">						
					  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p>JAVASCRIPT</p>
					<div class="progress">						
					  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p>JQUERY</p>
					<div class="progress">						
					  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="form-avatar">
			<form action="/developers/{{Auth::id()}}" method="POST"> 
                @csrf
                <label for="">Cambiar mi avatar</label></br>
                <input type="file" name= "avatar">
                <input type="submit" class="btn btn-primary">
            </form>
		</div>




    </div>
    
    
@endsection