@extends('fe_base.layout_section')

@section('title')
	{{ $title }}
@stop

@section('metadescription')
    {{ $metadescription }}
@stop

@section('keywords')
    {{ $keywords }}
@stop

@section('seccion')
    {{ $seccion }}
@stop

@section('content')
    <article>
		<div class="post-image">
			<div class="post-heading">
				<h3>{{ $title_content }}</h3>
			</div>
			
		</div>
		<p>
		Siempre es necesario estar bien asesorado jurídicamente para:<br/>

		- Resolver problemas legales o para prevenirlos en el futuro<br/>
		- Obtener la máxima indemnización de acuerdo con la Ley<br/>

		Nuestra filosofía es potenciar la negociación y evitar la vía judicial siempre que sea posible.<br />
		</p>
		<div class="row">
			<div class="col-lg-4">
				<h4>Accidentes de tráfico</h4>
				<p>Si usted ha sufrido un accidente, tiene derecho a obtener una indemnización.</p>
			</div>
			<div class="col-lg-4">
				<h4>Derecho sanitario</h4>
				<p>Comprendemos los sectores médico, odontológico, farmacéutico, veterinario y de enfermería.</p>
			</div>
			<div class="col-lg-4">
				<h4>Responsabilidad civil</h4>
				<p>Protegerse ante las posibles reclamaciones en el ejercicio de la abogacía es imprescindible.</p>
			</div>
		</div>
						
		</article>
@stop