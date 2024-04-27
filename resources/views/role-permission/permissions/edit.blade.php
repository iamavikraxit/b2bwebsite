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
                            <a href="{{ url('permissions/' . $permission->id) }}"><button class="btn btn-md btn-danger"><i
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
                            <input class="form-control mt-1" id="validationTooltip01" type="text" name="permission_name"
                                value="{{ $permission->name }}" placeholder="Type Permission Name Here" required="">
                            <div class="valid-tooltip">Looks good!</div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary float-right" type="button"
                                onclick="updatePermission('{{ url('permissions', [$permission->id]) }}')">Update
                                Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function updatePermission(url) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: $('#updatePermissionForm').serialize(),
                    success: function(response) {
                        var permissionName = response.permission.name;
                        Swal.fire({
                            title: permissionName + ' Updated !',
                            text: 'Thank You! Permission Updated Successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        }).then((result) => {
                            window.location.href = '{{ url('permissions') }}';
                        });
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                if (key === 'permission_name') {
                                    var errorMessage = value[0];
                                    var inputName = key.replace(".", "_");
                                    var $inputField = $('input[name="' + key + '"]');
                                    $inputField.addClass('is-invalid');
                                    $inputField.after('<div class="invalid-feedback">' + errorMessage +
                                        '</div>');
                                    setTimeout(function() {
                                        $inputField.removeClass('is-invalid');
                                        $inputField.next('.invalid-feedback').remove();
                                    }, 5000);
                                } else {
                                    $('.permission-name-error').html(
                                'An error occurred while updating permission. Please try again later.');
                                }
                            });
                        } 
                    }
                });
            }
        </script>
    @endpush
@endsection
