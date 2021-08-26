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
                    <h1>Add Article Form</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- MainController content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <form method="post" action="{{route('admin.storeArticle')}}" enctype="multipart/form-data">
                        @csrf


                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>


                        @error('excerpt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="text" name="excerpt" class="form-control"/>
                        </div>


                        @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Category</label>
                            <select class="custom-select" id="inputGroupSelect" name="category_id">
                                <option selected>Choose...</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        @error('featured_photos')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlFile1">File input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="featured_photos">
                        </div>

                        @error('Description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea class="summernote" name="description"></textarea>
                        </div>

                        <div class="form-group text-center col-4 mx-auto mt-5">
                            <button type="submit" class="btn btn-block btn-success btn-lg">Save</button>
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
