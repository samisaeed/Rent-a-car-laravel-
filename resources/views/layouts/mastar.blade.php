<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>vehicle</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.mins.css')}}">
        <link rel="stylesheet" href="{{asset('css/new-font-awesome.css')}}">



        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <!-- Styles -->
        <style>

        #home-section {
          background: url("{{ asset('images/O72HCC0.jpg') }}") no-repeat;
          background-size: cover;
          background-attachment: fixed;
          min-height: 700px; }

        .jumbotron a{
          color: #fff;
          text-decoration: none;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding-top: 30px;
            padding-bottom:  30px;
            margin-left: 40px;
            padding-right: 10px;

            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            margin-bottom: 30px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }
        .jumbotron{
          /* background-color: #4b6baa; */
          background-color: #08143a;
          height: 350px;
          border-radius: 0px;
        }
        .heading{
          width: 400px;
          padding-top: 30px;
          margin: 0 auto;

        }
        .heading p{
          color: #bcd1c8;
          font-size: 17px;
          /* font-family: 'Bellefair', serif; */
        }
        .heading h1{
          /* color: #ccfced; */
          color: #ffff;
          /* font-family: 'Bellefair', serif; */
          /* font-family: 'Merriweather', serif; */
          font-size: 60px;
        }
        .homebtn1{
          margin-right: -5px;
          background-color: transparent;
          color:#ffff;
          border: 2px solid #ffff;
          border-right: none !important;
          width: 120px;
          font-weight: bold;


        }
        .homebtn2{
          margin-left: -5px;
          background-color: #ffff;
          color:#08143a !important;
          border: 2px solid #ffff;
          /* border-left: none !important; */
          width: 120px;
          font-weight: bold;

        }
        .homebtn1:hover{
          background-color: transparent;
          color: #566;
          color:#ffff;
          border: 2px solid #ffff;
          border-right: none !important;

        }
        .homebtn2:hover{
          background-color: #ffff;
          color: #08143a;
          border: 2px solid #ffff;
        }

        .cardbtn1{
          margin-top: 225px;
          margin-left: -20px;
          background-color: #08143a;
          width: 150px;
          color: #ccfced;
          height: 30px;

        }
        .cardbtn2{
          margin-top: -25px;
          margin-left: -20px;

          background-color:  #08143a;
          width: 200px;
          color: #ccfced;
          height: 30px;
        }
        .card{
          opacity: 0.9;
          margin-bottom: 25px;
        }
        .card:hover{
          opacity: 1.5;
        }
        .footer{
          background-color: #c6d9f1;
          color: #569;
          border-top: 1px;
          padding-top: 25px;
          height: 100px;
          margin: 0px;
          margin-top:50px !important;


        }
        .footer p{
          padding-top: 37px;
        }
        .homebtn{
          width: 120px;
        }
        .searchinput{
          width: 150px;

          background-color: #f2f2f2 ;
          /* border-radius: 10px; */
          border: none;
        }
        .search{
          width: 150px;
          background-color: #d9dadb;
          /* border-radius: 10px; */
          border: none;
          color: #555;
        }
        .search:hover{
          background-color: #b2b4b7;
        }
        .formbtn{
          width: 150px;
        }
        .profilebtn{
          width: 200px;
          height: 100px;
          padding: 30px;
          margin: 50px;
          margin-bottom: -15px !important;
          color: #ffff;
        }
        .profilebtn:hover{
          color: #fff;
          transition: .4s ease;
        }
        #btn1{
          background-color: red;
        }
        #btn2{
          background-color: gray;
        }  #btn3{
            background-color: purple;
          }  #btn4{
              background-color: green;
            }  #btn5{
                background-color: yellow;
              }  #btn6{
                  background-color: blue;
                }
        .orderbtn{
          width: 150px;
          height: 50px;
          border-radius: 15px;
          padding: 15px;
          font-weight: bold;
          color: #fff;

        }
        .orders{

          margin-right: -400px;
        }

        .searchcar{
          width:1300px;
          margin:0 auto;
          padding-bottom:20px;
        }
        .iconrow{
          width: 1100px;
          margin: 0 auto;
          padding-top: 20px;
          padding-bottom: 20px;

        }

        .icons a{
          color: #000;
          text-decoration: none;
        }



        #iconhead{
          border-bottom: 2px solid #08143a;
          width: 100px;

        }

        #iconp{
          width: 250px;
        }

        #services{
          background-color: #08143a;
        }

        #servicesimg img{
          width: 500px;
          opacity: 0.8;
        }

        .carousel-item p{
          color: #fff;
        }
        .carousel-item{
          padding: 20px;
        }

        #servicesrow{
          margin-top: 30px;
        }

        #cardmargin{
          margin-left: px;
        }

        .path{
          margin-left: 850px;
          margin-top:  -30px;


        }



        /* social */



/* social */

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
          .card{
          padding-bottom: 30px;}
          .sidenav .closebtn{
            margin-top: -35px !important;
            margin-left: 10px;
          }

          .orderbtn{
            width: 100px;
            height: 50px;
            padding: 0px;
            padding: 15px;
          }
          #carimg{
            width: 100px;
            height: 50px;
          }
          .searchcar{
            width: 500px;
          }

          .cardbtn1{
            width: 130px;
            margin-top: 65px;
            height: 30px;


          }
          .cardbtn2{
            width: 186px;
            height: 30px;

          }
          .card img{
            height: 100%;
            margin-bottom: 0;
            padding-bottom: 0;
          }
          .profilebtn{
            width: 170px;
            height: 50px;
            padding: 10px;
            margin-left: 35px;
            margin-right: 35px;
            margin-top: 35px;
            margin-bottom: 35px;

            margin-bottom: -15px !important;
            color: #ffff;
          }

          .orderlist{
            padding: 0px;
            margin: 0px;
            width: 100%;
          }
          .logout{
            margin-left: 200px;
            margin-top: -100px;
          }
          .jumbotron{
            height: 150px;
          }

          .heading{
            margin-top: -70px;
          }

          .heading h1{
            font-size: 25px;
          }

          .heading p{
            font-size: 12px;
          }

          .homebtn1{
            width: 77px;
            font-size: 15px;
            height: 20px;
          }
          .homebtn2{
            width: 77px;
            height: 20px;

            font-size: 15px;

          }

          .home a{
            font-size: 12px;
            padding: 0px;

          }

          .searchinput{
            width: 77px;
            height: 20px;
            padding: 0px;
          }

          b{
            font-size: 12px;
          }
          .footer{
            height: 35px;
            padding: 0px;
          }
          .footer p{
            padding: 0px;
          }
          h6{
            font-size: 11px;
          }
          h3{
            font-size: 20px;
            padding: 0px;
            margin: 0px;
          }

          .form-control{
            font-size: 12px;
            height: 35px;

          }

          .formbtn{
            height: 35px;
            font-size: 12px;

          }

          .btn-block{
            height: 35px;
            font-size: 12px;
          }
          .formmargin{
            margin-top: -100px;
          }


        }
</style>
    </head>
    <body>


          @yield('content')


          {{-- @include('inc.footer') --}}

    </body>

</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100px";
    document.getElementById("main").style.marginLeft = "100px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<script type="text/javascript">
  $(document).ready(function(){

  })
</script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>



<script type="text/javascript">
$(window).scroll(function() {
if($(this).scrollTop() > 40)  /*height in pixels when the navbar becomes navbar-default1*/
{
   $('nav').addClass('nav1').addClass('bg-dark');
} else {
   $('nav').removeClass('nav1').removeClass('bg-dark');
}
});
</script>
</script>
