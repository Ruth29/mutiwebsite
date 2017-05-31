<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/smoothscroll.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/velocity.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/waves.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/icheck.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/jquery.downCount.js');?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/magnific-popup.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/instafeed.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
  <script type="text/javascript">
        var userFeed = new Instafeed({
          get: 'user',
          userId: '3003775279',
          clientId: '1d4920566231420491732fcc5b092978',
          accessToken: '3003775279.1d49205.518fac679c4c47f1a20f240588a8beec',
          resolution: 'standard_resolution',
          template: '<div class="col-sm-2"><a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /><span>{{likes}} likes</span></a></div>',
          sortBy: 'most-recent',
          orientation: 'square',
          limit: 6,
          links: false
        });
        userFeed.run();
</script>
  <script>
  function initMap() {
    var uluru = {lat: 0.2346422, lng: 32.5614939};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ1s3fWAAVE9Qt3oRQIbIZco54pWDnVGE&callback=initMap">
  </script> 

</body><!-- <body> -->

</html>
