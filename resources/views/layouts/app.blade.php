
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ArticleHub')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f7fb;
            color: #1e293b;
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            transition: .2s;
        }

        a:hover {
            color: #1d4ed8;
        }

        .container {
            max-width: 1100px;
            width: 92%;
            margin: auto;
        }


/* IMAGE PREVIEW */

.image-preview {
    width: 100%;
    max-width: 450px;
    height: 230px;
    overflow: hidden;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    background: #f1f5f9;
}

.image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}


        /* NAVBAR */

        header {
            background: #111827;
            color: white;
            padding: 18px 0;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
        }

        .nav {
            display: flex;
            gap: 25px;
            align-items: center;
            flex-wrap: wrap;
        }

        .nav a {
            color: #cbd5e1;
            font-size: 14px;
            font-weight: 500;
        }

        .nav a:hover,
        .nav a.active {
            color: white;
        }

        .nav a.active {
            font-weight: 700;
        }

        .right {
            margin-left: auto;
            display: flex;
            gap: 15px;
            align-items: center;
        }


/* BRAND */

.brand {
    color: white !important;
    font-size: 23px !important;
    font-weight: 800 !important;
    letter-spacing: -1px;
    margin-right: 25px;
}

.brand span {
    color: #60a5fa;
}

/* NAV LINKS */

.nav-links {
    display: flex;
    align-items: center;
    gap: 25px;
}

.nav-links a {
    padding: 8px 0;
    position: relative;
}

.nav-links a.active {
    color: white;
}

.nav-links a.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: #60a5fa;
}

/* USER */

.user-name {
    color: #cbd5e1;
    font-size: 13px;
}

/* LOGOUT */

.btn-logout {
    background: #334155;
    padding: 8px 16px;
    font-size: 13px;
}

.btn-logout:hover {
    background: #475569;
}

/* REGISTER */

.btn-register {
    background: #2563eb;
    color: white !important;
    padding: 9px 17px;
    border-radius: 7px;
}

.btn-register:hover {
    background: #1d4ed8;
}

/* MOBILE */

@media (max-width: 600px) {
    .brand {
        width: 100%;
        margin-right: 0;
    }

    .nav-links {
        gap: 16px;
    }

    .right {
        margin-left: 0;
    }
}


        /* MAIN CONTENT */

        main {
            min-height: 70vh;
            padding-top: 35px;
            padding-bottom: 35px;
        }

        .row {
            display: grid;
            gap: 24px;
        }

        .card {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(15,23,42,.04);
        }

        h1, h2, h3 {
            color: #0f172a;
            line-height: 1.3;
        }

        h1 {
            font-size: 32px;
            font-weight: 800;
        }

        h2 {
            font-size: 25px;
            font-weight: 700;
        }

        h3 {
            font-size: 19px;
        }

        .muted {
            color: #64748b;
            font-size: 14px;
        }

        /* BUTTONS */

        button,
        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: .2s;
        }

        button:hover,
        .btn:hover {
            background: #1d4ed8;
            color: white;
            transform: translateY(-1px);
        }

        /* FORM */

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: white;
            font-family: inherit;
            font-size: 14px;
            margin-bottom: 15px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.1);
        }

        label {
            font-weight: 600;
            font-size: 14px;
        }

        form.inline {
            display: inline;
        }

        /* ARTICLE LIST */

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 15px;
        }

        li a {
            font-weight: 600;
        }

        /* ALERT */

        .flash {
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #bbf7d0;
            background: #f0fdf4;
            color: #166534;
            margin: 15px 0;
            font-size: 14px;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }

        /* FOOTER */

        footer {
            margin-top: 40px;
            padding: 25px 0;
            border-top: 1px solid #e2e8f0;
            text-align: center;
        }


/* CREATE ARTICLE FORM */

.form-card {
    max-width: 800px;
    width: 100%;
    margin: 0 auto;
    padding: 35px;
}

.form-header {
    margin-bottom: 25px;
}

.form-icon {
    display: inline-flex;
    background: #eff6ff;
    padding: 12px;
    border-radius: 12px;
    font-size: 25px;
    margin-bottom: 10px;
}

.form-header h2 {
    margin: 5px 0;
}

.form-header p {
    margin-top: 8px;
}

.form-divider {
    border-top: 1px solid #e2e8f0;
    margin: 25px 0;
}

.form-group {
    margin-bottom: 23px;
}

.form-group label {
    display: block;
    margin-bottom: 9px;
    color: #334155;
}

.form-group label span {
    color: #94a3b8;
    font-weight: 400;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 13px 15px;
    border: 1px solid #cbd5e1;
    border-radius: 9px;
    background: #f8fafc;
    color: #1e293b;
    font-family: inherit;
    font-size: 14px;
    transition: .2s;
}

.form-group textarea {
    resize: vertical;
    min-height: 180px;
}

.form-group input:focus,
.form-group textarea:focus {
    background: white;
    border-color: #2563eb;
    outline: none;
    box-shadow: 0 0 0 3px rgba(37,99,235,.1);
}

.field-hint {
    display: block;
    color: #94a3b8;
    font-size: 12px;
    margin-top: 7px;
}

.field-error {
    display: block;
    color: #dc2626;
    margin-top: 6px;
}

.error-box {
    background: #fef2f2;
    border: 1px solid #fecaca;
    color: #b91c1c;
    padding: 15px;
    border-radius: 9px;
    margin-bottom: 22px;
    font-size: 14px;
}

.error-box ul {
    margin-bottom: 0;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 12px;
    border-top: 1px solid #e2e8f0;
    padding-top: 22px;
}

.btn-cancel {
    padding: 11px 20px;
    color: #475569;
    background: #f1f5f9;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
}

.btn-cancel:hover {
    background: #e2e8f0;
    color: #1e293b;
}

.btn-submit {
    display: inline-block;
    background: #2563eb;
    color: #ffffff !important;
    padding: 12px 22px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none !important;
    border: none;
    cursor: pointer;
    transition: .2s;
}

.btn-submit:hover {
    background: #1d4ed8;
    color: #ffffff !important;
    text-decoration: none !important;
}

@media (max-width: 600px) {
    .form-card {
        padding: 20px;
    }

    .form-actions {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .form-actions a,
    .form-actions button {
        text-align: center;
        width: 100%;
    }
}


        /* RESPONSIVE */

        @media (max-width: 600px) {
            .nav {
                gap: 12px;
            }

            .right {
                margin-left: 0;
                width: 100%;
                flex-wrap: wrap;
            }

            .card {
                padding: 18px;
            }

            h1 {
                font-size: 25px;
            }

            h2 {
                font-size: 21px;
            }
        }


/* ARTICLE LIST */
.article-section {
    width: 100%;
}

.article-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.section-label {
    color: #2563eb;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
}

.article-heading h2 {
    margin: 8px 0;
    font-size: 30px;
    color: #0f172a;
}

.article-heading p {
    margin: 0;
}

.article-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
}

.article-card {
    overflow: hidden;
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    transition: transform .2s, box-shadow .2s;
}

.article-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(15, 23, 42, .08);
}

.article-image {
    width: 100%;
    height: 190px;
    overflow: hidden;
    background: #e2e8f0;
}

.article-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.article-placeholder {
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #1e3a8a, #2563eb);
    color: white;
    font-size: 20px;
    font-weight: 800;
    letter-spacing: 2px;
}

.article-content {
    padding: 20px;
}

.article-category {
    color: #2563eb;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.article-content h3 {
    margin: 12px 0;
    font-size: 19px;
    line-height: 1.4;
}

.article-content h3 a {
    color: #0f172a;
    text-decoration: none;
}

.article-content h3 a:hover {
    color: #2563eb;
}

.article-author {
    color: #64748b;
    font-size: 13px;
    margin-bottom: 20px;
}

.article-author strong {
    color: #334155;
}

.article-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    border-top: 1px solid #e2e8f0;
    padding-top: 15px;
}

.btn-detail {
    color: #2563eb;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.owner-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.owner-actions a,
.btn-delete {
    font-size: 12px;
    font-weight: 600;
}

.owner-actions a {
    color: #475569;
}

.btn-delete {
    color: #dc2626;
    background: transparent;
    padding: 0;
}

.btn-delete:hover {
    color: #991b1b;
    background: transparent;
}

.empty-articles {
    text-align: center;
    padding: 65px 20px;
    background: white;
    border: 1px dashed #cbd5e1;
    border-radius: 14px;
}

.empty-icon {
    font-size: 40px;
    margin-bottom: 15px;
}

.empty-articles h3 {
    color: #0f172a;
}

.empty-articles p {
    margin-bottom: 25px;
}

.article-pagination {
    margin-top: 30px;
}

@media (max-width: 900px) {
    .article-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 600px) {
    .article-heading {
        align-items: flex-start;
        flex-direction: column;
    }

    .article-heading h2 {
        font-size: 25px;
    }

    .article-grid {
        grid-template-columns: 1fr;
    }
}


/* ARTICLE DETAIL */
.detail-section {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
}

.detail-navigation {
    margin-bottom: 20px;
}

.detail-navigation a {
    color: #2563eb;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
}

.detail-navigation a:hover {
    color: #1d4ed8;
}

.detail-card {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    overflow: hidden;
}

.detail-header {
    padding: 35px 40px 25px;
}

.detail-header h1 {
    color: #0f172a;
    font-size: 32px;
    line-height: 1.3;
    margin: 12px 0 18px;
}

.detail-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    color: #64748b;
    font-size: 13px;
}

.detail-image {
    width: 100%;
    max-height: 420px;
    overflow: hidden;
    background: #e2e8f0;
}

.detail-image img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    display: block;
}

.detail-body {
    padding: 35px 40px;
    color: #334155;
    font-size: 16px;
    line-height: 1.9;
    overflow-wrap: anywhere;
}

.detail-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    padding: 22px 40px;
    border-top: 1px solid #e2e8f0;
    background: #f8fafc;
}

.detail-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.btn-edit {
    display: inline-block;
    padding: 11px 18px;
    background: #e0edff;
    color: #1d4ed8;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.btn-edit:hover {
    background: #bfdbfe;
    color: #1d4ed8;
}

@media (max-width: 600px) {
    .detail-header {
        padding: 25px 20px;
    }

    .detail-header h1 {
        font-size: 25px;
    }

    .detail-body {
        padding: 25px 20px;
        font-size: 15px;
    }

    .detail-footer {
        padding: 20px;
        align-items: stretch;
        flex-direction: column;
    }

    .detail-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .detail-actions a,
    .detail-footer > a {
        text-align: center;
    }
}


    </style>
</head>

<body>

    <header>
        <div class="container">
            @include('partials.nav')
        </div>
    </header>

    <div class="container">

        <main class="row">
            @yield('content')
        </main>

        <footer>
            <div class="muted">
                © {{ date('Y') }} ArticleHub.
                Dibuat dengan Laravel.
            </div>
        </footer>

    </div>

</body>
</html>
