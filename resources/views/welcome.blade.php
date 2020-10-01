<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link  href="../RTX/css/welcome.css" rel="stylesheet">

        
    </head>
    <body>
    <div class="wrapper">
      <div class="parallax__group hero-container">
        <div class="parallax__layer sky"></div>
        <div class="parallax__layer bushes"></div>
        <div class="parallax__layer water"></div>
        <div class="parallax__layer people1"></div>
        <div class="parallax__layer people2"></div>
        <div class="parallax__layer people3"></div>
        <div class="parallax__layer hero-text">
          <ul>
          <li>
            <a href="{{ url ('home') }}"><h1>home</h1></a></li>
            <li><a href="{{ url ('login') }}"><h1>login</h1></a></li>
            <li><a href="{{ url ('register') }}"><h1>Register</h1></a></li>
          </ul>
          <div class="year-container">
            <h1>Rtx-Cloth</h1>
          </div>
          <div class="social-container">
            <a href="https://github.com/KiaanCastillo" target="_blank"
              ><i class="icon ion-logo-github"></i
            ></a>
            <a href="https://www.instagram.com/craftedbykiaan/" target="_blank"
              ><i class="icon ion-logo-instagram"></i
            ></a>
            <a href="https://dribbble.com/kiaancastillo" target="_blank"
              ><i class="icon ion-logo-dribbble"></i
            ></a>
            <a href="https://www.youtube.com/c/KiaanCastillo" target="_blank"
              ><i class="icon ion-logo-youtube"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="parallax__group info-container">
        <img src="../RTX/img/goals.png" alt="Lively and colourful concert" />
        <div class="text-container">
          <h1>Tujuan Pembuatan Aplikasi</h1>
          <p>Meningkatkan mutu soft-skill & hard-skill dalam pemrograman.</p>
          <p>Implementasi hasil pembelajaran semasa praktikum. </p>
          <p>Mahasiswa dapat memahami apa itu framework</p>
          <p>Mendeploy sebuah aplikasi sehingga dapat experience dari penggarapan aplikasi tersebut.</p>
        </div>
      </div>
      <div class="parallax__group info-container">
        <img src="../RTX/img/ins.png" alt="Lively and colourful concert" />
        <div class="text-container">
          <h2>Ketentuan & Prasyarat</h2>
          <p>Memenuhi Requirement mata kuliah Interaksi Manusia Komputer & Basis Data</p>
          <p>Materi yang disuguhkan berkaitan dengan relasi basis data</p>
          <p>Memenuhi UI/UX dari segi template maupun pattern dan element</p>
        </div>
      </div>
      <div class="parallax__group info-container">
        <img src="../RTX/img/team.jpg" alt="Lively and colourful concert" />
        <div class="text">
          <h2>Contributor</h2>
          <p>Zufar Mahasin Naufal ( 065118167 ) : Developer </p>
          <p>Heru Purnama (065118168) : Wireframemer & mockups </p>
          <p>Ananda Reynata (065118180) : Front-End </p>
          <p>Fambudi Rachdian (065118153) : Front-End Wireframemer & mockups </p>
          
        </div>
      </div>
    </div>
  </body>
</html>
