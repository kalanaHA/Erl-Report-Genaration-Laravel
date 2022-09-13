@include('genarel_layout.header')
@include('genarel_layout.sidebar')

<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report one</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Report one</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </section>
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Report one</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">

                    <div class="form-row pl-3 pr-3">
                        <div class="form-group col-md-6 pr-3">
                          <label
                            >Start Date</label
                          >
                          <input
                            type="date"
                            class="form-control"
                            name="applicant_email"
                            placeholder="Enter Contact email"
                          />
                        </div>

                        <div class="form-group col-md-6 pr-3">
                          <label
                            >End Date</label
                          >
                          <input
                            type="date"
                            class="form-control"
                            name="applicant_designation"
                            placeholder="Enter Designation"
                          />
                        </div>
                      </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width: 120px;">Submit</button> &nbsp;&nbsp;&nbsp; <button type="reset" class="btn btn-warning"  style="width: 120px; color:white">Reset</button>
                  </div>
                </form>
              </div>

            <div class="card" hidden>
              <div class="card-header">
                <h3 class="card-title">Report one</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="report_01" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>sample field</th>
                    <th>sample field</th>
                    <th>sample field</th>
                    <th>sample field</th>
                    <th>sample field</th>
                    <th>sample field</th>
                    <th>sample field</th>
                  </tr>
                  </thead>
                  <tbody>
                    @for ($x =0 ; $x <25 ; $x++)
                    <tr>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                        <td>sample data</td>
                      </tr>
                    @endfor


                  </tbody>
              <!--     <tfoot>
                  <tr>
                   <th>Name</th>
                    <th>Organization</th>
                    <th>Designation</th>
                    <th>User Category</th>
                    <th>Email</th>
                    <th>Reason</th>
                    <th>Action</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
          </section>
        </div>
     </div>
@include('genarel_layout.footer')
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}" src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<!-- <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> -->

</body>
</html>
