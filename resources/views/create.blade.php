<html>
    <head>
        <style>
            .error-message{
            color:red;
            font-size: 0, 8rem;
        }
        </style>
    </head>
</html>
@section('styles')


@endsection


<h2>Add new Task</h2>


<form method="POST" action="{{route('tasks.store')}}">
@csrf
<div>
    <label for="title">
        Title
    </label>
    <input text="text" name="title" id="title"/>
    @error('title')
    <p class="error-message">{{$message}}</p>
    @enderror
</div>

<div>
    <label for="description">
        Title
    </label>
    <textarea  name="description" id="description" rows="5"></textarea>
    @error('description')
    <p class="error-message">{{$message}}</p>
    @enderror
</div>

<div>
    <label for="long_description">
        Title
    </label>
    <textarea name="long_description" id="long_description" rows="10"></textarea>
    @error('long_description')
    <p class="error-message">{{$message}}</p>
    @enderror
</div>
<div>
    <button type="submit">Add task </button>
</div>
</form>