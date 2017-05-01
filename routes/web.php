<?php
//Left off on Layouts & Structure Binding video ep 10  video


Route::get( '/tasks', 'TasksController@index' );
Route::get( '/tasks/{tasks}', 'TasksController@show' );


// Will fetch all tasks
// Route::get('/tasks', function () {

// 	// $tasks = DB::table( 'tasks' )->get();

// 	$tasks = App\Task::all();


 
//     return view('tasks.index', compact( 'tasks' ) );
// });


// Route::get('/tasks/{task}', function ( $id ) {


// 	// $task = DB::table( 'tasks' )->find( $id );
// 	$task = Task::find( $id );

//     return view( 'tasks.show', compact( 'task' ) );
// });


Route::get('/', function() {
	return view('welcome');
});

Route::get('about', function() {
	return view('about');
});