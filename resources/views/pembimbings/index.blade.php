@extends('layouts.app')
@section('title')
    Pembimbings 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pembimbings</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('pembimbings.create')}}" class="btn btn-primary form-btn">Pembimbing <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('pembimbings.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

