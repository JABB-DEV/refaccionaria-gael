@extends('layouts.main')
@section('styles')
    <style>
    .container-slider {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
      }
      
      @-webkit-keyframes scroll {
        0% {
          -webkit-transform: translateX(0);
                  transform: translateX(0);
        }
        100% {
          -webkit-transform: translateX(calc(-500px * 7));
                  transform: translateX(calc(-500px * 7));
        }
      }
      
      @keyframes scroll {
        0% {
          -webkit-transform: translateX(0);
                  transform: translateX(0);
        }
        100% {
          -webkit-transform: translateX(calc(-300px * 7));
                  transform: translateX(calc(-300px * 7));
        }
      }
      
      .slider {
        background: white;
        /* -webkit-box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
                box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
        height: 200px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 1500px;
      }
      
      .slider::before, .slider::after {
        background: -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
        background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
        content: "";
        height: 200px;
        position: absolute;
        width: 200px;
        z-index: 2;
      }
      
      .slider::after {
        right: 0;
        top: 0;
        -webkit-transform: rotateZ(180deg);
                transform: rotateZ(180deg);
      }
      
      .slider::before {
        left: 0;
        top: 0;
      }
      
      .slider .slide-track {
        -webkit-animation: scroll 15s linear infinite;
        animation: scroll 15s linear infinite;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: calc(250px * 14);
      }
      
      .slider .slide {
        height: 200px;
        width: 250px;
      }
      /*# sourceMappingURL=app.css.map */
      </style>
@endsection
@section('content')
<div class="container-slider">
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="{{url('img/adjuntos/6e094ec8-7c28-4504-8685-af9475fa1a3d.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
            <img src="{{url('img/adjuntos/6e631dba-dc99-40a8-9a2f-b4fbbc01f076.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/230118ca-eb2a-4927-b05a-9bef17d4ff5d.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/308d760c-49a4-4a78-a08e-4bac18d645e3.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/4164d277-351a-4c9f-a731-ebef8b3dd3e1.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/452659f2-0ad5-405c-b221-1d4118c84bd9.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/571991c6-67e1-4d30-acf0-60789e1bad03.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/6f695a3f-94f7-4134-b90f-e9a6ef38e056.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/73748785-578a-44f9-9ff6-adcf2f9c1367.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/bf7a76b1-ea4e-4f24-a333-b12c0fe37b11.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/e2c32091-dc4a-4ad7-97e4-ee2726ecddcf.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/f2ade6e4-eda7-4d30-90fc-183e477f082c.jpg')}}" height="200" width="200" alt="" />
            </div>
            <div class="slide">
                <img src="{{url('img/adjuntos/fd1d8f92-f83e-4372-a472-44a1dcd2199a.jpg')}}" height="200" width="200" alt="" />
            </div>
        </div>
    </div>
</div>
@endsection