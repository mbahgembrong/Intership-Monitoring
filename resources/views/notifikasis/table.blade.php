<div class="table-responsive">
    <table class="table" id="notifikasis-table">
        <thead>
            <tr>
                <th>User</th>
        <th>Foreign Id</th>
        <th>Keterangan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notifikasis as $notifikasi)
            <tr>
                       <td>{{ $notifikasi->user }}</td>
            <td>{{ $notifikasi->foreign_id }}</td>
            <td>{{ $notifikasi->keterangan }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['notifikasis.destroy', $notifikasi->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('notifikasis.show', [$notifikasi->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('notifikasis.edit', [$notifikasi->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
