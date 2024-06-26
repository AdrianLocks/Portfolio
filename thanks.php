<?php
include_once "conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br" class="">

<head>
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
          <a href="https://adrianlocks.github.io/Portfolio/#principal">
            <h1><span>A</span>dri<span>A</span>N</h1> <!--divisao das letras para estilizacao-->
          </a>
        </div>
        
        
        <div class="nav-list">  <!--bloco da barra de navegacao e menu-->
          <div class="hamburger">
            <div class="bar"></div>
          </div>

          
          <ul>
            <li><a href="https://adrianlocks.github.io/Portfolio/#principal" data-after="Home">Inicio</a></li>  <!--lista de links desordenada-->
            <li><a href="https://adrianlocks.github.io/Portfolio/#projeto" data-after="Projeto">Portfólio</a></li>
            <li><a href="https://adrianlocks.github.io/Portfolio/#sobre" data-after="sobre">Sobre</a></li>
            <li>
              <a class="forma" href="https://adrianlocks.github.io/Portfolio/#cursos"  data-after="formacao" >formação</a>
              
               <!--<ul class="sub-menu">
                 <li><a href="#cursos" data-after="cursos">cursos</a></li>
                 <li><a href="#competencias" data-after="competencias">competençias</a></li>
                 
               </ul> -->
            
            </li>

            <li><a href="https://adrianlocks.github.io/Portfolio/#contato" data-after="Contato">Contato</a></li>
            
           
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
        <h1>Obrigado! <span></span></h1>       <!--palavras separadas para estilizacao individual-->
        <h1>Entrarei em contato  <span></span></h1>
        <h1>Em breve! <span></span></h1>
      
    
      </div>
    </div>

    <div class="social-inicio">  <!--bloco para as midias sociais-->
      <ul>
        <li><a href="https://www.instagram.com/adrian.locks?utm_source=qr&igshid=OGIxMTE0OTdkZA%3D" target="_blank" title="Instagram"><i class="fa-brands fa-instagram" alt="instagram"></i></a></li>
        <li><a href="https://wa.me/+55048984079002" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp" alt="whatsapp"></i></a></li>
        <li><a href="https://www.linkedin.com/in/adrian-cristopher-locks-1b3178206/" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin" alt="linkedin"></i></a></li>
        <li><a href="https://github.com/AdrianLocks" target="_blank" title="Github"><i class="fa-brands fa-github" alt="github" ></i></a></li>
      </ul>
    </div>

  
  </section>
  <!-- fim sessao principal  -->

  

  


  <!-- Footer(rodape) -->
 

  <section id="footer">

    <div class="footer container">
      <div class="brand">
        <h1><span>A</span>dr<span>ian</span> C. <span>Lo</span>cks</h1>
      </div>
      <h2>Midias Sociais:</h2>
      <div class="social-icon">  <!--bloco para as midias sociais-->
        <div class="social-item">
          <a href="https://www.instagram.com/adrian.locks?utm_source=qr&igshid=OGIxMTE0OTdkZA%3D" target="_blank" title="Instagram"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
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