@extends('layouts.home')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold text-white" style="background-color: #760712">
                        <i class="fas fa-user me-2"></i> Informasi Mahasantri
                    </div>
                    <div class="card-body">
                        <div class="text-center" style="position: relative;">
                            <img src="{{ asset('assets/Blank.png') }}"
                                style="height: 100px; border-radius: 50%; transition: box-shadow 0.3s;" alt=""
                                id="logoImage">
                            <style>
                                #logoImage:hover {
                                    border: #0000;
                                    box-shadow: 0 0 10px #6666;
                                }
                            </style>
                        </div>
                        <ul class="ps-3">
                            <li class="mb-1">
                                <span class="fw-bold d-block"><i class="fas fa-user-circle me-2"></i> Nama :</span>
                                <span>{{ auth()->user()->name }}</span>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block"><i class="fas fa-envelope me-2"></i> Email :</span>
                                <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block"><i class="fas fa-phone me-2"></i> No. Telp :</span>
                                <a href="tel:{{ auth()->user()->phone }}">{{ auth()->user()->phone }}</a>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block"><i class="far fa-clock me-2"></i> Bergabung Pada :</span>
                                <span>{{ auth()->user()->created_at->diffForHumans() }}
                                    ({{ auth()->user()->created_at->format('d M Y') }})</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card shadow-sm mb-2">
                    <div class="card-header fw-bold" style="background-color:#e0cc8d; color:#760712; ">
                        <i class="fas fa-calendar-check me-2"></i> Daftar Absensi Hari Ini
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($attendances as $attendance)
                                <a href="{{ route('home.show', $attendance->id) }}"
                                    class="list-group-item d-flex justify-content-between align-items-start py-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $attendance->title }}</div>
                                        <p class="mb-0">{{ $attendance->description }}</p>
                                        @include('partials.attendance-badges')
                                    </div>

                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
