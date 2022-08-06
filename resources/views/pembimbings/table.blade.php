<div class="table-responsive">
    <table class="table" id="pembimbings-table">
        <thead>
            <tr>
                <th>Instansi Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Phone</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pembimbings as $pembimbing)
            <tr>
                       <td>{{ $pembimbing->instansi_id }}</td>
            <td>{{ $pembimbing->nama }}</td>
            <td>{{ $pembimbing->alamat }}</td>
            <td>{{ $pembimbing->phone }}</td>
            <td>{{ $pembimbing->email }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['pembimbings.destroy', $pembimbing->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('pembimbings.show', [$pembimbing->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('pembimbings.edit', [$pembimbing->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
