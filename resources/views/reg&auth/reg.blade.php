@extends('layout.app')

@section('title')
    Регистрация
@endsection

@section('main')
    <div class="container">
        <div class="row justify-content-center"><h2 class="text-center m-5">Регистрация</h2></div>
        <div class="row justify-content-center">
            <form class="col-5" action="{{route('registration')}}" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Фамилия</label>
                    <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('surname')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="patronymic" class="form-label">Отчество</label>
                    <input type="text" class="form-control @error('patronymic') is-invalid @enderror" id="patronymic" name="patronymic">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('patronymic')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control @error('login') is-invalid @enderror" id="login" name="login">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('login')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label @error('password_confirmation') is-invalid @enderror">Повторение пароля</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('password_confirmation')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input @error('rules') is-invalid @enderror" id="rules" name="rules">
                    <label class="form-check-label" for="rules">Согласие на обработку данных</label>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('rules')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>

    </div>

@endsection

