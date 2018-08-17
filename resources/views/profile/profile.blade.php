@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile info') }}<button class="btn btn-default pull-right" onclick="window.location.href='/profile/{{$user->admission}}/edit'"><i class="fa fa-edit"></i></button></div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->firstname}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->lastname}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->dob}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->status}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->occupation}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->address}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->mobile}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="landline" class="col-md-4 col-form-label text-md-right">{{ __('Landline No.') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->landline}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->email}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC No.') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->nic}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="admission" class="col-md-4 col-form-label text-md-right">{{ __('Admission No.') }}</label>
                            <div class="col-md-6">
                                <input class='form-control' type="text" value="{{$user->admission}}" readonly>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
