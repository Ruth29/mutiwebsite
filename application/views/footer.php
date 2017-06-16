
    <footer class="footer">
      <div class="column">
        <p class="text-sm">For a quote, call us at</p>
        <p><span class="text-primary">+256 780245412</span> or <span class="text-primary">+256 775680435</p>
        <div class="social-bar text-center space-bottom">
          <a href="http://pinterest.com" class="sb-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest">
            <i class="socicon-pinterest"></i>
          </a>
          <a href="http://facebook.com/mutiinteriors" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
            <i class="socicon-facebook"></i>
          </a>
          <a href="https://www.houzz.com/user/muti-interiors" class="sb-houzz" data-toggle="tooltip" data-placement="top" title="Houzz">
            <i class="socicon-houzz"></i>
          </a>
          <a href="http://linkedin.com" class="sb-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
            <i class="socicon-linkedin"></i>
          </a>
          <a href="http://instagram.com/mutiinteriors" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
            <i class="socicon-instagram"></i>
          </a>
          <a href="" class="sb-whatsapp" data-toggle="tooltip" data-placement="top" title="" data-original-title="Whatsapp">
            <i class="socicon-whatsapp"></i>
          </a>
        </div>
        <p class="copyright">&copy; 2017. Made by Huguso.</p>
      </div>
      <div class="column">
        <h3 class="widget-title">
          Subscription
          <small>To receive latest offers and discounts from the shop.</small>
        </h3>
        <?php $attributes = array("name" => "subscribeForm", "class" => "subscribe-form");
                                                echo form_open("home/subscribe", $attributes);?>
          <input type="email" class="form-control" name="email" placeholder="Your e-mail" /><span class="text-danger"><?php echo form_error('email'); ?></span>
          <button type="submit"><i class="material-icons send"></i></button>
        <?php echo form_close(); ?>
      </div>
    </footer>

  </div>
   <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/smoothscroll.js')?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/vendor/jquery.downCount.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/instafeed.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
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

</body>

</html>
