     <!-- Footer Start -->
     <div class="container-fluid pt-4 px-4">
         <div class="bg-light rounded-top p-4">
             <div class="row">
                 <div class="col-12 col-sm-6 text-center text-sm-start">
                     &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                 </div>
                 <div class="col-12 col-sm-6 text-center text-sm-end">
                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                     </br>
                     Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer End -->
     </div>
     <!-- Content End -->


     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     </div>

     <!-- JavaScript Libraries -->
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/js/jquery-3.4.1.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/js/bootstrap.bundle.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/chart/chart.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/easing/easing.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/waypoints/waypoints.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/tempusdominus/js/moment.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

     <!-- Template Javascript -->
     <script src="<?php echo base_url('assets/templates/dashmin-1.0.0/js/main.js') ?>"></script>

    <!-- GROCERY LIBRARY -->
    <?php if (isset($js_files)) : foreach ($js_files as $file) : ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- GROCERY LIBRARY -->

     <script src="<?php echo base_url('assets/js/grocery_custome.js') ?>"></script>