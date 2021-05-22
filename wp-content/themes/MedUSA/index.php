<!-- pegando o cabecalho -->
<?php get_header(); ?>

<!-- introd <?php
$img_url = get_stylesheet_directory_uri() . '/img';
?>ucao -->


<section class="intro">
    <div class="fundo-preto  uk-column-1-2 ">
        <div class="caixa-img-1 uk-inline-clip uk-transition-toggle"><img
                class="img-1 uk-transition-scale-up uk-transition-opaque" src="<?= $img_url; ?>/imagem_1.jpg" alt="">
        </div>
        <div class="card uk-card  uk-card-large uk-card-body uk-section uk-margin-small-top uk-margin-large-bottom">
            <h1 class="uk-h1 uk-heading-medium  ">MedUSA</h1>
            <h3 class="uk-h3">Physician services to help you manage your practice.</h3>
            <button class="uk-button uk-button-primary" id="btn-vermelho">View Our Services</button>
            <button class="uk-button uk-button-primary" id="btn-vermelho">Software We Offer</button>
        </div>
    </div>

    <div class="uk-margin-xlarge-top uk-container uk-column-1-2 ">
        <div class=" caixa-3 ">
            <h2 class="uk-h2">Cloud Based RCM Service and Software</h2>
            <h5 class="uk-h5">Excellent Service is Our Promise</h5>
            <p class="">Provinding excellent service to your patients and your practice is our promise. Our
                dedicated team of
                billing specialists and billing managers are here to help. We have over 38 years of combined pratice
                management and industry knowledge. Let our experience work for you</p>
            <button class="uk-button uk-button-primary" id="btn-vermelho">See Our Case Studies</button>
        </div>

        <div class="uk-container caixa-img-1 uk-inline-clip uk-transition-toggle"><img
                class="img-2 uk-transition-scale-up uk-transition-opaque" src="<?= $img_url; ?>/medico.jpg" alt="">
        </div>
    </div>
</section>

<!-- section formulario -->
<section class="sessao-form ">
    <div class="farm-container">
        <!-- <div class="titulo-formulario uk-container  "> -->
        <h2 class="uk-h2 ">From Small Practices to Large Provider Health Systems, Med USA Provides
            Scalable Solutions.</h2>
        <!-- </div> -->
        <div class=" titulo-form">
            <h3>Reach out see how our team can help.</h3>
            <div class="formulario r">
                <form class="#" action="<?php echo home_url() ?>/index.php" method="post" name="form"
                    class="formphp contato_form ">

                    <div class="camp">
                        <div class="inputbox">
                            <label for="nome"></label>
                            <input class="uk-width-1-4@s uk-input" id="forst_nome" name="nome" type="text"
                                placeholder="First Name">
                        </div>

                        <div class="inputbox">
                            <label for="nome"></label>
                            <input class="uk-width-1-4@s uk-input " id="last_nome" name="nome" type="text"
                                placeholder="First Name">
                        </div>
                    </div>
                    <div class="camp">
                        <div class="inputbox">
                            <label for="email"></label>
                            <input class="uk-width-1-4@s uk-input" id="email" name="email" type="text"
                                placeholder="E-mail" placeholder="First Name">
                        </div>

                        <div class="inputbox">
                            <label for="telefone"></label>
                            <input class="uk-width-1-4@s uk-input" id="telefone" name="telefone" type="text"
                                placeholder="First Name">
                        </div>
                    </div>
                    <div class="camp btn-enviar">
                        <button class="uk-button uk-button-primary enviar" id="enviar" name="enviar" type="submit"
                            class="btn btn-preto" id="btn-form">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- pagando o rodape -->
<?php get_footer(); ?>