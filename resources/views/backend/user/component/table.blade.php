<table class="table table-bordered">
    <thead>
        <tr>
            <th><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>
            <th>Ảnh</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users))
        @foreach($users as $user)
        <tr>
            <td><input type="checkbox" value="" id="checkAll" class="input-checkbox-checkBoxItem"></td>
            <td><span class="image img-cover"><img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt=""></span></td>
            <td>{{ $user -> name }}</td>
            <td>{{ $user -> email }}</td>
            <td>{{ $user -> phone }}</td>
            <td>{{ $user -> address }}</td>
            <td class="text-center"><input type="checkbox" class="js-switch" checked /></td>
            <td class="text-center">
                <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>