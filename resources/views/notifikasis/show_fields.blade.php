<!-- User Field -->
<div class="form-group">
    {!! Form::label('user', 'User:') !!}
    <p>{{ $notifikasi->user }}</p>
</div>

<!-- Foreign Id Field -->
<div class="form-group">
    {!! Form::label('foreign_id', 'Foreign Id:') !!}
    <p>{{ $notifikasi->foreign_id }}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $notifikasi->keterangan }}</p>
</div>

