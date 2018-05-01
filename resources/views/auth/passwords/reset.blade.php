@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nomainīt Paroli') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="epasts" class="col-md-4 col-form-label text-md-right">{{ __('E-Pasta Adrese') }}</label>

                            <div class="col-md-6">
                                <input id="epasts" type="email" class="form-control{{ $errors->has('epasts') ? ' is-invalid' : '' }}" name="epasts" value="{{ $epasts ?? old('epasts') }}" required autofocus>

                                @if ($errors->has('epasts'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('epasts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parole" class="col-md-4 col-form-label text-md-right">{{ __('Parole') }}</label>

                            <div class="col-md-6">
                                <input id="parole" type="password" class="form-control{{ $errors->has('parole') ? ' is-invalid' : '' }}" name="parole" required>

                                @if ($errors->has('parole'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('parole') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paroles-apstiprinasana" class="col-md-4 col-form-label text-md-right">{{ __('Apstiprini Paroli') }}</label>

                            <div class="col-md-6">
                                <input id="paroles-apstiprinasana" type="password" class="form-control" name="paroles-apstiprinasana" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Nomainīt Paroli') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
