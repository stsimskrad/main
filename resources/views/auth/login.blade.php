@extends('layouts.plain')

@section('content')
<div class="card">
    <div class="card-body pt-4">
        <div class="p-2">
            <form class="form-horizontal needs-validation was-validated" method="POST"
                action="{{ route('login') }}">@csrf

                <div class="row mb-3">
                    <div class="col-2">
                        <img src="images/sei.png" alt="" class="avatar-sm">
                    </div>
                    <div class="col-10">
                        <div class="text-primary mt-1">
                            <p>Department of Science & Technology <br> Scholarship Information Management
                                System</p>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="email" style="margin-bottom: -5px;">Email</label>
                    <input type="text" placeholder="Enter email" class="form-control" id="email"
                        type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="password" style="margin-bottom: -5px;">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password"
                        name="password" required autocomplete="current-password">
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                </div>
                

                <div class="mt-3 d-grid">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log
                        In</button>
                </div>

                <div class="mt-4 mb-n3 text-center">
                    <p class="font-size-11">
                        Forgot you password? <a href="/password/reset" class="fw-medium text-primary">Click here</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection