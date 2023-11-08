@extends('app')

@section('content')
@if (session('logged_in'))
<style>

ul {
    list-style: none;
    display: flex;
    width: fit-content;
}
li {
    width: fit-content;
    padding: 20px;
}

li a {
    text-decoration: none;
    padding: 10px 20px;
    border: 1px solid var(--sec-color);
    color: var(--sec-color);
}

    </style>

<div class="row" style="justify-content: end;">
    <div class="col-12" style="width: fit-content;">
        <ul>
            <li>
                <a href="{{ route('my-orders') }}">My Orders</a>
            </li>
            <li>
                <a href="{{ route('profile') }}">Profile</a>
            </li>
            <li>
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</div>
@else
<style>.myiconac svg{fill: #000}</style>
<style>
        .hidden1 {
            display: none;
        }
        body { padding: 2em; }


/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}
    </style>

<div class="row">
    <div class="col-12">
        <div class="d-flex mb-3 justify-content-center">
            <div class="myiconac"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div>
        </div>
        <div class="pmclr p5 text-center">
            <h3>MON COMPTE CENTRAL SUSHI</h3>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <h3 class="text-center p-2 mb-3 mt-3 pmclr">SE CONNECTER</h3>
        <form action="{{ route('login') }}" method="post" class="">
            <div class="row pmclr sushiform p-md-3 p-2">
                <div class="mb-3 d-flex">
                    <label for="">Addresse Email:</label>
                    <input name="email" type="text" value="@if(session('email')){{session('useremail')}}@endif">
                </div>
                <button type="submit" name="validateemail"  class="sushibtn" style="display: @if(session('email'))none@endif;">NEXT</button>
            </div>
    </div>
</div>
@if(session('email'))
<div id="loginForm" class="row justify-content-center hidden1">
    <div class="col-md-6">
        <!-- <h3 class="text-center p-5 mb-5 mt-5 pmclr">SE CONNECTER</h3> -->
        
            <div class="row pmclr sushiform p-md-2">

                <div class="mb-3 d-flex">
                    <label for="">Mot de passe:</label>
                    <input name="password" type="password">
                </div>
                <div class="mb-3 d-flex p-3 justify-content-center">

                </div>
                <div class="mb-3 d-flex justify-content-center mt-5">
                <button type="submit" name="login" class="sushibtn">SE CONNECTER</button>
                </div>
            </div>
        
    </div>
</div>
@endif
@if(session('notregistered'))
<div id="registerForm" class="row justify-content-center hidden1">
    <div class="col-md-6">
            <div class="row pmclr sushiform p-md-2">
                <div class="mb-3 d-flex">
                    <label for="">Nom:</label>
                    <input name="first_name" type="text">
                </div>
                <div class="mb-3 d-flex">
                    <label for="">Prenom</label>
                    <input name="last_name" type="text">
                </div>
                <div class="mb-3 d-flex">
                    <label for="">Téléphone</label>
                    <input name="phone" type="text">
                </div>

                <div class="mb-3 d-flex">
                    <label for="">Mot de passe</label>
                    <input name="password" type="password">
                </div>
                <div class="mb-3 d-flex">
                    <label for="">Vérifier le mot de passe</label>
                    <input name="password_confirmation" type="password">
                </div>
                <div class="mb-3 d-flex justify-content-center mt-5">
                    <button type="submit" name="register" class="sushibtn">S'INSCRIRE</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
</section>
@endif
@endsection