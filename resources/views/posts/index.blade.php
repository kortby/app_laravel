@extends('layouts.app')

@section('headerTitle', 'All posts')


@section('content')


  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      @include('layouts.navbar')

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">All Posts</h1>
        <p class="mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium debitis veritatis voluptatem accusamus beatae veniam id qui impedit quis, labore quas. Deserunt nam quisquam quia temporibus nostrum. Iste, ullam aliquid.
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Post title</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($posts as $post)

                      <tr>
                          <td><a href="{{$post->path()}}">{{ $post->title}}</a></td>
                          <td>{{ $post->truncated_body }}</td>
                          <td>{{ $post->formatted_date }}</td>
                          <td><div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ url($post->path()) }}"><i class="fas fa-fw fa-eye"></i> View</a>
                              <a class="dropdown-item" href="{{ url($post->path().'/edit') }}"><i class="fas fa-fw fa-edit"></i> Edit</a>
                              <form action="{{ url($post->path()) }}">
                                @method('DELETE')
                                @csrf
                                <button class="dropdown-item" href=""><i class="fas fa-fw fa-trash-alt"></i> Delete</button>
                              </form>
                              
                            </div>
                          </div></td>
                      </tr>
          
                  @empty 
                      <tr><h2>Nothing has been posted yet!</h2></tr>
                  @endforelse
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Website 2020</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  </div>
  <!-- End of Content Wrapper -->
@endsection