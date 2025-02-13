<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('show',['task'=>\App\Models\Task::findOrFail($id)]);

})->name('tasks.show');

Route::post('/tasks',function(Request $request){
    //dd($request->all());
    $data = $request->validate([

        'title'=>'required',
        'description'=>'required',
        'long_description'=>'required'

    ]);
    $task = new Task();
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show',['id'=>$task->id])->with('success','Task created succesfully');
})->name('tasks.store');

