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
                  <h3 class="card-title">NewLetter Emails</h3>
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
                              Emails
                          </th>
                          <th style="width: 20%">
                          </th>
                      </tr>
                      </thead>

                      <tbody>
                        @foreach($data as $key=>$item)
                      <tr>
                          <td>
                              {{$key + 1}}
                          </td>
                          <td>
                              <a>
                                  {{$item->email}}
                              </a>
                              <br/>
                              <small>
                                  {{$item->created_at}}
                              </small>
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
