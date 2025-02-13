<h1>{{$task->title}}</h1>
<h2>{{$task->description}}</h2>
<p>{{$task->long_description}}</p>
<p>{{ $task->completed ? 'Completed ✅' : 'Not Completed' }}</p>
