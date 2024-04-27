@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4>Edit Permission Form</h4>
                        </div>
                        <div class="col-auto">
                            <a href="{{ url('permissions') }}"><button class="btn btn-md btn-danger"><i
                                class="fa fa-arrow-left m-1"></i>Back</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="row g-3 needs-validation custom-input" novalidate="" action=""
                        id="updatePermissionForm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12 position-relative">
                            <label class="form-label" for="validationTooltip01"><b>Permission Name</b></label>
                            <input class="form-control mt-1" id="validationTooltip01" type="text" name="permission_name" value="{{$permission->name}}"
                                placeholder="Type Permission Name Here" required="">
                            <div class="valid-tooltip">Looks good!</div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary float-right" type="button" onclick="updatePermission()">Update
                                Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function updatePermission() {
                $.ajax({
                    type: 'POST',
                    url: '{{ url('permissions') }}',
                    data: $('#updatePermissionForm').serialize(),
                    success: function(response) {
                        var permissionName = response.permission.name;
                        Swal.fire({
                            title: permissionName + ' Created !',
                            text: 'Thank You! Permission Created Successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        }).then((result) => {
                            window.location.href = '{{ url('permissions') }}';
                        });
                    },
                    error: function(xhr, status, error) {
                        // console.error(xhr.responseText);
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                var inputName = key.replace(".", "_");
                                var errorMessage = value[0]; // Get the first error message for simplicity
                                var $inputField = $('input[name="' + key + '"]');
                                $inputField.addClass(
                                    'is-invalid'
                                    ); // Add Bootstrap's is-invalid class to highlight the input field
                                $inputField.after('<div class="invalid-feedback">' + errorMessage +
                                    '</div>'); // Append error message below input field
                                setTimeout(function() {
                                    $inputField.removeClass(
                                    'is-invalid'); // Remove is-invalid class after 5 seconds
                                    $inputField.next('.invalid-feedback')
                                .remove(); // Remove error message after 5 seconds
                                }, 2500);
                            });
                        } else {
                            $('.permission-name-error').html(
                                'An error occurred while creating permission. Please try again later.');
                        }
                    }
                });
            }
        </script>
    @endpush
@endsection
