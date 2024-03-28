@extends('admin.layout_admin.dashboard')
@section('view-main')
    <form action="{{ route('admin.product.update', ['id' => $data[0]->id_product]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" placeholder="Marshall ..." id="name" value="{{ $data[0]->name }}" name="name">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Product Type</label>
            <select class="form-select" name="type" aria-label="Default select example">
                @foreach ($cate_sub as $item)
                    <option value="{{ $item->id_type_sub }}" {{ $item->id_type_sub == $data[0]->id_type_sub ? 'selected' : '' }}>{{ $item->name_type_sub }}</option>
                @endforeach
            </select>
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="price" placeholder="1.000" value="{{ $data[0]->price }}" name="price">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="sale" class="form-label">Product Sale</label>
            <input type="text" class="form-control" id="sale" placeholder="10%" value="{{ $data[0]->sale }}" name="sale">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="img" name="img">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="description" value="{{ $data[0]->description }}" name="description">
            {{-- <div class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
