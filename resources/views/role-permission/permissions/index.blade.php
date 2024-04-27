@extends('layouts.app')
@section('content')
    <div class="col-sm-12">
        @if (session('status'))
            <div class="alert alert-light-primary" role="alert">
                <p class="txt-primary">{!! session('status') !!}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4>Permission List</h4>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('permissions/create') }}"><button class="btn btn-md btn-danger"><i
                                    class="fa fa-plus m-1"></i>Create</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                    <table class="display" id="row_create" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Permission Name</th>
                                <th>Permission Slug</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                                <tr>
                                    <td>{{ generateRandomString() }}{{ generateRandomInteger() }}{{ generateRandomInteger() }}{{generateRandomString() }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ Str::lower($permission->name) }}</td>
                                    <td>{{ $permission->created_at }}</td>
                                    <td>{{ $permission->updated_at }}</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="{{url('permissions/' .$permission->id.'/edit')}}"><i class="icon-pencil-alt"></i></a></li>
                                            <li class="delete"><a href="#"
                                                    onclick="deletePermission({{ $permission->id }})">
                                                    <i class="icon-trash"></i>
                                                </a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    @push('js')
        <script>
            function deletePermission(permissionId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this permission !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('permissions') }}/" + permissionId,
                            data: {
                                _method: 'DELETE',
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                var permissionName = response.permission.name;
                                if (response.success) {
                                    Swal.fire({
                                        title:  permissionName + ' Deleted !',
                                        text: response.message,
                                        icon: 'success',
                                        didClose: () => {
                                            window.location.href = "{{ url('permissions') }}";
                                        }
                                    });
                                } else {
                                    Swal.fire('Error!', response.message, 'error');
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire('Error!', 'Failed to delete permission', 'error');
                            }
                        });
                    }
                });
            }
        </script>
    @endpush
@endsection
