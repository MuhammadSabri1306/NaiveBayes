<?php
function getModel(){

	$classes = array('Play', 'No Play');

	$classField = 'result';

	$trainingSet = array(
		array(
			'outlook' => 'sunny',
			'temperature' => 'hot',
			'humidity' => 'high',
			'windy' => 'false',
			'result' => 'No Play'
		),
		array(
			'outlook' => 'sunny',
			'temperature' => 'hot',
			'humidity' => 'high',
			'windy' => 'true',
			'result' => 'No Play'
		),
		array(
			'outlook' => 'cloudy',
			'temperature' => 'hot',
			'humidity' => 'high',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'rainy',
			'temperature' => 'mild',
			'humidity' => 'high',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'rainy',
			'temperature' => 'cool',
			'humidity' => 'normal',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'rainy',
			'temperature' => 'cool',
			'humidity' => 'normal',
			'windy' => 'true',
			'result' => 'Play'
		),
		array(
			'outlook' => 'cloudy',
			'temperature' => 'cool',
			'humidity' => 'high',
			'windy' => 'true',
			'result' => 'Play'
		),
		array(
			'outlook' => 'sunny',
			'temperature' => 'mild',
			'humidity' => 'high',
			'windy' => 'false',
			'result' => 'No Play'
		),
		array(
			'outlook' => 'sunny',
			'temperature' => 'cool',
			'humidity' => 'normal',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'rainy',
			'temperature' => 'mild',
			'humidity' => 'normal',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'sunny',
			'temperature' => 'mild',
			'humidity' => 'normal',
			'windy' => 'true',
			'result' => 'Play'
		),
		array(
			'outlook' => 'cloudy',
			'temperature' => 'mild',
			'humidity' => 'high',
			'windy' => 'true',
			'result' => 'Play'
		),
		array(
			'outlook' => 'cloudy',
			'temperature' => 'hot',
			'humidity' => 'normal',
			'windy' => 'false',
			'result' => 'Play'
		),
		array(
			'outlook' => 'rainy',
			'temperature' => 'mild',
			'humidity' => 'high',
			'windy' => 'true',
			'result' => 'No Play'
		)
	);

	$params = array(
		'outlook' => 'rainy',
		'temperature' => 'hot',
		'humidity' => 'high',
		'windy' => 'true'
	);

	return array(
		'classes' => $classes,
		'classField' => $classField,
		'trainingSet' => $trainingSet,
		'params' => $params
	);

}











