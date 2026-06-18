<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Manajemen Kategori - LibrisAdmin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f7f9fb",
                        "inverse-surface": "#2d3133",
                        "on-tertiary-container": "#a38c6a",
                        "surface-tint": "#545f73",
                        "tertiary-container": "#35260c",
                        "secondary": "#4b41e1",
                        "surface-container-high": "#e6e8ea",
                        "inverse-primary": "#bcc7de",
                        "on-secondary-fixed-variant": "#3323cc",
                        "tertiary-fixed-dim": "#ddc39d",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#1e1200",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#e2dfff",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#fffbff",
                        "surface-variant": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "on-error": "#ffffff",
                        "on-surface-variant": "#45474c",
                        "secondary-fixed-dim": "#c3c0ff",
                        "outline-variant": "#c5c6cd",
                        "primary-fixed": "#d8e3fb",
                        "on-primary-fixed-variant": "#3c475a",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#bcc7de",
                        "primary-container": "#1e293b",
                        "surface-bright": "#f7f9fb",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#564427",
                        "on-primary-fixed": "#111c2d",
                        "secondary-container": "#645efb",
                        "inverse-on-surface": "#eff1f3",
                        "on-surface": "#191c1e",
                        "on-tertiary-fixed": "#271902",
                        "primary": "#091426",
                        "tertiary-fixed": "#fadfb8",
                        "on-secondary-fixed": "#0f0069",
                        "outline": "#75777d",
                        "on-background": "#191c1e",
                        "on-primary": "#ffffff",
                        "background": "#f7f9fb",
                        "on-primary-container": "#8590a6",
                        "surface-container-highest": "#e0e3e5",
                        "error-container": "#ffdad6",
                        "surface-dim": "#d8dadc"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "md": "1.5rem",
                        "xs": "0.5rem",
                        "gutter": "24px",
                        "sm": "1rem",
                        "base": "4px",
                        "xl": "3rem",
                        "lg": "2rem",
                        "margin": "32px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #f7f9fb; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e0e3e5; border-radius: 10px; }
    </style>
</head>
<body class="text-on-surface">
<!-- SideNavBar Shell -->
<aside class="fixed left-0 top-0 h-screen w-[280px] bg-surface-container-low border-r border-outline-variant flex flex-col py-lg px-md z-30">
<div class="mb-xl flex items-center gap-sm">
<div class="w-10 h-10 bg-primary flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-on-primary">menu_book</span>
</div>
<div>
<h1 class="font-headline-md text-headline-md font-bold text-primary">Library Admin</h1>
<p class="font-body-md text-body-md text-on-surface-variant">System Controller</p>
</div>
</div>
<nav class="flex-1 space-y-xs overflow-y-auto">
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('dashboard') }}">
        <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
        <span class="font-body-md text-body-md">Dashboard</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('buku') }}">
        <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
        <span class="font-body-md text-body-md">Books</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('kategori') }}">
        <span class="material-symbols-outlined" data-icon="category">category</span>
        <span class="font-body-md text-body-md">Categories</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('anggota') }}">
        <span class="material-symbols-outlined" data-icon="group">group</span>
        <span class="font-body-md text-body-md">Members</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('peminjaman') }}">
        <span class="material-symbols-outlined" data-icon="swap_horiz">swap_horiz</span>
        <span class="font-body-md text-body-md">Transactions</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('laporan') }}">
        <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
        <span class="font-body-md text-body-md">Reports</span>
    </a>
</nav>
<div class="mt-auto space-y-xs pt-md border-t border-outline-variant">
<button class="w-full flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-lg font-label-lg active:scale-95 transition-transform" onclick="openModal()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
            Add New Category
        </button>
<a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200" href="{{ route('profile.edit') }}">
    <span class="material-symbols-outlined" data-icon="settings">settings</span>
    <span class="font-body-md text-body-md">Settings</span>
</a>
<form method="POST" action="{{ route('logout') }}" class="">@csrf
    <button type="submit" class="w-full text-left flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200">
        <span class="material-symbols-outlined" data-icon="logout">logout</span>
        <span class="font-body-md text-body-md">Logout</span>
    </button>
</form>
</div>
</aside>
<!-- TopNavBar Shell -->
<header class="fixed top-0 right-0 ml-[280px] w-[calc(100%-280px)] h-16 px-margin bg-surface border-b border-outline-variant flex justify-between items-center shadow-sm z-40">
<div class="flex items-center flex-1 max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:ring-2 focus:ring-secondary focus:outline-none transition-all duration-200" placeholder="Cari kategori..." type="text"/>
</div>
</div>
<div class="flex items-center gap-md ml-lg">
<button class="relative p-2 text-on-surface-variant hover:bg-surface-container transition-colors rounded-full">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-surface-container transition-colors rounded-full">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="flex items-center gap-xs pl-md border-l border-outline-variant">
<img alt="Admin Portrait" class="w-8 h-8 rounded-full bg-secondary-fixed" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALPiDLDYoEru1D-UNYJk1NneqWciKNVt_VE6tHuOqD9cbR2yXmHTzg7GkmX5C-WdDAM_fNbUCk-rwbduDQufTNyCSb2PxVhSRSJVvoRVvvEFUeF4nJYuKbTsQcTs0Vv1hUdePCxkLr7y2WI_-pial-EVZIxXLwLXimtRKl9NaC8z60FAhWid7cun6SgSMA0L-bs6agioLAx2NjTTn1kDJa9Wyjcawld17hurqmLsYbe2TINZEnQRzacV6vrSmNoHMvKVCbRnaoXSyE"/>
<div class="hidden lg:block">
<p class="font-label-lg text-label-lg text-on-surface">Admin</p>
</div>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-[280px] pt-16 min-h-screen">
<div class="p-margin max-w-6xl mx-auto">
<!-- Breadcrumbs / Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-lg">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary">Manajemen Kategori</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-xs">Kelola kategori koleksi buku perpustakaan Anda secara sistematis.</p>
</div>
<button class="bg-secondary text-on-secondary px-lg py-sm rounded-xl font-label-lg text-label-lg flex items-center gap-xs shadow-md hover:shadow-lg transition-all active:scale-[0.98]" onclick="openModal()">
<span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                    Add New Category
                </button>
</div>
<!-- Dashboard Stats Row (Light Bento) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-xl">
<div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)]">
<div class="flex items-center justify-between mb-sm">
<span class="material-symbols-outlined text-secondary" data-icon="category">category</span>
<span class="text-emerald-600 bg-emerald-50 px-xs py-base rounded-full font-label-md text-label-md">+4 bulan ini</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Total Kategori</p>
<h3 class="font-headline-md text-headline-md text-primary">24</h3>
</div>
<div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)]">
<div class="flex items-center justify-between mb-sm">
<span class="material-symbols-outlined text-secondary" data-icon="library_books">library_books</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Buku Terkategorisasi</p>
<h3 class="font-headline-md text-headline-md text-primary">1,248</h3>
</div>
<div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)]">
<div class="flex items-center justify-between mb-sm">
<span class="material-symbols-outlined text-secondary" data-icon="history">history</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Update Terakhir</p>
<h3 class="font-headline-md text-headline-md text-primary">Hari Ini</h3>
</div>
</div>
<!-- Data Table Card -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)] overflow-hidden">
<div class="p-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
<h4 class="font-label-lg text-label-lg text-primary">Daftar Kategori Aktif</h4>
<div class="flex gap-xs">
<button class="p-xs hover:bg-surface-container transition-colors rounded-lg text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
</button>
<button class="p-xs hover:bg-surface-container transition-colors rounded-lg text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="download">download</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left font-body-md text-body-md">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="px-lg py-md font-label-lg text-on-surface-variant">Nama Kategori</th>
<th class="px-lg py-md font-label-lg text-on-surface-variant">Jumlah Buku</th>
<th class="px-lg py-md font-label-lg text-on-surface-variant">Status</th>
<th class="px-lg py-md font-label-lg text-on-surface-variant text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-lg py-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined" data-icon="science">science</span>
</div>
<div>
<p class="font-label-lg text-on-surface">Sains &amp; Teknologi</p>
<p class="text-xs text-on-surface-variant">ID: CAT-001</p>
</div>
</div>
</td>
<td class="px-lg py-md">342 Buku</td>
<td class="px-lg py-md">
<span class="bg-emerald-50 text-emerald-700 px-sm py-base rounded-full font-label-md text-label-md">Aktif</span>
</td>
<td class="px-lg py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs hover:bg-secondary-fixed text-on-surface-variant hover:text-secondary rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-xs hover:bg-error-container text-on-surface-variant hover:text-error rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-lg py-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
<span class="material-symbols-outlined" data-icon="history_edu">history_edu</span>
</div>
<div>
<p class="font-label-lg text-on-surface">Sejarah &amp; Budaya</p>
<p class="text-xs text-on-surface-variant">ID: CAT-002</p>
</div>
</div>
</td>
<td class="px-lg py-md">215 Buku</td>
<td class="px-lg py-md">
<span class="bg-emerald-50 text-emerald-700 px-sm py-base rounded-full font-label-md text-label-md">Aktif</span>
</td>
<td class="px-lg py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs hover:bg-secondary-fixed text-on-surface-variant hover:text-secondary rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-xs hover:bg-error-container text-on-surface-variant hover:text-error rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-lg py-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-lg bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant">
<span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
</div>
<div>
<p class="font-label-lg text-on-surface">Fiksi &amp; Sastra</p>
<p class="text-xs text-on-surface-variant">ID: CAT-003</p>
</div>
</div>
</td>
<td class="px-lg py-md">567 Buku</td>
<td class="px-lg py-md">
<span class="bg-emerald-50 text-emerald-700 px-sm py-base rounded-full font-label-md text-label-md">Aktif</span>
</td>
<td class="px-lg py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs hover:bg-secondary-fixed text-on-surface-variant hover:text-secondary rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-xs hover:bg-error-container text-on-surface-variant hover:text-error rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-lg py-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="architecture">architecture</span>
</div>
<div>
<p class="font-label-lg text-on-surface">Seni &amp; Desain</p>
<p class="text-xs text-on-surface-variant">ID: CAT-004</p>
</div>
</div>
</td>
<td class="px-lg py-md">124 Buku</td>
<td class="px-lg py-md">
<span class="bg-amber-50 text-amber-700 px-sm py-base rounded-full font-label-md text-label-md">Maintenance</span>
</td>
<td class="px-lg py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs hover:bg-secondary-fixed text-on-surface-variant hover:text-secondary rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-xs hover:bg-error-container text-on-surface-variant hover:text-error rounded-lg transition-colors">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="px-lg py-md border-t border-outline-variant flex items-center justify-between font-body-md text-body-md">
<span class="text-on-surface-variant">Menampilkan 1-4 dari 24 kategori</span>
<div class="flex gap-xs">
<button class="p-xs border border-outline-variant rounded-lg hover:bg-surface-container transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="px-md py-xs bg-secondary text-on-secondary rounded-lg font-bold">1</button>
<button class="px-md py-xs border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">2</button>
<button class="px-md py-xs border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">3</button>
<button class="p-xs border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<!-- Modal: Add New Category -->
<div class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-primary/40 backdrop-blur-sm p-md transition-all duration-300" id="addModal">
<div class="bg-surface-container-lowest w-full max-w-lg rounded-xl shadow-xl overflow-hidden border border-outline-variant animate-in fade-in zoom-in duration-200">
<div class="p-lg border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
<h3 class="font-headline-sm text-headline-sm text-primary">Tambah Kategori Baru</h3>
<button class="p-xs hover:bg-surface-container transition-colors rounded-full" onclick="closeModal()">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<form class="p-lg space-y-md" id="categoryForm">
<div class="space-y-base">
<label class="font-label-lg text-label-lg text-on-surface-variant block">Nama Kategori</label>
<input class="w-full px-md py-sm border border-outline-variant rounded-lg font-body-md focus:ring-2 focus:ring-secondary focus:border-secondary focus:outline-none transition-all" id="catName" name="category_name" placeholder="Contoh: Ekonomi Makro" required="" type="text"/>
<p class="hidden text-error font-label-md text-label-md mt-xs" id="error-name">Nama kategori wajib diisi.</p>
</div>
<div class="space-y-base">
<label class="font-label-lg text-label-lg text-on-surface-variant block">Icon Kategori</label>
<div class="grid grid-cols-4 gap-xs">
<button class="flex flex-col items-center justify-center p-md border-2 border-secondary bg-secondary-fixed text-secondary rounded-lg" type="button">
<span class="material-symbols-outlined" data-icon="science">science</span>
<span class="text-[10px] mt-1">Science</span>
</button>
<button class="flex flex-col items-center justify-center p-md border border-outline-variant hover:bg-surface-container transition-colors rounded-lg text-on-surface-variant" type="button">
<span class="material-symbols-outlined" data-icon="history_edu">history_edu</span>
<span class="text-[10px] mt-1">History</span>
</button>
<button class="flex flex-col items-center justify-center p-md border border-outline-variant hover:bg-surface-container transition-colors rounded-lg text-on-surface-variant" type="button">
<span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
<span class="text-[10px] mt-1">Literature</span>
</button>
<button class="flex flex-col items-center justify-center p-md border border-outline-variant hover:bg-surface-container transition-colors rounded-lg text-on-surface-variant" type="button">
<span class="material-symbols-outlined" data-icon="more_horiz">more_horiz</span>
<span class="text-[10px] mt-1">Lainnya</span>
</button>
</div>
</div>
<div class="space-y-base">
<label class="font-label-lg text-label-lg text-on-surface-variant block">Deskripsi (Opsional)</label>
<textarea class="w-full px-md py-sm border border-outline-variant rounded-lg font-body-md focus:ring-2 focus:ring-secondary focus:border-secondary focus:outline-none transition-all" placeholder="Jelaskan cakupan kategori ini..." rows="3"></textarea>
</div>
<div class="flex gap-md pt-md">
<button class="flex-1 px-lg py-sm border border-outline-variant text-on-surface-variant rounded-xl font-label-lg text-label-lg hover:bg-surface-container transition-all active:scale-[0.98]" onclick="closeModal()" type="button">
                        Batal
                    </button>
<button class="flex-1 px-lg py-sm bg-secondary text-on-secondary rounded-xl font-label-lg text-label-lg shadow-md hover:shadow-lg transition-all active:scale-[0.98]" type="submit">
                        Simpan Kategori
                    </button>
</div>
</form>
</div>
</div>
<script>
    const modal = document.getElementById('addModal');
    const form = document.getElementById('categoryForm');
    const nameInput = document.getElementById('catName');
    const errorText = document.getElementById('error-name');

    function openModal() {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }

    // Simple form validation logic
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (nameInput.value.trim() === '') {
            nameInput.classList.add('border-error');
            errorText.classList.remove('hidden');
        } else {
            nameInput.classList.remove('border-error');
            errorText.classList.add('hidden');

            // Show success notification (visual feedback)
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin" data-icon="sync">sync</span> Menyimpan...';
            btn.disabled = true;

            setTimeout(() => {
                alert('Kategori "' + nameInput.value + '" berhasil ditambahkan!');
                closeModal();
                btn.innerHTML = originalText;
                btn.disabled = false;
                nameInput.value = '';
            }, 1000);
        }
    });

    // Close modal on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
    });
</script>
</body></html>