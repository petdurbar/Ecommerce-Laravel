@extends('frontend._layout._master')

@section('body')
    <main class="pb-16  lg:pb-24 bg-white ">
        <div class="flex justify-between px-4 mx-auto max-w-screen-2xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue ">
                <div class="flex justify-between items-center text-sm font-medium text-gray-600">

                    {{-- @dd($slug); --}}
                    <div>
                        {{ Breadcrumbs::render('single', $slug) }}
                    </div>
                    <div>

                        @if ($currentUserLocation)
                            {{ $currentUserLocation }}
                        @else
                            Unknown
                        @endif
                    </div>
                </div>

                <header class="mb-4 lg:mb-6 not-format">
                    {{-- <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 ">Jese Leos</a>
                            <p class="text-base font-light text-gray-500 ">Graphic Designer, educator & CEO Flowbite</p>
                            <p class="text-base font-light text-gray-500 "><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                        </div>
                    </div>
                </address> --}}
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">
                        {{ $blog->title }}</h1>
                </header>
                <div class="flex flex-wrap justify-between w-full ">

                    <p class="lead text-gray-600 font-semibold pb-3 "> PUBLISHED : {{ $blog->created_at->format('jS M Y') }}
                    </p>
                    @if ($blog->views)
                        <div class="flex gap-1 items-center">
                            {{ $blog->views }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="20"
                                height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                </path>
                            </svg>
                        </div>
                    @endif
                </div>
                {{-- <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
                classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                datepickers.</p>
            <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
                you can think things through before committing to an actual design project.</p>
            <p>But then I found a <a href="https://flowbite.com">component library based on Tailwind CSS called
                    Flowbite</a>. It comes with the most commonly used UI components, such as buttons, navigation
                bars, cards, form elements, and more which are conveniently built with the utility classes from
                Tailwind CSS.</p> --}}
                <figure>
                    <img src="{{ asset('/uploads/' . $blog->featured_image) }}" alt="featured_image">
                    {{-- <figcaption>Digital art by Anonymous</figcaption> --}}
                </figure>


                <section class="mylist">
                    {!! $blog->description !!}
                </section>
            </article>
        </div>
    </main>

    <aside aria-label="Related articles" class="">
        <div class="px-4 mx-auto max-w-screen-2xl">
            <h2 class="mb-8 text-2xl font-bold text--900 ">Related Blogs</h2>
            {{-- <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                        <a href="#">Our first office</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 ">Over the past year, Volosoft has undergone many changes! After
                        months of preparation.</p>

                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                            class="mb-5 rounded-lg" alt="Image 2">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                        <a href="#">Enterprise design tips</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 ">Over the past year, Volosoft has undergone many changes! After
                        months of preparation.</p>

                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                            class="mb-5 rounded-lg" alt="Image 3">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                        <a href="#">We partnered with Google</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 ">Over the past year, Volosoft has undergone many changes! After
                        months of preparation.</p>

                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                            class="mb-5 rounded-lg" alt="Image 4">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 ">
                        <a href="#">Our first project with React</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 ">Over the past year, Volosoft has undergone many changes! After
                        months of preparation.</p>

                </article>
            </div> --}}
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
                @foreach ($allblogs as $key => $blog)
                    <a href="{{ route('single', $blog->slug) }}"
                        class="rounded-lg p-1 max-md:mt-8 mt-6  shadow transition hover:translate-y-2 hover:shadow-lg">
                        @include('frontend.components.blogcomponent', ['allBlog' => $blog])
                    </a>
                @endforeach

            </div>
        </div>
    </aside>
@endsection
