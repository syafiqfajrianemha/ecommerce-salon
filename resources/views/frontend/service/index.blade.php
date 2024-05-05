@extends('layouts.frontend')
@section('title', 'Services')
@section('content')
    <div class="section-title-furits text-center">
        <h2>BROWSE OUR SERVICES</h2>
    </div>
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @forelse ($services as $service)
                    <div class="col-lg-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">{{ $service->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">IDR {{ number_format($service->price, 0, '.', '.') }}</h6>
                                <ul>
                                    @foreach ($service->obtaineds as $obtained)
                                        <li><i class="fas fa-check mr-2"></i>{{ $obtained->name }}</li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('service.show', $service->id) }}" class="btn btn-primary mt-2">Book A Visit</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <h4 class="text-danger">Service Empty.</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

