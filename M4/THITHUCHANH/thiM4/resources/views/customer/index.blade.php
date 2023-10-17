<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #4CAF50;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-danger {
            background-color: #f44336;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h2>Chi tiêu cá nhân</h2>
    <a href="{{ route('customer.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Thêm chi tiêu
    </a><br><br>

    <table>
        <tr>
            <th>STT</th>
            <th>Danh mục chi tiêu</th>
            <th>Ngày chi tiêu</th>
            <th>Số tiền</th>
            <th>Ghi chú</th>
            <th>Tùy chỉnh</th>
        </tr>
        @php
        $total = 0;
        @endphp
        @foreach ($customers as $key => $customer)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $customer->list }}</td>
            <td>{{ $customer->date_time }}</td>
            <td>{{ number_format($customer->price) }} VND </td>
            <td>{{ $customer->note }}</td>
            <td>
                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</button>
                </form>
            </td>
        </tr>
        @php
        $total += floatval(str_replace(',', '.', $customer->price));
        @endphp
        @endforeach
        <tr>
            <th colspan="3" class="text-right"><strong><em>Tổng tiền đã chi tiêu:</em></strong></th>
            <td><strong><em>{{ str_replace(',', '.', number_format(floatval($total))) . ' VND' }}</em></strong></td>

        </tr>
    </table>
    <div class="card-footer">
        <nav class="float-right">
            {{ $customers->appends(request()->query())->links('pagination::bootstrap-4') }}
        </nav>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.1/dist/sweetalert2.min.js"></script>
    @if (session('successMessage'))
    <script>
        Swal.fire({
            title: "<h6>{{ session('successMessage') }}</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>
    @elseif(session('successMessage1'))
    <script>
        Swal.fire({
            title: "<h6>{{ session('successMessage1') }}</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>
    @elseif(session('successMessage2'))
    <script>
        Swal.fire({
            title: "<h6>{{ session('successMessage2') }}</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>
    @endif


</body>

</html>