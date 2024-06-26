<!DOCTYPE html>
 <html>
    <head>
        <title>AdaTube</title>
        <link rel="stylesheet" href="ss_adatube.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="icon" href="C:\Users\Hp\Desktop\AdaTube\adatube-logo-icon.png" type="image/icon type">
<style>

    </style>
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <body>
        <div class="header">
            <div class="left-section">
                <img  class= "hamburger-menu" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/hamburger-menu.svg" >
                <img class="youtube-logo" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/adatube-logo6-g.svg">
            </div>
            <div class="middle-section">
                <input type="text" class="searchbox" placeholder="Search">
                <button class="search-button"><img class="search-icon" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/search.svg"><div class="tooltip">Search</div></button>
                <button class="voice-search-button"><img class="voice-search-icon" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/voice-search-icon.svg"><div class="tooltip">Search with your voice</div></button>
            </div>
            <div class="right-section">
                <div class="upload"><img class="upload-icon" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/upload.svg"><div class="tooltip">Upload</div></div>
                <div class="notifications"><img class="notifications-icon" src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/Header/notifications.svg"><div class="tooltip">Notifications</div><div class="notification-count">4</div></div>
                <img class="current-user-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/LarithuS.jpg">
            </div>
        </div>
        <div class="sidebar">
        <div class="sidebar-link"><a href="{{route('home',['id' => 1])}}" class="nav-link"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/sidebar/home.svg"><div> Home</a></div></div>
        <div class="sidebar-link"><a href="{{route('view')}}" class="nav-link"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/sidebar/shorts.svg"><div> Upload Video</a></div></div>

        </div>
        <div class="video-grid">
            @foreach($videos as $video)
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="{{route('home',['id'=>$video->id])}}"><img class="thumbnail" src="http://127.0.0.1:8000/storage/thumbnails/{{$video->thumbnail}}"></a>
                    <div class="video-time">3:51</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="http://127.0.0.1:8000/storage/thumbnails/{{$video->thumbnail}}"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><p class="video-title">{{$video->title }}</p></a>

                    <p class="video-stats">350M views &#183; 2 years ago</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="shorts">
            <div class="top-section">
                <div class="short-icon">
                    <img  class="shorts-icon"src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/shorts-icon.svg">
                    <p class="shorts-text">Shorts</p>
                </div>
                <div class="Close-button">
                    <button class="X-button"><img class="X-icon"src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/X-icon.svg"></button>
                </div>
            </div>
            <div class="shorts-grid">
                <a href="https://www.youtube.com/shorts/gtPdvxIQ6y8"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-1.jpg"><p class="shorts-title">Y2K 그 잡채 (｡•̀ᴗ ＜✌) 🐹🐧Y2K itself (｡•̀ᴗ＜ ✌) 🐹🐧</p><p style="color:rgb(96,96,96);">178K views</p></div></a>
                <a href="https://www.youtube.com/shorts/t5KHnjkfmGo"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-6.jpg"><p class="shorts-title">the most evil company ever</p><p style="color:rgb(96,96,96);">1.4M views</p></div></a>
                <a href="https://www.youtube.com/shorts/g400QZJqORo"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-2.jpg"><p class="shorts-title">Random Dance Battle @ Y2K TDOONG SHOW #TWICE #트와이스</p><p style="color:rgb(96,96,96);">579K views</p></div></a>
                <a href="https://www.youtube.com/shorts/zst618C6akE"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-3.jpg"><p class="shorts-title">Why every MacBook screen is angled at 76º in Apple Stores</p><p style="color:rgb(96,96,96);">1M views</p></div></a>
                <a href="https://www.youtube.com/shorts/sw9Bat6Kq4Y"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-4.jpg"><p class="shorts-title">Simple & Strong Dowel Joint #shorts</p><p style="color:rgb(96,96,96);">19M views</p></div></a>
                <a href="https://www.youtube.com/shorts/VZCrK6rJNV4"><div class="shorts-video"><img class="shorts-thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/shorts/shorts-5.jpg"><p class="shorts-title">Flags Contain Themselves</p><p style="color:rgb(96,96,96);">1.3M views</p></div></a>
            </div>
            <div class="button-sec">
                <button class="down-button"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/down-icon.svg"></button>
            </div>
        </div>
        <div style="margin-top:20px;" class="video-grid">
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1.jpg"></a>
                    <div class="video-time">1:07</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><p class="video-title">TWICE "READY TO BE" Opening Trailer</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">1.9M views &#183; 1 day ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a2.jpg"></a>
                    <div class="video-time">4:35</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@twicejapan_official"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><p class="video-title">TWICE 「Doughnut」 Music Video</p></a>
                    <a href="https://www.youtube.com/@twicejapan_official"><p class="video-author">TWICE JAPAN OFFICIAL YouTube Channel</p></a>
                    <p class="video-stats">35M views &#183; 1 year ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-3.jpg"></a>
                    <div class="video-time">3:51</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><p class="video-title">TWICE "The Feels" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">350M views &#183; 2 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-2.jpg"></a>
                    <div class="video-time">3:38</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><p class="video-title">TWICE "FANCY" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">568M views &#183; 4 years ago</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="latest-posts">
            <div class="top-section">
                <div class="short-icon">
                    <p class="shorts-text">Latest AdaTube Posts</p>
                </div>
                <div class="Close-button">
                    <button class="X-button"><img class="X-icon"src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/X-icon.svg"></button>
                </div>
            </div>
            <div class="posts-grid">
                <a href="https://www.youtube.com/post/UgkxXAaWVeZLmeQpj6eFnnotRUsR0xRpB0SP">
                    <div class="post-preview">
                        <div class="shorts-header"><img class="shorts-channel" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1.jpg"><p class="channel-date">TWICE • 1 day ago</p></div>
                        <div class="post-content">
                            <div><p class="post-text">TWICE 12TH MINI ALBUM
                                "READY TO BE"

                                Concept Photo #1
                                DAHYUN

                                Release on
                                2023.03.10 FRI 2PM KST/0AM EST

                                📌"READY TO BE" Pre-save & Pre-order
                                https://TWICE.lnk.to/READYTOBE

                                #TWICE #트와이스
                                #READYTOBE #SETMEFREE</p></div>
                            <div><img class="post-img" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/posts/img%2C/post1.jpg"></div>
                        </div>
                        <div class="post-but-grid">
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/like-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/dislike-icon.svg"></button>
                            </div>
                            <div>

                            </div>
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/share-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/comment-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/more-icon.svg"></button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.youtube.com/post/Ugkxj76lWXGnGDBH4Ubxl-1Bb-6QhHrluExd">
                    <div class="post-preview">
                        <div class="shorts-header"><img class="shorts-channel" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1.jpg"><p class="channel-date">TWICE • 2 days ago</p></div>
                        <div class="post-content">
                            <div><p class="post-text">TWICE 12TH MINI ALBUM
                                "READY TO BE"

                                Concept Photo #1
                                SANA

                                Release on
                                2023.03.10 FRI 2PM KST/0AM EST

                                📌"READY TO BE" Pre-save & Pre-order
                                https://TWICE.lnk.to/READYTOBE

                                #TWICE #트와이스
                                #READYTOBE #SETMEFREE</p></div>
                            <div><img class="post-img" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/posts/img%2C/post2.jpg"></div>
                        </div>
                        <div class="post-but-grid">
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/like-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/dislike-icon.svg"></button>
                            </div>
                            <div>

                            </div>
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/share-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/comment-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/more-icon.svg"></button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.youtube.com/post/UgkxjL8oT-4Vazkqs7eJbA1g6HXUcRILbCgg">
                    <div class="post-preview">
                        <div class="shorts-header"><img class="shorts-channel" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1.jpg"><p class="channel-date">TWICE • 3 days ago</p></div>
                        <div class="post-content">
                            <div><p class="post-text">TWICE 12TH MINI ALBUM
                                "READY TO BE"

                                Concept Photo #1
                                JEONGYEON

                                Release on
                                2023.03.10 FRI 2PM KST/0AM EST

                                📌"READY TO BE" Pre-save & Pre-order
                                https://TWICE.lnk.to/READYTOBE

                                #TWICE #트와이스
                                #READYTOBE #SETMEFREE</p></div>
                            <div><img class="post-img" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/posts/img%2C/post3.jpg"></div>
                        </div>
                        <div class="post-but-grid">
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/like-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/dislike-icon.svg"></button>
                            </div>
                            <div>

                            </div>
                            <div>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/share-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/comment-icon.svg"></button>
                                <button class="post-buttons"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/more-icon.svg"></button>
                            </div>
                        </div>
                    </div>
                </div>
                </a>

            <div class="button-sec">
                <button class="down-button"><img src="https://raw.githubusercontent.com/LarithuS/AdaTube/5b086c9378ad25d747d37b31f763a922c67fd5c4/shorts/down-icon.svg"></button>
            </div>
        </div>
        <div style="margin-top:20px;" class="video-grid">
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-3.jpg"></a>
                    <div class="video-time">3:51</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><p class="video-title">TWICE "The Feels" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">350M views &#183; 2 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1.jpg"></a>
                    <div class="video-time">1:07</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><p class="video-title">TWICE "READY TO BE" Opening Trailer</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">1.9M views &#183; 1 day ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-2.jpg"></a>
                    <div class="video-time">3:38</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><p class="video-title">TWICE "FANCY" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">568M views &#183; 4 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a2.jpg"></a>
                    <div class="video-time">4:35</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@twicejapan_official"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><p class="video-title">TWICE 「Doughnut」 Music Video</p></a>
                    <a href="https://www.youtube.com/@twicejapan_official"><p class="video-author">TWICE JAPAN OFFICIAL YouTube Channel</p></a>
                    <p class="video-stats">35M views &#183; 1 year ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a2.jpg"></a>
                    <div class="video-time">4:35</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@twicejapan_official"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><p class="video-title">TWICE 「Doughnut」 Music Video</p></a>
                    <a href="https://www.youtube.com/@twicejapan_official"><p class="video-author">TWICE JAPAN OFFICIAL YouTube Channel</p></a>
                    <p class="video-stats">35M views &#183; 1 year ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-2.jpg"></a>
                    <div class="video-time">3:38</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><p class="video-title">TWICE "FANCY" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">568M views &#183; 4 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1.jpg"></a>
                    <div class="video-time">1:07</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><p class="video-title">TWICE "READY TO BE" Opening Trailer</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">1.9M views &#183; 1 day ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-3.jpg"></a>
                    <div class="video-time">3:51</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><p class="video-title">TWICE "The Feels" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">350M views &#183; 2 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1.jpg"></a>
                    <div class="video-time">1:07</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=ix62ySKlxb0"><p class="video-title">TWICE "READY TO BE" Opening Trailer</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">1.9M views &#183; 1 day ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a2.jpg"></a>
                    <div class="video-time">4:35</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@twicejapan_official"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=VcOSUOpACq0"><p class="video-title">TWICE 「Doughnut」 Music Video</p></a>
                    <a href="https://www.youtube.com/@twicejapan_official"><p class="video-author">TWICE JAPAN OFFICIAL YouTube Channel</p></a>
                    <p class="video-stats">35M views &#183; 1 year ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-3.jpg"></a>
                    <div class="video-time">3:51</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=f5_wn8mexmM"><p class="video-title">TWICE "The Feels" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">350M views &#183; 2 years ago</p>
                    </div>
                </div>
            </div>
            <div class="video-preview">
                <div class="thumbnail-row">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><img class="thumbnail" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/Thumbnails/thumbnail-a1-2.jpg"></a>
                    <div class="video-time">3:38</div>
                </div>
                <div class="video-info-grid">
                    <div class="channel-picture">
                    <a href="https://www.youtube.com/@JYPEntertainment"><img class="profile-picture" src="https://raw.githubusercontent.com/LarithuS/AdaTube/master/channels/channels-a1-2.jpg"></a>
                    </div>
                    <div class="video-info">
                    <a href="https://www.youtube.com/watch?v=kOHB85vDuow"><p class="video-title">TWICE "FANCY" M/V</p></a>
                    <a href="https://www.youtube.com/@JYPEntertainment"><p class="video-author">JYP Entertainment</p></a>
                    <p class="video-stats">568M views &#183; 4 years ago</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
 </html>
