@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                       <x-alert>{{ session('status') }}</x-alert>
                    @endif
                    

                    <ul class="nav navbar-nav pull-right">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                           <a href="{{ route('employees.index') }}" class="btn btn-success btn-sm m-2">{{ __('Employee') }}</a>
                       </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                           <a href="{{ route('companies.index') }}" class="btn btn-success btn-sm m-2">{{ __('Company') }}</a>
                       </li>
                       
                   </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
