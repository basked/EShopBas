<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        {{--<link rel="stylesheet" href="https://cdn.plyr.io/3.3.7/plyr.css">--}}
        {{--<link rel="dx-theme" data-theme="android5.light" href="{{ Module::asset('Dev:css/dx.android5.light.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="ios7.default" href="{{ Module::asset('Dev:css/dx.ios7.default.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="win10.black" href="{{ Module::asset('Dev:css/dx.win10.black.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="win10.white" href="{{ Module::asset('Dev:css/dx.win10.white.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.light" href="{{ Module::asset('Dev:css/dx.light.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.dark" href="{{ Module::asset('Dev:css/dx.dark.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.light.compact" href="{{ Module::asset('Dev:css/dx.light.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.dark.compact" href="{{ Module::asset('Dev:css/dx.dark.compact.css')}}" data-active="false">--}}
        <link rel="stylesheet" type="text/css" href="{{ Module::asset('Dev:css/dx.material.orange.light.css')}}" />
        {{--<link rel="dx-theme" data-theme="generic.darkmoon.compact" href="{{ Module::asset('Dev:css/dx.darkmoon.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.carmine" href="{{ Module::asset('Dev:css/dx.carmine.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.carmine.compact" href="{{ Module::asset('Dev:css/dx.carmine.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.darkviolet" href="{{ Module::asset('Dev:css/dx.darkviolet.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.darkviolet.compact" href="{{ Module::asset('Dev:css/dx.darkviolet.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.greenmist" href="{{ Module::asset('Dev:css/dx.greenmist.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.greenmist.compact" href="{{ Module::asset('Dev:css/dx.greenmist.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.softblue" href="{{ Module::asset('Dev:css/dx.softblue.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.softblue.compact" href="{{ Module::asset('Dev:css/dx.softblue.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.contrast" href="{{ Module::asset('Dev:css/dx.contrast.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.contrast.compact" href="{{ Module::asset('Dev:css/dx.contrast.compact.css')}}" data-active="false">--}}
        {{--<link rel="dx-theme" data-theme="generic.contrast.compact" href="{{ Module::asset('Dev:css/dx.basked.compact.css')}}" data-active="true">--}}
        <link rel="stylesheet" href="{{ Module::asset('Dev:css/Dev_style.css')}}">
        <link rel="stylesheet" href="{{ Module::asset('Dev:css/style.css')}}">

        <title>Module Dev</title>
    </head>
    <body class="dx-viewport">
        @yield('content')
        {{--<script src="https://cdn.plyr.io/3.3.7/plyr.js"></script>--}}
        {{--<script>--}}
            {{--const player = new Plyr('#player');--}}
            {{--player.source = {--}}
                {{--type: 'video',--}}
                {{--title: 'Example title',--}}
                {{--fullscreen:{enabled: true},--}}
                {{--sources: [--}}
                    {{--{--}}
                        {{--src: 'https://vs1.coursehunters.net/webformyself-comlete-vue-guide-course/lesson1.mp4',--}}
                        {{--type: 'video/mp4',--}}
                    {{--},--}}
                    {{--{--}}
                        {{--src: 'https://vs1.coursehunters.net/webformyself-comlete-vue-guide-course/lesson2.mp4',--}}
                        {{--type: 'video/mp4',--}}
                    {{--},--}}
                {{--],--}}
                {{--poster: 'https://sabe.io/content/tutorials/getting-started-with-vue-js/hero.png',--}}
                {{--tracks: [--}}
                    {{--{--}}
                        {{--kind: 'captions',--}}
                        {{--label: 'English',--}}
                        {{--srclang: 'en',--}}
                        {{--default: true,--}}
                    {{--},--}}
                    {{--{--}}
                        {{--kind: 'captions',--}}
                        {{--label: 'French',--}}
                        {{--srclang: 'fr',--}}
                    {{--},--}}
                {{--],--}}
            {{--};--}}
            {{--player.play(); // Start playback--}}
            {{--player.fullscreen.enter();--}}


        {{--// </script>--}}
        <script src="{{ Module::asset('Dev:js/Dev_script.js') }}"></script>
        <script src="{{ Module::asset('Dev:js/data.js') }}"></script>
        <script src="{{ Module::asset('Dev:js/script.js') }}"></script>
    </body>
</html>
