@extends('layouts.frontend')
@section('title', 'Services')
@push('style')
    <style>
        .gj-icon.clock {
            display: none;
        }
    </style>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                                    <label for="datepicker">Date</label>
                                    <input type="text" class="form-control pl-3" name="date" id="datepicker" required autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="timepicker">Time</label>
                                    <input type="text" class="form-control pl-3" name="time" id="timepicker" required autocomplete="off" readonly onfocus="$timepicker.open()">
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
@push('script')
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            $('#datepicker').datepicker({
                showOnFocus: true,
                showRightIcon: false
            });
        });

        var $timepicker = $('#timepicker').timepicker({
            mode: '24hr',
            showRightIcon: false
        });
    </script>
@endpush
