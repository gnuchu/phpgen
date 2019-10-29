    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Script to run on load. -->
    <script>
      $(function(){
        //Set initial state.
        var id = "com.pwgen.";

        $('.form-check-input').each(function(){
          var state_id = id + this.name;
          this.checked = true;
          localStorage.setItem(state_id, this.checked);
        });
        
        $('.form-check-input').on("change", function(){
          var state_id = id + this.name;
          localStorage.setItem(state_id, this.checked);
        });


      });
    </script>

  </body>

</html>