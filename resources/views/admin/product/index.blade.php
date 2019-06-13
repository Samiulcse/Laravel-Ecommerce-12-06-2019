@extends('admin.layout.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>All Products</h3>
            </div>

            <div class="card-body text-left">
                <table class="table table-striped">
                    <tr>
                        <th>Product Name</th>
                    </tr>
                    @forelse($products as $product)
                    
                    <tr>
                        <td>
                            {{ $product->name }}
                        </td>
                    </tr>
                        @empty
                        
                        <td>No Product yet</td>

                    @endforelse
                </table>


            </div>
        </div>
    </div>
</div>
@endsection