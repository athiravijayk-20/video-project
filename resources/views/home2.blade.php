
<style>

</style>
<div class="app-wrap">
    <link rel="stylesheet" href="{{asset('css/youtube-details.css')}}">
  <!-- Masthead -->

  <header class="masthead bg-style">

    <!-- Masthead Logo -->

    <div class="logo-container">

      <div class="btn-hamburger" onClick="toggle()">
        <i class="material-icons md-dark md-inactive">menu</i>
      </div>
      <a href="">
        <div class="logo"></div>
      </a>


    </div>

    <!-- Search -->

    <div class="search">
      <input class="search-input" type=search results=5 name=s autosave=some_unique_value>
      <button class="search-button">
        <i class="material-icons md-18 md-dark">search</i>
    </button>
    </div>

    <!-- Masthead User -->

    <div class="user-container">
      <a href="">
        <button class="btn-upload">
          <span>Upload</span>
        </button>
      </a>
      <a href="">
        <i class="material-icons md-dark">notifications_none</i>
      </a>
      <a href="">
        <div class="btn-profile">
        </div>
      </a>
    </div>

  </header>

  <!-- Navigation Drawer -->

  <div id="nav-drawer" class="bg-style hide">

    <a href="">
      <i class="material-icons md-dark md-18">home</i>
      <span> <a href="{{route('home',['id' => 1])}}" class="nav-link">Home</a></span>
    </a>
    <a href="">
      <i class="material-icons md-dark md-18"><a href="{{route('view')}}" class="nav-link">Upload Video</a></i>

    </a>




  </div>

  <!-- Scroll -->

  <div class="scroll">

    <!-- Content -->

    <div class="content">

      <!-- Main Column -->

      <article class="main">

        <!-- Player -->

        <section class="player">
            <video id="videoPreview" src="http://127.0.0.1:8000/storage/videos/{{$video_num->video}}" controls style="width: 100%; height: auto"></video>
        </section>

        <!-- Lead -->

        <section class="bg-style">

          <!-- Title -->

          <h1>{{$video_num->title}}</h1>

          <!-- Media Object -->

          <div class="media">

            <img class="img-profile media-figure" src="https://yt3.ggpht.com/-UbUyULJMBoM/AAAAAAAAAAI/AAAAAAAAAAA/LGD8KPvBEdc/s88-c-k-no/photo.jpg" alt="">

            <div class="media-body">

              <h3>The Odin Project</h3>

              <div class="subscribe">
                <button class="subscribe-btn">
                  <i class="material-icons md-light md-18">play_circle_filled</i>
                  <span>Subscribe</span>
                </button>
                <span class="subscribe-count">145</span>
              </div>

            </div>

            <span class="lead-view-count">7,372</span>

          </div>
          <hr>

          <!-- Button Bar -->

          <div class="lead-btn-row">

            <div class="lead-social-btn">
              <a href="">
                <i class="material-icons md-dark">add</i>
                <span>Add to</span>
              </a>
              <a href="">
                <i class="material-icons md-dark md-18">share</i>
                <span>Share<span>
              </a>
              <a>
                <i class="material-icons md-dark">more_horiz</i>
                <span>More</span>
              </a>
            </div>
            <div class="lead-voting-btn">
              <a href="">
                <i class="material-icons md-dark md-18">thumb_up</i>
                <span>42</span>
              </a>
              <a>
                <i class="material-icons md-dark md-18">thumb_down</i>
                <span>0</span>
              </a>
            </div>

          </div>
        </section>

        <!-- Description -->

        <section class="bg-style">
          <h3>Published on Feb 27, 2014</h3>
          <p>How do you contribute to open source?  In this video, I'll describe the easiest way to make a simple contribution to an open source project -- without using the command line.</p>
          <div class="btn-flat">
            <span><strong>SHOW MORE</strong></span>
          </div>
        </section>

        <!-- Comments -->

        <section class="comments bg-style">

          <!-- Create Comment -->

          <h3>ALL COMMENTS (2)</h3>
          <div class="media">
            <img class="img-profile media-figure" alt="" src="https://yt3.ggpht.com/-xKakHjmg9Cg/AAAAAAAAAAI/AAAAAAAAAAA/-7SNTsiGgTE/s88-c-k-no/photo.jpg">
            <textarea class="media-body" placeholder="Add a pubic comment..."></textarea>
          </div>

          <!-- View Comments -->

          <button class="comment-filter">
            <span>Top comments</span>
            <i class="material-icons md-dark md-18">arrow_drop_down</i>
          </button>

          <!-- Comment -->

          <div class="media">

            <!-- Media Object -->

            <img class="img-profile media-figure" src="https://yt3.ggpht.com/-xKakHjmg9Cg/AAAAAAAAAAI/AAAAAAAAAAA/-7SNTsiGgTE/s88-c-k-no/photo.jpg">

            <div class="media-body">

              <p class="username">Bill Smith<span>9 months ago</span></p>
              <p class="media-body">This is a hilarious comment.</p>

              <!-- Comment Social Interactions -->

              <div class="comment-btn-bar">
                <a href="">
                  <span>Reply</span>
                </a>
                <a href="">
                  <i class="material-icons md-dark md-18 md-inactive">thumb_up</i>
                </a>
                <a href="">
                  <i class="material-icons md-dark md-18 md-inactive">thumb_down</i>
                </a>
              </div>

            </div>

          </div>
        </section>

      </article>

      <!-- Aside -->

      <aside class="aside bg-style">

        <!-- Media Objects -->

        <div class="next-up-bar">

          <h5>Up next</h5>
          <h5>Autoplay</h5>
          <i class="material-icons md-18 md-dark">info</i>

          <div class="switch-container">
            <div class="switch-bar"></div>
            <div class="switch-circle"></div>
          </div>

        </div>
        @foreach($videos as $video)
        <div class="media up-next" class="video-poup"   csrf-token="{{ csrf_token() }}" data-id="{{$video->id}}"  src="<?=env('APP_URL') . 'storage/thumbnails/' . $video->thumbnail?>"
            data-action="{{route('getVideoByid')}}">

          <img class="media-figure img-aside video-poup"  csrf-token="{{ csrf_token() }}" data-id="{{$video->id}}"  src="<?=env('APP_URL') . 'storage/thumbnails/' . $video->thumbnail?>"
          data-action="{{route('getVideoByid')}}" alt="">

          <div class="media-body">
            <h3 >{{$video->title}}</h3>
            <span class="aside-span">by The Odin Project</span>
            <span class="aside-span">7,372 views</span>
          </div>

        </div>
@endforeach



        <h5 class="btn-flat"><span><strong>SHOW MORE</strong></span></h5>

      </aside>

    </div>


    <!-- Footer -->

    <footer class="footer bg-style">

      <!-- Button Footer Row -->

      <div class="button-footer">
        <a src="">
          <div class="logo"></div>
        </a>
        <button>
          <i class="material-icons md-dark md-18">language</i>
          <span class="footer-btn">Language: <strong>English</strong></span>
          <i class="material-icons md-dark md-18">arrow_drop_down</i>
        </button>
        <button>
          <span class="footer-btn">Country: <strong>Worldwide</strong></span>
          <i class="material-icons md-dark md-18">arrow_drop_down</i>
        </button>
        <button>
          <span class="footer-btn">Restricted Mode: <strong>Off</strong></span>
          <i class="material-icons md-dark md-18">arrow_drop_down</i>
        </button>
        <button>
          <i class="material-icons md-dark md-18">history</i>
          <span>History</span>
        </button>
        <button>
          <i class="material-icons md-dark md-18">help</i>
          <span>Help<span>
        </button>
      </div>

      <!-- Primary Links Footer -->

      <ul class="primary-links-footer">
        <li>About</li>
        <li>Press</li>
        <li>Copyright</li>
        <li>Creators</li>
        <li>Advertise</li>
        <li>Developers</li>
        <li>+YouTube</li>
      </ul>

      <!-- Secondary Links Footer -->

      <ul class="secondary-links-footer terms">
        <li>Terms</li>
        <li>Privacy</li>
        <li>Policy & Safety</li>
        <li>Send feedback</li>
        <li>Try something new!</li>
      </ul>

    </footer>

  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <!-- ./wrapper -->
  <script>

function toggle() {
  document.getElementById("nav-drawer").classList.toggle("hide");
}

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


	</div>

