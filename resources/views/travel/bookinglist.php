<?php require 'header.php'; ?>



         <!-- Begin Page Content -->
        <div class="container-fluid">

        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Packagename</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Packagename</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ingyinn</td>
                      <td>ingyinnhtike98@gmail.com</td>
                      <td>09750140033</td>
                      <td>
                      <div class="row">
                      <div class="col-md-3">
                      <input type="text" placeholder="Yangon">
                      </div>
                      <div class="col-md-2 ml-1">
                      <i class="fas fa-exchange-alt pl-5 pt-2" id="icon1 pr-4"></i>
                      </div>
                      <div class="col-md-3">
                      <input type="text" placeholder="Bagan">
                      </div>
                      </div>

                      </td>
                      <td><select id="pending2">
                      <option value="pending">Pending</option>
                      <option value="confirm">Confirm</option>
                      <option value="cancel">Cancel</option>

                      </select></td>
                    </tr>

                    <tr>
                      <td>1</td>
                      <td>Mg Mg</td>
                      <td>mgmg@gmail.com</td>
                      <td>09750140033</td>
                      <td>
                      <div class="row">
                      <div class="col-md-3">
                      <input type="text" placeholder="Yangon">
                      </div>
                      <div class="col-md-2 ml-1">
                      <i class="fas fa-exchange-alt pl-5 pt-2" id="icon1 pr-4"></i>
                      </div>
                      <div class="col-md-3">
                      <input type="text" placeholder="Bagan">
                      </div>
                      </div>

                      </td>
                      <td><select id="pending2">
                      <option value="pending">Pending</option>
                      <option value="confirm">Confirm</option>
                      <option value="cancel">Cancel</option>

                      </select></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>



        </div>



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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

<!-- 
  <script type="text/javascript">
    $(document).ready(function() 
    {
    $('#datatable').DataTable();
} );
  </script> -->
  
</body>

</html>
