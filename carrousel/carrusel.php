<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="carrusel.css" />
    <script
      src="https://kit.fontawesome.com/887a835504.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="carrousel">
      <div class="conteCarrousel">
        <div class="itemCarrousel" id="itemCarrousel-1">
          <div class="itemCarrouselTarjeta">
            <center>
              <img src="tramadol.png" width="1000" height="500" alt="" />
            </center>
            <div class="texto-encima"></div>
            <div class="centrado">Medicamento Generico</div>
          </div>
          <div class="itemCarrouselArrows">
            <a href="#itemCarrousel-3">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#itemCarrousel-2">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="itemCarrousel" id="itemCarrousel-2">
          <div class="itemCarrouselTarjeta">
            <center>
              <img src="IBUPROFENO.jpg" width="1000" height="500" alt="" />
            </center>
            <div class="centrado">Medicamento Generico</div>
          </div>
          <div class="itemCarrouselArrows">
            <a href="#itemCarrousel-1">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#itemCarrousel-3">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="itemCarrousel" id="itemCarrousel-3">
          <div class="itemCarrouselTarjeta">
            <center>
              <img src="complejob.jpg" width="1000" height="500" alt="" />
            </center>
            <div class="texto-encima"></div>
            <div class="centrado">Medicamento Generico</div>
          </div>
          <div class="itemCarrouselArrows">
            <a href="#itemCarrousel-2">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a href="#itemCarrousel-1">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="conteCarrouselController">
        <a href="#itemCarrousel-1">•</a>
        <a href="#itemCarrousel-2">•</a>
        <a href="#itemCarrousel-3">•</a>
      </div>
    </div>
  </body>
</html>
