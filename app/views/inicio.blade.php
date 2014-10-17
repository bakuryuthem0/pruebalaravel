@extends('layout')
@section('content')
<!--<section id="main" class="bg-one">
</section>
<section class="bg-three bg-gradient font-negative">
</section>-->
<section id="main" class="bg-one">
	<!-- Heading row -->
	<header class="hr-section">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h2 class="aligncenter">
						Portal de 
						<span class="colored">
							Bibliotecas Virtuales
						</span> 
					</h2>
					<h6 class="aligncenter">
						En esta sección podrás encontrar bibliotecas virtuales Nacionales e Internacionales
					</h6>
				</div>
			</div>
		</div>
	</header>
</section>
@foreach($continente as $clave => $cont)
	<!--Fondo-->

	<section class="{{$seccion[$clave]}}">
		<!--Cabecera para cada continete-->
		<header class="hr-section">
			<br>
			<h4>
				<span>
					Bibliotecas {{$cont->gentilicio}}
				</span>
			</h4>	
		</header>
		<h2 class="aligncenter">Principales <span class="colored">Bibliotecas Virtuales</span> {{$cont->gentilicio}}</h2>
		<h6 class="aligncenter">Más la información de cada Biblioteca Virtual {{trim($cont->gentilicio,'s')}}</h6>
		<!--Fin de la cabecera-->
		<div class="container">
			<!--Se Ordena bonito cada fila-->
			<div class="row">
				<!--Contenedores por pais-->
				<!--Contenedores del nombre del pais-->
				@foreach($paises as $pais)
						@foreach($pais as $p)
							@if($p->id_cont == $cont->id)
						<div class="pricing pricing-column span3">
							<div class="pricing-crest">
								<h3>
									<font color="#00a0d1">
										<strong>{{ucwords(strtolower($p->nombre))}}</strong>
									</font>
								</h3>
									Bibliotecas
							</div>
							<!--Fin del contenedor del nombre del pais-->
							<!--Contenedores de las universidades-->
							<div class="pricing-specs">
								<div class="pricing-spec">
									@foreach($universidades as $univ)
										@foreach($univ as $u)
											@if($u->Pais_uni == ucwords(strtolower(($p->nombre))))
												<p>
													<strong>
														<img src="{{URL::to('images/universidades/'.$u->Logo_uni)}}" height="30" width="30" >

															<a href="{{ $u->pag_web }}">
																<font color="#00a0d1">
																	{{$u->Ini_uni}}
																</font>
															</a>
													</strong>
												</p>
											@endif
										@endforeach
									@endforeach
								</div>
								<a  href="{{URL::to('estados/'.$p->nombre)}}" class="btn full">Ver Más
								</a>
							</div>
							<!--Fin del contenedor de las universidades-->
					</div>
						@endif
					@endforeach
				@endforeach
			</div>
			<!--Fin de las filas-->
			<div class="cta-button">
				<div align="right">
					<a href="{{URL::to('continentes/'.$cont->nombre)}}" class="btn big">
						Ver Más
					</a>
					
				</div>
			</div>
		</div>
	</section>
@endforeach
@stop