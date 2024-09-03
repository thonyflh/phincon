@extends('index')

@section('body')
    <div class="position-relative">
        <div class="col-md-6 mx-auto">
            <div class="card ">
                <br>
                <h4>Change Password</h4>
                <br>
                <div class="form-group" style="margin-left: 20px;margin-right: 20px;">
                    <form action="/account/updatepass/{{ $account_data->id }}" id="updatepassword" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">Password<sup
                                    class="text-danger">*</sup></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" onKeyup="validasipassword()" name="password"
                                    id="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <span class="text-secondary small error" id="accepted"></span><br>
                                <span class="text-muted small">Minimum 8 characters</span><br>
                                <span class="text-muted small">Upercase and Lowercase</span><br>
                                <span class="text-muted small">Number</span><br>
                                <span class="text-muted small">Symbol</span>
                            </div>
                        </div>
                        <div class="modal-footer" style="padding-bottom=10px">
                            <a href="/account" type="button" class="btn btn-danger" data-dismiss="modal"
                                style="margin-right: 5px;margin-bottom: 5px;">Cancel</a>
                            <button type="submit" id="submit" class="btn btn-success submit"
                                style="margin-left: 20px;margin-right: 20px;margin-bottom: 5px;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script>
        function validasipassword() {
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
        $(document).ready(function() {
            $('#updatepassword').on('submit', function(e) {
                var InputValue = $("#password").val();
                var regex = new RegExp(
                    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                if (InputValue.match(regex)) {
                    this.submit();
                } else {
                    alert('cannot submit')
                }
            });
        });
    </script>

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
