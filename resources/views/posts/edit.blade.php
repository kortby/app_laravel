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
          <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit</h1>

       
          
             <!-- form Example -->
        <div class="card shadow mb-4">


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit - {{ $post->title }}</h6>
            </div>
            <div class="card-body">
              
             
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
        
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