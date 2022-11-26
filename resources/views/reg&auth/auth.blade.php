@extends('layout.app')
@section('title')
    Авторизация
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Авторизация</h2>
            @if(session()->has('success'))
                <div class="container w-25">
                    <div class="alert text-center alert-success">
                        {{session('success')}}
                    </div>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="container w-25">
                    <div class="alert text-center alert-danger">
                        {{session('error')}}
                    </div>
                </div>
            @endif

        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="{{route('auth')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" id="login">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            @error('login')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            @error('password')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
