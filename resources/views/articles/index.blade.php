
@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
<section class="article-section">

    <div class="article-heading">
        <div>
            <span class="section-label">ARTICLEHUB</span>
            <h2>Jelajahi Artikel</h2>
            <p class="muted">Temukan berbagai tulisan dan informasi menarik.</p>
        </div>

        <a href="{{ route('articles.create') }}" class="btn-submit">
            + Tulis Artikel
        </a>
    </div>

    @if (session('success'))
        <div class="flash">
            {{ session('success') }}
        </div>
    @endif

    @if ($articles->isNotEmpty())

        <div class="article-grid">
            @foreach ($articles as $article)

                <article class="article-card">

                    @if ($article->image_url)
                        <div class="article-image">
                            <img
                                src="{{ $article->image_url }}"
                                alt="{{ $article->title }}"
                            >
                        </div>
                    @else
                        <div class="article-image article-placeholder">
                            <span>ARTICLEHUB</span>
                        </div>
                    @endif

                    <div class="article-content">

                        <span class="article-category">ARTIKEL</span>

                        <h3>
                            <a href="{{ route('articles.show', $article) }}">
                                {{ $article->title }}
                            </a>
                        </h3>

                        <p class="article-author">
                            Ditulis oleh
                            <strong>{{ $article->user->name }}</strong>
                        </p>

                        <div class="article-actions">

                            <a
                                href="{{ route('articles.show', $article) }}"
                                class="btn-detail"
                            >
                                Baca Artikel →
                            </a>

                            @if ($article->user_id === auth()->id())

                                <div class="owner-actions">
                                    <a href="{{ route('articles.edit', $article) }}">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('articles.destroy', $article) }}"
                                        method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete">
                                            Hapus
                                        </button>
                                    </form>
                                </div>

                            @endif

                        </div>
                    </div>

                </article>

            @endforeach
        </div>

        <div class="article-pagination">
            {{ $articles->links() }}
        </div>

    @else

        <div class="empty-articles">
            <div class="empty-icon">📝</div>
            <h3>Belum Ada Artikel</h3>
            <p class="muted">Jadilah orang pertama yang membagikan tulisan.</p>

            <a href="{{ route('articles.create') }}" class="btn-submit">
                Buat Artikel Pertama
            </a>
        </div>

    @endif

</section>
@endsection
