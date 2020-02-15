<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
         </div>
      </div>
   </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" crossorigin="anonymous"></script>

<!-- Custom scripts for all pages-->
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/js/sb-admin-2.min.js" crossorigin="anonymous"></script>

<!-- Page level plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>

<!-- Page level custom scripts -->
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/js/demo/chart-area-demo.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/js/demo/chart-pie-demo.js" crossorigin="anonymous"></script>

<!-- owl caraousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"></script>

<!-- jam digital -->
<script>
   window.setTimeout("waktu()", 1000);

   function waktu() {
      arrbulan = ["Januari", "Februari", "Maret", "April", "May", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      arrhari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      date = new Date();
      detik = date.getSeconds();
      menit = date.getMinutes();
      jam = date.getHours();
      hari = date.getDay();
      tanggal = date.getDate();
      bulan = date.getMonth();
      tahun = date.getFullYear();
      setTimeout("waktu()", 1000);
      // document.write(tanggal+" "+arrbulan[bulan]+" "+tahun+" | "+jam+" : "+menit+" : "+detik);
      document.getElementById("jam-digital").innerHTML = arrhari[hari] + ", " + tanggal + " " + arrbulan[bulan] + " " + tahun + " <strong>/</strong> " + jam + " : " + menit + " : " + detik;
   }
</script>