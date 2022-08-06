<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telp', 'Telp:') !!}
    {!! Form::text('telp', null, ['class' => 'form-control','maxlength' => 15]) !!}
</div>

<!-- Pendidikan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pendidikan', 'Pendidikan:') !!}
    {!! Form::select('pendidikan', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('instansis.index') }}" class="btn btn-light">Cancel</a>
</div>
