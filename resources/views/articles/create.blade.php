
@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
<section class="card form-card">

    <div class="form-header">
        <span class="form-icon">✍️</span>
        <h2>Buat Artikel Baru</h2>
        <p class="muted">
            Bagikan informasi, berita, dan pengetahuan menarik kepada pembaca.
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

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
                placeholder="Contoh: Perkembangan Teknologi di Indonesia"
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
                value="{{ old('image') }}"
                placeholder="https://example.com/gambar.jpg"
            >
            <small class="field-hint">
                Masukkan alamat gambar jika ingin menambahkan gambar artikel.
            </small>
            @error('image')
                <small class="field-error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">Isi Artikel</label>
            <textarea
                id="body"
                name="body"
                rows="10"
                required
                placeholder="Mulai tulis artikel kamu di sini..."
            >{{ old('body') }}</textarea>
            @error('body')
                <small class="field-error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-actions">
            <a href="{{ route('articles.index') }}" class="btn-cancel">
                Batal
            </a>

            <button type="submit" class="btn-submit">
                Simpan Artikel →
            </button>
        </div>

    </form>
</section>
@endsection
