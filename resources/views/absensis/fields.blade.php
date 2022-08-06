<!-- Pkl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pkl_id', 'Pkl Id:') !!}
    {!! Form::select('pkl_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Absensi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('absensi', 'Absensi:') !!}
    {!! Form::select('absensi', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('absensis.index') }}" class="btn btn-light">Cancel</a>
</div>
