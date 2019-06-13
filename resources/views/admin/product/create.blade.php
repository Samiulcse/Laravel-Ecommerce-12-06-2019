@extends('admin.layout.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Product</h3>
            </div>

            <div class="card-body text-left">
                <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="form-group">
                        <label>Product Category</label>
                        <select name="category_id" class="form-control">
                            <option selected disabled>Select Product Category</option>
                            
                            @foreach ($categories as $id => $category)
                            <option value="{{ $id }}">{{$category}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Size</label>
                        <select name="size" class="form-control">
                            <option selected disabled>Select a Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" class="form-control" placeholder="Enter Product Category">
                    </div>

                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection