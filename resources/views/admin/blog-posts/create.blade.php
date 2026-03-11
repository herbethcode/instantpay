@extends('admin.layout')

@section('page-title', 'Create Blog Post')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create New Blog Post</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Excerpt (Optional)</label>
                        <textarea name="excerpt" rows="2" class="form-control">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" rows="15" class="form-control" required>{{ old('content') }}</textarea>
                        @error('content')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Featured Image URL (Optional)</label>
                        <input type="url" name="featured_image" value="{{ old('featured_image') }}" class="form-control">
                        @error('featured_image')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Upload Multiple Images</label>
                        <input type="file" name="images[]" class="form-control" multiple accept="image/*" id="imageInput">
                        <small class="text-muted">You can select multiple images (JPEG, PNG, JPG, GIF, WebP - Max 2MB each)</small>
                        @error('images.*')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                        
                        <div id="imagePreviewContainer" class="mt-3"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Create Post</button>
                        <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('imageInput').addEventListener('change', function(e) {
    const container = document.getElementById('imagePreviewContainer');
    container.innerHTML = '';
    
    Array.from(e.target.files).forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const div = document.createElement('div');
            div.className = 'card mb-2';
            div.innerHTML = `
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="${e.target.result}" alt="Preview" class="img-fluid rounded" style="max-height: 100px;">
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="captions[]" class="form-control form-control-sm" placeholder="Image caption (optional)">
                            <small class="text-muted">${file.name}</small>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(div);
        }
        reader.readAsDataURL(file);
    });
});
</script>
@endsection
