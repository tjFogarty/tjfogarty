    
    </div>
    <!-- END CONTAINER -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-20898533-4', 'tjfogarty.com');
      ga('send', 'pageview');
    </script>

    <?php if (Environment::isLocal()): ?>
    <script src="/js/libs/jquery-2.1.0.js"></script>
    <script src="/js/plugins/jquery.stellar.js"></script>
    <script src="/js/main.js?v=<?php echo date('His'); ?>"></script>
    <?php else: ?>
    <script src="/js/all.min.js"></script>
    <?php endif; ?>
    
  </body>
</html>