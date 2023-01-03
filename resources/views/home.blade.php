@extends('template.navbar')
@section('container')

<style>
    body {
        background-color: #ececec;
    }

    .searchbar {
        padding-top: 40px;
    }

    h5 {
        font-size: 15px;
    }

    .card {
        cursor: pointer;
    }
</style>
<div class="searchbar">
    <div class="col-md-12">
        <form action="/search" class="d-flex">
            <input type="search" class="form-control me-2" placeholder="Search" aria-label="search" name="search">
            <button class="btn btn-outline-dark bi bi-search" type="submit"></button>
        </form>
    </div>
</div>
<!-- break -->
<br>
@foreach ($categories as $category)
<div class="card col-md-12">
    <div class="card-header">
        {{$category->name}} <a href="/category/{{$category->id}}">View All</a>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <!-- produk -->

            @foreach ($category->product as $product)
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
<br>
@endforeach


</li>
</ul>
</div>

@endsection