@extends('admin.layout')

@section('page-title', 'Add Job Opening')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Add Job Opening</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.careers.store') }}" method="POST">
                    @csrf
                    @include('admin.careers._form')

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Create Job Opening</button>
                        <a href="{{ route('admin.careers.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
