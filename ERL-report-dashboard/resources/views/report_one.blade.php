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
                <form action={{ route('report_one_data') }} method="POST">
                    @csrf
                  <div class="card-body">

                    <div class="form-row pl-3 pr-3">
                        <div class="form-group col-md-6 pr-3">
                                <label>Province</label>
                                <select class="form-control select2bs4" style="width: 100%;" name="province">
                                  <option selected="selected" disabled>Select Province</option>
                                  @foreach ($Provinces as $province )
                                    @if ($province->Province_ID != '0')
                                    <option value={{ $province->Province_ID }} {{ old('province') == $province->Province_ID ? 'selected' : '' }}>{{ $province->Province }}</option>
                                    @endif
                                  @endforeach
                                </select>

                                @if ($errors->has('province'))
                                <span class="text-danger">{{ $errors->first('province') }}</span>
                            @endif
                      </div>

                      <div class="form-group col-md-6 pr-3">
                        <label>License Status</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="license_status">
                          <option selected="selected" disabled>Select License Status</option>
                            @foreach ($License_Status as $license_status )
                                <option value={{ $license_status->License_Status_ID }} {{ old('license_status') == $license_status->License_Status_ID ? 'selected' : '' }}>{{ $license_status->Description }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('license_status'))
                        <span class="text-danger">{{ $errors->first('license_status') }}</span>
                    @endif
                        </div>
                    </div>


                    <div class="form-row pl-3 pr-3">
                        <div class="form-group col-md-6 pr-3">
                          <label
                            >Date (Year and month)</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="date"
                            id="datepicker"
                            value="{{ old('date') }}"
                            placeholder="YYYY-MM"
                          />
                          @if ($errors->has('license_status'))
                          <span class="text-danger">{{ $errors->first('license_status') }}</span>
                      @endif
                        </div>

                        <div class="form-group col-md-6 pr-3" hidden>
                        </div>
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width: 120px;">Submit</button> &nbsp;&nbsp;&nbsp; <button type="reset" class="btn btn-warning"  style="width: 120px; color:white">Reset</button>
                  </div>
                </form>
            </div>
            @if(Session::has('results'))
                <div class="card" >
                    <div class="card-header">
                      <h3 class="card-title">Report one Results</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="report_01" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Province</th>
                          <th>Authority</th>
                          <th>Count License ID</th>
                          <th>License Amount</th>
                          <th>Arrears</th>
                          <th>Fine</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach (Session::get('results') as $res)
                            <tr><td>{{ $res->Province }}</td>
                                <td>{{ $res->Authority }}</td>
                                <td>{{ $res->Count_License_ID }}</td>
                                <td>{{ $res->License_Amount }}</td>
                                <td>{{ $res->Arrears }}</td>
                                <td>{{ $res->Fine }}</td></tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    @php
                        Session::forget('status');
                    @endphp
                  </div>
                  <!-- /.card -->
                @endif

            @if(Session::has('status'))
            <div class="row pl-2 pr-2">
                <div class="col-12 alert alert-danger container">
                    {{ Session::get('status') }}
                    @php
                        Session::forget('status');
                    @endphp
                </div>
            </div>
        @endif
          </div>
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
    $("#report_01").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#report_01_wrapper .col-md-6:eq(0)');


  });

</script>
</body>
</html>
