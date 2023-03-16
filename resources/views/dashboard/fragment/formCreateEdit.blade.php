@csrf

<label for="">Title</label>
<input type="text" name="title" value="{{ old('title', $post->title) }}">

<label for="">Slug</label>
<input type="text" name="slug" value="{{ old('slug', $post->slug) }}">

<label for="">Category</label>
<select name="category_id">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}
        </option>
    @endforeach
</select>

<label for="">Posted</label>
<select name="posted">
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">not</option>
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">yes</option>
</select>

<label for="">Content</label>
<textarea name="content">{{ old('content', $post->content) }}</textarea>

<label for="">Description</label>
<textarea name="description">{{ old('description', $post->description) }}</textarea>

<button type="submit">Send</button>
