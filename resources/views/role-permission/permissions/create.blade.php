@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4>Create Permission Form</h4>
                        </div>
                        <div class="col-auto">
                            <a href="{{ url('permissions') }}"><button class="btn btn-md btn-danger">Back</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="row g-3 needs-validation custom-input" novalidate="" action="{{ url('permissions') }}"
                        id="storePermissionForm" method="POST">
                        @csrf
                        <div class="col-md-12 position-relative">
                            <label class="form-label" for="validationTooltip01"><b>Permission Name</b></label>
                            <input class="form-control mt-1" id="validationTooltip01" type="text" name="permission_name"
                                placeholder="Type Permission Name Here" required="">
                            <div class="valid-tooltip">Looks good!</div>
                            @error('permission_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary float-right" type="button" onclick="storePermission()">Save
                                Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function storePermission() {
                $.ajax({
                    type: 'POST',
                    url: '{{ url("permissions") }}',
                    data: $('#storePermissionForm').serialize(),
                    success: function(response) {
                        var permissionName = response.permission.name;
                        Swal.fire({
                            title: permissionName + ' Created !',
                            text: 'Thank You! Permission Created Successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        }).then((result) => {
                            window.location.href = '{{ url("permissions") }}';
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while creating permission. Please try again later.',
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay'
                        });
                    }
                });
            }
        </script>
    @endpush
@endsection
