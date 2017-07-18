<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Route::get('eg', function () {
    return view ('greeting');
});

Route::get('viewcreated', function () {
    return view ('headingcalculator');
});
/*
what's wrong with this comparing with the example in the Routing content text.
What am I doing wron with the 'return view' function
*/
Route::get('hello', function ()  {
	return "This is my Home";
});
// Route::controller('collection','CollectionController');

Route::get('MakeAString', function() {
    return 'This is My Home';
});



Route::get('AddStrings', function() {
	$a = 'My name is';
	$b =  $a . ' Mish';
    return $b;
});
Route::get('Concatenated', function() {
    return 'My name is'. ' Mish';
});
// 2 ways to locate Strings
Route::get('characterlocate', function() {
	$string = 'Making a string to locate';
    return $string[5];
});
Route::get('characterlocate1', function() {
	$string = 'Making a string to locate';
	$result = substr($string, 4,0);
    return $result;

});
Route::get('characterlocatereminder', function() {  // $result is a variable, it can be written even $rt or whatever. Just the syntax structure seem to matter here
	$string = 'Making a string to locate';
	$rt = substr($string, 4,-2);
    return $rt;
});
Route::get('calculation', function() {
	$x = 450 + 360;
	$y = $x * 425;
    return $y;
});
Route::get('multiply/{number}', function ($number) {
    return $number * 1000;
});

Route::get('firstcontroller', 'FirstController@calculate');
Route::get('trialcontroller', 'TrialController@Trial2');
// Route::get('user/profile', ['as' => 'profile', function()

// }]);
// Route::get('SL', function() {
//     return strlen('Hello World');
// });


// Route::get('SL', function() {
//     return strlen('Hello World');
// });
// Route::get('Find', function () {
// 	$string = 'This is my Home';
//     echo $string [5]);
// }); 
Route::get('throughurl/{number}/{number2}', function ($numpassed , $number2){
    return $numpassed + $number2;
});
Route::get('Sent2controller/{numberB}/{numberX}', 'Sent2controller@addcalculate');

// Views 

Route::get('calcuinv', function () {
    return view ('v_assignment');
});
//-------------------------TReehouse-------------------------
// Route is a class
//Get is a (http) method  
//View is a class just as route is   

Route::get('/', function ()
 {
    return "Hello World";
});
