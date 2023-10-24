@extends('backoffice.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Category</h1>

    <form method="POST" action="{{ route('admin.categoryevent.categoryevent.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>
@endsection
