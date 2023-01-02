@extends('template.navbar')
@section('container')

<style>
body{
        background-color:#ececec;
    }
</style>
<br>

<div class="container">
        <div class="col-md-12 mt-2">
        </div>
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="bi bi-cart-check"></i> Transaction Detail</h3>

                    <p class="text-center">Transaction Date : "tanggal"</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>


                            <tr>
                                <tr>
                                <td colspan="5" ><strong>Total Price :</strong></td>
                                <td ><strong>Rp. </strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" ><strong>Total :</strong></td>
                                <td ><strong>Rp.</strong></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>
</div>

@endsection
