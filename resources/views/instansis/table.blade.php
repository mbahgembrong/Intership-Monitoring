<div class="table-responsive">
    <table class="table" id="instansis-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Pendidikan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($instansis as $instansi)
            <tr>
                       <td>{{ $instansi->nama }}</td>
            <td>{{ $instansi->alamat }}</td>
            <td>{{ $instansi->telp }}</td>
            <td>{{ $instansi->pendidikan }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['instansis.destroy', $instansi->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('instansis.show', [$instansi->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('instansis.edit', [$instansi->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
