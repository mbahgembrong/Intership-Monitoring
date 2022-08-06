@extends('layouts.app')
@section('title')
    Stafs 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Stafs</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('stafs.create')}}" class="btn btn-primary form-btn">Staf <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('stafs.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

