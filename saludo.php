<!doctype html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Christmas, sale">
    <meta name="description" content="">
    <title>ProyectoJoJoJo</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/nicepage.css" media="screen">
<link rel="stylesheet" href="./css/Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.1.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Alex+Brush:400">
    
  
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-48b1"><div class="u-clearfix u-sheet u-sheet-1">
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_b15e">
        <div class="u-clearfix u-sheet u-sheet-1">
          <img class="u-image u-image-default u-image-1" id="visor" style="width: 20rem; height: 20rem;" src="" alt="" data-image-width="1280" data-image-height="806">
          <h3 class="u-custom-font u-text u-text-body-alt-color u-text-1" id="saludo">Super</h3>
          <h2 id="saludo" class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-3 text-uppercase"></h2>
          <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-2">Felíz navidad!!</h1>
          
          <br>
          <h2 id="deseo" class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-3">sale</h2>
          <p id="mensaje" class="u-text u-text-body-alt-color u-text-4">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>

        </div>
      </section>
      
      
      
      <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9dcc"><div class="u-clearfix u-sheet u-sheet-1">
        </div></footer>
      <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
          <span>Website Templates</span>
        </a>
        <p class="u-text">
          <span>created with</span>
        </p>
        <a class="u-link" href="" target="_blank">
          <span>Website Builder Software</span>
        </a>. 
      </section>
    <main>

    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
  
      function $(id){
        return document.querySelector(id);
      }
  
      const url = new URLSearchParams(window.location.search);
      const nombreURL = url.get("nombre");
      const saludo = $("#saludo");
      const deseo = $("#deseo");
      const mensaje = $("#mensaje");
  
      //console.log(nombreURL);
  
      (function(nombre){
        const parametros = new FormData();
  
        parametros.append("operacion","1");
        parametros.append("nombre",nombre);
  
        fetch(`./controllers/saludo.controller.php`,{
          method: "POST",
          body: parametros
        })
        .then(result => result.json())
        .then(data =>{
          
           if(data){
            saludo.innerHTML = "";
            deseo.innerHTML = "";
            mensaje.innerHTML = "";
  
            saludo.innerHTML = `Hola ${data.nombres}`;
            deseo.innerHTML= data.deseo;
            mensaje.innerHTML = data.mensaje;
            $("#visor").setAttribute("src",`./images/${data.imagen}.jpg`);
          } 
        })
        .catch(e =>{
          console.error(e);
        });
      })(nombreURL);
    });
    </script>
  </body>
</html>
