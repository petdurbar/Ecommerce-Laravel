<div class="flex flex-col justify-center items-center bg-gray-100">
    <div class="min-[1300px]:w-[1250px] w-full min-[1300px]:px-0 md:px-[2.5rem] px-[1rem] flex flex-col gap-5 min-[1300px]:py-[5rem] max-min-[1300px]:py-[2.5rem]">
      <div class="font-medium min-[1300px]:text-3xl text-2xl leading-8 text-webblack text-center uppercase">
        <span class="inline-block py-5 relative">
          Most Popular Categories
          <span class="absolute w-2/5  bottom-0 left-[30%] border-b-4 border-black rounded-3xl"></span>
        </span>
      </div>

    <div class="grid grid-cols-6 max-lg:grid-cols-4 max-md:grid-cols-3 max-sm:grid-cols-2 sm:gap-6 gap-2 pt-10">
        @foreach ($categories as $key => $category)

            <a href="{{ route('category-products', $category->slug) }}"
                class="shadow-lg h-[30vh] px-5 rounded-lg bg-white flex flex-col items-center  hover:scale-90 shadowy transition duration-100 cursor-pointer">
                <img src="{{ asset('images/category/' . $category->image) }}" class="h-[20vh] w-[20vh] object-contain "
                    alt="">
                <p class="text-center font-medium">{{ $category->category_name }}</p>
            </a>
        @endforeach


    </div>

    <div class="flex justify-center items-center my-10">
        <a href="category"
            class="bg-black max-sm:text-sm font-medium text-white px-6 py-2 rounded-md hover:bg-white hover:text-black border-black border cursor-pointer">VIEW
            MORE</a>
    </div>
</div>
</div>
