@extends('layouts.app')

@section('content')
    @include('partials.alerts')

    <div class="row">
        <div class="col-md-12 mb-3 ">
            <form action="{{ route('presences.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari berdasarkan title atau deskripsi"
                        name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i>
                        Cari</button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <ul class="list-group">
                @foreach ($attendances as $attendance)
                    <a href="{{ route('presences.show', $attendance->id) }}"
                        class="list-group-item d-flex justify-content-between align-items-start py-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">{{ $attendance->title }}</div>
                            <p class="mb-0">{{ $attendance->description }}</p>
                        </div>
                        @include('partials.attendance-badges')
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
