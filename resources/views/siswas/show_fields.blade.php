<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $siswa->nama }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $siswa->phone }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $siswa->alamat }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $siswa->email }}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <p>{{ $siswa->jenis_kelamin }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $siswa->foto }}</p>
</div>

