<div class="table-responsive">
    <table class="table" id="penilaians-table">
        <thead>
            <tr>
                <th>Pkl Id</th>
        <th>Kerajinan</th>
        <th>Kejujuran</th>
        <th>Kedisiplinan</th>
        <th>Kerjasama</th>
        <th>Inisiatif</th>
        <th>Tanggung Jawab</th>
        <th>Etika</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($penilaians as $penilaian)
            <tr>
                       <td>{{ $penilaian->pkl_id }}</td>
            <td>{{ $penilaian->kerajinan }}</td>
            <td>{{ $penilaian->kejujuran }}</td>
            <td>{{ $penilaian->kedisiplinan }}</td>
            <td>{{ $penilaian->kerjasama }}</td>
            <td>{{ $penilaian->inisiatif }}</td>
            <td>{{ $penilaian->tanggung_jawab }}</td>
            <td>{{ $penilaian->etika }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['penilaians.destroy', $penilaian->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('penilaians.show', [$penilaian->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('penilaians.edit', [$penilaian->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
