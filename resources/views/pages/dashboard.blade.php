
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="card">
    <h2>Dashboard</h2>

    <p>Selamat datang, <strong>{{ $user->name }}</strong></p>

    <p class="muted">s
        Ini adalah ringkasan aktivitas artikel di aplikasi kamu.
    </p>
</section>

<section class="row" style="margin-top: 1rem;">
    <div class="card">
        <h3>Total Artikel</h3>
        <p style="font-size: 2rem;">{{ $totalArticles }}</p>
        <p class="muted">Jumlah seluruh artikel.</p>
    </div>

    <div class="card">
        <h3>Artikel Kamu</h3>
        <p style="font-size: 2rem;">{{ $myArticles }}</p>
        <p class="muted">Artikel yang dibuat akun kamu.</p>
    </div>

    <div class="card">
        <h3>Aksi Cepat</h3>
        <ul>
            <li><a href="{{ route('articles.create') }}">Tambah Artikel Baru</a></li>
            <li><a href="{{ route('articles.index') }}">Lihat Semua Artikel</a></li>
            <li><a href="{{ route('home') }}">Lihat Home</a></li>
        </ul>
    </div>
</section>

<section class="card" style="margin-top: 1rem;">
    <h3>Artikel Terbaru</h3>

    @if ($latestArticles->isNotEmpty())
        @foreach ($latestArticles as $article)
            <article class="card" style="margin-bottom: 1rem;">
                <h4>
                    <a href="{{ route('articles.show', $article) }}">
                        {{ $article->title }}
                    </a>
                </h4>

                <p class="muted">
                    oleh {{ $article->user->name }}
                    &bull;
                    {{ $article->created_at->format('d M Y') }}
                </p>

                <p>
                    {{ \Illuminate\Support\Str::limit($article->body, 100) }}
                </p>
            </article>
        @endforeach
    @else
        <p>Belum ada artikel.</p>
    @endif
</section>

<section class="card" style="margin-top: 1rem;">
    <h3>Info Akun</h3>
    <ul>
        <li><strong>Nama:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
    </ul>
</section>
@endsection
