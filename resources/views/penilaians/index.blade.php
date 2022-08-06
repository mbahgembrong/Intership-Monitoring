@extends('layouts.app')
@section('title')
    Penilaians 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Penilaians</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('penilaians.create')}}" class="btn btn-primary form-btn">Penilaian <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('penilaians.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

