@include('layouts.common.errors-div')

<div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
	{!! Form::label('name', 'Image Name:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-search"></i></div>
		{!! Form::input('text', 'name', null, ['class'=>'form-control', 'placeholder'=>'Image Name']) !!}
	</div>
</div>
<!-- /. Image Name -->

<div class="form-group {{ $errors->has('tags') ? 'has-error' : null }}">
	{!! Form::label('tags', 'Images Tags:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-search"></i></div>
		{!! Form::input('text', 'tags', null, ['class'=>'form-control', 'placeholder'=>'Images Tags']) !!}
	</div>
		<span class="help-text">Separate multiple tags by comma.</span>
</div>
<!-- /. Images Tags -->

<div class="form-group {{ $errors->has('image') ? 'has-error' : null }}">
	{!! Form::label('image', 'Images to Upload:', ['class'=>'']) !!}
	<div class="input-group">
		<div class="input-group-addon"><i class="fa fa-search"></i></div>
		{!! Form::file('image', [ 'class'=>'form-control', 'placeholder'=>'Images Tags']) !!}
	</div>
</div>
<!-- /. Images to Upload -->