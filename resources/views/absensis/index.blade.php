@extends('layouts.app')
@section('title')
    Absensis 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Absensis</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('absensis.create')}}" class="btn btn-primary form-btn">Absensi <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('absensis.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

