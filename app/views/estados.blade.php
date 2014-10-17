@extends('layout')
@section('content')
<section id="main" class="bg-one">

					<!-- Heading row -->
					<header class="hr-section">
						
						<div class="container">
							<div class="row">
								<div class="span12">
									<h2 class="aligncenter"><span class="colored">Bibliotecas Virtuales</span> de Universidades en <span class="colored">{{$pais}}</span></h2>
									<h6 class="aligncenter">En esta sección podrás encontrar bibliotecas virtuales por Estados</h6>
								</div>
							</div>
						</div>
					</header>

						<header class="hr-section">
						<br><h4><span>Bibliotecas de <label class="pais_buscado">{{$pais}}</label></span></h4>	
					</header>
				<!-- Container -->
				<!--/. Container -->
				
				</section>
			
		<!--jquery -->
		<section id="main" class="bg-one">
			<div id="container1">
				<div class="row">
					<ul id="filterOptions">
						<li class="active"><a href="#" id="all">Todos</a></li>
						@foreach($estados as $estado)
						<li><a href="#" id="{{$estado}}" class="primero">{{$estado}}</a></li>
						@endforeach
					</ul>
					
					<div id="ourHolder">
						@foreach($todo as $clave =>$todito)
						<div class="item {{$todito->Edo_uni}}">
							<img src="{{URL::to('images/universidades/'.$todito->Logo_uni)}}" />
								<a href="{{$todito->pag_web}}">
									<h3>
										<strong>	
											<font color="#00a0d1">
												{{$todito->Nom_uni}}
											</font>
										</strong>
									</h3>
								</a>
						</div>	
						@endforeach			
					</div>
					
				</div>
			</div>
		</section>
		<!--/.jquery-->


@stop