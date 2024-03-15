<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('tinymce/editor_content.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">



    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('tinymce/jquery.tinymce.min.js') }}"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: '.tinymce',
            branding: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen", "insertdatetime media table paste codesample",
                "mytoc"
            ],
            toolbar: "fullscreen code preview | tableofcontents | undo redo | bold italic underline strikethrough | fontselect styleselect fontsizeselect  forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | link image  | mytoc",
            font_formats: "Segoe UI=Segoe UI;",
            plugins: 'advlist autolink lists link image charmap preview searchreplace visualblocks code codesample fullscreen insertdatetime media table mytoc',
            fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 96px",
            remove_script_host: false,
            height:300,
            paste_data_images: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function() {
                    var file = this.files[0];

                    // if (file) {
                    //     var maxSize = 2 * 1024 * 1024;
                    //     if (file.size > maxSize) {
                    //         alert('Selected image is too large. Please choose an image smaller than 2MB.');
                    //         return;
                    //     }
                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
                // }

                input.click();
            },
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                })
            },
        });
    </script>

</head>

<body>
    <style>
        [x-cloak] {
            display: none;
        }

        body {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <div x-cloak x-data="{ sidebarOpen: true }" class="font-roboto flex min-h-screen">
        <div class="fixed w-full top-0 z-[999] bg-white">
            @include('admin.layouts.topNav')
        </div>
        @include('admin.layouts.sidebar')

     
        <main :class="sidebarOpen ? 'ml-64' : 'ml-0'"
            class="flex-1 overflow-x-hidden overflow-y-auto mt-10 mb-2 w-full bg-slate-50">
            <div class=" px-6 w-full max-sm:px-4 py-8  mt-7">
                @yield('container')
            </div>
        </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>


{{-- <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        var old = document.getElementsByClassName('oldimage')[0];
        old.classList.add("hidden");

    };
    var loadFiles = function(event) {
        var outputs = document.getElementById('output2');
        outputs.src = URL.createObjectURL(event.target.files[0]);
        var olds = document.getElementsByClassName('oldimages')[
            0]; // Get the first element with the class 'oldimage'
        olds.classList.add("hidden");
    }

    var loadFiless = function(event) {
        var outputss = document.getElementById('output3');
        outputss.src = URL.createObjectURL(event.target.files[0]);
        var oldss = document.getElementsByClassName('oldimagess')[
            0]; // Get the first element with the class 'oldimage'
        oldss.classList.add("hidden");
    }

    var loadFilesss = function(event) {
        var outputsss = document.getElementById('output4');
        outputsss.src = URL.createObjectURL(event.target.files[0]);
        var oldsss = document.getElementsByClassName('oldimagesss')[
            0]; // Get the first element with the class 'oldimage'
        oldsss.classList.add("hidden");
    }
</script> --}}
</html>
