@extends('admin.layout')

@section('page-title', 'Edit Blog Post')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <!-- Existing Images Management (Separate from Update Form) -->
        @if($blogPost->images->count() > 0)
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Existing Images</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    @foreach($blogPost->images as $image)
                    <div class="col-md-6">
                        <div class="card {{ $image->is_active ? 'border-success' : 'border-secondary' }}">
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="{{ $image->caption }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text small mb-2">
                                    <strong>Caption:</strong> {{ $image->caption ?? 'No caption' }}
                                </p>
                                <div class="d-flex gap-2">
                                    <form action="{{ route('admin.post-images.toggle', $image) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm {{ $image->is_active ? 'btn-warning' : 'btn-success' }}">
                                            <i class="fas fa-{{ $image->is_active ? 'eye-slash' : 'eye' }}"></i>
                                            {{ $image->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.post-images.destroy', $image) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this image?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                                <span class="badge {{ $image->is_active ? 'bg-success' : 'bg-secondary' }} mt-2">
                                    {{ $image->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Blog Post Update Form -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Blog Post</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title', $blogPost->title) }}" class="form-control" required>
                        @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Excerpt (Optional)</label>
                        <textarea name="excerpt" rows="2" class="form-control">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
                        @error('excerpt')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" rows="15" class="form-control" required>{{ old('content', $blogPost->content) }}</textarea>
                        @error('content')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Featured Image URL (Optional)</label>
                        <input type="url" name="featured_image" value="{{ old('featured_image', $blogPost->featured_image) }}" class="form-control">
                        @error('featured_image')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Add More Images</label>
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
                            <option value="draft" {{ old('status', $blogPost->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $blogPost->status) === 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Post
                        </button>
                        <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
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
