<link rel="stylesheet" href="components/carrossel_principal/carrossel.css">

<div class="d-flex justify-content-center">
    <div class="slider">
        <div><img src="assets/imgs/carrossel_principal/principal-1120x370-0a3teste-ae2.jpg" alt="Image 1"></div>
        <div><img src="assets/imgs/carrossel_principal/principal-1120x370-0a3.jpg" alt="Image 2"></div>
        <div><img src="assets/imgs/carrossel_principal/principal-1120x370-004.png" alt="Image 3"></div>
    </div>
</div>

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