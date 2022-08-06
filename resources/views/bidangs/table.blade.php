<div class="table-responsive">
    <table class="table" id="bidangs-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bidangs as $bidang)
            <tr>
                       <td>{{ $bidang->name }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bidangs.destroy', $bidang->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bidangs.show', [$bidang->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bidangs.edit', [$bidang->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
