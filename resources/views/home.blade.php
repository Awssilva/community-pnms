<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNMS</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 


</head>

<body>
    <header>
        <div class="content">
            <nav>
                <p class="brand">
                    PNMS <strong> o grupo</strong>
                </p>
                <ul>
                    <li><a href="Catalog">Membros</a></li>
                    <li><a href="About">Sobre</a></li>
                    <li><a href="Features">Ferramentas</a></li>
                    <button>Botão</button>
                </ul>
            </nav>
            <div class="header-block">
                <div class="text">
                    <h2>Pega na minha sword</h2>
                    <p> 
                        Em caso de investigação policial, eu oficialmente declaro que não tenho envolvimento com este grupo e não sei como estou no mesmo, provavelmente fui inserido por terceiros, declaro que estou disposto a colaborar com as investigações e estou disposto a me apresentar a depoimento se necessário, declaro que sou completamente inocente e não tenho envolvimento nenhum com este caso mostrado neste grupo específico.
                    </p>
                </div>
                <img src="images/teletubbies.png" alt="telletubies">
            </div>
        </div>
    </header>
    
<section class="catalog" id="catalog">
    <div class="content">
        <div class="title-wrapper-catalog">
            <h3>Tire uma dúvida ou faça uma busca</h3>
        </div>
    </div>
    
   <div class="filter-card">

        <script async src="https://cse.google.com/cse.js?cx=91dcc0850e76f416b"></script>
        <div class="gcse-search"></div>
            
           
    </div>

    <div class="card-wrapper">
        <div class="card-item">
            <img src="images/jean.jpeg" alt="pessoa">
            <div class="card-content">
                <h3>Jean Charles</h3>
                <p>Jean Charles ou simplismente CJ é um dos membros mais quebrados e divertido.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/aridson.jpeg" alt="pessoa">
            <div class="card-content">
                <h3>Aridson Filho</h3>
                <p>Aridson Filho também conhecido como Anff é um dos maiores consumidores de hentai na América do Sul</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/billy.jpeg" alt="pessoa">
            <div class="card-content">
                <h3>Billyfranklym Pereira</h3>
                <p>Billyfranklym Pereira o Billy, é o <strong>maior</strong> computeiro de todos. Cristão | Direita | Deus | Família | Pátria 🇧🇷</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/guilherme.jpg" alt="car">
            <div class="card-content">
                <h3>Guilherme</h3>
                <p>Guigui é o membro mais ingênuo e aleatório do grupo. Sempre soltando pérolas.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/marcelo.jpg" alt="car">
            <div class="card-content">
                <h3>Marcelo Melo</h3>
                <p>Matielo faz parte do 1/4 da população mundial que não tem ressaca após uma bebedeira.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/lucas.jpeg" alt="car">
            <div class="card-content">
                <h3>Lucas Cléopas</h3>
                <p>Simplesmente o membro mais quebrado e apaixonado do grupo.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/valentim.jpg" alt="car">
            <div class="card-content">
                <h3>Valentim</h3>
                <p>Pira num carro rebaixado e somzão</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/gleison.jpg" alt="car">
            <div class="card-content">
                <h3>Gleison</h3>
                <p>Membro novo em fase de testes.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/sisaque.jpeg" alt="car">
            <div class="card-content">
                <h3>Tiago Sisaque</h3>
                <p>Marombeiro, não sabe dançar, mas nunca desistiu.</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/alexandre.jpeg" alt="car">
            <div class="card-content">
                <h3>Alexandre Silva</h3>
                <p>Progenitor do PNMS</p>
                <button type="button">Seguir</button>
            </div>
        </div>

        <div class="card-item">
            <img src="images/wanderson.jpeg" alt="car">
            <div class="card-content">
                <h3>Wanderson</h3>
                <p>O mais fofo.</p>
                <button type="button">Seguir</button>
            </div>
        </div>
        
    </div>
</section>

<!--about-->
<section class="about" id="about">
    <div class="content">
        <div class="tittle-wrapper-about">
            <p>Know about us</p>
            <h3>About</h3>
        </div>
        <div class="about-content">
            <div class="left">
                <img src="images/about.png" alt="about">
            </div>
            <div class="right">
                <h3>Join technology and mobility</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis neque, laboriosam commodi suscipit consequuntur accusamus vel magnam fugit numquam accusantium dignissimos. Corrupti, inventore modi, a unde voluptatum laboriosam ratione minima nesciunt explicabo voluptatem soluta eum tempora voluptas maxime beatae dignissimos sequi consequatur? Numquam illum animi quaerat dignissimos quo temporibus iure possimus aliquam aspernatur. Reprehenderit reiciendis unde repudiandae et consectetur eius architecto ducimus eum aut nulla impedit cum totam enim rem numquam, harum fugiat voluptas illum ullam facilis illo. Iure distinctio aperiam delectus veniam. Natus, dolor facilis quasi facere dicta suscipit consequuntur quidem aut molestiae voluptatum inventore corporis, nihil in doloribus?</p>
            </div>
        </div>
    </div>
</section>

<!--features-->

<section class="features" id="features">
    <div class="content">
        <div class="title-wrapper-features">
            <p>What you can do</p>
            <h3>Features</h3>
        </div>
        <div class="feature-card-block">
            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="feature-card-item">
                <img src="images/feature-planet.png" alt="planet-feature">
            </div>
            <div class="feature-text-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

        </div>
    </div>
</section>

<!--footer-->

<footer>
    <div class="main">
        <div class="content footer-links">
            <div class="footer-company">
                <h4>Company</h4>
                <h6>About</h6>
                <h6>Contact</h6>
            </div>
            <div class="footer-rental">
                <h4>Rental</h4>
                <h6>Self-Drive</h6>
                <h6>Chuffer-Drive</h6>
                <h6>Help</h6>
            </div>
            <div class="footer-social">
                <h4>Stay connected</h4>
                <div class="social-icons">
                    <img src="images/facebook.png" alt="-facebook-icon">
                    <img src="images/instagram.png" alt="instagram-icon">
                </div>
            </div>
            <div class="footer-contact">
                <h4>Contact us</h4>
                <h6>+55 999999999</h6>
                <h6>contato@lala.com.br</h6>
                <h6>Rua, Número, Bairro</h6>
            </div>
        </div>
    </div>
    <div class="last">
        Awssilva project 2022 - Only one way
    </div>
</footer>
   
</body>
</html>