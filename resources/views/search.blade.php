@extends('template.navbar')
@section('container')

<style>
    body{
        background-color:#ececec;
    }
    .searchbar{
        padding-top: 40px;
    }
    h5{
        font-size: 15px;
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
<div class="card col-md-12">
  <div class="card-header">
    Search Result
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <!-- produk -->
        <div class="col-md-2 mb-3">
                <div class="card" class="btn btn-outline-dark">
                    <div href="/" class="card-body text-left">
                        <img src="" style="max-height:150px"  class="img-fluid ">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5>Nama produk</h5>
                                <h5><strong>IDR Harga produk</strong></h5>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
