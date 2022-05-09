@extends('layouts.plain')

@section('content')

<div class="text-center mb-2 text-muted">
    <a to="/" class="d-block auth-logo">
        <img src="/images/logo-dark.png" alt="" height="20" class="auth-logo-dark mx-auto" />
    </a>
    <p class="font-size-11 mt-3">Department of Science & Technology <br> Scholarship Information Management System</p>
</div>
<div class="card" style="width: 400px;">
    <div class="card-body pt-4">
        <div class="p-2">
            <form class="form-horizontal needs-validation was-validated" method="POST" action="{{ route('password.email') }}">@csrf

                <div class="mt-n3 mb-4">
                    <span class="fw-medium text-primary"> Reset Password</span>
                    <hr>
                </div>

                <div class="form-group mb-2">
                    <label for="email" style="margin-bottom: -5px;">Email</label>
                    <input type="text" placeholder="Enter email" class="form-control" id="email" type="email"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="mt-3 d-grid">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Reset</button>
                </div>

                <div class="mt-4 mb-n3 text-center">
                    <p class="font-size-11">
                        Remember It ? <a href="/login" class="fw-medium text-primary">Sign In here</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
