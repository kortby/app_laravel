<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($post) ? $post->title : old('title')}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Message</label>
    <textarea name="body" class="form-control @error('body') is-invalid @enderror" cols="30" rows="10">{{ isset($post) ? $post->body  : old('body')}}</textarea>
    @error('body')
        <span class="invalid-feedback small" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Save</button>