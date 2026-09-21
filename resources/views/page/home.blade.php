@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                        <div class="card-body justify-content px-4">
                            <h3>Selamat Datang Dihalaman Home</h3>
                            <a class="btn btn-success" href="{{ url('/mahasiswa')}}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection