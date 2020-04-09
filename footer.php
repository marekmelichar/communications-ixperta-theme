
<footer role="contentinfo">
  <div class="container">
    <div class="row">
      <?php if(get_field('footer_column', 'option')) : ?>
        <?php while(has_sub_field('footer_column', 'option')) : ?>
          <div class="<?php the_sub_field('class', 'option'); ?>">
            <?php the_sub_field('content', 'option'); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</footer>
<div class="footer-credits">
  <div class="container">
    <div class="row">
      <div class="col-md-6 to-be-flexed">
        <div class="footer-logo-symbol"><?php get_template_part('svg/logo_ixperta.svg'); ?></div>
        <span class="footer-copy"><?php the_field('footer_copyright', 'option'); ?></span>
      </div>
      <div class="col-md-6 to-be-flexed-end">
        <?php the_field('footer_links', 'option'); ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<!-- new Google Tag Manager -->

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBT6R6G');</script> -->
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBT6R6G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

<!-- / new Google Tag Manager -->



<!-- Google Analytics -->
<!-- <script>
  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
  ga('create', 'UA-62037281-1', 'auto');
  ga('send', 'pageview');
</script>

<script async src='https://www.google-analytics.com/analytics.js'></script> -->
<!-- End Google Analytics -->

<!-- scrolldepth, riveted, screentime - init -->

<!-- <script>
  jQuery(function() {

    jQuery.scrollDepth();

    riveted.init();

    // jQuery.screentime({
    //   fields: [
    //     { selector: '#vid',
    //       name: 'main-video'
    //     },
    //     { selector: '#connect',
    //       name: 'connect'
    //     },
    //     { selector: '#dreams',
    //       name: 'dreams'
    //     },
    //     { selector: '#employees',
    //       name: 'employees'
    //     },
    //     { selector: '#earth',
    //       name: 'earth'
    //     },
    //     { selector: '#solutions',
    //       name: 'solutions'
    //     },
    //     { selector: '#products',
    //       name: 'products'
    //     },
    //     { selector: '#partners',
    //       name: 'partners'
    //     },
    //     { selector: '#something',
    //       name: 'something'
    //     },
    //     { selector: '#contacts',
    //       name: 'contacts'
    //     }
    //   ],
    //   callback: function(data) {
    //     //console.log(data); // Logs: { Top: 5, Middle: 3 }
    //   }
    // })

  });

  // var inputs = document.querySelectorAll( '.inputfile' );
  // Array.prototype.forEach.call( inputs, function( input )
  // {
  // var label	 = input.parentNode.nextElementSibling,
  // labelVal = label.innerHTML;
  //
  // input.addEventListener( 'change', function( e )
  // {
  // var fileName = '';
  // if( this.files && this.files.length > 1 )
  //   fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
  // else
  //   fileName = e.target.value.split( '\\' ).pop();
  //
  // if( fileName )
  //   label.innerHTML = fileName;
  // else
  //   label.innerHTML = labelVal;
  // });
  // });
</script> -->




<!-- <script type="text/javascript">
    var leady_track_key="sN16qdyJl7MtQkXU";
    (function(){
        var l=document.createElement("script");l.type="text/javascript";l.async=true;
        l.src='https://t.leady.com/'+leady_track_key+"/L.js";
        var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(l,s);
    })();
</script> -->

</body>
</html>
