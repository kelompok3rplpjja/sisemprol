<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title"
           value="{{ isset($jadwal->title) ? $jadwal->title : ''}}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category' }}</label>
    <select name="category_id" class="form-control" id="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ (isset($jadwal->category_id) && $jadwal->category_id == $category->id) ? 'selected' : ''}}>{{ $category->name }}</option>
        @endforeach
    </select>
    {!! $errors->first('published', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="control-label">{{ 'Body' }}</label>
    <textarea class="form-control" rows="5" name="body" type="textarea"
              id="body">{{ isset($jadwal->body) ? $jadwal->body : ''}}</textarea>
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">

    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

        <div class="fileinput-new thumbnail">
            <img src="@if(isset($jadwal->image)) {{Illuminate\Support\Facades\Storage::url($jadwal->image)}} @else {{asset('img/placeholder.jpg')}} @endif" alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
        <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="image" id="image" value="{{ isset($jadwal->image) ? $jadwal->image : ''}}"/>
        </span>
            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
                        class="fa fa-times"></i> Remove</a>
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <select name="type" class="form-control" id="type">
        @foreach (json_decode('{"standard": "Standard", "video-post": "Video Post", "video-upload": "Video Upload", "photo-upload":"Photo Upload" }', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($jadwal->type) && $jadwal->type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('published') ? 'has-error' : ''}}">
    <label for="published" class="control-label">{{ 'Published' }}</label>
    <select name="published" class="form-control" id="published">
        @foreach (json_decode('{"1": "Publish","0":"Unpublished"}', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}" {{ (isset($jadwal->published) && $jadwal->published == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('published', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
