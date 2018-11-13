@extends('layout.app')
@section('page title', 'КОНТАКТ')
<?php $heading = "ПИШИТЕ НАМ"; ?>
            @section('content')
            <h2 class="text-center" style = "padding: 0px;">@section('heading') <?php echo $heading ?> @endsection</h2>
                <p class="text-center" style="height:100px;">ЗА СВА ПИТАЊА И КОМЕНТАРЕ ПИШИТЕ НАМ ПРЕКО СЛЕДЕЋЕ ФОРМЕ ИЛИ НАЗОВИТЕ НА ТЕЛЕФОН
                	<strong>065/694-417</strong><br></p>
                <style>
                	.invalid-feedback{
                		display: block;
                	}
                </style>
                	 {{-- @include('inc.errors') --}}
                {!! Form::open(['url' => 'kontakt/posalji']) !!}
                	@if (Session::has('flash_message'))
                		<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                	@endif
                	<div class="form-group">
	                	{!! Form::label('ime', 'Име') !!} </br>
	                	{{ Form::text('ime', '', ['class' => 'form-control','placeholder' => 'Име']) }}
	                	@if($errors->has('ime'))
	                		<p class="text-warning invalid-feedback"><strong>{{ $errors->first('ime') }}</strong></p>
	                	@endif
                	</div>	
                	<div>
	                	{!! Form::label('email', 'Email адреса') !!} <br>
	                	{!! Form::email('email', '', ['class' => 'form-control','placeholder' => 'Email']) !!}
	                	@if($errors->has('email'))
	                		<p class="text-warning invalid-feedback"><strong>{{ $errors->first('email') }}</strong></p>
	                	@endif <br>
	                </div>
                    <div class="form-group">
                        {!! Form::label('naslov', 'Наслов') !!} </br>
                        {{ Form::text('naslov', '', ['class' => 'form-control','placeholder' => 'Наслов поруке']) }}
                        @if($errors->has('naslov'))
                            <p class="text-warning invalid-feedback"><strong>{{ $errors->first('naslov') }}</strong></p>
                        @endif
                    </div>  
	                <div>
	                	{!! Form::label('poruka', 'Порука') !!} <br>
	                	{!! Form::textarea('poruka', '', ['class' => 'form-control','placeholder' => 'Порука']) !!}
	                	@if($errors->has('poruka'))
	                		<p class="text-warning invalid-feedback"><strong>{{ $errors->first('poruka') }}</strong></p>
	                	@endif
	                </div> <br>
	                <div>
	                	{{ Form::submit('Пошаљи', ['class' => 'btn btn-primary']) }}
    				</div>
				{!! Form::close() !!}
            </div>
            @endsection
            <div class="buttons"></div>
        </div>
    </div>
 