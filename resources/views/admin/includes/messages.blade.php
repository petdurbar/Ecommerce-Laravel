@if (Session::has('success'))
    <div class="alert alert-danger mb-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"
            style="height: 50px;">
            <p>{{ Session::get('success') }}</p>
            <button type="button" class="absolute top-0 right-0 mt-1 mr-2 close-button" data-dismiss="alert"
                aria-label="Close">
                <span class="text-green-700">&times;</span>
            </button>
        </div>
    </div>
@endif
@if (Session::has('message'))
    <div class="alert alert-danger mb-4">
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert"
            style="height: 50px;">
            <p>{{ Session::get('message') }}</p>
            <button type="button" class="absolute top-0 right-0 mt-1 mr-2 close-button" data-dismiss="alert"
                aria-label="Close">
                <span class="text-blue-700">&times;</span>
            </button>
        </div>
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger mb-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"
            style="height: 50px;">
            <p>{{ Session::get('error') }}</p>
            <button type="button" class="absolute top-0 right-0 mt-1 mr-2 close-button" data-dismiss="alert"
                aria-label="Close">
                <span class="text-red-700">&times;</span>
            </button>
        </div>
    </div>
@endif
@if (Session::has('errorimage'))
    <div class="alert alert-danger mb-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"
            style="height: 60px;">
            <p>{{ Session::get('errorimage') }}</p>
            <button type="button" class="absolute top-0 right-0 mt-1 mr-2 close-button" data-dismiss="alert"
                aria-label="Close">
                <span class="text-red-700">&times;</span>
            </button>
        </div>
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.close-button');
        var alertBox = document.querySelector('.alert');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                hideAlert();
            });
        }
        // setTimeout(function() {
        //     hideAlert();
        // }, 2000);
        function hideAlert() {
            alertBox.remove(); // Remove the alert box from the DOM
        }
    });
</script>