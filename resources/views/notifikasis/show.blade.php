@extends('layouts.app')
@section('title')
    Notifikasi Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Notifikasi Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('notifikasis.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('notifikasis.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
