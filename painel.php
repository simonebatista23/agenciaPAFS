<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência P.A.F.S</title>
    <link rel="stylesheet" href="src-painel/css/reset.css">
    <link rel="stylesheet" href="src-painel/css/variables.css">
    <link rel="stylesheet" href="src-painel/css/style.css">
    <link rel="stylesheet" href="src-painel/css/menu.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src-painel/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <a href="painel.php">
                <h1 class="logo">Agência P.A.F.S</h1>
            </a>

            <nav>
                <input type="checkbox" id="menu-hamburguer" />

                <label for="menu-hamburguer">
                    <div class="menu">
                        <span class="hamburguer"></span>
                    </div>
                </label>

                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#Pets">Pet's</a></li>
                    <li><a target="_blank" href="quemSomos.php">Quem Somos</a></li>
                    <?php
                   
                    if (isset($_GET['email'])) {
                        
                        $emailUsuario = $_GET['email'];
              
                        echo '  <li><a href="#"><i class="fas fa-user">  </i>&nbsp' . htmlspecialchars($emailUsuario) . '</a></li>';
                    }
                    ?>


                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <img src="src-painel/images/imagem_do_post-105.jpg" alt="" srcset="">

    </section>

    <main>


        <section class="about" id="about">
            <div class="item">
                <h3>Camping</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio modi assumenda! Reiciendis placeat
                    maiores, ab veritatis delectus architecto atque sed illo cum dicta? Explicabo fugiat odio itaque
                    repellendus aut!
                </p>
                <a href="" class="btn-know-more">Saiba mais</a>

            </div>

            <div class="image right">
            </div>
            <div class="image left"></div>

            <div class="item">
                <h3>Cuidados com os Pet's</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, neque. Nihil accusamus porro
                    provident
                    officia natus consequuntur, totam amet quae tempora ipsum, perspiciatis voluptatem earum, neque
                    velit
                    odio quas quasi?
                </p>
                <a href="" class="btn-know-more">Saiba mais</a>
            </div>

        </section>

        <section class="services" id="services">
            <div class="service">
                <img src="src-painel/images/bolinha1.png" alt="bolinha 1">
                <div class="service-info">
                    <h3>Serviços</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni deleniti voluptas ipsam alias
                        adipisci, reiciendis ducimus odit? Expedita, cupiditate sequi sunt vitae dolorum facilis,
                        perspiciatis pariatur saepe in neque aspernatur.
                    </p>
                </div>
            </div>


            <div class="service">
                <img src="src-painel/images/bolinha2.png" alt="bolinha 2">
                <div class="service-info">
                    <h3>Serviços</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni deleniti voluptas ipsam alias
                        adipisci, reiciendis ducimus odit? Expedita, cupiditate sequi sunt vitae dolorum facilis,
                        perspiciatis pariatur saepe in neque aspernatur.
                    </p>
                </div>
            </div>

        </section>

        <section class="pets" id="Pets">

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/vida-de-gato1.jpg" alt="gatinho">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/gato2.webp" alt="gatinho">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/gato3.webp" alt="gatinho">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/gato4.webp" alt="gatinho">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/dogCorrendo.jpg" alt="cachorro correndo">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/dogs2.jpg" alt="cachorro">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/dogComBolinha.avif" alt="cachorro com bolinha">
                </a>
            </div>

            <div class="pet">
                <a href="">
                    <img src="src-painel/images/dogs4.jpg" alt="cachorro">
                </a>
            </div>




        </section>


        <footer class="footer" id="contact">
            <h4>Agência P.A.F.S</h4>

            <nav>
                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#Pets">Pet's</a></li>
                </ul>
            </nav>

            <div class="social">
                <a href="">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="">
                <i class="fab fa-whatsapp" ></i>
                </a>
            </div>
        </footer>
    </main>



</body>

</html>