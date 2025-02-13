Lets create a new project

<h2>Add new Task</h2>

<form method="POST" action="{{route('tasks.store')}}">
@csrf
<div>
    <label for="title">
        Title
    </label>
    <input text="text" name="title" id="title"/>
</div>

<div>
    <label for="description">
        Title
    </label>
    <textarea name="description" id="description" rows="5"></textarea>
</div>

<div>
    <label for="long_description">
        Title
    </label>
    <textarea name="long_description" id="long_description" rows="10"></textarea>
</div>
<div>
    <button type="submit">Add task </button>
</div>
</form>