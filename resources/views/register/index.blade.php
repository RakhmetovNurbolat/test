@extends('layouts.auth')

@section('page.title', 'Register')
    

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{__('Register')}}
            </x-card-title>
            <x-slot name="right">
                <a href="{{route('login')}}"> login </a>
            </x-slot>
        </x-card-header>
            
        <x-card-body>

            <x-form action=" {{route('register.store')}} " method="POST">
                <x-form-item>
                    <x-label required> {{__('Name')}} </x-label>
                    <x-input name="name" autofocus />
                </x-form-item>
                
                <x-form-item>
                    <x-label required> {{__('Email')}} </x-label>
                    <x-input type="email" name="email" />
                </x-form-item>

                <x-form-item>
                    <x-label required> {{__('Password')}} </x-label>
                    <x-input type="password" name="password" />
                </x-form-item>

                <x-form-item>
                    <x-label required> {{__('Repeat password')}} </x-label>
                    <x-input type="password" name="password_repeat" />
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="agreement">
                        {{__('Согласень')}}
                    </x-checkbox>
                </x-form-item>
                
                <x-button type="submit">
                    {{__('Send')}}
                </x-button>
            
            </x-form>

        </x-card-bady>

    </x-card>
@endsection
