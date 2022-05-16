<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// function test(string $name, callable $func){
	// 	$name = $name.'bek';
	// 	return function(string $secondname)use($name){
	// 		echo $name.' '.$secondname;
	// 	};
	// }

	// $result = test('Abdumalik');
	// $result('Ibroximov');


	// Callback function

	// function callCallback(int $a, int $b, callable $func){
	// 	return $func($a, $b);
	// }

	// $result = callCallback(10,15,function($a, $b){
	// 	return ( $a ** 2 ) + ( $b ** 2 );
	// });

	// var_dump($result);


	// Pointers 

	@$name = 'Abdumalik';

	function changeName(string &$name){
		$name = $name.'bek';
	}

	changeName($name);

	var_dump($name);
?>
