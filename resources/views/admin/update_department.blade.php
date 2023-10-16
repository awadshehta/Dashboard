@extends('admin/layouts/admin_layout')
@section('content')


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
            
                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit department</h4>
                    <form class="forms-sample" action="{{route('department_update', $to_be_updated->id)}}" method="POST" enctype="multipart/form-data">  
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" name="department_name" value="{{$to_be_updated->department_name}}" class="form-control" id="exampleInputUsername1" >
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
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