
<div class="table-responsive">
    <table class="table">
        <thead>
            <th>SL</th>
            <th>Name</th>
            <th>email</th>
        </thead>
        <tbody>
            @foreach ($data as $key=>$user )
            <tr>
                <td>{{++$key}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data->links() !!}
</div>
