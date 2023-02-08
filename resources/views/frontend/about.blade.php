@extends('layouts.frontend')

@section('content')
<html>
    <head>
        <title>ABOUT US</title>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.img{
    width: 100%;
}
.margin{
margin-bottom:70px;
}
.margin2{
margin-top:10px;
}
.margin3{
  margin-bottom:50px;
  }
.margin5{
  margin-bottom: 400px;
}
.bg {
    background-image: url(img/bg.jpg);
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
}
.konten{
    
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.kartu{
    perspective: 1000px;
    height: 370px;
    width: 270px;
    position: relative;
    margin: 15px;
}
.kartu img{
    width: 100%;
}
.kartu .back{
    position: absolute;
    transform: rotateY(0deg);
    backface-visibility: hidden;
    transition: transform 0.4s linear;
}
.kartu .depan{
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: transform 0.4s linear;
}
.kartu:hover .back{
    transform: rotateY(-180deg);
    cursor: pointer;
}
.kartu:hover .depan{
    transform: rotateY(0deg);
    cursor: pointer;
}
.about{
    margin: 20px;
    font-family:Alkalami;
    font-size: 20px;
}

.tulis{
    margin-left: 50px;
}

.dosen{
    margin-left: 450px;
    margin-top: 25px;
    justify-content: center;
    height: 300px;
    width: 300px;
}
</style>
</head>
<body>

        <table border="0" bgcolor= "white" align="center" style="border-radius:20px;">
            <tr><td style="width:700px; height: 50px; ">
                <div class="about">
                <h1 align="center">ABOUT US</h1><br>
                <p>Website Layanan Peminjaman DVD Merupakan website peminjaman dvd berbasis online yang
                    dikembangkan oleh mahasiswa prodi Teknik Informatika
                </p>
                </div>
                </td>
            </tr>
        </table>
        <p class="margin2"></p>
        <table border="0" bgcolor= "white" align="center" style="border-radius:20px;">
            <tr><td style="width:700px; height: 50px; ">
                <div class="about">
                <h3 align="center">OUR TEAM</h3>
                <table border="0">
                <tr>
                    
                    <section class="konten">
                        <td>
                        <div class="kartu">
                            <div class="depan">
                                <img src="{{ asset('ree.png')}}">
                            </div>
                            <div class="back">
                                <img src="{{ asset('yugi.jpg')}}" height="395px">
                            </div>
                        </div></td>
                    <td>
                        <div class="kartu">
                            <div class="depan">
                                <img src="{{ asset('firsta.png')}}">
                            </div>
                            <div class="back">
                                <img src="{{ asset('yugi.jpg')}}" height="395px">
                            </div>
                        </div></td>
                    <td>
                        <div class="kartu">
                            <div class="depan">
                                <img src="{{ asset('bagus.png')}}">
                            </div>
                            <div class="back">
                                <img src="{{ asset('yugi.jpg')}}" height="395px">
                            </div>
                        </div></td>
                    <td>
                        <div class="kartu">
                            <div class="depan">
                                <img src="{{ asset('may.png')}}">
                            </div>
                            <div class="back">
                                <img src="{{ asset('yugi.jpg')}}" height="395px">
                            </div>
                        </div></td>
                    </section>
                </tr>
                <tr>
                    <tr height = "50px"></tr>
                    <td colspan="4"><h3 align="center">DOSEN PENGAMPU</h3></td></tr>
                    <tr>
                    <td colspan="4"><img class="dosen" src="{{ asset('pakipul.jpg') }}"/> <center> <h2 class="tulis1">Saiful Nur Budiman</h2><p class="tulis1"></p></center></td>
                </tr>
                </table>
                </div>
                </td>
            </tr>
        </table>
    </body>
</html>
@endsection