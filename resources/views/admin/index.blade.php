@extends('admin/layouts/admin_layout')
@section('content')
@include('sweetalert::alert')
<script>
alert()->html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success');
</script>


<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

            <x-admin_sidebar />

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

            <x-admin_navbar />

        <!-- partial -->
            <div class="main-panel">
                
                <x-admin_content />
            
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Departments Table</h4>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                
                                                <th>Department_name</th>
                                                <th colspan="2" style="text-align:center">Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($departments as $department)
                                                <tr>
                                                    <td>{{$department->department_name}}</td>
                                                    <td> <a href="{{route('department_edit', $department->id)}}" class="btn btn-primary">Update</a> </td>
                                                    <td> <a href="{{route('department_delete', $department->id)}}" class="btn btn-danger">Delete</a> </td>
                                                </tr>
                                            @endforeach                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                <x-admin_footer />
            <!-- partial -->
            </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->



@endsection('content')