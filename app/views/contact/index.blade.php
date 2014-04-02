@extends('layouts.master')



@section('content')
    <div class="page-header">
  		<h1>Kontakta <small>kontaktuppgifter till styrelsen</small></h1>
	</div>
	<div class="row">
		@if (isset($contacts))
			<?php $count = 0 ?>
			@foreach ($contacts as $contact)

  				<?php $count++ ?>
    			<div class="col-sm-6 col-md-4 contact-thumb">
      				<img class="col-md-12" src="http://placekitten.com/g/300/200" alt="..." />
      				<div class="col-md-12">
        				<h3>{{{$contact['name']}}} <small style="white-space:nowrap;">{{{$contact['role']}}}</small></h3>
        				<address>
        				@if (isset($contact['phone']))
        					<strong>Telefon:</strong> {{{$contact['phone']}}} <br>
						@endif
						@if (isset($contact['email']))
        					<strong>Email:</strong> <a href="mailto:{{{$contact['email']}}}">{{{$contact['email']}}}</a> <br>
						@endif
						</address>
  					</div>
  				</div>
  				@if ($count%3==0)
  					<div class="clearfix visible-md visible-lg"></div>
  				@elseif ($count%2==0)
  					<div class="clearfix visible-xs visible-sm"></div>
  				@endif
			@endforeach
		@endif
	</div>
@stop