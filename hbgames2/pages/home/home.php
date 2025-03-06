<div style="border-top: 1px solid rgb(201, 201, 201); margin-left: 9rem; padding-bottom: 2rem; margin-right: 9rem;">
</div>

<?php include 'components/carrossel_principal/carrossel.php'; ?>

<?php include 'components/coluna_imagens/pod-banner.php'; ?>

<?php include 'components/infos_home/infos_home.php'; ?>

<?php include 'components/grid_banner/grid_banner.php'; ?>

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