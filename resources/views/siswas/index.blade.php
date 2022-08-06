@extends('layouts.app')
@section('title')
    Siswas 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Siswas</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('siswas.create')}}" class="btn btn-primary form-btn">Siswa <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('siswas.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

