    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h1>Kontak Info</h1>
                    <address>
                        <p>Kabupaten Pati</p>
                        <p>Alamat: Jalan RA. Kartini No.1 Pati</p>
                        <p>Phone : (123) 456-7890</p>
                        <p>Fax : (123) 456-7890</p>
                        <p>Email : <a href="javascript:;">pilkades@patikab.go.id</a></p>
                    </address>
                </div>
               
                <div class="col-lg-6 col-sm-6">
                    <h1>stay connected</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url("template/frontend/js/jquery.js")?>"></script>
    <script src="<?=base_url("template/frontend/js/jquery-1.8.3.min.js")?>"></script>
    <script src="<?=base_url("template/frontend/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("template/frontend/js/hover-dropdown.js")?>"></script>
    <script defer src="<?=base_url("template/frontend/js/jquery.flexslider.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("template/frontend/assets/bxslider/jquery.bxslider.js")?>"></script>

    <script type="text/javascript" src="<?=base_url("template/frontend/js/jquery.parallax-1.1.3.js")?>"></script>

    <script src="<?=base_url("template/frontend/js/jquery.easing.min.js")?>"></script>
    <script src="<?=base_url("template/frontend/js/link-hover.js")?>"></script>

    <script src="<?=base_url("template/frontend/assets/fancybox/source/jquery.fancybox.pack.js")?>"></script>

    <script type="text/javascript" src="<?=base_url("template/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("template/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js")?>"></script>

    <!--Datatables-->
    <script type="text/javascript" src="<?=base_url("template/frontend/assets/datatables/jquery.dataTables.min.js")?>"></script>

    <!--common script for all pages-->
    <script src="<?=base_url("template/frontend/js/common-scripts.js")?>"></script>

    <script src="<?=base_url("template/frontend/js/revulation-slide.js")?>"></script>


  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>

  </body>
</html>