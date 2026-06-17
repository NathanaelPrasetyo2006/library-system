<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Laporan Perpustakaan - Library Admin</title>
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
        }
        .sidebar-fixed { width: 280px; }
        .content-area { margin-left: 280px; width: calc(100% - 280px); }
        .card-shadow { shadow: 0px 4px 12px rgba(30, 41, 59, 0.05); }
    </style>
</head>
<body class="bg-surface text-on-surface">
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
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('kategori') }}">
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
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('laporan') }}">
        <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
        <span class="font-body-md text-body-md">Reports</span>
    </a>
</nav>
<div class="mt-auto space-y-xs pt-md border-t border-outline-variant">
<button class="w-full flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-lg font-label-lg active:scale-95 transition-transform">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
<span>Add New Entry</span>
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
<!-- Content Wrapper -->
<main class="ml-[280px] min-h-screen flex flex-col">
<!-- TopNavBar Shell -->
<header class="flex justify-between items-center h-16 px-margin bg-surface border-b border-outline-variant shadow-sm sticky top-0 z-40">
<div class="flex items-center bg-surface-container rounded-full px-sm py-xs w-96">
<span class="material-symbols-outlined text-on-surface-variant mr-xs" data-icon="search">search</span>
<input class="bg-transparent border-none focus:ring-0 text-body-md font-body-md w-full placeholder:text-on-surface-variant" placeholder="Cari laporan..." type="text"/>
</div>
<div class="flex items-center gap-md">
<div class="flex gap-sm">
<button class="p-xs text-on-surface-variant hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
</div>
<div class="h-8 w-8 rounded-full bg-secondary-fixed flex items-center justify-center overflow-hidden border border-outline-variant">
<img alt="Admin Portrait" class="h-full w-full object-cover" data-alt="A professional headshot of a library administrator in a minimalist office setting. The lighting is soft and corporate, reflecting an institutional and systematic environment. The image is clean, sharp, and uses a palette of neutral grays and soft blues to match a professional administrative dashboard interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAPkIpo3-MW9Eohi04qE-o2fNBK_QkcJq7v2CmdTqrEqldxDG6O8kxZE3I1HnnAHU5H4skoRT_NNdATXGZsplWepaLIt7ehkW3qM8L4DTbD5PERBQ_y5EahrDsyym_8ThbQwwWLeW1jTjc_RWluet47g4zL87Mvo_u6ZV8LgTbQiWevctIaEe-UTD-15tD5EMT8Qj5unGYPcBgzIFJsOeClCqEMzeyL9XlBiGw_KNHxCQkNwo705XyG-ShlADWckHS_k7h9xt8ucZe"/>
</div>
</div>
</header>
<!-- Main Canvas -->
<div class="p-margin">
<div class="flex flex-col gap-lg max-w-7xl mx-auto">
<!-- Page Header -->
<div class="flex justify-between items-end">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary">Laporan Perpustakaan</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Analisis sirkulasi dan inventaris sistem.</p>
</div>
<div class="flex gap-sm">
<button class="flex items-center gap-xs px-md py-sm bg-surface-container-lowest border border-outline-variant rounded-lg font-label-lg text-label-lg text-primary hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
                            01 Jan 2024 - 31 Jan 2024
                        </button>
<button class="flex items-center gap-xs px-md py-sm bg-secondary text-on-secondary rounded-lg font-label-lg text-label-lg hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                            Filter Data
                        </button>
</div>
</div>
<!-- Bento Grid Layout for Reports -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Monthly Circulation -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)] flex flex-col">
<div class="flex justify-between items-start mb-md">
<div class="h-12 w-12 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="auto_graph">auto_graph</span>
</div>
<span class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-xs py-[2px] rounded-full text-label-md font-label-md">Monthly</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Monthly Circulation</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-1">Statistik peminjaman, pengembalian, dan aktivitas buku bulan ini.</p>
<div class="mt-lg flex gap-sm">
<button class="flex-1 py-xs border border-secondary text-secondary rounded-lg font-label-lg text-label-lg hover:bg-secondary-fixed transition-colors">View</button>
<button class="px-sm py-xs bg-primary text-on-primary rounded-lg hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-[20px]" data-icon="picture_as_pdf">picture_as_pdf</span>
</button>
</div>
</div>
<!-- Overdue Reports -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)] flex flex-col">
<div class="flex justify-between items-start mb-md">
<div class="h-12 w-12 bg-error-container text-on-error-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="alarm">alarm</span>
</div>
<span class="bg-error-container text-on-error-container px-xs py-[2px] rounded-full text-label-md font-label-md">High Priority</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Overdue Reports</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-1">Daftar anggota dengan keterlambatan pengembalian dan denda aktif.</p>
<div class="mt-lg flex gap-sm">
<button class="flex-1 py-xs border border-secondary text-secondary rounded-lg font-label-lg text-label-lg hover:bg-secondary-fixed transition-colors">View</button>
<button class="px-sm py-xs bg-primary text-on-primary rounded-lg hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-[20px]" data-icon="picture_as_pdf">picture_as_pdf</span>
</button>
</div>
</div>
<!-- Popular Books -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-[0px_4px_12px_rgba(30,41,59,0.05)] flex flex-col">
<div class="flex justify-between items-start mb-md">
<div class="h-12 w-12 bg-primary-fixed text-on-primary-fixed-variant rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="star">star</span>
</div>
<span class="bg-primary-fixed text-on-primary-fixed-variant px-xs py-[2px] rounded-full text-label-md font-label-md">Analysis</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Popular Books</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-1">Peringkat buku yang paling banyak dipinjam berdasarkan kategori.</p>
<div class="mt-lg flex gap-sm">
<button class="flex-1 py-xs border border-secondary text-secondary rounded-lg font-label-lg text-label-lg hover:bg-secondary-fixed transition-colors">View</button>
<button class="px-sm py-xs bg-primary text-on-primary rounded-lg hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-[20px]" data-icon="picture_as_pdf">picture_as_pdf</span>
</button>
</div>
</div>
</div>
<!-- Preview Section / List View of Data -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-[0px_4px_12px_rgba(30,41,59,0.05)]">
<div class="px-lg py-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-secondary" data-icon="preview">preview</span>
<h4 class="font-headline-sm text-headline-sm text-primary">Preview: Transaksi Terkini</h4>
</div>
<div class="flex items-center gap-xs">
<span class="font-label-md text-label-md text-on-surface-variant">Data diperbarui: Today, 09:41 AM</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface border-b border-outline-variant">
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant">ID Laporan</th>
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant">Nama Buku</th>
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant">Member</th>
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant">Status</th>
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant">Tanggal</th>
<th class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<tr class="hover:bg-surface-container transition-colors">
<td class="px-lg py-md font-body-md text-body-md text-primary">#REP-9021</td>
<td class="px-lg py-md">
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-primary">The Art of Management</span>
<span class="font-label-md text-label-md text-on-surface-variant">Business &amp; Strategy</span>
</div>
</td>
<td class="px-lg py-md font-body-md text-body-md text-primary">Sarah Jenkins</td>
<td class="px-lg py-md">
<span class="inline-flex items-center px-xs py-0.5 rounded-full text-label-md font-label-md bg-emerald-100 text-emerald-800">
                                            Dikembalikan
                                        </span>
</td>
<td class="px-lg py-md font-body-md text-body-md text-on-surface-variant">12 Jan 2024</td>
<td class="px-lg py-md text-right">
<button class="text-secondary font-label-lg text-label-lg hover:underline">Detail</button>
</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="px-lg py-md font-body-md text-body-md text-primary">#REP-9022</td>
<td class="px-lg py-md">
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-primary">Modern Architecture</span>
<span class="font-label-md text-label-md text-on-surface-variant">Design</span>
</div>
</td>
<td class="px-lg py-md font-body-md text-body-md text-primary">Michael Chen</td>
<td class="px-lg py-md">
<span class="inline-flex items-center px-xs py-0.5 rounded-full text-label-md font-label-md bg-amber-100 text-amber-800">
                                            Terlambat
                                        </span>
</td>
<td class="px-lg py-md font-body-md text-body-md text-on-surface-variant">11 Jan 2024</td>
<td class="px-lg py-md text-right">
<button class="text-secondary font-label-lg text-label-lg hover:underline">Detail</button>
</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="px-lg py-md font-body-md text-body-md text-primary">#REP-9023</td>
<td class="px-lg py-md">
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-primary">Data Science Handbook</span>
<span class="font-label-md text-label-md text-on-surface-variant">Technology</span>
</div>
</td>
<td class="px-lg py-md font-body-md text-body-md text-primary">Elena Rodriguez</td>
<td class="px-lg py-md">
<span class="inline-flex items-center px-xs py-0.5 rounded-full text-label-md font-label-md bg-blue-100 text-blue-800">
                                            Dipinjam
                                        </span>
</td>
<td class="px-lg py-md font-body-md text-body-md text-on-surface-variant">10 Jan 2024</td>
<td class="px-lg py-md text-right">
<button class="text-secondary font-label-lg text-label-lg hover:underline">Detail</button>
</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="px-lg py-md font-body-md text-body-md text-primary">#REP-9024</td>
<td class="px-lg py-md">
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-primary">Silence of the North</span>
<span class="font-label-md text-label-md text-on-surface-variant">Literature</span>
</div>
</td>
<td class="px-lg py-md font-body-md text-body-md text-primary">David Wilson</td>
<td class="px-lg py-md">
<span class="inline-flex items-center px-xs py-0.5 rounded-full text-label-md font-label-md bg-emerald-100 text-emerald-800">
                                            Dikembalikan
                                        </span>
</td>
<td class="px-lg py-md font-body-md text-body-md text-on-surface-variant">09 Jan 2024</td>
<td class="px-lg py-md text-right">
<button class="text-secondary font-label-lg text-label-lg hover:underline">Detail</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-md flex justify-center border-t border-outline-variant bg-surface-container-low">
<button class="font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors flex items-center gap-xs">
                            Muat Lebih Banyak
                            <span class="material-symbols-outlined text-[18px]" data-icon="expand_more">expand_more</span>
</button>
</div>
</div>
<!-- Graphical Insights Placeholder -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
<div class="flex justify-between items-center mb-lg">
<h4 class="font-label-lg text-label-lg text-primary uppercase tracking-wider">Circulation Trends</h4>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="more_vert">more_vert</span>
</div>
<div class="h-48 w-full flex items-end gap-md px-sm">
<div class="flex-1 bg-secondary-fixed rounded-t h-[40%] transition-all hover:h-[45%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">120</div>
</div>
<div class="flex-1 bg-secondary rounded-t h-[65%] transition-all hover:h-[70%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">210</div>
</div>
<div class="flex-1 bg-secondary-fixed rounded-t h-[55%] transition-all hover:h-[60%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">180</div>
</div>
<div class="flex-1 bg-secondary rounded-t h-[90%] transition-all hover:h-[95%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">300</div>
</div>
<div class="flex-1 bg-secondary-fixed rounded-t h-[45%] transition-all hover:h-[50%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">150</div>
</div>
<div class="flex-1 bg-secondary rounded-t h-[75%] transition-all hover:h-[80%] cursor-pointer relative group">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">250</div>
</div>
</div>
<div class="flex justify-between mt-sm px-sm font-label-md text-label-md text-on-surface-variant">
<span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
</div>
</div>
<div class="bg-primary-container p-lg rounded-xl flex flex-col justify-between overflow-hidden relative">
<div class="relative z-10">
<h4 class="font-label-lg text-label-lg text-on-primary-container mb-md">Summary Report</h4>
<div class="space-y-md">
<div class="flex justify-between items-center">
<span class="text-body-md font-body-md text-on-primary-container/80">Total Books Loaned</span>
<span class="text-headline-sm font-headline-sm text-on-primary">1,248</span>
</div>
<div class="w-full bg-on-primary-container/10 h-1.5 rounded-full">
<div class="bg-secondary-fixed h-full w-[75%] rounded-full"></div>
</div>
<div class="flex justify-between items-center">
<span class="text-body-md font-body-md text-on-primary-container/80">Active Overdue Items</span>
<span class="text-headline-sm font-headline-sm text-on-primary">14</span>
</div>
<div class="w-full bg-on-primary-container/10 h-1.5 rounded-full">
<div class="bg-error h-full w-[12%] rounded-full"></div>
</div>
</div>
</div>
<button class="relative z-10 mt-xl w-full py-sm bg-surface-container-lowest text-primary font-label-lg text-label-lg rounded-lg hover:bg-secondary-fixed transition-colors">
                            Unduh Laporan Lengkap (.xlsx)
                        </button>
<!-- Abstract Background Decoration -->
<div class="absolute -bottom-10 -right-10 w-40 h-40 bg-secondary/20 rounded-full blur-3xl"></div>
<div class="absolute -top-10 -left-10 w-32 h-32 bg-secondary-fixed/10 rounded-full blur-2xl"></div>
</div>
</div>
</div>
</div>
<!-- Footer for Context -->
<footer class="mt-auto px-margin py-md border-t border-outline-variant bg-surface-container-lowest">
<div class="max-w-7xl mx-auto flex justify-between items-center font-label-md text-label-md text-on-surface-variant">
<span>© 2024 Laporan Perpustakaan System. All rights reserved.</span>
<div class="flex gap-md">
<a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
<a class="hover:text-primary transition-colors" href="#">Bantuan</a>
</div>
</div>
</footer>
</main>
<script>
        // Micro-interactions and Lightweight atmospheric effects
        document.addEventListener('DOMContentLoaded', () => {
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'translateX(4px)';
                    row.style.transition = 'transform 0.2s ease-out';
                });
                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'translateX(0)';
                });
            });

            // Tab active states simulation for sidebar (if not already handled by logic)
            const navItems = document.querySelectorAll('nav a');
            navItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    navItems.forEach(i => {
                        i.classList.remove('bg-secondary-fixed', 'text-on-secondary-fixed-variant', 'font-bold');
                        i.classList.add('text-on-surface-variant');
                        const icon = i.querySelector('.material-symbols-outlined');
                        if (icon) icon.style.fontVariationSettings = "'FILL' 0";
                    });
                    item.classList.add('bg-secondary-fixed', 'text-on-secondary-fixed-variant', 'font-bold');
                    item.classList.remove('text-on-surface-variant');
                    const activeIcon = item.querySelector('.material-symbols-outlined');
                    if (activeIcon) activeIcon.style.fontVariationSettings = "'FILL' 1";
                });
            });
        });
    </script>
</body></html>