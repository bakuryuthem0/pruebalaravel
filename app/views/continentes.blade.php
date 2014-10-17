@extends('layout')
@section('content')
	@foreach($letra as $clave => $letrica)
		<section class="{{$seccion[$clave]}}">
				<div class="container">
					<header class="hr-section" >						
						<h4>
							<span>{{$letrica}}</span>
						</h4>	
					</header>
					<div class="container">
						<div class="row">						
						@foreach($paises as $pais)	
							@if (strtoupper($letrica[0])==$pais->Pais_uni[0] or strtoupper($letrica[2])==$pais->Pais_uni[0] or strtoupper($letrica[4])==$pais->Pais_uni[0])	
									<div class="pricing pricing-column span3">
										<div class="pricing-crest">
											<h3>
												<font color="#00a0d1">
													<strong>{{$pais->Pais_uni}}</strong>
												</font>
											</h3>
											Bibliotecas
										</div>
										<div class="pricing-specs">
										@foreach($universidades as $unis)										
												@foreach($unis as $u)
													@if($u->Pais_uni == ucwords(strtolower(($pais->Pais_uni))))
													<div class="pricing-spec">
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
													</div>
													@endif
												@endforeach
										@endforeach
											<a  href="{{URL::to('estados/'.$pais->Pais_uni)}}" class="btn full">Ver Más
											</a>
										</div>
									</div>
							@endif
						@endforeach
						
					</div>
				</div>
				<div class="cta-button">
					<div align="right">	
						<a href="{{URL::to('continentes/'.$cont)}}" class="btn big">
							Ver Más
						</a>
					</div>
				</div>
			</div>
		</section>';

	@endforeach
@stop