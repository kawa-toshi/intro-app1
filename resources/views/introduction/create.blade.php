@extends('layouts/head')
@push('css')
    <link href="{{ asset('css/introduction/introduction_create.css') }}" rel="stylesheet">
@endpush
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      プロフィール登録画面
    </h2>
  </x-slot>


  <div class="Preview-box">
    <h2 class="Preview-box__title">PREVIEW</h2>
  <div class="Cover-image-area">
    <img src="{{ $profile_cover_photo_url }}" class="Cover-image-area__content">
  </div>

  <div id="Cover-preview-area">
  </div>

  <div class="Profile-area">
    <img class="Profile-area__left" src="{{ $profile_photo_url }}"alt="{{ Auth::user()->name }}" />
    <div id="Profile-preview-area"></div>

    <div class="Profile-area__right">
      <div class="User">
        <p class="User__name">{{ $user -> name}}</p>

      </div>
      <div class="User-detail">
        <p class="User-detail__content">プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明
        プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明
        プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明プロフィールの説明
        </p>
      </div>
      <div class="User-follow">
        <p class="User-follow__follow">87フォロー</p>
        <p class="User-follow__follower">100フォロワー</p>
      </div>
    </div>
  </div>
</div>

<div class="Wrapper">
  <div class="Wrapper__title">PROFILE</div>
    <div class="Post-box">
      <form method="POST" action="{{ route('introduction-store')}}" enctype="multipart/form-data">
        @csrf

        <div class="Post-box__profile-image">
          <p>プロフィール画像</p>
          <label for="Profile-image" class="Image-field">プロフィール画像を登録
            <input type="file" name="profile_image_path"  id="Profile-image">
          </label>
        </div>

        <div class="Post-box__cover-image">
          <p>カバー画像</p>
          <label for="Cover-image" class="Image-field">カバー画像を登録
            <input type="file" name="profile_cover_image_path"  id="Cover-image">
          </label>
        </div>


        <div class="Post-box__content">
          
            <p>プロフィール詳細</p>
            <textarea class="Post-box__content-text" name="profile_message" placeholder="内容" required autocomplete="text" rows="4"></textarea>
          
        </div>

        <div class="Post-box__btn">
          <a href="{{ route('post')}}" type="submit" class="Btn-gradient--red">
              キャンセル
          </a>
          <button type="submit" class="Btn-gradient">
              登録する
          </button>
        </div>
      </form>
    </div>
</div>

</x-app-layout>
