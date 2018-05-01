@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Autorizācija') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="vards" class="col-md-4 col-form-label text-md-right">{{ __('Vārds') }}</label>

                            <div class="col-md-6">
                                <input id="vards" type="text" class="form-control{{ $errors->has('vards') ? ' is-invalid' : '' }}" name="vards" value="{{ old('vards') }}" required autofocus>

                                @if ($errors->has('vards'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('vards') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uzvards" class="col-md-4 col-form-label text-md-right">{{ __('Uzvārds') }}</label>

                            <div class="col-md-6">
                                <input id="uzvards" type="text" class="form-control{{ $errors->has('uzvards') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('uzvards'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('uzvards') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('loma') ? ' has-error' : '' }}">
                            <label for="loma" class="col-md-4 control-label text-md-right">{{ __('Autorizēties kā:') }}</label>

                            <div class="col-md-6 text-md-right">
                                <select class="col-md-6-right form-control" name="loma">
                                    <option value="skolotajs">Skolotājs</option>
                                    <option value="skolnieks">Skolnieks</option>
                                 </select>

                                @if ($errors->has('loma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('loma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="epasts" class="col-md-4 col-form-label text-md-right">{{ __('E-Pasta Adrese') }}</label>

                            <div class="col-md-6">
                                <input id="epasts" type="email" class="form-control{{ $errors->has('epasts') ? ' is-invalid' : '' }}" name="epasts" value="{{ old('epasts') }}" required>

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
                            <label for="paroles-apstiprinasana" class="col-md-4 col-form-label text-md-right">{{ __('Apstipriniet Paroli') }}</label>

                            <div class="col-md-6">
                                <input id="paroles-apstiprinasana" type="password" class="form-control" name="paroles-apstiprinasana" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Autorizēt') }}
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
