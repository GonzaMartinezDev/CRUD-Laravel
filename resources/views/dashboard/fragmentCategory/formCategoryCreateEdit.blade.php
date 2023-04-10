<label for="title">Title:</label>
<input type="text" name='title' value="{{ $category->title }}" class="form-control">

<label for="slug">Slug:</label>
<input type="text" name='slug' value="{{ $category->slug }}" class="form-control">

<button type="submit" class="btn btn-success my-2">Send</button>
