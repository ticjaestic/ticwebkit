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
		<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h4>Contacta con nosotros sin compromiso</h4>
				<form id="contactform" action="#" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Escriba su nombre completo" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Escriba su e-mail" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Escriba un asunto" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Escriba su duda..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Enviar mensaje</button>
								<span class="pull-right margintop20">* Campos requeridos obligatoriamente</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
						
	</article>
@stop