<?php
include_once "conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br" class="">

<head>
  <link rel="canonical" href="https://portfolio.devlocks.net.br/">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="portfolio iOS">
  <link rel="apple-touch-icon" href="images/icons/icon-152x152.png">
  <link rel="manifest" href="manifest.json" /> 
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">   
  <link rel="stylesheet" href="style.css"> <!--referencia ao arquivo css e acima referencia ao bootstrap-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
  <link rel="stylesheet" href="day-night.css">

  
  <title>Portfólio - Adrian c. Locks</title>
</head>

<body>
    
                 

  <!-- cabecalho -->
  <section id="header"> <!--comeco da sessao do cabecalho-->
                
    <div class="header container">     <!--comeco das div para estilizar por grupos-->
      <div class="nav-bar">
        <div class="brand">
          <a href="#principal">
            <h1><span>A</span>dri<span>A</span>N</h1> <!--divisao das letras para estilizacao-->
          </a>
        </div>
        
        
        <div class="nav-list">  <!--bloco da barra de navegacao e menu-->
          <div class="hamburger">
            <div class="bar"></div>
          </div>

          
          <ul>
            <li><a href="#principal" data-after="Home">Inicio</a></li>  <!--lista de links desordenada-->
            <li><a href="#projeto" data-after="Projeto">Portfólio</a></li>
            <li><a href="#sobre" data-after="sobre">Sobre</a></li>
            <li>
              <a class="forma" href="#cursos"  data-after="formacao" >formação</a>
              
               <!--<ul class="sub-menu">
                 <li><a href="#cursos" data-after="cursos">cursos</a></li>
                 <li><a href="#competencias" data-after="competencias">competençias</a></li>
                 
               </ul> -->
            
            </li>

            <li><a href="#contato" data-after="Contato">Contato</a></li>
            
           
          </ul>
        
         
        </div>
      
      </div> 
    </div>
  
    <div class="day-night" id="day-night" >
      <!--div class="day-night s-icon"-->
        <i class="fas fa-moon"></i>
      </div>  
    </div>

    <!--div class="form-check form-switch">
      
      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked 
        style="background-color:black; border-color:white; box-shadow:none; 
        margin-top:-1px; width:25px;height:13px;">
       <label class="form-check-label" for="flexSwitchCheckDefault"></label>
         
       <i class="fa-solid fa-wand-magic-sparkles"></i>
     
      
       
      
    </div-->
   

  </section>
  <!-- fim cabecalho -->


  <!-- sessao principal  -->
  <section id="principal">
     <div class="principal container">  <!--container principal-->
      <div>
        <h1>Olá, <span></span></h1>       <!--palavras separadas para estilizacao individual-->
        <h1>Meu Nome é  <span></span></h1>
        <h1>Adrian C. Locks <span></span></h1>
        <a href="Curriculo.pdf" target="_blank" type="button" class="cta">Currículo </a> <!--link para curriculo pdf-->
      
    
      </div>
    </div>

    <div class="social-inicio">  <!--bloco para as midias sociais-->
      <ul>
        <li><a href="https://www.facebook.com/adrianlocks2012" target="_blank" title="Facebook"><i class="fa-brands fa-facebook" alt="facebook"></i></a></li>
        <li><a href="https://wa.me/+55048984079002" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp" alt="whatsapp"></i></a></li>
        <li><a href="https://www.linkedin.com/in/adrian-cristopher-locks-1b3178206/" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin" alt="linkedin"></i></a></li>
        <li><a href="https://github.com/AdrianLocks" target="_blank" title="Github"><i class="fa-brands fa-github" alt="github" ></i></a></li>
      </ul>
    </div>

  
  </section>
  <!-- fim sessao principal  -->

  

  <!-- Sessao Projeto -->
  <section id="projeto">
    <div class="projeto container">
      <div class="projeto-header">
        <h1 class="section-title">Projetos <span>Recentes</span></h1>
      </div>
      <div class="todos-projeto">   <!--projetos criados e em andamentos, links-->
        <div class="projeto-item">
          <div class="projeto-info">
            <h1>Projeto 1</h1>
            <h2>Marquinho Lanches Website</h2>
            <p>
              <a href="https://adrianlocks.github.io/marquinholanches/">Clique aqui para conhecer o projeto!</a>
            </p>
          </div>
          <div class="projeto-img">
            <img src="./img/img-11.jpg" alt="imagem">
          </div>
        </div>
        <div class="projeto-item">
          <div class="projeto-info">
            <h1>Projeto 2</h1> 
            <h2>ConversorBR</h2>  
            <p>

              <a href="https://adrianlocks.github.io/ConversorBR/">Acesse o site e conheça o projeto em andamento! Clique aqui!</a>
            </p>
          </div>
          <div class="projeto-img">
            <img src="./img/img-20.jpg" alt="img">
          </div>
        </div>
        <div class="projeto-item">
          <div class="projeto-info">
            <h1>Projeto 3</h1> 
            <h2>DevLocks Solutions Web</h2>  
            <p>

              <a href="https://devlocks.net.br">Meu site de negócios! Clique aqui!</a>
            </p>
          </div>
          <div class="projeto-img">
            <img src="./img/devlocks10.png" alt="img">
          </div>
        </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- Fim da sessao projetos -->

  <!-- Sessao Sobre -->
  <section id="sobre">
    <div class="sobre container">
      <div class="col-left">
        <div class="sobre-img">
          <img src="./img/img-2.jpeg" alt="img" title="Olá">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sobre <span>Min</span></h1>
        <h2>Área de Ti em geral!</h2>
        <p>   Procurando oportunidades na área de tecnologia, ótima  resolução de problemas, aprendizado rápido, esforçado e dedicado no que faz, trabalhei com logística á mais de 15 anos, cursando superior em tecnologia com término em 12/2023.</p>
        <p>*Apresentação em Video!<br/><span> - Linkedin -</span><a href="https://www.linkedin.com/posts/adrian-cristopher-locks-1b3178206_breve-apresenta%C3%A7%C3%A3o-activity-7082115900354568192-C7ka?utm_source=share&utm_medium=member_desktop" target="_blank" title="Clique aqui!">  Link apresentação! </a> <br/></p>      
        <h2>Formação e Cursos:</h2>
        <div class="span-facul">
          <p>*Tecnólogo em Análise e Desenvolvimento de Sistemas<span> - Uninter</span><a href="img/uninter.jpeg" target="_blank" title="Clique aqui!"> Link Carteira Estudantil!</a> <br/>
            *Programa por dentro do mercado de TI-A influência do chatGpt e outras IAs no mercado de trabalho em TI<br;><span> -Uninter-</span><a href="certificadoChatGpt.pdf" target="_blank" title="Clique aqui!"> Link Certificado!</a> <br/>
          </p>
        </div>
        <div class="span-cursos">
          <p>
          *Certificado de Autoridade: HTML <br/><span> - DevMedia -</span><a href="https://www.devmedia.com.br/certificado/tecnologia/html/adrian-cristopher-locks" target="_blank" title="Clique aqui!">  Link Certificado!</a> <br/>
          *Programador Front-end: introdução<br/><span> - DevMedia -</span><a href="https://www.devmedia.com.br/certificado/tecnologia/programacao/adrian-cristopher-locks" target="_blank" title="Clique aqui!">  Link Certificado! </a> <br/>
          
          </p>
        </div>
      
        <a href="Curriculo.pdf" download="curriculo" class="cta">Download CV</a>
      </div>
    </div>
  </section>
  <!-- Fim da sessao sobre -->
  
  <!--  sessao formacao -->
  <section id="cursos">
    
    <div class="container-fluid"> 
      
        <h1 class="section-title">Form<span>ação</span></h1>

        <!-- Split dropend button -->
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary" title="Clique no icone para abrir o menu!" style="font-family: 'Montserrat',sans-serif;background-color:#485563;">
            Formação Opções:
          </button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#29323c;">
            <span class="visually-hidden">Toggle Dropright</span>
          </button>
          <ul class="dropdown-menu">
            <!-- Dropdown menu links -->
            <a href="#cursos">Certificados</a>
            <a href="#competencias">Competencias</a>
          </ul>
        </div>
        
        
        <h2> Certificados:</h2>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="./img/certificado1.png"  class="d-block w-100"  alt="certificado1" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 1</h5>
                <p>Programador front-end:introdução</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="./img/certificado2.png" class="d-block w-100" alt="certificado2" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>Fundamentos de TI:Hardware e Software</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/certificado3.png" class="d-block w-100" alt="certificado3" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>HTML:Fundamentos do Html</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/certificadoChatGpt.png" class="d-block w-100" alt="certificado4" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 4</h5>
                <p>*A influência do chatGpt e outras IAs no mercado de trabalho em TI</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/DS.png" class="d-block w-100" alt="certificado5" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 5</h5>
                <p>Fundamentos de Design Gráfico</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/canva.gif.gif" class="d-block w-100" alt="certificado6" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 6</h5>
                <p>Canvas:Design </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/uninter4.jpg" class="d-block w-100" alt="certificado7" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 7</h5>
                <p>Carteira Estudantil Uninter </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/certificado8.jpg" class="d-block w-100" alt="certificado2" onclick="window.open(this.src)">
              <div class="carousel-caption d-none d-md-block">
                <h5>Slide 8</h5>
                <p>Microsoft excel 2016-Básico</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      <p>clique na imagem para uma melhor visualização!</p>  <br/>

      <div class="competencias" id="competencias">
        <h1>COMPE<span>TENÇIAS</span></h1>
        <h5>HTML</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
        </div><br/>
        <h5>CSS</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
        </div><br/>
        <h5>JAVASCRIPT</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%">45%</div>
        </div><br/>
        <h5>PYTHON</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
        </div><br/>
        <h5>FRAMEWORKS WEB</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
        </div><br/>
        <h5>EDITOR DE IMAGENS</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
        </div><br/>
        <h5>WORDPRESS</h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">65%</div>
        </div><br/>
        <p>Em Desenvolvimento!</p>
      </div>

    <!--div>-->


      <!--<div class="imagen-cert">
        <div>
          <img src="./img/certificado1.png">
        </div><br/>
        <div>
          <img src="./img/certificado2.png">
        </div><br/>
        <div>
          <img src="./img/certificado3.png">
        </div><br/>
        <div>
          <img src="./img/certificado4.png">
        </div><br/>
        <div>
          <img src="./img/certificado5.png">
        </div><br/>
      </div-->

        
    </div>
  </section>
  <!-- sessao contato -->
  <section id="contato">
    <div class="contato container">
      <div>
        <h1 class="section-title">Cont<span>atos</span></h1>
      </div>
      <div class="contato-items">
        <div class="contato-item">
          <a class="icon" href="tel:+5548984079002" target="_blank" title="Clique!"><img  src="https://img.icons8.com/bubbles/100/000000/phone.png" /></a>
          <div class="contato-info">
            <h1>Telefone</h1>
            <h2> (48) 984079002</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contato-item">
          <a class="icon" href="https://mail.google.com/mail" target="_blank" title="Clique!"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></a>
          <div class="contato-info">
            <h1>Email</h1>
            <h2>Adrianlocks2013@gmail.com</h2>
            <h2>Adrianlocks2015@outlook.com</h2>
          </div>
        </div>
        <div class="contato-item">
          <a class="icon" href="https://www.google.com.br/maps/dir//R.+Seiscentos+e+Vinte+e+Dois,+202+-+Barra+do+Aririu,+Palho%C3%A7a+-+SC/@-27.6711151,-48.6526555,19.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x95273416cd65db31:0x8ea802083238582e!2m2!1d-48.6520663!2d-27.6709404" target="_blank" title="Clique!"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></a>
          <div class="contato-info">
            <h1>Endereço</h1>
            <h2>Palhoça,Santa Catarina,Brasil</h2>
          </div>
        </div>
        <div class="contato-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contato-info">
            <h1>Deixe seu contato!</h1>

          
          
                                             <!--formulario com bootstrap-->
                                                 
              <div class="row">        
                <div class="col-md-4">
                
                <?php
                 if(isset($_SESSION['msg'])){
                    echo ($_SESSION['msg']);
                    unset($_SESSION['msg']);
                 }
                 ?>         <!--processa.php--><!--no action! para conexao com o BD ,arquivo ja esta ja pasta do projeto-->
                 
                  <form data-toggle="validator" role="form" id="portfolioform"  action="https://formsubmit.co/adrianlocks2013@gmail.com" method="POST" >
                      
                      <div class="form-group">
                        <label  for="inputName" class="control-label">nome:</label>
                        <input name="nome_usuario" type="text" class="form-control" id="inputName" placeholder="nome" required>
                      <div class="help-block with-errors"></div>
                      <div class="form-group">
                        <label  for="inputEmail" class="control-label">email:</label>
                        <input name="email_usuario" type="email" class="form-control" id="inputName" placeholder="email" required>
                      <div class="help-block with-errors"></div>
                      </div>        
                      <div class="form-group">
                        <label for="inputFone" class="control-label">telefone:</label>
                        <input name="telefone_usuario" type="text" class="form-control" id="inputFone" placeholder="(XX) XXXXXXXXX" pattern="[0-9]{11}$" required>
                      <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="inputMensagem"  class="control-label">Mensagem:</label>
                        
                        <textarea  name="mensagem_usuario" class="form-control" aria-label="With textarea"></textarea>
                      </div>
                      
                      <input type="hidden" name="_next" value="https://portfolio.devlocks.net.br/thanks.php">
                      <input type="hidden" name="_autoresponse" value="Obrigado! Em breve entrarei em contato!">
                      
                      <button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
                  </form>
                
                </div>
                <div class="col-md-4"></div>
              </div>
           
            <h2>Seus dados estão seguros!</h2>
          </div>
        </div>
      </div>
    </div>
   
  </section>
  <!-- Fim da sessao contato -->
  


  <!-- Footer(rodape) -->
 

  <section id="footer">

    <div class="footer container">
      <div class="brand">
        <h1><span>A</span>dr<span>ian</span> C. <span>Lo</span>cks</h1>
      </div>
      <h2>Midias Sociais:</h2>
      <div class="social-icon">  <!--bloco para as midias sociais-->
        <div class="social-item">
          <a href="https://www.facebook.com/adrianlocks2012" target="_blank" title="Facebook"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://wa.me/+55048984079002" target="_blank" title="WhatsApp"><img src="https://img.icons8.com/bubbles/100/000000/whatsapp.png" /></a>

        </div>
        <div class="social-item">
          
          <a href="https://www.linkedin.com/in/adrian-cristopher-locks-1b3178206/" target="_blank" title="Linkedin"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://github.com/AdrianLocks" target="_blank" title="Github"><img src="https://img.icons8.com/bubbles/100/000000/github.png" /></a>
        </div>
      </div>
      <p>Copyright © 2023 Adrian c. Locks</p>  <br/> <p>todos os direitos reservados</p>
    
      <div> 
      <a href="#" class="scrollToTop">
        <i class="fa-solid fa-arrow-up"></i>
      </a>
     
     </div>
    </div>
  </section>
  <!-- Fim Footer -->

  <!--scripts, referencia arquivo js do projeto e bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <script src="https://kit.fontawesome.com/e6c2099302.js" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
  
  
  
  
                                                       <!--wpa script-->
                                                       
                 <script>
// This is the service worker with the Cache-first network
// Add this below content to your HTML page, or add the js file to your page at the very top to register service worker
// Check compatibility for the browser we're running this in
if ("serviceWorker" in navigator) {
 if (navigator.serviceWorker.controller) {
   console.log("[PWA Builder] active service worker found, no need to register");
 } else {
 // Register the service worker
   navigator.serviceWorker
     .register("pwabuilder-sw.js", {
      scope: "./"
      })
      .then(function (reg) {
        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
        });
      }
}
</script>



  
  <script src="./day-night.js"></script>
  <script src="./index.js"></script>
  <script src="./app.js"></script> 
  <script src="./tel.js"></script>
  <script src="./arrasta.js"></script> 
  <script src="./certificado.js"></script>   
  <script src="./dropdown.js"></script> 
  <script style="text/javascript" src="bootstrap.min.js" ></script>
  <script style="text/javascript" src="bootstrap.js" ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
  <script>
      $(function () {
        $('.dropdown-toggle').dropdown();
      }); 
  </script>

  <!--jquery voltar ao topo-->
  <script>
    $(document).ready(function(){

      //Verifica se a Janela está no topo
      $(window).scroll(function(){
          if ($(this).scrollTop() > 100) {
              $('.scrollToTop').fadeIn();
          } else {
              $('.scrollToTop').fadeOut();
          }
      });
  
      //Onde a mágia acontece! rs
      $('.scrollToTop').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
      });
  
  });
  </script>
  
</body>

</html>

<?php
?>
