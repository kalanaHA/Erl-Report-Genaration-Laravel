@include('genarel_layout.header')
@include('genarel_layout.sidebar')

<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report Two Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/report_two">Report Two</a></li>
              <li class="breadcrumb-item active">Report Two Results</li>
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
           <div class="card" >
            <div class="card-header">
              <h3 class="card-title">Report Two Results</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="report_02" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>License Status</th>
                      <th>License Type</th>
                      <th>License No</th>
                      <th>Vehicle Registration Number</th>
                      <th>Total Amount</th>
                      <th>License Issued Date</th>
                      <th>License Expiry Date</th>
                      <th>User Name</th>
                      <th>Authority</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($results as $res)
                      <tr>
                          <td>{{ date('Y-m-d', strtotime($res->Date)); }}</td>
                          <td>{{ $res->description }}</td>
                          <td>{{ $res->Description }}</td>
                          <td>{{ $res->License_No }}</td>
                          <td>{{ $res->Vehicle_Reg_No }}</td>
                          <td>{{ $res->Total_Amount }}</td>
                          <td>{{ date('Y-m-d', strtotime($res->License_Issued_Date)); }}</td>
                          <td>{{ date('Y-m-d', strtotime($res->License_Expiry_Date)); }}</td>
                          <td>{{ $res->User_Name }}</td>
                          <td>{{ $res->Authority }}</td>
                        </tr>
                      @endforeach


                    </tbody>
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          </div>
          @if(Session::has('status'))
            <div class="alert alert-success container">
                {{ Session::get('status') }}
                @php
                    Session::forget('status');
                @endphp
            </div>
        @endif
        </div>
      </div>
          </section>
        </div>
     </div>
@include('genarel_layout.footer')
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Year Picker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
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
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Page specific script -->

<script>

$(document).ready(function () {

    $("#datepicker").datepicker( {
    format: "yyyy-mm",
    startView: "months",
    minViewMode: "months"
});


 });
  $(function () {
    $("#report_02").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#report_02_wrapper .col-md-6:eq(0)');


  });

</script>
</body>
</html>
