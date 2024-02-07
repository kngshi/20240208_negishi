@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('nav')
        <nav>
              <a class="header-nav__link" href="/login">Logout</a>
        </nav>
@endsection

@section('content')
<div class="admin-title">
    <div class="admin-title__heading">
        <h2>Admin</h2>
    </div>
    <div class="attendance__alert">
        <!-- メッセージ機能 -->
    </div>
</div>

<div class="admin__content">
  <div class="search__group">
    <form class="search__button">
      @csrf
      <input type="text" name="search__input--text" placeholder="名前やメールアドレスを入力してください"></input>
      <!-- ここの部分は、要確認 -->
      <select class="search__select" type="submit">
        <option value="性別">性別</option>
        <option value="男性">男性</option>
        <option value="女性">女性</option>
        <option value="その他">その他</option>
    　</select>
      <select class="search__select--button" type="submit">
        <option value="0">お問い合わせの種類</option>
        <option value="1">商品のお届けについて</option>
        <option value="2">商品の交換について</option>
        <option value="3">商品トラブル</option>
        <option value="4">ショップへのお問い合わせ</option>
        <option value="5">その他</option>
    　</select>
      <input type="date" name="search__input-date">
      <!-- ここにカレンダー配置。カレンダーで検索できるように実装 -->
      </input>
      <button class="search__button-submit" type="submit">検索</button>
      <button class="search__button-submit" type="submit">リセット</button>
    </form>
  </div>

  <div class="admin-table">
    <table class="admin-table__inner">
      <tr class="admin-table__row">
        <th class="admin-table__header">お名前</th>
        <th class="admin-table__header">性別</th>
        <th class="admin-table__header">メールアドレス</th>
        <th class="admin-table__header">お問い合わせ種類</th>
        <th class="admin-table__header">詳細ボタンのカラム</th>
      </tr>

      <tr class="admin-table__row">
        <td class="admin-table__item">山田太郎</td>
        <td class="admin-table__item">男性</td>
        <td class="admin-table__item">test@example.com</td>
        <td class="admin-table__item">商品の交換について</td>
        <td class="admin-table__item"><button type="button" class="admin-button__detail" data-toggle="modal" data-target="#myModal">詳細</button></td>
      </tr>
      
    </table>
  </div>
</div>
@endsection
