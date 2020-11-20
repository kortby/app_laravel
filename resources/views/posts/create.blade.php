@extends('layouts.app')

@section('headerTitle', 'create post')


@section('content')

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      @include('layouts.navbar')

      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Create Post</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <!-- form Example -->
        <div class="card shadow mb-4">

          <div class="card-header py-3 d-flex justify-content-between">
            Create New Post
          </div>

          <div class="card-body">
            
            <form action="{{ route('posts.store') }}" method="POST">
              @csrf

              @include('posts.form')

            </form>
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