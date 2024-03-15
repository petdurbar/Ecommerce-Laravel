@extends('admin/layouts/app')
@section('page_title', 'Admin - Add Product Image')
@section('product_select', 'bg-black text-white')
@section('container')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>


    <div class="container p-4">
        {{-- @include ('admin.components.message.index') --}}
        @include('admin.includes.messages')  

        <div class="flex gap-4">
            <a href="{{ route('products.index') }}">
                <span class="material-symbols-outlined text-2xl">
                    west
                </span>
            </a>
            <div class="text-xl font-bold">Add Product Images</div>
        </div>
        <div class="p-2 mt-10 rounded-md">

            <form method="post" action="{{ route('productImage', $product->id) }}" class="dropzone" id="myDropzone">
                @csrf
            </form>

        </div>
        <br>

        <div class="flex flex-wrap gap-3 p-4">
            @foreach ($propertyImages as $key => $img)
                <blockquote class="w-32 h-auto flex-wrap">
                    <img alt="aabi" src="{{ asset('/images/' . $img->images) }}"
                        class="aspect-square border w-full hover:text-black rounded-t-xl object-contain" />

                    <form action="{{ route('deleteImage', $img->id) }}" method="POST" id="delete-form-{{ $img->id }}">
                        @csrf
                        @method('delete')
                       
                        <input type="hidden" name="filefrom" value="insidedropzone"/>
                        <button type="button" onclick="deleteSingleImage({{ $img->id }})"
                            class="border bg-red-600 cursor-pointer openModal hover:bg-black text-white text-center w-full">
                            Delete
                        </button>
                    </form>


                </blockquote>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.openModal').on('click', function(e) {
                            $('#interestModal').removeClass('invisible');
                        });
                        $('.closeModal').on('click', function(e) {
                            $('#interestModal').addClass('invisible');
                        });
                    });
                </script>
            @endforeach
        </div>
    </div>

    <script>
        Dropzone.options.myDropzone = {
            // Configuration options go here
            maxFilesize: 100000,
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
        };
    </script>
@endsection
<script>
    function deleteSingleImage(imageId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this image!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + imageId).submit();
            }
        });
    }
</script>
