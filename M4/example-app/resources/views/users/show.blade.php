<table class="table" border="1">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class='w-5'>ID</th>
            <th scope="col">NAME</th>
            <th scope="col">Ảnh</th>
            <th scope="col">EMAIL</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td><img width="90px" height="90px" src="{{ asset($user->image) }}" alt=""></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
    </tbody>
</table>
<style>
    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
    }

    .table thead {
        background-color: #DDDDDD;
        color: #000000;
    }

    .table th {
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
