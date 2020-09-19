@extends('layouts.center')

@section('title')
    로그인
@endSection

@section('content')
<section>
    <div class="form-login">
        <form method="post">
            <div class="text-center mt-3 mb-3">
                <h3>로그인(이뻐요 수미가)</h3>
            </div>
            <div class="form-group">
                <label for="user-id">아이디</label>
                <input type="text"
                       id="user-id"
                       name="user_id"
                       class="form-control"
                       value="">
                <small id="user-id-help"
                       class="form-text text-muted">
                    아이디를 입력하세요.
                </small>
            </div>
            <div class="form-group">
                <label for="user-password">패스워드</label>
                <input type="password"
                       id="user-password"
                       name="user_password"
                       class="form-control"
                       value="">
                <small id="user-password-help"
                       class="form-text text-muted">
                    패스워드를 입력하세요.
                </small>
            </div>
            <div class="form-group">
                <input type="button"
                       class="btn btn-primary btn-lg btn-block"
                       value="로그인">
            </div>
        </form>
    </div>
</section>
@endSection