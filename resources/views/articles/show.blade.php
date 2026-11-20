
@extends('layouts.app')

@section('title', $article->title)

@section('content')
<section class="detail-section">

    <div class="detail-navigation">
        <a href="{{ route('articles.index') }}">← Kembali ke Daftar Artikel</a>
    </div>

    <article class="detail-card">

        <div class="detail-header">
            <span class="article-category">ARTICLEHUB / ARTIKEL</span>

            <h1>{{ $article->title }}</h1>

            <div class="detail-meta">
                <span>✍️ {{ $article->user->name }}</span>
                <span>📅 {{ $article->created_at->format('d M Y') }}</span>
            </div>
        </div>

        @if ($article->image_url)
            <div class="detail-image">
                <img
                    src="{{ $article->image_url }}"
                    alt="Gambar {{ $article->title }}"
                >
            </div>
        @endif

        <div class="detail-body">
            {!! nl2br(e($article->body)) !!}
        </div>

        <div class="detail-footer">

            <a href="{{ route('home') }}" class="btn-cancel">
                Home
            </a>

            <div class="detail-actions">
                @auth
                    @if ($article->user_id === auth()->id())
                        <a
                            href="{{ route('articles.edit', $article) }}"
                            class="btn-edit"
                        >
                            Edit Artikel
                        </a>
                    @endif
                @endauth

                <a href="{{ route('articles.index') }}" class="btn-submit">
                    Artikel Lainnya
                </a>
            </div>

        </div>

    </article>

</section>
@endsection
