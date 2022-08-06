<div class="table-responsive">
    <table class="table" id="absensis-table">
        <thead>
            <tr>
                <th>Pkl Id</th>
        <th>Absensi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($absensis as $absensi)
            <tr>
                       <td>{{ $absensi->pkl_id }}</td>
            <td>{{ $absensi->absensi }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['absensis.destroy', $absensi->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('absensis.show', [$absensi->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('absensis.edit', [$absensi->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
