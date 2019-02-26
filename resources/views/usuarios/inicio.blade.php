@extends('bienvenida.layouts.main')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

<section class="content-header">
      <h1 style="font-size: 28px;">        
        Gestión de usuarios        
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
		 <div class="panel panel-default">
		 	<div class="panel-heading" >Lista de usuarios</div>
		 <div class="panel-body">
		
		<div class="row">
			<div class="col-lg-2 col-xs-6">
				<button type="button" class="btn btn-primary btn-md btn-block" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar Usuario @{{$usuariologeado->username}}</button>
			</div>
			
		</div>
		<br>
		<div class="table-responsive">
		<table class="table " >
		    <thead>
		      <tr>
		      	<th>N°</th>
		      	<th>Username</th>
		        <th>Nombre</th>
		        <th>Correo electrónico</th>
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>
		     
				
		       @foreach($usuarios as $usuario)
		      <tr>
		      	
		      	<td><label class="label label-default">{{$usuario->id}}</label></td>
		      	
		        <td >{{ $usuario->username}}</td>
		        <td >{{ $usuario->nombre}}</td>
		        <td >{{ $usuario->email}}</td>


		        <td style="text-align: center"><a href="{{ route('usuario.editar',$usuario->id)}}" class="btn btn-warning"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
		        
		        <a href="{{ route('usuario.eliminar',$usuario->id)}}" onclick="return confirm('¿Está seguro de eliminar el usuario definitivamente?')" class="btn btn-danger action"> <span class="glyphicon glyphicon-trash"></span>Eliminar</a>
				</td>
		      </tr>
			  @endforeach
		      
		    </tbody>
  		</table>
  		
  		</div>
  		</div>
 		</section>
    	<!-- /.content -->
  		</div>
  		<!-- /.content-wrapper -->
  		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="background-color: #285675;color: #fff;">
		          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar usuario</h4>
		        </div>
		        <div class="modal-body">
		        	<!--FORM PARA LA CREACION DE USUARIOS -->
		        	<form class="form-horizontal" method="post" action="{{ route('usuario.crear') }}">
		        		@csrf
		        		<div class="form-group">
					      <label class="control-label col-sm-2" for="name">Username</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="username" name="xxx2"  autofocus>
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Nombre</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="nombre" name="nombre">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="email">E-mail</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="email" name="email" >
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="password">Contraseña</label>
					      <div class="col-sm-10">          
					        <input type="password" class="form-control" id="password" name="password">
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn- success">Aceptar</button>
					      </div>
					    </div>
					 </form>
		        </div> 
		        <div class="modal-footer" style="background-color: #ecf0f5;">
		          <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancelar</button>
		        </div>
		      </div>
		    </div>
		  </div>



</div>
</div>
</div>



@endsection