<!-- Siswa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('siswa_id', 'Siswa Id:') !!}
    {!! Form::select('siswa_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Staff Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('staff_id', 'Staff Id:') !!}
    {!! Form::select('staff_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Bidang Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bidang_id', 'Bidang Id:') !!}
    {!! Form::select('bidang_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Pembimbing Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pembimbing_id', 'Pembimbing Id:') !!}
    {!! Form::select('pembimbing_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Instansi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instansi_id', 'Instansi Id:') !!}
    {!! Form::select('instansi_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Waktu Mulai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waktu_mulai', 'Waktu Mulai:') !!}
    {!! Form::text('waktu_mulai', null, ['class' => 'form-control','id'=>'waktu_mulai']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#waktu_mulai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Waktu Selesai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waktu_selesai', 'Waktu Selesai:') !!}
    {!! Form::text('waktu_selesai', null, ['class' => 'form-control','id'=>'waktu_selesai']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#waktu_selesai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Sertifikat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sertifikat', 'Id Sertifikat:') !!}
    {!! Form::text('id_sertifikat', null, ['class' => 'form-control']) !!}
</div>

<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'No Induk:') !!}
    {!! Form::text('no_induk', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester', 'Semester:') !!}
    {!! Form::text('semester', null, ['class' => 'form-control']) !!}
</div>

<!-- Jurusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jurusan', 'Jurusan:') !!}
    {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    {!! Form::file('file') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pkls.index') }}" class="btn btn-light">Cancel</a>
</div>
