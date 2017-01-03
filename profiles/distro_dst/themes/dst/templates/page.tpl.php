<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StroyDostavka</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <header id="top-header" class='head clearfix'>
    <div class="container">
      <div class="row">
        <div class="search">
          <div class="logo">
            <p><img src="<?php print $logo; ?>" alt="logo"></p>
          </div>
<!--           <div class="frm">
            <form action="">
            <div class="inpHolder">
                  <input type="text" placeholder="Поиск">
                  <i class='fa fa-search'></i>
            </div>
            </form>
          </div> -->
          <?php print render($page['top_header']); ?>
        </div>
      </div>
    </div>

  </header>

  <section id="header" class="nav">
    <div class="container">
      <div class="row">
<!--         <div class="col-sm-8">
          <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Доставка</a></li>
            <li><a href="#">Оплата</a></li>
            <li><a href="#">Прайс-лист</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div> -->
<!--         <div class="col-sm-4 clearfix">
          <div class="inner phone">
            <p class='first-p'> <i class='fa fa-phone'></i>
                (+71)123-45-67
            </p>
            <a class='second-p' >Заказать звонок</a>
          </div>
          <div class="inner cord">
            <p class='first-p'> <i class="fa fa-shopping-basket" aria-hidden="true"></i> Корзина</p>
            <p class='second-p'>0 товаров</p>
          </div>
        </div> -->
        <?php print render($page['header']); ?>
      </div>
    </div>
  </section>
  
  <?php print $messages; ?>

  <article class='catalog'>
    <div class="container">
        <div class="row">
<!--             <div class='col-md-12'>
                <div class="goods clearfix">
                    <h2 class='reg'>Каталог товаров</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <ul>
                                <li><a href="">Сухие строительные смеси</a></li>
                                <li><a href="">Гипсокартон и комплектующие</a></li>
                                <li><a href="">Блоки,плиты,кирпичи</a></li>
                                <li><a href="">Маяки,уголки</a></li>
                                <li><a href="">Гидро-паро-изоляция</a></li>
                            </ul>
                        </div>
                       
                        <div class="col-md-3">
                            <ul>
                                <li><a href="">Утеплители</a></li>
                                <li><a href="">Стеклохолст паутина</a></li>
                                <li><a href="">Сетка,серпянка,лента</a></li>
                                <li><a href="">Сетки металлические</a></li>
                                <li><a href="">Грунтовка,Клей</a></li>
                            </ul>
                        </div>
                      
                        <div class="col-md-3">
                            <ul>
                                <li><a href="">Металлопрокат</a></li>
                                <li><a href="">Пена,герметик</a></li>
                                <li><a href="">Пленки полиэтиленовые</a></li>
                                <li><a href="">Инструменты</a></li>
                                <li><a href="">Саморезы,гвозди,дюбеля</a></li>
                            </ul>
                        </div>
                 
                        <div class="col-md-3">
                            <ul>
                                <li><a href="">Хозяйственный инвентарь</a></li>
                                <li><a href="">Пиломатериалы,фанера,осб</a></li>
                                <li><a href="">Пленки полиэтиленовые</a></li>
                                <li><a href="">Цсп,ацэид</a></li>
                                <li><a href="">Электрика</a></li>
                            </ul>
                        </div>
                       
                    </div>
                    
                </div>
              
            </div> -->
          <?php print render($page['navigation']); ?>

           
        </div>
        <!--row-->
        <div class="row">
            <div class='col-md-12'>
                <div class="brickets">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class='bricket-item'>
                                <h2 class="reg">Лучшие предложения</h2>
                                <div class="row">
                                    <div class='inside clearfix'>
                                        <div class="col-xs-6">
                                            <h1>Будет жарко!</h1>
                                            <h1>Топливные брикеты RUF</h1>
                                            <button>Узнать больше</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href='#'> <img src="images/bricket.png" alt="brick"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bricket-item second">
                                <h2 class="reg">Товар дня</h2>
                                <div class="inside">
                                    <img src="images/glue.png" alt="glue">
                                    <p>Клей плиточный Юнис Плюс 25 кг</p>
                                    <button>Узнать больше</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bricket-item img">
                                <img src="images/saturn.png" alt="saturn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container-->
</article>
<!--catalog-->


    <section class="slider">
    <div class="container">
      <div class="row">
      <div class="col-md-12">

<div class='slider-in clearfix'>       
  <ul id="flexisel">
     <li><a href="#"><img src="images/one.png" alt="img1"></a></li>
     <li><a href="#"><img src="images/two.png" alt="img2"></a></li>
     <li><a href="#"><img src="images/three.png" alt="img3"></a></li>
     <li><a href="#"><img src="images/four.png" alt="img4"></a></li>
     <li><a href="#"><img src="images/five.png" alt="img5"></a></li>
     <li><a href="#"><img src="images/six.png" alt="img6"></a></li>
     <li><a href="#"><img src="images/seven.png" alt="img7"></a></li>
        </ul>
        </div>
      </div>
          
      </div>
    </div>
     
    </section><!--slider-->
    <article class='products'>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="reg">Лидеры продаж</h2>
            <div class="row">
              <div class="topProd clearfix">
                <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                  <p> Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг 
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi tempora quod quibusdam. Hic, iusto, tempora! Minus odit distinctio molestiae, incidunt, expedita corporis alias, sapiente vero placeat maxime excepturi eius.</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf2.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг .</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/glue.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг </p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     
           
              </div><!--topProd-->
            </div><!--row-->
            <div class="row">
              <div class="topProd clearfix">
                <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                  <p> Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг 
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi tempora quod quibusdam. Hic, iusto, tempora! Minus odit distinctio molestiae, incidunt, expedita corporis alias, sapiente vero placeat maxime excepturi eius.</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf2.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг .</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/glue.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг </p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     
           
              </div><!--topProd-->
            </div><!--row-->
                        <div class="row">
              <div class="topProd clearfix">
                <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                  <p> Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг 
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi tempora quod quibusdam. Hic, iusto, tempora! Minus odit distinctio molestiae, incidunt, expedita corporis alias, sapiente vero placeat maxime excepturi eius.</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf2.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг .</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/glue.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг </p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     <div class="col-md-3">
                  <div class="topProd-item">
                  <figure>
                   <a href='#'>
             <img src="images/knauf.png" alt="glue"></a>
                  </figure>
                   <div class='about'>
                   <p>Клей плиточный усиленный                       КНАУФ-Флизен Плюс.25кг</p></div>
                 <div class='price'>Цена:<span>25 000 Сум</span></div>
                 <button>Добавить в корзину</button>
      
                  </div>
                </div>
                     
           
              </div><!--topProd-->
            </div><!--row-->

             
          </div>
        </div>
      </div>
    </article><!--products-->
    <footer>
      <div class="container">
        <div class="row">
        <div class="footer-top clearfix">
               <div class="col-sm-3">
               <div class="footer-logo">
                  <a href='#'>
        <img src="images/foot-logo.png" alt="foot-logo">
        StroyDostavka
        </a>
               </div>
       
        </div>
          <div class="col-sm-9">
            <ul>
              <li><a href="#">Главная</a></li>
              <li><a href="#">Доставка</a></li>
              <li><a href="#">Оплата</a></li>
              <li><a href="#">Прайс-лист</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
     
        </div><!--row-->
        <div class="row">
       

    <div class='col-md-9 col-md-push-3'> 
    <div class='cats clearfix'> 
<div class='row'>
                   <div class="col-sm-4">
                         <ul>
                           <li><a href="">Сухие строительные смеси</a></li>
                           <li><a href="">Гипсокартон и комплектующие</a></li>
                           <li><a href="">Блоки,плиты,кирпичи</a></li>
                           <li><a href="">Маяки,уголки</a></li>
                           <li><a href="">Гидро-паро-изоляция</a></li>
                         </ul>
                       </div><!--col-3-->
                       <div class="col-sm-4">
                         <ul>
                           <li><a href="">Утеплители</a></li>
                           <li><a href="">Стеклохолст паутина</a></li>
                           <li><a href="">Сетка,серпянка,лента</a></li>
                           <li><a href="">Сетки металлические</a></li>
                           <li><a href="">Грунтовка,Клей</a></li>
                         </ul>
                       </div><!--col-3-->
                       <div class="col-sm-4">
                         <ul>
                           <li><a href="">Металлопрокат</a></li>
                           <li><a href="">Пена,герметик</a></li>
                           <li><a href="">Пленки полиэтиленовые</a></li>
                           <li><a href="">Инструменты</a></li>
                           <li><a href="">Саморезы,гвозди,дюбеля</a></li>
                         </ul>
                       </div><!--col-3--></div>

                     </div>
                    </div>
                       <div class="col-md-3 col-md-pull-9">
            <div class="contacts">
              <p class='tel'>(+71) 123 45 67</p>
              <a href="#">Заказать звонок</a>
              <p>Сайт разработан <br>
                <img src="images/data.png" alt="data">
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.flexisel.js"></script>
    <script src='js/script.js'> </script>
  </body>
</html>