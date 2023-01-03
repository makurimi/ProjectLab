@extends('template.navbar')
@section('container')

<style>
    body {
        background-color: #ececec;
    }

    .card {
        cursor: pointer;
    }

    h5 {
        font-size: 15px;
    }
</style>
<br>
<div class="card col-md-12">
    <div class="card-header" style="font-weight: bold; font-size: x-large;">
        {{$categoryName}}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <!-- produk -->
            @foreach ($products as $product)
            <div class="col-md-2 mb-3">
                <div class="card" class="btn btn-outline-dark">
                    <div href="/" class="card-body text-left">
                        <img src="{{ asset('product/' . $product->image) }}" style="max-height:150px" class="img-fluid ">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>{{$product->name}}</h5>
                                <h5><strong>{{'Rp. ' . $product->price}}</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- biar card nambah -->
            <div class="row">
                <div class="col">

                </div>
            </div>
</div>


@endsection