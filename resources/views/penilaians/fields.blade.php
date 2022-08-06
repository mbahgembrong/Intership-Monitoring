<!-- Pkl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pkl_id', 'Pkl Id:') !!}
    {!! Form::select('pkl_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Kerajinan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kerajinan', 'Kerajinan:') !!}
    {!! Form::number('kerajinan', null, ['class' => 'form-control']) !!}
</div>

<!-- Kejujuran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kejujuran', 'Kejujuran:') !!}
    {!! Form::number('kejujuran', null, ['class' => 'form-control']) !!}
</div>

<!-- Kedisiplinan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kedisiplinan', 'Kedisiplinan:') !!}
    {!! Form::number('kedisiplinan', null, ['class' => 'form-control']) !!}
</div>

<!-- Kerjasama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kerjasama', 'Kerjasama:') !!}
    {!! Form::number('kerjasama', null, ['class' => 'form-control']) !!}
</div>

<!-- Inisiatif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inisiatif', 'Inisiatif:') !!}
    {!! Form::number('inisiatif', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggung Jawab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggung_jawab', 'Tanggung Jawab:') !!}
    {!! Form::number('tanggung_jawab', null, ['class' => 'form-control']) !!}
</div>

<!-- Etika Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etika', 'Etika:') !!}
    {!! Form::number('etika', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('penilaians.index') }}" class="btn btn-light">Cancel</a>
</div>
