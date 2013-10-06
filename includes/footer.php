    
    </div>
    <!-- END CONTAINER -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(m,a,v,r,c,k){m.GoogleAnalyticsObject=r;m[r]||(m[r]=
        function(){(m[r].q=m[r].q||[]).push(arguments)});m[r].r=+new Date;
        c=a.createElement(v);k=a.getElementsByTagName(v)[0];
        c.src='//www.google-analytics.com/analytics.js';
        k.parentNode.insertBefore(c,k)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <?php if( Environment::isLocal() ): ?>
    <script src="/js/libs/zepto-1.0.1.js"></script>
    <script src="/js/plugins/unveil.js"></script>
    <script src="/js/plugins/picturefill.js"></script>
    <script src="/js/main.js"></script>
    <?php else: ?>
    <script src="/js/all.min.js?v=<?php echo date('His'); ?>"></script>
    <?php endif; ?>
  </body>
</html>