<x-app-layout>

    @section('title', 'Fruitables - Edit Product')
    @section('content')
        <!-- products-edit.blade.php -->
        <div class="container" style="margin-top: 150px">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form method="PATCH" action="{{ route('product-update', $product->id) }}">
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder=""
                            value="{{ $product->product_name }}">
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="Fruits" {{ $product->category == 'Fruits' ? 'selected' : '' }}>Fruits</option>
                            <option value="Meat" {{ $product->category == 'Meat' ? 'selected' : '' }}>Meat</option>
                            <option value="Vegetables" {{ $product->category == 'Vegetables' ? 'selected' : '' }}>Vegetables</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="mrp">MRP</label>
                        <input type="number" name="mrp" class="form-control" id="mrp" placeholder="" value="{{ $product->mrp_price }}">
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="selling_price">Selling Price</label>
                        <input type="number" name="selling_price" class="form-control" id="selling_price" placeholder="" value="{{ $product->selling_price }}">
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="short_description">Short Description</label>
                        <input type="text" name="short_description" class="form-control" id="short_description"
                            placeholder="" value="{{ $product->short_description }}">
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="long_description">Long Description</label>
                        <input type="text" name="long_description" class="form-control" id="long_description"
                            placeholder="" value="{{ $product->long_description }}">
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="product_images">Product Images</label>
                        <input type="file" name="product_images[]" class="form-control" id="product_images"
                            placeholder="Choose Product Image" multiple>
                        <br>
                    </div>
                    <div class="form-group col-6">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" placeholder="" value="{{ $product->tags }}">
                        <br>
                    </div>
                </div>

                <button type="submit" class="btn text-white" style="background-color:  #81c408"> Update Products</button>
            </form>
        </div>
    @endsection
</x-app-layout>
{{-- <div>
                <label for="name" class="form">Product Name:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $product->product_name }}">
            </div>
            <div>
                <label for="description" class="form">Product Description:</label>
                <textarea class="form-control" id="description" name="description">{{ $product->short_description }}</textarea>
            </div>
            <!-- और फील्ड्स के लिए भी ऐसा ही करें -->
            <button type="submit">Update Product</button>
        </form>
    </div>
    </div> --}}
