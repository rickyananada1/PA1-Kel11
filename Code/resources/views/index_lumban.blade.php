@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>

                  
                    <div class="card-body m-auto">
                        @foreach ($orders as $order)
                            <div class="card mb-2" style="width: 30rem;">
                                <div class="card-body">
                                    <a href="{{ route('show_order', $order) }}">
                                        <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                    </a>
                                    <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>

                                    @if ($order->is_paid == true)
                                        <p class="card-text">Paid</p>
                                    @else
                                        <p class="card-text">Unpaid</p>
                                        @if ($order->payment_receipt)
                                            <div class="d-flex flew-row justify-content-around">
                                                <a href="{{ url('storage/' . $order->payment_receipt) }} "
                                                    class="btn btn-primary">Show payment
                                                    receipt</a>
                                                @if (Auth::user()->is_admin)
                                                    <form action="{{ route('confirm_payment', $order) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-success" type="submit">Confirm</button>
                                                    </form>
                                                @endif
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
@endsection
