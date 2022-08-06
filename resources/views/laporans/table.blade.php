<div class="table-responsive">
    <table class="table" id="laporans-table">
        <thead>
            <tr>
                <th>Pkl Id</th>
        <th>Laporan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laporans as $laporan)
            <tr>
                       <td>{{ $laporan->pkl_id }}</td>
            <td>{{ $laporan->laporan }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['laporans.destroy', $laporan->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('laporans.show', [$laporan->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('laporans.edit', [$laporan->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
