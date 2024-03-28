@extends('admin.layout_admin.dashboard')
@section('view-main')
    <form action="{{ route('admin.product.add_') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Product Type</label>
            <input type="text" class="form-control" id="type" name="type">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="price" name="price">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="sale" class="form-label">Product Sale</label>
            <input type="text" class="form-control" id="sale" name="sale">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Product Image</label>
            <input type="text" class="form-control" id="img" name="img">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="description" name="description">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
