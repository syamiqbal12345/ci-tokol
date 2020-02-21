<!-- footer goes here -->
<footer class="page-footer blue">
   <div class="row">
      <div class="col l5 s12">
         <h5 class="white-text">Tentang Kami</h5>
         <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
         <p class="grey-text text-lighten-4">Email : admin@admin.com</p>
         <p class="grey-text text-lighten-4">Telepon : 085246805241</p>
      </div>
      <div class="col l3 s12">
         <h5 class="white-text">Bantuan</h5>
         <ul>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">send</i> Link 4</a></li>
         </ul>
      </div>
      <div class="col l2 s12">
         <h5 class="white-text">Navigasi</h5>
         <ul>
            <li><a class="grey-text text-lighten-3" href="Beranda.html"><i class="tiny material-icons">store</i> Beranda</a></li>
            <li><a class="grey-text text-lighten-3" href="badges.html"><i class="tiny material-icons">view_list</i> Kategori</a></li>
            <li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">dashboard</i> Produk</a></li>
            <li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">payment</i> Konfirmasi</a></li>
            <li><a class="grey-text text-lighten-3" href="collapsible.html"><i class="tiny material-icons">shopping_basket</i> Keranjang</a></li>
         </ul>
      </div>
      <div class="col l2 s12">
         <h5 class="white-text">Media Sosial</h5>
         <ul>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/facebook.png') ?>" alt="fb" width="13" height="13">
                  Facebook
               </a>
            </li>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/twitter.png') ?>" alt="fb" width="13" height="13">
                  Twitter
               </a>
            </li>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/instagram.png') ?>" alt="fb" width="13" height="13">
                  Instagram
               </a>
            </li>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/whatsapp.png') ?>" alt="fb" width="13" height="13">
                  WhatsApp
               </a>
            </li>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/multimedia.png') ?>" alt="fb" width="13" height="13">
                  YouTube
               </a>
            </li>
            <li>
               <a class="grey-text text-lighten-3 valing-wrapper" href="#!">
                  <img src="<?= base_url('upload/hangout.png') ?>" alt="fb" width="13" height="13">
                  Hangout
               </a>
            </li>
         </ul>
      </div>
   </div>
   <div class="footer-copyright">
      <div class="container">
         Copyright © <?= TITLE . ' - ' . date('Y') ?>
         <a class="right btn-backTop btn-floating btn-small waves-effect waves-light blue" href="#!">
            <i class="tiny material-icons">arrow_upward</i>
         </a>
      </div>
   </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- custom javasript -->
<script>
   $(document).ready(function() {
      $('.sidenav').sidenav();

      $('.carousel.carousel-slider').carousel({
         fullWidth: true,
         indicators: true,
      });
      setInterval(function() {
         $('.carousel.carousel-slider').carousel('next');
      }, 2000);

      $('.tabs').tabs({
         swipeable: true
      });

      $('#btn-search-nav').click(function(e) {
         e.preventDefault();
         $('#search-nav').fadeIn();
         $('#main-nav').hide();
         $('#search').focus();
      });

      $('#btn-search-mobile').click(function(e) {
         e.preventDefault();
         $('#search-nav').fadeIn();
         $('#main-nav').hide();
         $('#search').focus();
      });

      $('#cls-btn-search-nav').click(function(e) {
         e.preventDefault();
         $('#search-nav').hide();
         $('#main-nav').fadeIn();
      });

      $('.btn-backTop').click(function(e) {
         e.preventDefault();
         $("html, body").animate({
            scrollTop: 0
         }, 500);
      });
   });
</script>