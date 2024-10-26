<x-layout title="Posts">
    <x-nav active="blog">
    </x-nav>

       
       <div class="container d-flex justify-content-center">
        <div class="col-lg-6 mt-5 mb-5">
            <div class="card new-post-box">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
                    <form action="{{ route('posts.update',[$post->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title"  class="form-label">Post Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" placeholder="" required>
                          </div>
                          <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3" required="required">{{ $post->content }}</textarea>
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