@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例：山田" value="{{ old('first_name') }}" />
              <input type="text" name="last_name" placeholder="例：太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            @error('first_name')
            {{ $message }} 
            @enderror
            @error('last_name')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio" >
              <input type="radio" name="gender" value="男性" />男性
              <input type="radio" name="gender" value="女性" />女性
              <input type="radio" name="gender" value="その他" />その他
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('gender')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com"value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('email')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('tel')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所
            </span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都千駄ヶ谷1-2-5" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('address')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

          <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類
            </span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <select class="create-form__item-select" name="category_id">
                <option value="category_id">選択して下さい</option>
            </select>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('category_id')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('detail')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>

      </form>

@endsection