@extends('layouts.master')

@section('editable_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-5 text-center">
                    <h4>@lang('corals-ecommerce-mimity::labels.redirect_label',compact('gatewayName'))</h4>
                    {!! $paymentRedirectContent !!}
                </div>
            </div>
        </div>
    </div>
@endsection
