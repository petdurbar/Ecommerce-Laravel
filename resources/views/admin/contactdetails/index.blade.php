@extends('admin.layouts.app')

@section('container')
    <section class="px-5">
        <div class="text-2xl m-6 font-bold">Contact List</div>
        <div class="container mx-auto px-4">
            @include('admin.includes.messages')

            <div class=" shadow mt-10 bg-white">
                <div class="overflow-x-auto">

                    <table class="w-full divide divide-gray-200 ">
                        <thead class="font-normal p-10  ">
                            <tr class="">
                                <th scope="col " class="p-2 font-semibold  border">
                                    First Name
                                </th>
                                <th scope="col " class="p-2 font-semibold  border">
                                    Last Name
                                </th>
                                <th scope="col" class="font-semibold  border">
                                    Email
                                </th>
                                <th scope="col" class="font-semibold  border">
                                    Phone
                                </th>
                                <th scope="col" class="font-semibold  border">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        @foreach ($contacts as $key => $contact)
                            <tbody class="text-center divide">
                                <td class=" divide border">
                                    {{ $contact->firstname }}
                                </td>
                                <td class=" divide border">
                                    {{ $contact->lastname }}
                                </td>
                                <td class=" divide border">
                                    {{ $contact->email }}
                                </td>


                                <td class=" divide border">
                                    {{ $contact->phone }}
                                </td>
                                <td class="p-2 flex justify-center items-center border">
                                    <a
                                        href="
                                        {{ route('contactadmin.show', $contact->id) }}
                                        ">
                                        <button class="mr-2 py-1 px-3 bg-gray-700 text-white rounded-md">
                                            View
                                        </button>
                                    </a>

                                    <form
                                        action="
                                        {{ route('contactadmin.destroy', $contact) }}
                                        "
                                        method="POST" id="delete-form-{{ $contact->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button"
                                            onclick="
                                            deleteStudent({{ $contact->id }})
                                            "
                                            class="mr-2 py-1 px-3 mt-4 bg-pink-600 text-white rounded-md">Delete</button>
                                    </form>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>

                </div>
            </div>

            <div class="mt-4">
                {{ $contacts->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
@endsection

<script>
    function deleteStudent(studentId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this student!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + studentId).submit();
            }
        });
    }
</script>
