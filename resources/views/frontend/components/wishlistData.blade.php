<div class="w-full h-auto flex justify-center items-center">
    <div class="h-auto min-[1300px]:w-[1250px] w-full min-[1300px]:px-0 md:px-[2.5rem] px-[1rem] min-[1300px]:space-y-10 space-y-5 my-5  min-[1300px]:my-10">
        <div class="font-medium min-[1300px]:text-3xl text-2xl leading-5 text-webblack text-center uppercase">
            <span class="inline-block pb-5 relative">
                My Wishlist
                <span class="absolute w-2/5 bottom-0 left-[30%] border-b-8 border-black rounded-3xl"></span>
            </span>
        </div>

        @if(empty($wishlist))
            <div class="bg-white w-full shadow-2xl min-h-[300px] flex-col gap-5 flex justify-center items-center">
                <div class="italic text-base">Your Wishlist is Empty</div>
                <a href="{{ route('index') }}"
                    class="w-fit whitespace-nowrap flex items-center justify-center bg-black py-1 px-6 text-white text-16 rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                    Continue Shopping
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 gap-5">
                @foreach($wishlist as $index => $item)
                    <div class="p-4 w-full bg-white rounded-lg shadow-2xl flex max-[600px]:flex-col max-[600px]:gap-5 justify-between"
                         key="{{ $index }}">
                        <div class="flex gap-4">
                            <div class="h-[120px] w-[200px]">

                                <img src="{{ asset('/uploads/' . $item->featured_image) }}" alt="{{ $item['product_name'] }}"
                                     class="h-full w-full object-contain rounded-lg">
                            </div>
                            <div class="space-y-2">
                                <div class="text-base font-medium">
                                    {{ $item->product_name }}
                                </div>

                                <div class="text-black text-sm flex gap-1 uppercase">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $item['rating'])
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-star-fill text-yellow-500"
                                                 viewBox="0 0 16 16">
                                                <path stroke="orange"
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="none" class="bi bi-star text-black"
                                                 viewBox="0 0 16 16">
                                                <path stroke="orange"
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                                {{-- <div class="text-sm">
                                    {{ $item['stock_quantity'] > 0 ? 'In Stock' : 'Out of Stock' }}
                                </div> --}}
                            </div>
                        </div>
                        <div class="flex flex-col items-end gap-4">
                            <div class="text-black font-semibold text-lg">
                                Rs {{ $item->product_price }}


                                {{-- @if ($item->variation)
                                <p class="text-lg text-black font-bold text-center">

                                    @if ($price['minimum'] == $price['maximum'])
                                        <span class="text-orange-500 ">Rs {{ $price['minimum'] }}</span>
                                    @else
                                        <span class="text-orange-500 ">Rs {{ $price['minimum'] }} - Rs {{ $price['maximum'] }}</span>
                                    @endif
                                </p>
                            @else
                                <p class="text-lg text-black font-bold text-center ">
                                    <span class="text-orange-500 ">Rs {{ $item->product_price }}</span>

                                </p>
                            @endif --}}

                            </div>
                            <div class="flex gap-4">
                                <button class="w-full whitespace-nowrap flex items-center justify-center bg-black py-2 px-3 text-white text-sm rounded-lg uppercase border-[1px] border-black hover:bg-white hover:text-black transition-all duration-500 ease-cubic-bezier">
                                    <span class="material-symbols-outlined">
                                        add
                                        </span>
                                        <span class="material-symbols-outlined">
                                            shopping_cart
                                            </span>
                                    &nbsp;&nbsp;Add to Cart
                                </button>


                                
                                <form action="
                                {{ route('wishlist.destroy', $item->id) }}
                                " class="delete-form-{{ $item->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="material-symbols-outlined text-red-600 bg-[#dbdada] cursor-pointer flex items-center justify-center rounded-lg w-[50px]">
                                    delete
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
