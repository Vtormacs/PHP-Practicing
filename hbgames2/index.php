<!doctype html>
<html lang="en">

<head>
  <?php include 'core/banco_de_dados/conexao.php' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="slick-slider/1.8.1/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick-slider/1.8.1/css/slick-theme.css" />
</head>

<body>

  <div class="container text-center content">
    <div class="row align-items-start">
      <div class="col text-start">
        Cotação: <span style="color: #EC6D1C;">R$ 5,00</span> (esta cotação é fictícia)
      </div>

      <div class="col text-end d-flex justify-content-end align-items-center">
        <span>Idioma</span>
        <?php include 'components/idiomas_dropdown/idioma_dropdown.php'; ?>
      </div>
    </div>
  </div>

  <?php include 'components/navbar/navbar.php';  // Chamo a navbar ?>

  <?php include 'pages/home/home.php'; // chamo a pagina da home ?>

  <?php include 'components/footer/footer.php'; // chamo o footer ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.slider').slick({
        dots: true, // Mostra os pontos de navegação
        infinite: true, // Faz o carrossel girar continuamente
        speed: 500, // Velocidade da transição em milissegundos (0.5s)
        slidesToShow: 1, // Quantos slides aparecem ao mesmo tempo
        adaptiveHeight: true, // Ajusta a altura automaticamente
        autoplay: true, // Ativa a rotação automática
        autoplaySpeed: 3000, // Tempo entre os slides (3 segundos)
        pauseOnHover: true // Pausa a rotação automática ao passar o mouse
      });
    });
  </script>
</body>

</html>