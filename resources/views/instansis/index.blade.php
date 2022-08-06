@extends('layouts.app')
@section('title')
    Instansis 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Instansis</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('instansis.create')}}" class="btn btn-primary form-btn">Instansi <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('instansis.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

