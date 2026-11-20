
@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<section class="card form-card">

    <div class="form-header">
        <span class="form-icon">📝</span>
        <h2>Edit Artikel</h2>
        <p class="muted">
            Perbarui informasi dan isi artikel kamu.
        </p>
    </div>

    <div class="form-divider"></div>

    @if ($errors->any())
        <div class="error-box">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $article->title) }}"
                required
                placeholder="Masukkan judul artikel"
            >
            @error('title')
                <small class="field-error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">URL Gambar <span>(Opsional)</span></label>
            <input
                type="url"
                id="image"
                name="image"
                value="{{ old('image', $article->image) }}"
                placeholder="https://example.com/gambar.jpg"
            >

            <small class="field-hint">
                Kosongkan jika ingin menggunakan gambar placeholder.
            </small>

            @error('image')
                <small class="field-error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Pratinjau Gambar Saat Ini</label>

            <div class="image-preview">
                <img
                    src="{{ $article->image_url }}"
                    alt="Gambar artikel"
                >
            </div>
        </div>

        <div class="form-group">
            <label for="body">Isi Artikel</label>
            <textarea
                id="body"
                name="body"
                rows="10"
                required
                placeholder="Tulis isi artikel di sini..."
            >{{ old('body', $article->body) }}</textarea>

            @error('body')
                <small class="field-error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-actions">
            <a href="{{ route('articles.index') }}" class="btn-cancel">
                Batal
            </a>

            <button type="submit" class="btn-submit">
                Update Artikel →
            </button>
        </div>

    </form>

</section>
@endsection
