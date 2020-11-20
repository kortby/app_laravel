@extends('layouts.app')

@section('headerTitle', $post->title)


@section('content')

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      @include('layouts.navbar')

      <!-- Begin Page Content -->
      <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-warning">
                {{ session('status') }}
            </div>
        @endif
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ $post->title }}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex justify-content-between">

            <div class="card-header-left">
              <h6 class="m-0 font-weight-bold text-primary">{{ $post->formatted_date }}</h6>
            </div>

            <div class="card-hader-right d-flex">
              <a class="dropdown-item" href="{{ url($post->path().'/edit') }}"><i class="fas fa-fw fa-edit"></i></a>
              <form action="{{ url($post->path()) }}">
                @method('DELETE')
                @csrf
                <button class="dropdown-item" href=""><i class="fas fa-fw fa-trash-alt"></i></button>
              </form>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                {{ $post->body }}
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