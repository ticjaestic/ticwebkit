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
			{{ HTML::image('app/views/fe_base/img/abogados_en_tarragona3.jpg', 'Abogado en Cornella')}}
		</div>
		<p>
		Abogado en Cornella es la Web donde localizará al mejor profesional para defender sus intereses.<br />

		Nuestro bufete de abogados, tiene profesionales expertos en todas las especializaciones del sector de la abogacía.<br/>

		Asesoramiento especializado y dedicación extrema es lo que obtendrá contratando los servicios de Abogado en Cornella . <br/>

		El bufete de Abogado en Cornella   mejor posicionado en Internet.
		</p>
						
		</article>
@stop