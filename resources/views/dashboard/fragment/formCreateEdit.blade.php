@csrf

<label for="">Title</label>
<input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{ old('slug', $post->slug) }}">

<label for="">Category</label>
<select name="category_id" class="form-control">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}
        </option>
    @endforeach
</select>

<label for="">Posted</label>
<select name="posted" class="form-control">
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">not</option>
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">yes</option>
</select>

<label for="">Content</label>
<textarea name="content" class="form-control">{{ old('content', $post->content) }}</textarea>

<label for="">Description</label>
<textarea name="description" class="form-control">{{ old('description', $post->description) }}</textarea>

@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image">
@endif

<button type="submit" class="btn btn-success my-2">Send</button>
