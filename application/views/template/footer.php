    <!-- Modal Delete -->
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
              <i class="fa-solid fa-trash"></i>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <h5>Apakah anda yakin ingin menghapus data ini?</h5>
          </div>
          <div class="modal-footer justify-content-center align-items-center">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('public/sidebar/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('public/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
      
      function goBack() {
          window.history.back();
      };
      
    </script>

</body>

</html>


<!-- <footer class="footer">
    <div style="margin-left: 15px;">
        <span class="text-muted">Niko Saputra © 2023, All rights reserved</span>
    </div>
</footer>

</body>

</html> -->