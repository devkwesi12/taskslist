<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index',[
        'tasks'=>\App\Models\Task::latest()->get(),
    ]);
});

Route::get('hello',function(){
return('My room');
});

Route::get('greet/{name}',function($name){
return 'Hello' . ' ' .$name;
});

Route::view('tasks/create','create')->name('tasks.create');



Route::get('tasks/{id}',function($id){
    return view('show',['task   dx'=>\App\Models\Task::findOrFail($id)]);

})->name('tasks.show');

Route::post('/tasks',function(){
    dd('You have reached the store toute');
});
