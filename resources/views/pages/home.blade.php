
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="card">
    <h2>Portal Berita Sederhana</h2>

    <p>
        Selamat datang di portal berita sederhana berbasis Laravel.
        Berita di bawah ini diambil dari tabel articles.
    </p>

    @guest
        <p class="muted">
            Kamu belum login. Silakan
            <a href="{{ route('login') }}">Login</a> atau
            <a href="{{ route('register') }}">Register</a>.
        </p>
    @endguest

    @auth
        <p class="muted">
            Kamu login sebagai <strong>{{ auth()->user()->name }}</strong>.
            Kelola berita melalui menu
            <a href="{{ route('articles.index') }}">Artikel</a>.
        </p>
    @endauth
</section>

<section class="card" style="margin-top: 1rem;">
    <h3>Berita Terbaru</h3>

    @if ($articles->isNotEmpty())
        <div class="row">
            @foreach ($articles as $article)
                <article class="card">
                    <div style="display: flex; gap: 1rem;">
                        <img src="{{ $article->image_url }}"
                             alt="Gambar {{ $article->title }}"
                             style="width: 240px; height: 150px;
                             object-fit: cover; border-radius: 10px;">

                        <div>
                            <h4>
                                <a href="{{ route('articles.show', $article) }}">
                                    {{ $article->title }}
                                </a>
                            </h4>

                            <p class="muted">
                                Dipublikasikan pada
                                {{ $article->created_at->format('d M Y') }}
                                oleh {{ $article->user->name }}
                            </p>

                            <p>
                                {{ \Illuminate\Support\Str::limit($article->body, 140) }}
                            </p>

                            <a href="{{ route('articles.show', $article) }}">
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <p class="muted">Belum ada berita yang tersedia.</p>
    @endif
</section>
@endsection
