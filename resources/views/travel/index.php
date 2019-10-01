<?php require 'header.php'; ?>



         <!-- Begin Page Content -->
        <div class="container-fluid">

        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-success text-white">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Deperature</th>
                      <th></th>
                      <th>Destination</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Deperature</th>
                      <th></th>
                      <th>Destination</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
              <!--       <tr>
                      <td>1</td>
                      <td>Ingyinn</td>
                      <td>ingyinnhtike98@gmail.com</td>
                      <td>09750140033</td>
                      <td>
                          <div class="row">
                          <div class="col-md-3">
                          <span class="float-right">Yangon</span>
                          </div>
                          <div class="col-md-1 p-0">
                          <i class="fas fa-exchange-alt pt-1 pl-2" id=""></i>
                          </div>
                          <div class="col-md-5">
                          <span>Mandalay</span>
                          </div>
                        </div>

                      </td>
                      <td><select id="pending2">
                      <option value="pending">Pending</option>
                      <option value="confirm">Confirm</option>
                      <option value="cancel">Cancel</option>

                      </select></td>
                    </tr> -->

                    <tr>
                      <td>1</td>
                      <td>Mg Mg</td>
                      <td>mgmg@gmail.com</td>
                      <td>09750140033</td>
                      <td class="text-center">Yangon</td>
                      <td>
                          <i class="fas fa-exchange-alt text-success pt-1 pl-2" id=""></i>
                      </td>
                      <td class="text-center">Mandalay</td>
                      <td><select id="pending2" class="form-control">
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
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/datatables-demo.js')}}"></script>

<!-- 
  <script type="text/javascript">
    $(document).ready(function() 
    {
    $('#datatable').DataTable();
} );
  </script> -->
  
</body>

</html>
