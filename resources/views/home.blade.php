@include('header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-9">
                    <video id="videoPreview" src="http://127.0.0.1:8000/storage/videos/file_example_MP4_1920_18MG_664ed507a7a8b.mp4" controls style="width: 100%; height: auto"></video>
                </div>
                <div class="col-sm-3">
                    <form>
                        @csrf
                    @foreach($videos as $video)
                    <div class="row" style="width:100%;border:1px solid #cacaca;padding-top:20px;padding-bottom:15px;">

                            <div class="image-border" width="250px" >

                            <img     csrf-token="{{ csrf_token() }}" data-id="{{$video->id}}" class="video-poup" width="100%" src="<?=env('APP_URL') . 'storage/thumbnails/' . $video->thumbnail?>" class="rounded float-start"
                               data-action="{{route('getVideoByid')}}" alt="GFG" />
                               <p class="fs-6 text-uppercase title text-center">{{$video->title}}</p>


                        </div>

                    </div>

               @endforeach
                </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<!-- ./wrapper -->
<script>
    $('.video-poup').click(function(){

        $.ajax({
            method: "post",
            data: {id:$(this).attr('data-id')},


            url: $(this).data('action'),
            headers: {
                'X-CSRF-TOKEN': $('.video-poup').attr('csrf-token')
            },
            success: function(response) {

                    $('#videoPreview').attr('src', 'http://127.0.0.1:8000/storage/videos/'+response.video.video);





            }


        });

    });
    </script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>
