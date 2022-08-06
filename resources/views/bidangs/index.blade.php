@extends('layouts.app')
@section('title')
    Bidangs 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bidangs</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bidangs.create')}}" class="btn btn-primary form-btn">Bidang <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('bidangs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

