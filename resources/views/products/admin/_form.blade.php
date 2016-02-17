@include('layouts.common.errors-div')

<div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
	{!! Form::label('name', 'Product Name:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-text-width"></i></div>
		{!! Form::input('text', 'name', null, ['class'=>'form-control', 'placeholder'=>'Product Name']) !!}
	</div>
</div>
<!-- /. Product Name -->

<div class="form-group {{ $errors->has('short_name') ? 'has-error' : null }}">
	{!! Form::label('short_name', 'Short Name:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-font"></i></div>
		{!! Form::input('text', 'short_name', null, ['class'=>'form-control', 'placeholder'=>'Short Name']) !!}
	</div>
</div>
<!-- /. Short Name -->

<div class="form-group {{ $errors->has('description') ? 'has-error' : null }}">
	{!! Form::label('description', 'Description:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-font"></i></div>
		{!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Description']) !!}
	</div>
</div>
<!-- /. Description -->

<div class="form-group {{ $errors->has('specs') ? 'has-error' : null }}">
	{!! Form::label('specs', 'Specifications:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-font"></i></div>
		{!! Form::textarea('specs', null, ['class'=>'form-control', 'placeholder'=>'Specs']) !!}
	</div>
</div>
<!-- /. Specifications -->

<div class="form-group {{ $errors->has('lang') ? 'has-error' : null }}">
	{!! Form::label('lang', 'Selet Language:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-language"></i></div>
		{{-- {!! Form::input('text', 'lang', null, ['class'=>'form-control', 'placeholder'=>'Selet Language']) !!} --}}
		{!! Form::select('lang', $product->lang_list, null, ['class'=>'form-control']) !!}
	</div>
</div>
<!-- /. Selet Language -->
