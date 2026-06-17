<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LibrisAdmin - Manajemen Anggota</title>
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
                },
            },
        }
    </script>
<style>
        body { background-color: #f7f9fb; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .data-table-container::-webkit-scrollbar {
            height: 6px;
        }
        .data-table-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .fade-in { animation: fadeIn 0.3s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- SideNavBar -->
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
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('anggota') }}">
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
<div class="mt-auto space-y-base pt-lg border-t border-outline-variant">
<button class="w-full mb-md flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-xl font-label-lg transition-all active:scale-95 shadow-sm" onclick="openModal()">
<span class="material-symbols-outlined">person_add</span>
                Register New Member
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
<!-- TopNavBar -->
<header class="flex justify-between items-center h-16 px-margin ml-[280px] w-[calc(100%-280px)] bg-surface border-b border-outline-variant shadow-sm fixed top-0 z-40">
<div class="flex items-center flex-1 max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-[48px] pr-md py-xs bg-surface-container-low border border-outline-variant rounded-full focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" placeholder="Search by Member ID or name..." type="text"/>
</div>
</div>
<div class="flex items-center gap-md">
<button class="p-xs text-on-surface-variant hover:text-secondary transition-all">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-secondary transition-all">
<span class="material-symbols-outlined">help</span>
</button>
<div class="flex items-center gap-sm pl-md border-l border-outline-variant">
<div class="text-right">
<p class="font-label-lg text-primary leading-tight">Admin User</p>
<p class="font-label-md text-on-surface-variant">Super Admin</p>
</div>
<img alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-surface-container-high" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGayo0yVkukF2YdgCxSDcqfrVxV37DpgaFzmda7m7rId47vG7s1akKZTXmiuZTEaoxxIUl9HjLNbjeLJ1oWCdVPNPOB_KwOeT6guCXSHp950992NPGEj06K1SL349tURggvYp7cHkygk7d9GOTWg5eELC6XEyTb-12a-cLlZyEtrESkfD8bcKgSbTNdBkM72gIvWqHfKSv4KxRZ0UIzMGxRiPG9xleIyPEyVA8di8Hcupp5s2H0ZIajq6Z8IjV_uwhRsXTHucuYpqg"/>
</div>
</div>
</header>
<!-- Main Content -->
<main class="ml-[280px] mt-16 p-margin min-h-screen">
<div class="max-w-[1400px] mx-auto">
<!-- Breadcrumbs & Title -->
<div class="mb-lg">
<div class="flex items-center gap-xs text-on-surface-variant font-label-md mb-xs">
<span>Admin</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-secondary font-bold">Manajemen Anggota</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary">Daftar Anggota Perpustakaan</h2>
</div>
<!-- Stats Overview (Asymmetric Bento Grid) -->
<div class="grid grid-cols-12 gap-gutter mb-xl">
<div class="col-span-12 md:col-span-4 bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(30,41,59,0.05)] border border-outline-variant">
<div class="flex justify-between items-start mb-md">
<div class="p-sm bg-primary-fixed rounded-lg">
<span class="material-symbols-outlined text-on-primary-fixed">group</span>
</div>
<span class="text-emerald-600 font-label-md bg-emerald-50 px-xs py-[2px] rounded">+12% Bulan Ini</span>
</div>
<p class="font-label-md text-on-surface-variant">Total Anggota Aktif</p>
<h3 class="font-headline-lg text-headline-lg text-primary">1,284</h3>
</div>
<div class="col-span-12 md:col-span-4 bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(30,41,59,0.05)] border border-outline-variant">
<div class="flex justify-between items-start mb-md">
<div class="p-sm bg-secondary-fixed rounded-lg">
<span class="material-symbols-outlined text-on-secondary-fixed-variant">verified</span>
</div>
<span class="text-on-surface-variant font-label-md bg-surface-container-high px-xs py-[2px] rounded">Premium</span>
</div>
<p class="font-label-md text-on-surface-variant">Membership Premium</p>
<h3 class="font-headline-lg text-headline-lg text-primary">432</h3>
</div>
<div class="col-span-12 md:col-span-4 bg-surface-container-lowest p-lg rounded-xl shadow-[0px_4px_12px_rgba(30,41,59,0.05)] border border-outline-variant">
<div class="flex justify-between items-start mb-md">
<div class="p-sm bg-error-container rounded-lg">
<span class="material-symbols-outlined text-on-error-container">warning</span>
</div>
<span class="text-error font-label-md">Perlu Review</span>
</div>
<p class="font-label-md text-on-surface-variant">Keanggotaan Kedaluwarsa</p>
<h3 class="font-headline-lg text-headline-lg text-primary">18</h3>
</div>
</div>
<!-- Table Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_12px_rgba(30,41,59,0.05)] border border-outline-variant overflow-hidden">
<div class="p-md border-b border-outline-variant flex flex-col md:flex-row justify-between items-center gap-md">
<h4 class="font-headline-sm text-headline-sm text-primary">Data Master Anggota</h4>
<div class="flex gap-xs">
<button class="flex items-center gap-xs px-md py-xs border border-outline-variant rounded-lg font-label-lg hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined text-[20px]">filter_list</span>
                            Filter
                        </button>
<button class="flex items-center gap-xs px-md py-xs border border-outline-variant rounded-lg font-label-lg hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined text-[20px]">download</span>
                            Export
                        </button>
</div>
</div>
<div class="data-table-container overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-low border-b border-outline-variant">
<tr>
<th class="px-md py-sm font-label-lg text-on-surface-variant uppercase tracking-wider text-[11px]">Member ID</th>
<th class="px-md py-sm font-label-lg text-on-surface-variant uppercase tracking-wider text-[11px]">Name</th>
<th class="px-md py-sm font-label-lg text-on-surface-variant uppercase tracking-wider text-[11px]">Join Date</th>
<th class="px-md py-sm font-label-lg text-on-surface-variant uppercase tracking-wider text-[11px]">Membership Status</th>
<th class="px-md py-sm font-label-lg text-on-surface-variant uppercase tracking-wider text-[11px] text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<tr class="hover:bg-surface-container transition-colors">
<td class="px-md py-md font-label-md text-primary">#LIB-2023-001</td>
<td class="px-md py-md">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-[12px]">AS</div>
<div>
<p class="font-label-lg text-primary leading-tight">Andi Saputra</p>
<p class="text-[12px] text-on-surface-variant">andi.saputra@email.com</p>
</div>
</div>
</td>
<td class="px-md py-md font-body-md text-on-surface-variant">12 Jan 2023</td>
<td class="px-md py-md">
<span class="px-xs py-[2px] bg-emerald-100 text-emerald-800 text-[11px] font-bold rounded-full uppercase tracking-tight">Active</span>
</td>
<td class="px-md py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="History">
<span class="material-symbols-outlined text-[20px]">history</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="Edit">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-error hover:bg-error-container rounded transition-all" title="Delete">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="px-md py-md font-label-md text-primary">#LIB-2023-045</td>
<td class="px-md py-md">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant font-bold text-[12px]">RP</div>
<div>
<p class="font-label-lg text-primary leading-tight">Rina Permata</p>
<p class="text-[12px] text-on-surface-variant">rina.p@email.com</p>
</div>
</div>
</td>
<td class="px-md py-md font-body-md text-on-surface-variant">05 Mar 2023</td>
<td class="px-md py-md">
<span class="px-xs py-[2px] bg-tertiary-fixed text-on-tertiary-fixed-variant text-[11px] font-bold rounded-full uppercase tracking-tight">Premium</span>
</td>
<td class="px-md py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="History">
<span class="material-symbols-outlined text-[20px]">history</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="Edit">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-error hover:bg-error-container rounded transition-all" title="Delete">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="px-md py-md font-label-md text-primary">#LIB-2022-892</td>
<td class="px-md py-md">
<div class="flex items-center gap-sm">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-on-surface-variant font-bold text-[12px]">BK</div>
<div>
<p class="font-label-lg text-primary leading-tight">Budi Kusuma</p>
<p class="text-[12px] text-on-surface-variant">budi_k@email.com</p>
</div>
</div>
</td>
<td class="px-md py-md font-body-md text-on-surface-variant">20 Des 2022</td>
<td class="px-md py-md">
<span class="px-xs py-[2px] bg-error-container text-error text-[11px] font-bold rounded-full uppercase tracking-tight">Expired</span>
</td>
<td class="px-md py-md text-right">
<div class="flex justify-end gap-xs">
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="History">
<span class="material-symbols-outlined text-[20px]">history</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed rounded transition-all" title="Edit">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-xs text-on-surface-variant hover:text-error hover:bg-error-container rounded transition-all" title="Delete">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-md flex flex-col sm:flex-row justify-between items-center gap-md border-t border-outline-variant bg-surface-container-low">
<p class="text-[12px] text-on-surface-variant">Menampilkan <span class="font-bold text-primary">1-10</span> dari <span class="font-bold text-primary">1,284</span> anggota</p>
<div class="flex items-center gap-xs">
<button class="w-8 h-8 flex items-center justify-center border border-outline-variant rounded hover:bg-surface-container-high transition-all">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center bg-secondary text-on-secondary rounded font-bold text-[12px]">1</button>
<button class="w-8 h-8 flex items-center justify-center border border-outline-variant rounded hover:bg-surface-container-high font-label-md text-[12px] transition-all">2</button>
<button class="w-8 h-8 flex items-center justify-center border border-outline-variant rounded hover:bg-surface-container-high font-label-md text-[12px] transition-all">3</button>
<span class="px-xs text-on-surface-variant">...</span>
<button class="w-8 h-8 flex items-center justify-center border border-outline-variant rounded hover:bg-surface-container-high font-label-md text-[12px] transition-all">129</button>
<button class="w-8 h-8 flex items-center justify-center border border-outline-variant rounded hover:bg-surface-container-high transition-all">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<!-- Modal Form (Register Member) -->
<div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-md bg-primary/20 backdrop-blur-sm transition-opacity" id="registerModal">
<div class="bg-surface-container-lowest w-full max-w-lg rounded-xl shadow-2xl border border-outline-variant overflow-hidden fade-in">
<div class="p-lg bg-secondary text-on-secondary flex justify-between items-center">
<div>
<h3 class="font-headline-sm text-headline-sm">Register New Member</h3>
<p class="text-[12px] opacity-80">Masukkan informasi detail untuk pendaftaran anggota baru.</p>
</div>
<button class="p-xs hover:bg-white/20 rounded-full transition-all" onclick="closeModal()">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<form class="p-lg space-y-md" id="memberForm" onsubmit="handleSubmit(event)">
<div class="space-y-base">
<label class="font-label-lg text-primary block">Nama Lengkap</label>
<input class="w-full px-md py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" minlength="3" placeholder="Contoh: Andi Saputra" required="" type="text"/>
<p class="text-error text-[11px] hidden" id="nameError">Nama wajib diisi minimal 3 karakter.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-base">
<label class="font-label-lg text-primary block">Email Address</label>
<input class="w-full px-md py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" placeholder="name@email.com" required="" type="email"/>
</div>
<div class="space-y-base">
<label class="font-label-lg text-primary block">Nomor Telepon</label>
<input class="w-full px-md py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" pattern="[0-9]{10,13}" placeholder="08123456789" required="" type="tel"/>
</div>
</div>
<div class="space-y-base">
<label class="font-label-lg text-primary block">Tipe Membership</label>
<div class="grid grid-cols-2 gap-xs">
<label class="flex items-center gap-xs p-md border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container transition-all">
<input checked="" class="text-secondary focus:ring-secondary" name="membership" type="radio" value="regular"/>
<span class="font-label-md">Regular</span>
</label>
<label class="flex items-center gap-xs p-md border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container transition-all">
<input class="text-secondary focus:ring-secondary" name="membership" type="radio" value="premium"/>
<span class="font-label-md">Premium</span>
</label>
</div>
</div>
<div class="pt-md border-t border-outline-variant flex justify-end gap-sm">
<button class="px-lg py-xs font-label-lg text-on-surface-variant hover:bg-surface-container rounded-lg transition-all" onclick="closeModal()" type="button">Batal</button>
<button class="px-lg py-xs font-label-lg bg-secondary text-on-secondary rounded-lg hover:shadow-lg active:scale-95 transition-all" type="submit">Daftarkan Anggota</button>
</div>
</form>
</div>
</div>
<script>
    const modal = document.getElementById('registerModal');

    function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    function handleSubmit(e) {
        e.preventDefault();
        // Simple validation logic
        const form = e.target;
        const nameInput = form.querySelector('input[type="text"]');

        if (nameInput.value.length < 3) {
            document.getElementById('nameError').classList.remove('hidden');
            return;
        }

        // Success simulation
        alert('Anggota berhasil didaftarkan!');
        closeModal();
        form.reset();
    }

    // Close modal on backdrop click (click outside modal content)
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    // Close modal on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
</script>
</body></html>