
<h1>Liệt kê nhân viên</h1>
<a href="{{ route('user.create') }}" class="btn btn-primary">THÊM MỚI</a><br></br>
<form action="{{ route('user.index') }}" method="GET">
    <input type="text" name="keyword" placeholder="Nhập tên..." style="float:right">
    <button type="submit" style="float:right">Tìm kiếm</button> <br> <br>
</form>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Ảnh</th>
            <th>Email</th>
            <th>Password</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $user->name }}</td>
            <td><img width="90px" height="90px" src="{{ asset($user->image) }}" alt=""></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm">Xem</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- phan trang -->
<div class="card-footer">
    <nav class="float-right">
        {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
    </nav>
</div>

<style>
   
    h1 {
        text-align: center;
    }

    .btn {
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        border: 1px solid #dee2e6;
        padding: 8px;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #e8e8e8;
    }

    .pagination-container {
        text-align: center;
        margin-top: 20px;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
    }
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    }
    .pagination .page-item {
    display: inline-block;
    margin-right: 5px;
    }
    .pagination .page-link {
    padding: 5px 10px;
    border: 1px solid #ddd;
    background-color: #fff;
    color: #333;
    }
    .pagination .page-link:hover {
    background-color: #f5f5f5;
    }
    .pagination .page-item.active .page-link {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
    }
    .pagination .page-item.disabled .page-link {
    opacity: 0.5;
    pointer-events: none;
    }
</style>
