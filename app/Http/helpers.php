<?php

/**
 * add a nested form with the option to delete passed model. This method can 
 * work as a general method. Use the other two for especific functions.
 * 
 * @param  [string] $route     Route name
 * @param  string $parameter Route parameter
 * @param  array  $options   the set of options to update current options
 * @return form             the form to be presente in the form
 */
function delete_button($route, $parameter = null, $options = [])
{
	$settings = [
		'class'        => 'btn btn-link',
		'type'         => 'submit', 
		'name'         => 'deleteBtn',
		'icon'         => "<i class='fa fa-remove'></i> ",
		'label'        => "<i class='text-danger fa fa-remove'></i>",
		'method'       => 'DELETE',
		'form_name'    => 'delete_form', 
		'form_display' => 'inline-block',
		'style' => ''
	];

	if (trim($settings['class']) != 'btn btn-link') {
		$settings['label'] =  "Delete";
	}

	$options = array_merge($settings, $options);

	if (trim($options['class']) == 'btn btn-link') {
		$settings['style'] = 'padding: 0px';
	}
	
	$form = Form::open([
		'route'     => [$route, $parameter],
		'method'    => $options['method'], 
		'form_name' => $options['form_name'], 
		'id'        => $options['form_name'],
		'style'     => 'display: '.$options['form_display']
	], $parameter);

	$form .= Form::button(
			$options['icon'].$options['label'], 
			[
				'class' => $options['class'], 
				'type'  => $options['type'], 
				'id'    => $options['name'], 
				'name'  => $options['name'],
				'style'  => $options['style'],
				
			]
		);

	return $form .= Form::close();

}

/**
 * [delete_form description]
 * @param  [type] $route      [description]
 * @param  [type] $parameters [description]
 * @param  array  $btnOptions [description]
 * @param  array  $frmOptions [description]
 * @return [type]             [description]
 */
function delete_form($route, $parameters = null, $btnOptions = [], $frmOptions = [])
{
	$btnDefaults = [
		'd_class' => 'btn',
		'class'   => 'btn-danger',
		'type'    => 'submit', 
		'name'    => 'deleteBtn',
		'icon'   => "<i class='text-danger fa fa-remove'></i> ",
		'label'   => "Delete",
		'style'   => ''
	];

	$btnOptions = array_merge($btnDefaults, $btnOptions);

	$frmDefaults = [
		'class'   => '',
		'name'    => 'delete_form', 
		'name'    => 'deleteBtn',
		'method'  => 'DELETE',
		'display' => 'inline-block',
	];

	$frmOptions = array_merge($frmDefaults, $frmOptions);

	$form = Form::open([
		'route'     => [$route, $parameter],
		'method'    => $frmOptions['method'], 
		'form_name' => $frmOptions['form_name'], 
		'id'        => $frmOptions['form_name'],
		'style'     => $frmOptions['style'].'; display: '.$frmOptions['display']
	], $parameters);

	$form .= Form::button(
			$btnOptions['icon'].$btnOptions['label'], 
			[
				'class' => $btnOptions['d_class'].' '.$btnOptions['class'], 
				'type'  => $btnOptions['type'], 
				'id'    => $btnOptions['name'], 
				'name'  => $btnOptions['name'],
				'style'  => $btnOptions['style'],
				
			]
		);

	return $form .= Form::close();
	
}

/**
 * [delete_form_x description]
 * @param  [type] $route      [description]
 * @param  [type] $parameters [description]
 * @param  array  $btnOptions [description]
 * @param  array  $frmOptions [description]
 * @return [type]             [description]
 */
function delete_form_x($route, $parameters = null, $btnOptions = [], $frmOptions = [])
{
	$btnDefaults = [
		'd_class' => 'btn',
		'class'   => 'btn-link',
		'type'    => 'submit', 
		'name'    => 'deleteBtn',
		'label'   => "<i class='text-danger fa fa-remove'></i>",
		'style'   => ''
	];

	$btnOptions = array_merge($btnDefaults, $btnOptions);

	$frmDefaults = [
		'class'   => '',
		'name'    => 'delete_form', 
		'name'    => 'deleteBtn',
		'method'  => 'DELETE',
		'display' => 'inline-block',
	];

	$frmOptions = array_merge($frmDefaults, $frmOptions);

	$form = Form::open([
		'route'     => [$route, $parameter],
		'method'    => $frmOptions['method'], 
		'form_name' => $frmOptions['form_name'], 
		'id'        => $frmOptions['form_name'],
		'style'     => $frmOptions['style'].'; display: '.$frmOptions['display']
	], $parameters);

	$form .= Form::button(
			$btnOptions['label'], 
			[
				'class' => $btnOptions['d_class'].' '.$btnOptions['class'], 
				'type'  => $btnOptions['type'], 
				'id'    => $btnOptions['name'], 
				'name'  => $btnOptions['name'],
				'style'  => $btnOptions['style'],
				
			]
		);

	return $form .= Form::close();
	
}

