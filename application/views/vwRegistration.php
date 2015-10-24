
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MAXIMA</title>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url().FOUND; ?>css/foundation.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/registration.css" />
    </head>
    
    <body>
        <div class="row mainContent">
            <div class="large-12 columns">
                <img src="<?php echo base_url().IMG ?>event/alex.png">
            </div>
            
            <div class="large-12 columns">
                <img src="<?php echo base_url().IMG ?>common/bgForm.png">
                <form class="formRegistro">
                    <div class="row" style="margin-left:40px; margin-right:40px;">
                        <div class="large-9 medium-9 small-9 columns">
                            <label>NOMBRE:
                            <input id="txtName" type="text" />
                            </label>
                        </div>
                        <div class="large-3 medium-3 small-3 columns">
                            <label>EDAD:
                            <input id="txtAge" type="text" />
                            </label>
                        </div>
                    </div>
                    <div class="row" style="margin-left:40px; margin-right:40px;">
                        <div class="large-6 medium-6 small-6 columns">
                            <label>E-MAIL:
                            <input id="txtEmail" type="text" />
                            </label>
                        </div>
                        <div class="large-3 medium-3 small-3 columns">
                            <label>SUPERMANZANA:
                            <input id="txtSmz" type="text" />
                            </label>
                        </div>
                        <div class="large-3 medium-3 small-3 columns">
                            <label>SEXO:
                            <select id="txtSex">
                              <option value="hombre">HOMBRE</option>
                              <option value="mujer">MUJER</option>
                            </select>
                            </label>
                        </div>
                    </div>
                    <div class="row" style="margin-left:40px; margin-right:40px;">
                        <div id="msgThx" style="display:none;" data-alert class="alert-box success radius">
                              <center>¡ GRACIAS POR SU REGISTRO !</center>
                            </div>
                        <div class="large-12 medium-12 small-12 columns">
                            <img id="btnSend" src="<?php echo base_url().IMG ?>common/btnSend.png">
                        </div>
                    </div>
                </form>
            </div>
            <div class="large-12 columns">
                <img src="<?php echo base_url().IMG ?>common/bgRedes.png">
                <div class="rowRedes">
                    <a href="https://instagram.com/maxima977cancun" target="_blank"><img src="<?php echo base_url().IMG ?>common/btnRedes1.png"></a>
                    <a href="https://twitter.com/maxima977cancun" target="_blank"><img src="<?php echo base_url().IMG ?>common/btnRedes3.png"></a>
                    <a href="https://www.facebook.com/maxima977cancun" target="_blank"><img src="<?php echo base_url().IMG ?>common/btnRedes2.png"></a>
                </div>
            </div>
            <div class="large-12 columns">
                <a href="http://godeals.mx/" target="_blank">
                    <img src="<?php echo base_url().IMG ?>common/bgGoDeals.png">
                </a>
            </div>
            <div class="large-12 columns">
                <img src="<?php echo base_url().IMG ?>common/bgFooter.png">
                <div class="rowTiendas">
                    <a href="https://play.google.com/store/apps/details?id=mx.godeals" target="_blank"><img src="<?php echo base_url().IMG ?>common/btnGPlay.png"></a>
                    <a href="https://itunes.apple.com/es/app/go-deals/id932481336?mt=8" target="_blank"><img src="<?php echo base_url().IMG ?>common/btnItunes.png"></a>
                </div>
            </div>
        </div>
    </body>

    <script>
    var URL_BASE = '<?php echo base_url(); ?>';
    </script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().FOUND; ?>js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/registration.js"></script>
</html>