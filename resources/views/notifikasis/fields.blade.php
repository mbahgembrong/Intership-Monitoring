<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::select('user', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Foreign Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foreign_id', 'Foreign Id:') !!}
    {!! Form::select('foreign_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('notifikasis.index') }}" class="btn btn-light">Cancel</a>
</div>
