<?php
//define('URL_CDN', 'http://ec2-107-20-7-41.compute-1.amazonaws.com');
define('URL_CDN', '');
ob_start('ob_gzhandler');
header('Content-Encoding: gzip');
header('Accept-Encoding: gzip,deflate');
require_once 'includes/proceres.php';
$url = urlencode("http://www.revolucion1810.com.ar?date=25051810&12");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Revolución Mayo 1810" />
        <meta property="og:description" content="La apasionante historia de la Revolución como nunca te la contaron. Viví la semana de Mayo en Tiempo Real contada por sus propios protagonistas." />
        <meta property="og:image" content="/img/Compartir.jpg" />
        <title>El asesinato de Villa: La conspiraci&oacute;n</title>
        <!--google fonts -->
        <link type="text/css" rel="stylesheet" href="/styles/fonts/font.css" />
        <!-- styles -->
        <link type="text/css" rel="stylesheet" href="<?php print URL_CDN?>/styles/common.css" />
        <link type="text/css" rel="stylesheet" href="<?php print URL_CDN?>/js/fancybox/jquery.fancybox-1.3.4.css" />
        <!--jquery-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php print URL_CDN?>/js/plax.js"></script>
        <script type="text/javascript" src="<?php print URL_CDN?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

        <link rel="stylesheet" href="<?php print URL_CDN?>/js/twitter/jquery.jtweetsanywhere-1.3.1.css"/>
        <script type="text/javascript" src="<?php print URL_CDN?>/js/twitter/mg54_jquery.jtweetsanywhere-1.3.1.min.js"></script>
        <style>
          #jTweetsAnywhereEndlessScrollingSample .jta-tweet-list
            {
                height: 870px;
                overflow:auto;
            }
            div#shell {
                display: block;
                position: relative;
                width: 100%;
                height: 552px;
                z-index: 1;
                overflow-x:hidden;
				overflow-y:hidden;
            }
            #fondo {
                position:relative;
                top:0px;
                left:-20px;
            }
        </style>
        <script type="text/javascript">
            $(function(){
                //$.fancybox.showActivity();
                //$.fancybox({
                //    'overlayColor':'#0f0f0f',
				//	'overlayOpacity' : 0.9,
                //    href:'bienvenida.html',
                 //   showCloseButton:false
                //});

                $('#shell a img').plaxify()
                $.plax.enable();
				var $shellboximg_cache =  $('#shell .box span img');
				$shellboximg_cache.fadeTo(10, 0);
                $('#jTweetsAnywhereEndlessScrollingSample').jTweetsAnywhere({
                    username: 'MG54Digital',
                    list: "Mayo1810",
                    //username: 'rspirolazzi',
                    count: 200,
                    url: '<?php print URL_CDN?>',
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
				var $shellbox_cache = $('#shell .box a.link');
                $shellbox_cache.click(function(e) {
                    $(this).addClass('selected');
                    $('.tit_procer').html($(this).attr('title'));
                    $('.tw_procer').html($(this).attr('rel'));
                    var url = $(this).attr('href');
                    $('.btn_seguir_link').attr('href', url);
                    e.preventDefault();
                });
				var $box_cache = $('.box');
                $box_cache.hover(function() {
                    $(this).find('span img').fadeTo(200, 1);
                },function(){
                    $(this).find('span img').fadeTo(200, 0);
                });
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
            <div class="box" style="position:absolute;"><a><img src="<?php print URL_CDN?>/img/fondo.jpg" width="2000" height="552" data-xrange="10" data-yrange="0" data-invert="true" id="fondo" alt="Imagen de Fondo" /></a>  </div>
            <div class="top_revolucion"><img src="<?php print URL_CDN?>/img/top_revolucion.png" width="972" height="150" alt="" /></div>
            <div style="position:relative; width:960px; margin:60px auto 0; height:315px;">
                <?php foreach ($proceres as $index => $value): ?>
                    <div class="box"><a class="link" title="<?php print $value['name'] ?>" href="<?php print $value['twitter'] ?>"><img src="<?php print URL_CDN?><?php print $value['img'] ?>" alt="<?php print $value['name'] ?>" <?php print $value['img.attributes'] ?> /><span><img src="<?php print URL_CDN?><?php print $value['img_over'] ?>" <?php print $value['img.attributes'] ?> alt="<?php print $value['name'] ?>" /></span></a></div>
                <?php endforeach; ?>
            </div>
        </div>


        <div id="box_footer"><!--box_footer START-->
        
              <div class="box-revolucionarios">
        <a class="btn1" href="https://twitter.com/intent/tweet?button_hashtag=FueObregon" title="ÁLVARO OBREGÓN #FUEOBREGON"></a>
        <a class="btn2" href="https://twitter.com/intent/tweet?button_hashtag=FueBarraza" title="JESÚS SALAS BARRAZA #FUEBARRAZA"></a>
        <a class="btn3" href="https://twitter.com/intent/tweet?button_hashtag=FueHerrera" title="JESÚS HERRERA #FUEHERRERA"></a>
        <a class="btn4" href="https://twitter.com/intent/tweet?button_hashtag=FueCalles" title="PLUTARCO ELÍAS CALLES #FUECALLES"></a>
        <div class="CleanFloats"></div>
        </div>

            <div class="box-leyenda"><!--box-leyenda START-->
                <div class="leyenda"><img src="<?php print URL_CDN?>/img/leyenda-villa.png" width="743" height="229" alt="" /></div>
                <a class="btn_fs" href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"></a>
                <a class="btn_tw" href="https://twitter.com/intent/tweet?button_hashtag=Fue"></a>
                <div class="flecha-flotante"><img src="<?php print URL_CDN?>/img/flecha-leyenda.png" width="77" height="90" alt="" /></div>
            </div><!--box-leyenda END-->
            <div class="CleanFloats"></div>
            
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            <div class="mainbox_footer"><!--mainbox_footer START-->
                <div class="box_votos">
                    <div class="box_votos_header"><img src="<?php print URL_CDN?>/img/los-mas-votados.png" width="296" height="47" alt="Los más votados" /></div>
                    <iframe width="410" height="1387"src="http://pvilla-backend.appspot.com/"></iframe>
                </div>
                <div class="sep-middle"><img src="<?php print URL_CDN?>/img/sep-middle.png" width="9" height="645" alt="" /></div>
                <div class="box_tw">
                    <div class="box_tw_header"><img src="<?php print URL_CDN?>/img/ultimos-tweets.png" width="550" height="47" alt="Ultimos Tweets" /></div>
                    <div class="box_tw_content">
                       
<a class="twitter-timeline" href="https://twitter.com/AsesinatoVilla" data-widget-id="352077677605294080">Tweets por @AsesinatoVilla</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                      <div id="scrollbar1">
                        <div class="viewport">
                            <div class="overview">
                            <div id="jTweetsAnywhereEndlessScrollingSample"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="CleanFloats"></div>
                <div class="flecha"></div>


            </div><!--mainbox_footer END-->
        </div><!--box_footer END-->
        <div class="footer">Copyright &copy; 2013 Discovery Communications, Inc</div>
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    </body>
</html>
