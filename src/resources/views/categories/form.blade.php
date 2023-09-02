<div class="form-group">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control"
        value="{{ isset($category->title) ? $category->title : old('title') }}" placeholder="Title..." />
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" id="description" class="form-control"
        value="{{ isset($category->description) ? $category->description : old('description') }}"
        placeholder="Description..." />
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
