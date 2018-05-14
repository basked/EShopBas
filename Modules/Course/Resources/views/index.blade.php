<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Video.js Playlist UI - Default Implementation</title>
    <link href="{{ Module::asset('Course:css/Course_videojs.css')}}" rel="stylesheet">
    {{--<link href="examples.css" rel="stylesheet">--}}
</head>
<body>
<div class="info">
    <h1>Video.js Playlist UI - Default Implementation</h1>

</div>

<div class="player-container">
    <video
            id="video"
            class="video-js"
            height="300"
            width="600"
            controls>
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson1.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson2.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson3.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson3.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson4.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson5.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson6.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson7.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson9.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson10.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson11.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson12.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson13.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson14.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson15.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson16.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson17.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson18.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson19.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson20.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson21.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson22.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson23.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson24.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson25.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson26.mp4" type="video/mp4">
        <source src="https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson27.mp4" type="video/mp4">
    </video>

    <div class="vjs-playlist">
        <!--
          The contents of this element will be filled based on the
          currently loaded playlist
        -->
    </div>
</div>

<script src="{{Module::asset('Course:js/Course_videojs.js')}}"></script>
<script>
    var player = videojs('video');
    player.playlist([{
        name: 'Video 1',
        description: 'Desc 1',
        duration: 45,
        sources: [
            {src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson1.mp4', type: 'video/mp4'}
        ],
        // you can use <picture> syntax to display responsive images
        thumbnail: [
            {
                srcset: '{{ Module::asset('Course:img/play.png')}}',
                type: 'image/png',
                media: '(min-width: 400px;)'
            },
            {
                src: '{{ Module::asset('Course:img/play.png')}}'
            }
        ]
    },
        {
            name: 'Video 2',
            description: 'Desc 2',
            duration: 37.74,
            sources: [
                {src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson2.mp4', type: 'video/mp4'}
            ],
            // you can use <picture> syntax to display responsive images
            thumbnail: [
                {
                    srcset: '{{ Module::asset('Course:img/play.png')}}',
                    type: 'image/png',
                    media: '(min-width: 400px;)'
                },
                {
                    src: '{{ Module::asset('Course:img/play.png')}}'
                }
            ]
        }


    ]);
    // Initialize the playlist-ui plugin with no option (i.e. the defaults).
    player.playlistUi();
</script>
</body>
</html>


{{--sources: [--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson1.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson2.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson3.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson3.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson4.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson5.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson6.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson7.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson9.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson10.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson11.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson12.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson13.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson14.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson15.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson16.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson17.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson18.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson19.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson20.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson21.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson22.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson23.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson24.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson25.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson26.mp4', type: 'video/mp4' },--}}
{{--{ src: 'https://vs1.coursehunters.net/merlin-dev-laravel-blog/lesson27.mp4', type: 'video/mp4' },--}}
{{--]--}}