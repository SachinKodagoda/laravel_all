@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" autocomplete="off" value="{{ old('title') ?? $post->title }}">
    <div class="error_message">
        @error('title') {{ $message }} @enderror
    </div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" rows="3" id="description_editor">
                    {!! old('description') ?? $post->description !!}
                </textarea>
    <div class="error_message">
        @error('description') {{ $message }} @enderror
    </div>
</div>

