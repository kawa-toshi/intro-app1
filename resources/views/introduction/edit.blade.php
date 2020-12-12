@extends('layouts/master')
@push('css')
    <link href="{{ asset('css/introduction/introduction_create.css') }}" rel="stylesheet">
@endpush

@section('content')

<x-app-layout>
  <x-slot name="header">
  <nav class="Menu">
      <h1 class="Menu__item--bold">
          プロフィール編集
      </h1>
      <a href="{{ route('post') }}" class="Menu__item">
          投稿一覧
      </a>
      <a href="{{ route('create') }}" class="Menu__item">
          新規投稿
      </a>
      <a href="/introductions/{{ $user->id }}" class="Menu__item">
          マイページ
      </a>
    </nav>
  </x-slot>


  <div class="Preview-box">
    <h2 class="Preview-box__title">PREVIEW</h2>
  <div class="Cover-image-area">
    @if($profile_cover_photo_url)
      <img src="{{ $profile_cover_photo_url }}" class="Cover-image-area__content">
    @else
      <p class="Cover-image-area__content-none">画像がありません</p>
    @endif
  </div>

  <div id="Cover-preview-area">
  </div>

  <div class="Profile-area">
    @if($profile_photo_url)
      <img class="Profile-area__left" src="{{ $profile_photo_url }}" alt="{{ Auth::user()->name }}" />
    @else
      <p class="Profile-area__left-none">画像がありません</p>
    @endif
  
    
  
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
        <p class="User-follow__follow"><span>87</span>フォロー</p>
        <p class="User-follow__follower"><span>100</span>フォロワー</p>
      </div>
    </div>
  </div>
</div>

<div class="Wrapper">
  <div class="Wrapper__title">PROFILE</div>
    <div class="Post-box">
      <form method="POST" action="{{ route('introduction-update')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $introduction_id }}">
        <div class="Post-box__profile-image">
          <label for="Profile-image" class="Image-field simple_square_btn">
          <i class="fas fa-camera-retro"></i>
            プロフィール画像を登録
            <input type="file" name="profile_image_path"  id="Profile-image">
          </label>
        </div>

        <div class="Post-box__cover-image">
          <label for="Cover-image" class="Image-field simple_square_btn">
          <i class="fas fa-camera"></i>
            カバー画像を登録
            <input type="file" name="profile_cover_image_path"  id="Cover-image">
          </label>
        </div>


        <div class="Post-box__content">
          <textarea class="Post-box__content-text" name="profile_message" placeholder="プロフィール詳細" required autocomplete="text" rows="4"></textarea>
        </div>

        <div class="Post-box__btn">
          <a href="{{ route('post')}}" type="submit" class="Btn-gradient--red">
              キャンセル
          </a>
          <button type="submit" class="Btn-gradient">
              編集する
          </button>
        </div>
      </form>
    </div>
</div>

</x-app-layout>

@endsection
