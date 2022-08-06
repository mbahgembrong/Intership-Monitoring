@extends('layouts.app')
@section('title')
    Pkls 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pkls</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('pkls.create')}}" class="btn btn-primary form-btn">Pkl <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('pkls.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

