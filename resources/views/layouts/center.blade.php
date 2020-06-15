<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>{{ config('app.name') }} | @yield('title')</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- 외부 css 라이브러리 -->
        @include('includes.css.library')

        <!-- 기능별 css 정의 -->
        @yield('css')
    </head>
    <body>
        <!-- 네비게이션 -->
        @include('layouts.partial.navigation')

        <!-- 내용 -->
        @yield('content')

        <!-- footer source -->
        @include('layouts.partial.footer')

        <!-- 외부 라이브러리 파일 -->
        @include('includes.js.library')

        <!-- 기능별 스크립트 정의 -->
        @yield('script')
    </body>
</html>
