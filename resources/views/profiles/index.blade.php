@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Vārds *') }}</label>
        
    
                                <div class="col-md-8" >
                                    <input id="name" type="text" placeholder="{{ Auth::user()->name }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
    </div>
    <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Uzvārds *') }}</label>

                            <div class="col-md-8">
                                <input id="lastname" type="text" placeholder="{{ Auth::user()->lastname }}" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>

                                
                            </div>
                        </div>
     @if(Auth::user()->role == 'skolotajs')
     <div class="form-group row">
        <label for="subject" class="col-md-4 col-form-label text-md-right">{{__('Pasniegtais priekšmets') }}</label>
            <div class="col-md-8">
                <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" >
            </div>
        </div>
        @endif

        @if(Auth::user()->role == 'skolotajs')
     <div class="form-group row">
        <label for="education" class="col-md-4 col-form-label text-md-right">{{__('Izglītība') }}</label>
            <div class="col-md-8">
                <input id="education" type="text" class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}" name="education" value="{{ old('education') }}" >
            </div>
        </div>
        @endif

        @if(Auth::user()->role == 'skolnieks')
     <div class="form-group row">
        <label for="school" class="col-md-4 col-form-label text-md-right">{{__('Mācību iestāde') }}</label>
            <div class="col-md-8">
                <input id="school" type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="{{ old('school') }}">
            </div>
        </div>
        @endif

        <div class="form-group row">
        <label for="age" class="col-md-4 col-form-label text-md-right">{{__('Vecums') }}</label>
            <div class="col-md-8">
                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}">
            </div>
        </div>

        <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-right">{{__('Apraksts par Jums') }}</label>
            <div class="col-md-8">
                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}">
            </div>
        </div>

@endsection