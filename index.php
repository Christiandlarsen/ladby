<?php get_header(); ?>

<div id="site-top">
    <video class="bg-video" src="<?php echo get_template_directory_uri(); ?>/img/presentation.mp4" loop muted autoplay>
    </video>
    <div class="video-overlay"></div>
    <div id="site-top-content">
        <h1>Ladbyskibet</h1>
        <div id="site-top-breaker">
            <div class="col-xs-5 line-container">
                <div class="line-left"></div>
            </div>
            <div class="col-xs-2 line-container">
                <img class="boat-icon" src="<?php echo get_template_directory_uri(); ?>/img/boat_icon.png" alt="">
            </div>
            <div class="col-xs-5 line-container">
                <div class="line-left"></div>
            </div>
        </div>
        <h3>Sejler på Kerteminde fjord 14. maj 2016</h3>
    </div>
</div>
<div id="site-ship-info" class="site-text-breaker">
    <div class="table-row">
        <div class="textcell">
            <h2>Ladbyskibet</h2>
            <p>I sommeren 2011 begyndte et meget ambitiøst skibsbyggeri, nemlig byggeriet af nok en kopi af det gravsatte vikingeskib i fuld skala, dvs. et cirka 22 meter langt og 3 meter bredt krigsskib med plads til 32 roere - men denne gang efter alle kunstens regler.</p>
        </div>
    </div>
</div>

<div id="site-program">
    <?php while(have_posts()): the_post(); ?>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail-container">
                <div class="thumbnail" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>'); ?>">
                </div>
                <h3>
                    <?php the_title('<div class="thumbnail-title">',' </div>'); ?>
                </h3>
                <p class="thumbnail-read">Læs mere</p>
                <div class="modal-content"><?php the_content(); ?></div>
            </div>
            </a>
        </div>
    <?php endwhile; ?>
</div>  

<div id="site-ship-video" class="site-text-breaker">
    <div class="table-row">
        <div class="textcell">
            <h2>Rekonstruktion</h2>
            <p>De hænder (og hoveder), der bygger den nye kopi af Ladbyskibet, gør det, sådan som vikingerne må formodes at have gjort det. Det er en kæmpe udfordring. For i modsætning til Dødeskibet skal dette skib søsættes - i Kerteminde Fjord. <br>
            For mere information se videoen nedenfor eller <a href="#">læs mere her</a>.</p>
        </div>
    </div>
</div>      
   
<div id="site-video">

</div>
    
<div id="footer"> 
    <div id="site-newsletter">
      <h2>Tilmeld nyhedsbrev</h2>
       <form action="" method="post">
           <div class="form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                <?php if($error): ?>
                    <p><?php echo $error; ?></p>
                <?php endif; ?>
            </div>
            <input class="btn center-block" type="submit" value="Tilmeld">
       </form>
        
        <h2>Ladby på Facebook</h2>
       <div class="fb-page" data-href="https://www.facebook.com/vikingemuseetladby/?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/vikingemuseetladby/?fref=ts"><a href="https://www.facebook.com/vikingemuseetladby/?fref=ts">Vikingemuseet Ladby</a></blockquote></div></div>
    </div>
    
    <div id="site-footer">
        <footer>
           <div id="site-footer-socials">
                <a href="https://www.facebook.com/vikingemuseetladby/?fref=ts" target="_blank"><i class="fa fa-facebook-official"></i></a>
                <a href="https://twitter.com/vikingemuseet" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/user/Vikingevej123" target="_blank"><i class="fa fa-youtube"></i></a>
                <a href="https://www.instagram.com/explore/locations/257678797/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://dk.pinterest.com/VMLadby/" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>

            <div id="site-footer-info">
                <ul>
                    <li>Vikingemuseet Ladby</li>
                    <li>Vikingevej 123, 5300 Kerteminde</li>
                    <li>+45 65 32 16 67</li>
                    
                </ul>
            </div>
        </footer>
    </div> 
</div>
<?php get_footer(); ?>