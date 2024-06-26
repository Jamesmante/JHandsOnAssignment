@extends('templates.base')

@section('content')
    <div class="flex justify-between bg-gray-200 p-4 items-center rounded shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800">Products</h1>
        <div class="flex items-center space-x-4">
            <button type="button" class="btn bg-green-500 text-white hover:bg-green-600 px-4 py-2 rounded shadow" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add
            </button>
            <div class="relative">
                <form hx-get="/api/products" hx-trigger="submit" hx-target="#products_list" hx-reset="true">
                    <input type="text" name="filter" placeholder="Search products..." class="p-2 border border-gray-300 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500">
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-lg shadow-lg">
                <div class="modal-header bg-blue-500 text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Product</h1>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" hx-post="/api/products" hx-trigger="submit" hx-target="#products_list" hx-swap="innerHTML" hx-on::after-request="this.reset(); document.getElementById('closeButton').style.display = 'block';">
                    @csrf
                    <div class="modal-body bg-gray-50">
                        <div class="mb-4">
                            <label for="name" class="form-label font-semibold">Name</label>
                            <input type="text" class="form-control rounded shadow-sm" id="name" name="name">
                            <div id="name_error" hx-swap-oob="true" class="text-red-500 mt-1"></div>
                        </div>
                        <div class="mb-4">
                            <label for="desc" class="form-label font-semibold">Description</label>
                            <textarea class="form-control rounded shadow-sm" id="desc" name="desc"></textarea>
                            <div id="desc_error" hx-swap-oob="true" class="text-red-500 mt-1"></div>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="form-label font-semibold">Price</label>
                            <input type="number" class="form-control rounded shadow-sm" id="price" name="price">
                            <div id="price_error" hx-swap-oob="true" class="text-red-500 mt-1"></div>
                        </div>
                        <div class="mb-4">
                            <label for="qty" class="form-label font-semibold">Quantity</label>
                            <input type="number" class="form-control rounded shadow-sm" id="qty" name="qty">
                            <div id="qty_error" hx-swap-oob="true" class="text-red-500 mt-1"></div>
                        </div>
                    </div>
                    <div id="addProductMessage" hx-swap-oob="true" class="text-green-500 px-4 py-2"></div>
                    <div class="modal-footer bg-gray-100">
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600 px-4 py-2 rounded shadow">Save</button>
                        <button type="button" class="btn bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded shadow hidden" id="closeButton" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="products_list" class="p-5 bg-white mt-4 rounded shadow-lg" hx-get="/api/products" hx-trigger="load delay:500ms" hx-swap="innerHTML">
        <!-- Products will be loaded here dynamically -->
    </div>

    <script>
        function resetModal() {
            document.getElementById('name_error').innerHTML = '';
            document.getElementById('desc_error').innerHTML = '';
            document.getElementById('price_error').innerHTML = '';
            document.getElementById('qty_error').innerHTML = '';
            document.getElementById('addProductMessage').innerHTML = '';
        }

        document.getElementById('staticBackdrop').addEventListener('hidden.bs.modal', function() {
            document.getElementById('addProductMessage').innerHTML = '';
            document.getElementById('closeButton').style.display = 'none';
        });
    </script>
@endsection
