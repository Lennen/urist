<html lang="ar" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Сервис тестирования юридических документов НПА на наличие ошибок</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album-rtl/">

    <link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    
    <style>
        .menu_items{
            text-decoration: none; color: black; padding: 5px 20px;
        }

        .sidenav {
            height: 100%;
            width: 280px;
            position: fixed;
            z-index: 9;
            top: 0;
            left: 0;
            background: img/image4.png;
            overflow-x: hidden;
            padding-top: 140px;
            padding-left: 45px;
        }
        
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }
        
        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 28px; /* Increased text to enable scrolling */
            padding: 0px 30px;
            padding-left: 150px;
            padding-top:20px;
            
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
   
<body>
    
<header>
  <div class="navbar navbar-dark shadow-sm">
    <div class="container">
        <img src="img/Group.png" style="height: 55px"/>
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
      </a>
      
      <div style="display:flex; flex-wrap:none; padding: 10px 10px;">
        <a class="menu_items" href="index.php">Главная</a>
        <a class="menu_items" href="">Тестирование</a>
        <a class="menu_items" href="analyze.php">Анализ</a>
      </div>
      
      <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Меню" style="color: red; bg-color: black">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>


<div class="sidenav collapse" id="navbarHeader">
    <div>
  <a href="http://google.com">Загрузить акт</a>
  <a href="#services">Нейросеть</a>
  <a href="#clients">О проекте</a>
  <a href="#contact">Команда</a>
  <a href="#contact">Контакты</a>
  </div>
</div>

<div class="sidenav" style="overflow:  hidden;">
    <img  src="img/image4.png" style="overflow:  hidden;">
</div>

<style>
    .card_params{
        min-height: 490px;
    }
    
.sphere {
  height: 80px;
  width: 80px;
  border-radius: 50%;
  text-align: center;
  vertical-align: middle;
  font-size: 500%;
  position: relative;
  display: inline-block;
  margin: 5%;
  border: 1px solid #CD6D45;
}
.sphere::after {
  content: '';
  height: 45%;
  width: 12%;
  position: absolute;
  top: 4%;
  left: 15%;
  border-radius: 50%;
  transform: rotate(40deg);
}
  
 .d24 {
background: #CD6D45;
height: 50px; 
width: 10px;
position: relative; 
margin-top:-80px;
}
.d24:after {
content: "";
height: 10px; 
width: 50px;
background: #CD6D45;
position: absolute; 
left: -20px; 
top: 20px;
}
</style>