@extends('admin.layout')

@section('page-title', 'Edit Job Opening')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Job Opening</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.careers.update', $career) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.careers._form', ['career' => $career])

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="{{ route('admin.careers.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
