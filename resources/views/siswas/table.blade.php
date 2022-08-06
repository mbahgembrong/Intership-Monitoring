<div class="table-responsive">
    <table class="table" id="siswas-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Phone</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswa)
            <tr>
                       <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->phone }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->jenis_kelamin }}</td>
            <td>{{ $siswa->foto }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('siswas.show', [$siswa->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('siswas.edit', [$siswa->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
