<script>
    $(document).ready(function() {
        const searchInput = $('#search');
        const resultsList = $('#results');
        searchInput.on('input', function() {
            let searchTerm = $(this).val();
            $.ajax({
                url: "{{ route('autocomplete') }}",
                method: 'GET',
                dataType: 'json',
                data: { term: searchTerm }, // Use 'term' as the parameter name
                success: function(data) {
                    resultsList.empty();
                    if (data.length > 0) {
                        data.forEach(function(item) {
                            resultsList.append(`
                            <li class="result-item p-2" data-product-slug="${item.product_slug}">${item.product_name}</li>
                            `);
                        });
                        // Show the results
                        resultsList.show();
                    } else {
                        // Display a "No product found" message
                        resultsList.append('<li class="result-item p-2">No product found</li>');
                        resultsList.show();
                    }
                }
            });
            if (searchTerm === '') {
                resultsList.hide();
            }
        });
        // Handle item selection (redirect to the product page)
        resultsList.on('click', '.result-item', function() {
            const productSlug = $(this).data('product-slug');
            if (productSlug) {
                window.location.href = `/product/${productSlug}`; // Update the URL structure
            }
        });
        // Use mousedown event on document to detect clicks outside the input and the dropdown
        $(document).on('mousedown', function(event) {
            // Check if the click target is not the search input or the results list
            if (!searchInput.is(event.target) && !resultsList.is(event.target) && resultsList.has(event.target).length === 0) {
                resultsList.hide();
            }
        });
    });
</script>


<div class=" bg-white">
    <nav class="flex justify-between  text-slate-500 px-4">
        <div class="xl:px-12 px-4 py-2 flex items-center ">
            <a class="text-3xl font-bold border-gray-600 font-heading w-24" href="{{route("homepage")}}">
                <img src="{{ asset('images/investlogo.jpg') }}" />
            </a>
        </div>

        <div class="flex-grow flex w-full gap-2 items-center justify-center">
            <input type="text"
                class="px-6 py-2 w-[80vh] max-sm:w-[40vh] border border-gray-800  rounded-md focus:outline-none "
                placeholder="Search">
            <button
                class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md focus:outline-none ">Search</button>
        </div>

        <div class="flex items-center space-x-5 text-[#0f577d]">
            <a class="hover:text-slate-500" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </a>
            <a class="flex items-center hover:text-slate-500" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="flex absolute -mt-5 ml-4">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                    </span>
                </span>
            </a>
            <!-- Sign In / Register      -->
            <a class="flex items-center hover:text-slate-100" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-slate-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>


    </nav>
</div>


{{-- <header class="bg-blue-500 py-4 px-6 flex flex-wrap justify-between items-center">
    <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
        <img src="logo.png" alt="Logo" class="w-10 h-10">
        <h1 class="text-white text-lg ml-2">Your Logo</h1>
    </div>

    <div class="w-full md:w-1/3 mb-2 md:mb-0">
        <input type="text" placeholder="Search..."
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 4v2a2 2 0 002 2h12a2 2 0 002-2V4M4 8h16m-8 12a4 4 0 004-4h-8a4 4 0 004 4z" />
        </svg>
        <span class="text-white ml-2">0</span>
    </div>
</header> --}}
