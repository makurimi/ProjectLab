@extends('template.navbar')
@section('container')

<style>
    body{
        background-color:#ececec;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: white;"><a href="/"class=" text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item" style="color: white;"><a href="/product"class=" text-decoration-none">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page"style="color: white;">Details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>Nama produk</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Detail</td>
                                        <td>:</td>
                                        <td> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td>
                                        <td>Rp. xxxxxxxxxx</td>
                                    </tr>

                                    @auth
                                    @if (Auth::user()->role == 'admin')

                                    @endif
                                    @if (Auth::user()->role == 'member')
                                    <tr>
                                        <td>Order Quantity</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="" >
                                            @csrf
                                                <input type="text" class="form-group col-md-2" name="jumlah_pesan" class="form-control" required="">
                                                <div class="form-group" ><button type="submit" class="btn btn-primary mt-2 col-md-6 "><i class="bi bi-cart2"></i> Purchase</button>
                                                </div>

                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endauth
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
