@extends('index')

@section('body')
<div class="tombol" style="margin-top:10px;">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-lg'
            viewBox='0 0 16 16'>
            <path fill-rule='evenodd'
                d='M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z' />
        </svg> &nbsp;Add Account
    </button>
</div>

<div class="card" style="margin-top:10px;">
    <table id="table_account" class="table display dataTable table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($account as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                    <div class="button-action">
                        <a href="/account/update/{{ $data->id }}" type="button" class="btn btn-light-success" title="Edit Data" data-bs-toggle="tooltip"><i class="bi bi-pencil-square"></i></a>
                        <button type="button" class="btn btn-light-danger" title="Delete Data" data-bs-toggle="tooltip" onclick="deleteData({{$data->id}})"><i class="bi bi-trash"></i></a></button>
                        <a href="/account/editpass/{{ $data->id }}" type="button" class="btn btn-light-warning" title="Change Password" data-bs-toggle="tooltip"><i class="bi bi-pen"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLiveLabel">Add Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/account/add" method="post">
            @csrf
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-4 col-form-label">Password<sup class="text-danger">*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" onKeyup="validatePassword()" name="password" id="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <span class="text-secondary small error" id="accepted"></span><br>
                        <span class="text-muted small">Minimum 8 characters</span><br>
                        <span class="text-muted small">Upercase and Lowercase</span><br>
                        <span class="text-muted small">Number</span><br>
                        <span class="text-muted small">Symbol</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="add" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
    </div>
</div>

@if (Session::has('success'))
<script>
    window.addEventListener('load', function(){
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: '{{(Session::get('success'))}}',
            showConfirmButton: false,
            timer: 3000
        });
    })
</script>
@endif

@if($errors->any())
<script>
    window.addEventListener('load', function(){
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Something went wrong !',
            showConfirmButton: false,
            timer: 2000
        });
    })
</script>
@endif

<script>
    $(document).ready( function () {
        $('#table_account').DataTable();
    } );
</script>

<script>
    function validatePassword() {
        var InputValue = $("#password").val();
        var regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        $("#passwordText").text(`Password value:- ${InputValue}`);
        if (InputValue.match(regex)) {
            $("#accepted").html("You can use this password");
        } else {
             $(".error").html("Invalid Password");
        }
    }
</script>

<script>
    function deleteData(id) {
        Swal.fire({
            title             : "Are You Sure?",
            icon              : "question",
            showCancelButton  : true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor : "#d33",
            confirmButtonText : "Yes",
            cancelButtonText  : "No"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "GET",
                    url: "/account/delete/" + id,
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Data Deleted Successfully',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 500);
                    }
                });
            }
        })
    }
</script>

@endsection
