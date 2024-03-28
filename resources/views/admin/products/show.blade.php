<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table th,
        table td {
            padding: 1.25rem .75rem;
        }

        .rating {
            float: left;
        }

        .rating:not(:checked)>input {
            position: absolute;
            appearance: none;
        }

        .rating:not(:checked)>label {
            float: right;
            cursor: pointer;
            font-size: 20px;
            color: #666;
        }

        .rating:not(:checked)>label:before {
            content: '★';
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        .rating>label:hover~input:checked~label {
            color: #e58e09;
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #ff9e0b;
        }

        .rating>input:checked~label {
            color: #ffa723;
        }

        table {
            border: 1px solid #ddd;
            color: white;
            display: block;
            max-height: 500px;
            overflow-y: scroll;
        }

        tr {
            border-bottom: 1px solid white;
        }

        th {
            max-width: 100%;
        }

        th,
        td {
            text-align: center;
            padding: 20px 0px;
        }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @extends('admin.layout_admin.dashboard')
    @section('view-main')
        <form action="index.php" method="post">
            <h3 class="alert alert-success" style=" background-color: #1087b9; color:white">QUẢN LÝ HÀNG HÓA</h3>
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead class="alert-success" style=" background-color: #1087b9; color:white; text-transform:uppercase">
                    <tr>
                        <th></th>
                        <th>Product ID</th>
                        <th>Product Type</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Sale</th>
                        <th>Product Image</th>
                        <th>Description</th>
                        <th>Product View</th>
                        <th>Created at</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td></td>
                            <th>{{ $item->id_product }}</th>
                            <td>{{ $item->name_type_sub }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ number_format($item->price, 0) }} ₫</td>
                            <td>{{ $item->sale }} %</td>
                            <td><img src="/image/{{ $item->img_main }}" width="100px" alt=""></td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->view }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('admin.product.edit', ['id' => $item->id_product]) }}" class="btn btn-default btn-sm btn btn-primary my-3">Sửa</a>
                                <a href="{{ route('admin.product.delete', ['id' => $item->id_product]) }}"
                                    class="btn-delete btn-danger btn-sm btn" onclick="confirm('Xóa hể ?')">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <button id="check-all" type="button" style="border:1px solid black" class="btn btn-default">Chọn
                            tất cả</button>
                        <button id="clear-all" type="button" style="border:1px solid black" class="btn btn-default">Bỏ chọn
                            tất cả</button>
                        <button id="btn-delete" name="btn-delete" style="border:1px solid black" class="btn btn-default">Xóa
                            các mục chọn</button>
                        <a href="{{ route('admin.product.add') }}" class="btn" style="background-color: #1087b9; color:white">Nhập thêm</a>
                    </td>
                </tr>
            </tfoot>
        </form>
    @endsection
</body>

</html>
