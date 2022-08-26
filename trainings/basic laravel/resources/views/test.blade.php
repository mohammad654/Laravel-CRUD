

@extends('layout')
@section('title', 'test')


<h1 @class('text-center py-4 bg-danger')>Walk as if you are kissing the Earth with your feet</h1>


@section('content')
    <div class="container">
        <h3>Barcode Generator Laravel 8 Tutorial</h3>
        <hr/>
        <div class="row">
            <div class="col-md-8">
                <div>{!! DNS1D::getBarcodeHTML('444233423656', 'C39') !!}</div><br />
                <div>{!! DNS1D::getBarcodeHTML('4445645656', 'POSTNET') !!}</div><br />
                <div>{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div><br />
                <div>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div><br />
            </div>
        </div>
    </div>
@endsection()
