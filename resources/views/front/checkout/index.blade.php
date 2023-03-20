@extends('front.layouts.master')

@section('style')
@endsection

@section('content')

        <h2 class="mt-5"><i class="fa  fa-credit-card-alt"></i> Checkout</h2>
        <hr>

        <div class="row">

            <div class="col-md-7">

                @if (session()->has('msg'))
                    <div class="alert alert-success">
                        {{ session()->get('msg') }}
                    </div>
                @endif

                <h4>Billing Details</h4>

                <form method="post" id="payment-form" action="{{ route('checkout') }}">

                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="postal">Postal</label>
                            <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                    </div>
                    <hr>
                    <h5><i class="fa fa-credit-card"></i> Payment Details</h5>

                    <div class="form-group">
                        <label for="name_card">Name on card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" placeholder="Name on card">
                    </div>

                    <div class="form-group">
                        <label for="card">Credit or debit card</label>
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <button type="submit" class="btn btn-outline-info col-md-12">Complete Order</button>
                </form>

            </div>

            <div class="col-md-5">

                <h4>Your Order</h4>

                <table class="table your-order-table">
                    <tr>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Qty</th>
                    </tr>

                    @foreach (Cart::instance('default')->content() as $item )
                    <tr>
                        <td><img src="{{ url('/uploads') . '/'. $item->model->image }}" alt="" style="width: 4em"></td>
                        <td>
                            <strong>{{ $item->model->name }}</strong><br>
                            {{ $item->model->description }} <br>
                            <span class="text-dark">${{ $item->total() }}</span>
                        </td>
                        <td>
                            <span class="badge badge-light">{{ $item->qty }}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <hr>
                <table class="table your-order-table table-bordered">
                    <tr>
                        <th colspan="2">Price Details</th>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>${{ Cart::subtotal() }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>${{ Cart::tax() }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>${{ Cart::total() }}</th>
                    </tr>

                </table>

            </div>
        </div>

    <div class="mt-5"><hr></div>

@endsection

@section('script')
    
@endsection