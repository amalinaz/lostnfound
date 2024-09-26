@extends('navbar')

@section('title', 'Login Page')

@section('content')

    <h1 style="display:flex; margin-top: 150px; font-family: poppins; justify-content:center">Login Page</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
        <form method="POST" action="/login" style="display: flex; flex-direction: column; width: 300px; gap: 15px;">
            @csrf
            <div>
                <label for="email" style="font-family: poppins">Email</label>
                <br>
                <input type="email" name="email" id="email"  value="{{Cookie::get("mycookie")!== null ? Cookie::get("mycookie") : ""}}" style=" width: 100%; height: 20px; background: white; padding: 10px;"/>
            </div>
            <div>
                <label for="password" style="font-family: poppins">Password</label>
                <br>
                <input type="password" name="password" id="password" style="width: 100%; height: 20px; background: white; padding: 10px;"/>
            </div>

            <div style="display: flex; align-items: center; gap: 10px;">
                <input type="checkbox" name="remember" id="remember" {{ Cookie::get('mycookie') !== null ? 'checked' : '' }} />
                <label for="rememberme" style="font-family: poppins">Remember Me</label>
            </div>

            <div>
                <button type="submit" value="login" style="font-family: poppins; background-color: #174576; color: white; padding: 10px 20px; font-size: 15px; font-weight: bold; border-radius: 5px; width: 100%;">
                    Submit
                </button>
            </div>
        </form>
    </div>

@endsection
