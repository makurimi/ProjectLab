@extends('template.navbar')
@section('container')

<style>
body{
        background-color:#ececec;
    }
</style>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-dark"><a href="/" class="text-dark text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="bi bi-cart2"></i> Check Out</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="" width="100" alt="...">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="{{ route('purchase') }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?');"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>


                            <tr>
                                <td colspan="5"><strong>Total Price :</strong></td>
                                <td><strong></strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Confirm checkout?');">
                                        <i class="bi bi-cart2"></i> Check Out
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
