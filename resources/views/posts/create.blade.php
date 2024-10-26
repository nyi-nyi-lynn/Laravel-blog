<x-layout title="New Posts">
    <x-nav active="New Post">
    </x-nav>

   
       <div class="container d-flex justify-content-center">
        <div class="col-lg-6 mt-5 mb-5">
            <div class="card new-post-box">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title"  class="form-label">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="" required>
                          </div>
                          <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3" required="required"></textarea>
                          </div>
                         <button type="submit" class="btn btn-primary">Submit</button>  
                    </form>
                </div>
            </div>
        </div>
       </div>

    <x-footer></x-footer>
    {{-- @section('script')
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/tiny-slider.js"></script>
        <script src="../assets/js/flatpickr.min.js"></script>
        <script src="../assets/js/aos.js"></script>
        <script src="../assets/js/glightbox.min.js"></script>
        <script src="../assets/js/navbar.js"></script>
        <script src="../assets/js/counter.js"></script>
        <script src="../assets/js/custom.js"></script>
    @endsection --}}
</x-layout>
