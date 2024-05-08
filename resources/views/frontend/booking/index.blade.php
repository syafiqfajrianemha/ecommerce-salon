@extends('layouts.frontend')
@section('title', 'Services')
@push('style')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@endpush
@section('content')
    <div class="section-title-furits text-center">
        <h2>BOOKING SERVICE</h2>
    </div>
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="obtainedName">Service Name</label>
                                    @foreach ($service->obtaineds as $obtained)
                                        <input type="text" hidden class="form-control" id="obtainedName" name="service_name" value="{{ $obtained->name }}" readonly>
                                        <input type="text" class="form-control" id="obtainedName" value="{{ $obtained->name }}" readonly disabled>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="servicePrice">Service Price</label>
                                    <input type="text" hidden class="form-control" id="servicePrice" name="price" value="{{ $service->price }}" readonly>
                                    <input type="text" class="form-control" id="servicePrice" value="IDR. {{ number_format($service->price, 0, '.', '.') }}" readonly disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <h4 class="mt-2">Category : {{ $service->name }}</h4>
                            <input type="text" hidden class="form-control" id="obtainedName" name="category" value="{{ $service->name }}" readonly>
                            {{-- <label class="d-block m-0">Category : Basic</label> --}}
                            {{-- @foreach ($service->obtaineds as $obtained)
                                <li class="badge badge-primary"><i class="fas fa-check mr-2"></i>{{ $obtained->name }}</li>
                            @endforeach --}}
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="handphone">WhatsApp</label>
                                    <input type="text" class="form-control" name="handphone" id="handphone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control" name="date" id="date" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" class="form-control" name="time" id="time" required>
                                </div>
                            </div>
                        </div>
                        <h4>Payment</h4>
                        <div class="ship-different-title">
                            <h5>
                                <input id="cash" type="checkbox" name="cash"/>
                                <label for="cash">Cash</label>
                            </h5>
                            <h5>
                                <input id="cashless" type="checkbox" name="cashless"/>
                                <label for="cashless">Cashless</label>
                            </h5>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Next<i class="ml-2 fa-solid fa-circle-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
