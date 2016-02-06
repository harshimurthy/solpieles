@include('layouts.common.errors-div')

<div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
	{!! Form::label('name', 'Product Name:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-text-width"></i></div>
		{!! Form::input('text', 'name', null, ['class'=>'form-control', 'placeholder'=>'Product Name']) !!}
	</div>
</div>
<!-- /. Product Name -->

<div class="form-group {{ $errors->has('summary') ? 'has-error' : null }}">
	{!! Form::label('summary', 'Short Description:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-text-height"></i></div>
		{!! Form::textarea('summary', null, ['class'=>'form-control', 'placeholder'=>'Short Description']) !!}
	</div>
</div>
<!-- /. Short Description -->

<div class="form-group {{ $errors->has('description') ? 'has-error' : null }}">
	{!! Form::label('description', 'Product Description:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-text-height"></i></div>
		{!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Product Description']) !!}
	</div>
</div>
<!-- /. Product Description -->

<div class="form-group {{ $errors->has('lang') ? 'has-error' : null }}">
	{!! Form::label('lang', 'Selet Language:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-language"></i></div>
		{{-- {!! Form::input('text', 'lang', null, ['class'=>'form-control', 'placeholder'=>'Selet Language']) !!} --}}
		{!! Form::select('lang', $product->lang_list, null, ['class'=>'form-control']) !!}
	</div>
</div>
<!-- /. Selet Language -->
