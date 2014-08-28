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
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24034.158377643194!2d1.1071681000000002!3d41.150463849999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a150e4b86d9e5d%3A0x2e2190d249deced2!2sReus%2C+Tarragona!5e0!3m2!1ses!2ses!4v1409180974727" width="100%" height="400" frameborder="0" style="border:0"></iframe>
		</div>
						
	</article>
@stop