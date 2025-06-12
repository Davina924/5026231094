@extends('template')

@section('content')

    <!-- Latihan 1 content -->
    <h3 class="mb-3" style="font-weight: bold;">Latihan 1 - Page Counter</h3>

    <!-- Page Counter -->
    <div class="alert alert-success mb-4">
        Anda Pengunjung ke : <strong> {{ $hitungPengunjung }} </strong>
    </div>


@endsection

