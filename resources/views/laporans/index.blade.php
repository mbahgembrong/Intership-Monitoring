@extends('layouts.app')
@section('title')
    Laporans 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Laporans</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('laporans.create')}}" class="btn btn-primary form-btn">Laporan <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('laporans.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

