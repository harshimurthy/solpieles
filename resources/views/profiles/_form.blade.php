<div class="col-sm-6">

	<div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
		{!! Form::label('name', 'Your Name:', ['class'=>'']) !!}
		<div class="input-group">
			<div class="input-group-addon"><i class="fa fa-user"></i></div>
			{!! Form::input('text', 'name', null, ['class'=>'form-control', 'placeholder'=>'Your Name']) !!}
		</div>
	</div>
	<!-- /. Your Name -->	
</div>
<div class="col-sm-6">
	

	<div class="form-group {{ $errors->has('gender') ? 'has-error' : null }}">
		{!! Form::label('gender', 'Your Gender:', ['class'=>'']) !!}
		<div class="input-group">
			<label class="radio-inline">
				{!! Form::radio('gender', 'male', null, ['options']) !!}Male <i class="fa fa-male"></i>
			</label>
			<label class="radio-inline">
				{!! Form::radio('gender', 'female', null, ['options']) !!}Female <i class="fa fa-female"></i>
			</label>
		</div>
	</div>
	<!-- /. Gender -->
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="form-group {{ $errors->has('bio') ? 'has-error' : null }}">
			{!! Form::label('bio', 'Your Bio:', ['class'=>'']) !!}
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-info"></i></div>
				{!! Form::textarea('bio', null, ['class'=>'form-control', 'placeholder'=>'Your Bio']) !!}
			</div>
		</div>
	</div>

</div>


<div class="clearfix"></div>
<!-- /. Your Bio -->


