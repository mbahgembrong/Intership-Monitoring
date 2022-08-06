<div class="table-responsive">
    <table class="table" id="pkls-table">
        <thead>
            <tr>
                <th>Siswa Id</th>
        <th>Staff Id</th>
        <th>Bidang Id</th>
        <th>Pembimbing Id</th>
        <th>Instansi Id</th>
        <th>Status</th>
        <th>Waktu Mulai</th>
        <th>Waktu Selesai</th>
        <th>Id Sertifikat</th>
        <th>Keterangan</th>
        <th>No Induk</th>
        <th>Semester</th>
        <th>Jurusan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pkls as $pkl)
            <tr>
                       <td>{{ $pkl->siswa_id }}</td>
            <td>{{ $pkl->staff_id }}</td>
            <td>{{ $pkl->bidang_id }}</td>
            <td>{{ $pkl->pembimbing_id }}</td>
            <td>{{ $pkl->instansi_id }}</td>
            <td>{{ $pkl->status }}</td>
            <td>{{ $pkl->waktu_mulai }}</td>
            <td>{{ $pkl->waktu_selesai }}</td>
            <td>{{ $pkl->id_sertifikat }}</td>
            <td>{{ $pkl->keterangan }}</td>
            <td>{{ $pkl->no_induk }}</td>
            <td>{{ $pkl->semester }}</td>
            <td>{{ $pkl->jurusan }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['pkls.destroy', $pkl->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('pkls.show', [$pkl->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('pkls.edit', [$pkl->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
