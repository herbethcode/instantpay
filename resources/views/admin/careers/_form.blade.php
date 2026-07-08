@php
    $career = $career ?? null;
@endphp

<div class="mb-3">
    <label class="form-label">Job Title</label>
    <input type="text" name="title" value="{{ old('title', $career->title ?? '') }}" class="form-control" required>
    @error('title')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Department</label>
        <input type="text" name="department" value="{{ old('department', $career->department ?? '') }}" class="form-control" required>
        @error('department')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Type</label>
        <select name="type" class="form-select" required>
            @foreach(['Full-time', 'Part-time', 'Contract', 'Internship'] as $type)
                <option value="{{ $type }}" {{ old('type', $career->type ?? 'Full-time') === $type ? 'selected' : '' }}>{{ $type }}</option>
            @endforeach
        </select>
        @error('type')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Location</label>
    <input type="text" name="location" value="{{ old('location', $career->location ?? 'Dar es Salaam, Tanzania') }}" class="form-control" required>
    @error('location')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" rows="4" class="form-control" required>{{ old('description', $career->description ?? '') }}</textarea>
    @error('description')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Display Order</label>
        <input type="number" name="order" value="{{ old('order', $career->order ?? 0) }}" class="form-control">
        <small class="text-muted">Lower numbers show first.</small>
    </div>
    <div class="col-md-6 mb-3 d-flex align-items-center">
        <div class="form-check mt-4">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
                   {{ old('is_active', $career->is_active ?? true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Visible on the public Careers page</label>
        </div>
    </div>
</div>
