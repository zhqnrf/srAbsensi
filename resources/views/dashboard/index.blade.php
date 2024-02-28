@extends('layouts.app')

@section('content')
    <div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow" style="background: #e0cc8d">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-user-circle mt-2" style="color: #760712; font-size:50px; "></i>
                            </div>
                            <div class="col-8">
                                <h6 style="color:#760712 " class="fs-6 fw-light">Data Role</h6>
                                <h4 style="color: #760712" class="fw-bold">{{ $positionCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- background: linear-gradient(50deg, #40A6FF, #ff5252);
            style="background: linear-gradient(45deg, #60CE63, #8c6cc4);" --}}
            <div class="col-md-3">
                <div class="card " style="background: #760712;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <i class="fas fa-users mt-2" style="color: #e0cc8d; font-size:50px"></i>
                            </div>
                            <div class="col-8">
                                <h6 style="color: #e0cc8d"class="fs-6 fw-light">Data Mahasantri</h6>
                                <h4 style="color: #e0cc8d" class="fw-bold">{{ $userCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
