@include('admin.layouts.header')

@include('admin.layouts.sidear')

@include('admin.layouts.footer')

@yield('header')

@yield('sidebar')



  <div class="content-wrapper">
      <!-- MainController content -->

      <div class="col-6" style="margin: 15px auto ">
          <form action="{{route('admin.article')}}" method="get">
              <div class="form-group">
                  <label>Category</label>
                  <select class="custom-select" id="inputGroupSelect" name="category_id">
                      <option selected>Choose...</option>
                      @foreach($category as $cat)
                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                      @endforeach
                  </select>
              </div>
              <div class=" row form-group col-2" style="margin: 0 auto">
                  <button type="submit" class="btn btn-primary btn-md text-center  "  style="float: right">Filter</button>
              </div>
          </form>
      </div>

      <section class="content mt-3">
          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Article</h3>
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
                              Article Name
                          </th>
                          <th style="width: 20%">
                              Category
                          </th>
                          <th style="width: 20%">
                              Excerpt
                          </th>

                          <th style="width: 20%">
                          </th>
                      </tr>
                      </thead>

                      <tbody>

                      @foreach($article as $key=>$art)
                      <tr>
                          <td>
                              {{$key + 1 }}
                          </td>
                          <td>
                              <a>
                                  {{$art->name}}
                              </a>
                              <br/>
                              <small>
                                  {{$art->created_at}}
                              </small>
                          </td>

                          <td>
                              <span>{{$art->category->name}}</span>
                          </td>

                          <td>
                              <span>{{$art->excerpt}}</span>
                          </td>

                          <td class="project-actions text-right">
                              <a class="btn btn-primary btn-sm" href="{{route('showArticle',$art->id)}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  view
                              </a>
                              <a class="btn btn-info btn-sm" href="{{route('admin.editArticle',$art->id)}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>

                              <form style="display: inline" method="post" action="{{route('admin.deleteArticle',$art->id)}}" >
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
      <div class="row col-2" style="margin: 0 auto ">
          <div class="">
              {{$article->links()}}
          </div>
      </div>
  </div>
  <!-- /.content-wrapper -->



@yield('footer')
