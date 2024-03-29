@extends('admin.layout_admin.dashboard')
@section('view-main')
    <form action="{{ route('admin.product.add_') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" placeholder="Marshall ..." id="name" name="name">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Product Type</label>
            <select class="form-select" name="type" aria-label="Default select example">
                @foreach ($data as $item)
                    <option value="{{ $item->id_type_sub }}">{{ $item->name_type_sub }}</option>
                @endforeach
            </select>
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="price" placeholder="1.000" name="price">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="sale" class="form-label">Product Sale</label>
            <input type="text" class="form-control" id="sale" placeholder="10%" name="sale">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="img" name="img">
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
