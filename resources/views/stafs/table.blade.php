<div class="table-responsive">
    <table class="table" id="stafs-table">
        <thead>
            <tr>
                <th>Role Id</th>
        <th>Bidang Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Phone</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stafs as $staf)
            <tr>
                       <td>{{ $staf->role_id }}</td>
            <td>{{ $staf->bidang_id }}</td>
            <td>{{ $staf->nama }}</td>
            <td>{{ $staf->alamat }}</td>
            <td>{{ $staf->phone }}</td>
            <td>{{ $staf->email }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['stafs.destroy', $staf->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('stafs.show', [$staf->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('stafs.edit', [$staf->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
