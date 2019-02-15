@extends('layouts.main')
@section('content')
 <h1>Form dang ky thanh vien</h1>
 <form action="{{ url("thanhvien/dang_ky") }}" method="post">
    @csrf
    <label for="user_name">User Name</label>
    <input type="text" name="user_name" value=""><br/>
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" value=""><br/>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" value=""><br/>
    <label for="password">Password</label>
    <input type="text" name="password" value=""><br/>
    <label for="confirm_p">Confirm Password</label>
    <input type="text" name="confirm_p" value=""><br/>
    <label for="email">Email</label>
    <input type="text" name="email" value=""><br/>
    <label for="gioi_tinh">Gender</label>
    <input type="radio" name="gioi_tinh" value="male" checked> Male
    <input type="radio" name="gioi_tinh" value="female"> Female<br>
    <input type="checkbox" name="accept_term"/> I accept terms and conditions
    <button type="submit">Register</button>
    </form>
@endsection