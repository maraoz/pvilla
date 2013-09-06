<?php
ob_start('ob_gzhandler');
header('Content-Encoding: gzip');
header('Accept-Encoding: gzip,deflate');
require_once 'includes/proceres.php';
$url = urlencode("http://www.revolucion1810.com.ar?date=25051810&12");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Revolución Mayo 1810" />
        <meta property="og:description" content="La apasionante historia de la Revolución como nunca te la contaron. Viví la semana de Mayo en Tiempo Real contada por sus propios protagonistas." />
        <meta property="og:image" content="/img/Compartir.jpg" />
        <title>Revoluci&oacute;n Mayo 1810</title>
        <!--google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'/>
        <!-- styles -->
        <!-- styles -->
        <link type="text/css" rel="stylesheet" href="/styles/common.css" />
        <link type="text/css" rel="stylesheet" href="/js/fancybox/jquery.fancybox-1.3.4.css" />
        <!--jquery-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/plax.js"></script>
        <script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

        <link rel="stylesheet" href="/js/twitter/jquery.jtweetsanywhere-1.3.1.css"/>
        <script type="text/javascript" src="/js/twitter/mg54_jquery.jtweetsanywhere-1.3.1.js"></script>

        <!--<link rel="stylesheet" href="/js/jquery.tweet.css"/>
        <script language="javascript" src="/js/jquery.tweet.js" type="text/javascript"></script>-->

        <style type="text/css">
          #jTweetsAnywhereEndlessScrollingSample .jta-tweet-list
            {
                height: 870px;
                overflow:auto;
            }
            div#shell {
                display: block;
                position: relative;
                /*margin: 100px auto;*/
                width: 100%;
                height: 450px;
                z-index: 1;
                overflow-x:hidden;
            }
            #fondo {
                position:relative;
                top:0px;
                left:-20px;
            }
        </style>
        <script type="text/javascript">
            $(function(){
                $.fancybox.showActivity();
                $.fancybox({
                    'overlayColor':'#0f0f0f',
					'overlayOpacity' : 0.9,
                    href:'bienvenida.html',
                    showCloseButton:false
                });
                
                $('#shell a img').plaxify()
                $.plax.enable();
                $('#shell .box span img').fadeTo(10, 0);
                // $.plax.enable({ "activityTarget": $('#shell')})
                /*$(".tweet").tweet({ // aca es donde se le indica donde poner los tweets, le pondremos un div vacio con clase .tweets
                    username: "NinjaArroyo", // el usuario vwargentina - mg54digital
                    list: "revolucionarios", // lista
                    avatar_size: 48, // Ponle 0 si no quieres avatares
                    count: 14, // Numero de tweets
                    loading_text: "Cargando..."
                });*/
                $('#jTweetsAnywhereEndlessScrollingSample').jTweetsAnywhere({
                    username: 'MG54Digital',
                    list: "Mayo1810",
                    //username: 'rspirolazzi',
                    count: 200,
                    url: 'http://www-revolucion-mayo.com.ar',
                    showTweetFeed: {
                        showProfileImages: true,
                        showUserScreenNames: true,
                        showUserFullNames: true,
                        paging: {
                            mode: 'endless-scroll',
                            _limit:200
                        }
                    },
                    onDataRequestHandler: function(stats) {
                        if (stats.dataRequestCount < 11) {
                            return true;
                        }
                        else {
                            alert("To avoid struggling with Twitter's rate limit, we stop loading data after 10 API calls.");
                        }
                    }
                });
                $('#shell .box a.link').click(function(e) {
                    $(this).addClass('selected');
                    $('.tit_procer').html($(this).attr('title'));
                    $('.tw_procer').html($(this).attr('rel'));
                    var url = $(this).attr('href');
                    $('.btn_seguir_link').attr('href', url);
                    e.preventDefault();
                });
                $('.box').hover(function() {
                    $(this).find('span img').fadeTo(200, 1);
                },function(){
                    $(this).find('span img').fadeTo(200, 0);
                });
            });
        </script>
            <!--<script type="text/javascript" src="/js/jquery.tinyscrollbar.min.js"></script>-->
    <!--
    		http://www.baijs.nl/tinyscrollbar/  
            axis: 'x' -- vertical or horizontal scroller? 'x' or 'y' .
            wheel: 40 -- how many pixels must the mouswheel scroll at a time .
            scroll: true -- enable or disable the mousewheel.
            size: 'auto' -- set the size of the scrollbar to auto or a fixed number.
            sizethumb: 'auto' -- set the size of the thumb to auto or a fixed number.
    -->
    <script type="text/javascript">
	$(document).ready(function(){		
		//$('#scrollbar1').tinyscrollbar({ sizethumb: 50 });
	});
</script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17091389-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <div id="shell">
            <div class="box" style="position:absolute;"><a><img src="/img/fondo.jpg" width="2000" height="450" data-xrange="10" data-yrange="0" data-invert="true" id="fondo" /></a>  </div>  
            <div class="top_revolucion"><img src="/img/top_revolucion.png" width="1056" height="130" alt="" /></div>
<!--            <div style="position:absolute;"><img src="/img/pajaros_l.png" alt="" style="position:absolute; top:-95px; left:270px; z-index:100;" /></div>
            <div style="position:absolute;"><img src="/img/pajaros_r.png" alt="" style="position:absolute; top:-95px; left:850px; z-index:100;" /></div>-->
            <div style="position:relative; width:960px; margin:0 auto; height:315px;">
                <?php foreach ($proceres as $index => $value): ?>
                    <div class="box"><a rel="<?php print $value['description'] ?>" class="link" alt="<?php print $value['name'] ?>" title="<?php print $value['name'] ?>" href="<?php print $value['twitter'] ?>"><img src="<?php print $value['img'] ?>" <?php print $value['img.attributes'] ?> /><span><img src="<?php print $value['img_over'] ?>" <?php print $value['img.attributes'] ?>/></span></a></div>
                <?php endforeach; ?>
            </div>    
        </div>
        <div id="box_middle"><!--box_middle START-->
            <div class="mainbox_middle"><!--mainbox_middle START-->
                <div class="tit_procer"><?php print $config['twitter']['first_procer']['name'] ?></div>
                <div class="sep"></div>
                <div class="tw_procer"><?php print $config['twitter']['first_procer']['description'] ?></div>
                <div class="sep"></div>
                <a class="btn_seguir_link" target="_blank" href="<?php print $config['twitter']['first_procer']['twitter'] ?>" onClick="_gaq.push(['_trackEvent', 'Social', 'Twitter', 'Visitar Perfil de Proceres']);"><div class="btn_seguir"></div></a>
                <div class="CleanFloats"></div>
            </div><!--mainbox_middle END-->
            <div class="mainbox_boton"><!--mainbox_boton START-->
            <div class="mano"></div>
            <a target="_blank" href="http://twitter.com/#!/mg54digital/mayo1810/members" onClick="_gaq.push(['_trackEvent', 'Social', 'Twitter', 'Visitar Perfil de Proceres']);"><div class="btn_seguir_todos"></div></a>
            <div class="mano_r"></div>      
            </div><!--mainbox_boton END-->
        </div><!--box_middle END-->
        <div id="box_footer"><!--box_footer START-->
            <div class="mainbox_footer"><!--mainbox_footer START-->
                <div class="manifiesto">
                    <a onclick="_gaq.push(['_trackEvent', 'Social', 'Facebook', 'Compartir en Muro']);openPopUpRadio(this.href);return false;" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php print $url ?>&t=Revolución Mayo 1810"><div class="btn_fs"></div></a>
                </div>
                <div class="box_tw">
                    <div class="box_tw_header"><img src="/img/header_tw.png" width="547" height="76" alt="Ultimos Tweets" /></div>
                    <div class="box_tw_top"></div>
                    <div class="box_tw_content">
                        <!--<div class="tweet"></div>-->
                      <div id="scrollbar1">
                        <div class="viewport">
                            <div class="overview">
                            <div id="jTweetsAnywhereEndlessScrollingSample"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="box_tw_footer"></div>
                </div>
                <div class="CleanFloats"></div>
                <div class="footer"><a href="http://www.mg54.com" onClick="_gaq.push(['_trackEvent', 'Website', 'Link Saliente', 'Ir a MG54']);" target="_blank"><img src="/img/footer.png" alt="MG54" width="958" height="76" border="0" /></a>
                </div>

            </div><!--mainbox_footer END-->
            <div class="box_produccion">Producción periodistica: <a href="http://twitter.com/#!/d_balmaceda" onClick="_gaq.push(['_trackEvent', 'Social', 'Twitter', 'Visitar Perfil de Daniel Balmaceda']);" target="_blank">Daniel Balmaceda</a></div>

        </div><!--box_footer END-->
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
        <script type="text/javascript">
            function openPopUpRadio(url) {
                window.open( url, 'Revolucion Mayo 1810', "status = 1, height = 150, width = 450, resizable = 0");
                return false;
            };
        </script>
    </body>
</html>
