@include('admin.layouts.header')

@include('admin.layouts.sidear')

@include('admin.layouts.footer')

@yield('header')

@yield('sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category Form</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- MainController content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <form method="post" action="{{route('admin.updateCategory',$category->id)}}" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control"/>
                        </div>
                        <div class="form-group text-center col-4 mx-auto mt-5">
                            <button type="submit" class="btn btn-block btn-success btn-lg">Update</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@yield('footer')
