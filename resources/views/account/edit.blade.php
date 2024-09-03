@extends('index')

@section('body')

<div class="position-relative">
    <div class="col-md-6 mx-auto">
        <div class="card ">
            <br>
            <h4>Update Account</h4>
            <br>
            <div class="form-group" style="margin-left: 20px;margin-right: 20px;">
                <form action="/account/update/updateaccount/{{$account_data->id}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" value="{{$account_data->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" value="{{$account_data->email}}">
                        </div>
                        <span class="text-danger" id="statusError"></span>
                    </div>
                    <div class="modal-footer" style="padding-bottom=10px">
                        <a href="/account" type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 5px;margin-bottom: 5px;">Cancel</a>
                        <button type="submit" id="submit" class="btn btn-success submit" style="margin-left: 20px;margin-right: 20px;margin-bottom: 5px;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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

@endsection
