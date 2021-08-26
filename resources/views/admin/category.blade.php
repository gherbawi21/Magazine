@include('admin.layouts.header')

@include('admin.layouts.sidear')

@include('admin.layouts.footer')

@yield('header')

@yield('sidebar')



  <div class="content-wrapper">
      <!-- MainController content -->
      <section class="content mt-3">
          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Category</h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                      </button>
                  </div>
              </div>
              <div class="card-body p-0">
                  <table class="table table-striped projects">

                      <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              Category Name
                          </th>
                          <th style="width: 20%">
                          </th>
                      </tr>
                      </thead>

                      <tbody>
                        @foreach($data as $key=>$category)
                      <tr>
                          <td>
                              {{$key + 1}}
                          </td>
                          <td>
                              <a>
                                  {{$category->name}}
                              </a>
                              <br/>
                              <small>
                                  {{$category->created_at}}
                              </small>
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-primary btn-sm" href="#">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                              <a class="btn btn-info btn-sm" href="{{route('admin.editCategory',$category->id)}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <form style="display: inline" method="post" action="{{route('admin.deleteCategory' ,$category->id)}}" >
                                  @method('delete')
                                  @csrf
                                  <button class="btn btn-danger btn-sm" type="submit">
                                      <i class="fas fa-trash"></i>
                                      Delete
                                  </button>
                              </form>
                          </td>
                      </tr>
                       @endforeach
                      </tbody>

                  </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </section>
      <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

@yield('footer')
