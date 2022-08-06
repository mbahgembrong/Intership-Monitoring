@extends('layouts.app')
@section('title')
    Notifikasis 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Notifikasis</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('notifikasis.create')}}" class="btn btn-primary form-btn">Notifikasi <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('notifikasis.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

