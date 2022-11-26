<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration(Request $request){
        $request -> validate([
            'name' => ['required', 'regex:/[А-Яа-яЁё]/u'],
            'surname' => ['required', 'regex:/[А-Яа-яЁё]/u'],
            'patronymic' => ['regex:/[А-Яа-яЁё]/u', 'nullable'],
            'email' => ['required', 'email:frc', 'unique:users'],
            'login' => ['required', 'regex:/[A-Za-z0-9]/u'],
            'password' => ['required', 'min:6', 'confirmed'],
            'rules' => ['required'],
        ],[
            'name.required' => 'Обязательное поле для заполнения',
            'name.regex' => 'Поле содержит только кирилицу',
            'surname.required' => 'Обязательное поле для заполнения',
            'surname.regex' => 'Поле содержит только кирилицу',
            'patronymic.regex' => 'Поле содержит только кирилицу',
            'email.required' => 'Обязательное поле для заполнения',
            'email.email' => 'Тип поля email',
            'email.unique' => 'Поле должно быть уникальным',
            'login.required' => 'Обязательное поле для заполнения',
            'login.regex' => 'Поле содержит только латиницу',
            'password.required' => 'Обязательное поле для заполнения',
            'password.min' => 'Минимальное колиичество символов 6',
            'password.confirmed' => 'Пароль не совпадает',
            'rules.required' => 'Обязательное поле для заполнения',
        ]);
        if($request->rules = 1){
            $user = new User();
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->patronymic = $request->patronymic;
            $user->email = $request->email;
            $user->login = $request->login;
            $user->password = md5($request->password);
            $user->save();

            return redirect()->route('AuthPage')->with('success','Вы успешно зарегестрировались');
        }else{
            return redirect()->route('RegPage');
        }

    }

    public function auth(Request $request){
        $user = User::query()->where('login', $request->login)
            ->where('password', md5($request->password))->first();
        $request -> validate([
            'login'=>['required'],
            'password'=>['required', 'min:6']
        ],[
            'login.required'=>'Обязательное поле для заполнения',
            'password.required'=>'Обязательное поле для заполнения',
            'password.min'=>'Минимальное кол-во символов 6',
        ]);

        if ($user){
            Auth::login($user);
            if($user->role=='admin'){
                return redirect()->route('AdminPage');
            }
            if($user->role=='user'){
                return redirect()->route('AboutUs');
            }
        } else{
            return redirect()->route('AuthPage')->with('error', 'Такого пользователя нет');
        }


    }

    public function logout(){
        Auth::logout();
        return redirect()->route('AboutUs');
    }


}
