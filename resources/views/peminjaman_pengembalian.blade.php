<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LibrisAdmin - Circulation</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        .modal-overlay { background-color: rgba(9, 20, 38, 0.4); backdrop-filter: blur(4px); }
    </style>
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
                        "headline-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface text-on-surface">
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
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('anggota') }}">
        <span class="material-symbols-outlined" data-icon="group">group</span>
        <span class="font-body-md text-body-md">Members</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('peminjaman') }}">
        <span class="material-symbols-outlined" data-icon="swap_horiz">swap_horiz</span>
        <span class="font-body-md text-body-md">Transactions</span>
    </a>
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('laporan') }}">
        <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
        <span class="font-body-md text-body-md">Reports</span>
    </a>
</nav>
<div class="mt-auto space-y-xs pt-md border-t border-outline-variant">
<button class="w-full flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-lg font-label-lg active:scale-95 transition-transform" onclick="openTransactionModal()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
            Add New Entry
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
<header class="fixed top-0 left-[280px] w-[calc(100%-280px)] h-16 bg-surface border-b border-outline-variant flex justify-between items-center px-margin z-40 shadow-sm">
<div class="flex items-center gap-md w-1/2">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
<input class="w-full pl-xl pr-md py-xs bg-surface-container-low border border-outline-variant rounded-xl font-body-md focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" placeholder="Search transactions, members, or books..." type="text"/>
</div>
</div>
<div class="flex items-center gap-md">
<button class="text-on-surface-variant hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-on-surface-variant hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="flex items-center gap-sm pl-md border-l border-outline-variant">
<img alt="User Avatar" class="w-8 h-8 rounded-full border border-outline-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKZkxMVUPrNjuy569vzTVWjWJyh6NoPwESCt7bWrTGV0meP63EL6JhpRClW6HrTSIaS3Wk-zjfwcwf_v6r6P0QCIdz4UaYE0ZXfZ-w96gf0YtBDKY5AuEVqBnj8QbrmZDnQZ2Gqopqujxkjx9tdOOZpo9Rf7Yk0jO-OGsc504prJWLxSrkLY8N3MN0RWraENfRCAa0ej0STx1YvhW9GjcDcqspwDVp2hFugCFkfcurPOyqF1CzUIIj6d6EZdMLlsPXhL2CI8_ZkiLl"/>
</div>
</div>
</header>
<!-- Main Content -->
<main class="ml-[280px] mt-16 p-margin min-h-screen">
<div class="max-w-[1400px] mx-auto">
<div class="flex justify-between items-end mb-lg">
<div>
<nav class="flex gap-sm mb-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Circulation</span>
<span class="text-outline-variant">/</span>
<span class="text-primary font-label-md text-label-md">Transactions</span>
</nav>
<h2 class="font-headline-lg text-headline-lg text-primary">Peminjaman &amp; Pengembalian</h2>
</div>
<div class="flex bg-surface-container rounded-xl p-1 shadow-sm">
<button class="px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 bg-surface text-primary shadow-sm" id="tab-active" onclick="switchTab('active')">Active Loans</button>
<button class="px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 text-on-surface-variant hover:text-on-surface" id="tab-history" onclick="switchTab('history')">Transaction History</button>
</div>
</div>
<!-- Dashboard Stats Summary -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-md mb-lg">
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" data-icon="book_online">book_online</span>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Total Active Loans</p>
<p class="text-headline-md font-headline-md text-primary">124</p>
</div>
</div>
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-error/10 flex items-center justify-center text-error">
<span class="material-symbols-outlined" data-icon="history_toggle_off">history_toggle_off</span>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Overdue Books</p>
<p class="text-headline-md font-headline-md text-error">12</p>
</div>
</div>
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed/30 flex items-center justify-center text-on-tertiary-fixed-variant">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
</div>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Pending Fines (Denda)</p>
<p class="text-headline-md font-headline-md text-primary">Rp 450.000</p>
</div>
</div>
</div>
<!-- Transaction Table Card -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low sticky top-0 z-10">
<tr>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Transaction ID</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Member Name</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Book Title</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Loan Date</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Due Date</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Status</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant">Fines (Denda)</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant border-b border-outline-variant text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant" id="transaction-tbody">
<!-- Active Rows -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-md py-md font-label-md text-label-md text-primary">TRX-00982</td>
<td class="px-md py-md">
<div class="flex items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs">AS</div>
<div>
<p class="font-label-lg text-label-lg text-primary leading-tight">Aditya Saputra</p>
<p class="text-xs text-on-surface-variant">LIB-2024-042</p>
</div>
</div>
</td>
<td class="px-md py-md">
<p class="font-label-lg text-label-lg text-primary line-clamp-1">Clean Code: A Handbook of Agile Software Craftsmanship</p>
<p class="text-xs text-on-surface-variant">Robert C. Martin</p>
</td>
<td class="px-md py-md font-body-md text-body-md">Oct 20, 2023</td>
<td class="px-md py-md font-body-md text-body-md">Oct 27, 2023</td>
<td class="px-md py-md">
<span class="inline-flex items-center px-xs py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Dipinjam</span>
</td>
<td class="px-md py-md font-body-md text-body-md text-error">Rp 15.000 (Late)</td>
<td class="px-md py-md text-right">
<button class="bg-secondary text-on-secondary px-sm py-1 rounded-lg text-label-md font-label-md hover:bg-on-secondary-fixed-variant transition-all" onclick="handleReturn('TRX-00982', 15000)">Return</button>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-md py-md font-label-md text-label-md text-primary">TRX-01021</td>
<td class="px-md py-md">
<div class="flex items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant flex items-center justify-center font-bold text-xs">RN</div>
<div>
<p class="font-label-lg text-label-lg text-primary leading-tight">Rina Nuraini</p>
<p class="text-xs text-on-surface-variant">LIB-2024-015</p>
</div>
</div>
</td>
<td class="px-md py-md">
<p class="font-label-lg text-label-lg text-primary line-clamp-1">Thinking, Fast and Slow</p>
<p class="text-xs text-on-surface-variant">Daniel Kahneman</p>
</td>
<td class="px-md py-md font-body-md text-body-md">Oct 24, 2023</td>
<td class="px-md py-md font-body-md text-body-md">Oct 31, 2023</td>
<td class="px-md py-md">
<span class="inline-flex items-center px-xs py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Dipinjam</span>
</td>
<td class="px-md py-md font-body-md text-body-md text-on-surface-variant">-</td>
<td class="px-md py-md text-right">
<button class="bg-secondary text-on-secondary px-sm py-1 rounded-lg text-label-md font-label-md hover:bg-on-secondary-fixed-variant transition-all" onclick="handleReturn('TRX-01021', 0)">Return</button>
</td>
</tr>
<!-- More placeholder rows -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-md py-md font-label-md text-label-md text-primary">TRX-01025</td>
<td class="px-md py-md">
<div class="flex items-center gap-xs">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs">BK</div>
<div>
<p class="font-label-lg text-label-lg text-primary leading-tight">Budi Kusuma</p>
<p class="text-xs text-on-surface-variant">LIB-2024-009</p>
</div>
</div>
</td>
<td class="px-md py-md">
<p class="font-label-lg text-label-lg text-primary line-clamp-1">Atomic Habits</p>
<p class="text-xs text-on-surface-variant">James Clear</p>
</td>
<td class="px-md py-md font-body-md text-body-md">Oct 25, 2023</td>
<td class="px-md py-md font-body-md text-body-md">Nov 01, 2023</td>
<td class="px-md py-md">
<span class="inline-flex items-center px-xs py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Dipinjam</span>
</td>
<td class="px-md py-md font-body-md text-body-md text-on-surface-variant">-</td>
<td class="px-md py-md text-right">
<button class="bg-secondary text-on-secondary px-sm py-1 rounded-lg text-label-md font-label-md hover:bg-on-secondary-fixed-variant transition-all" onclick="handleReturn('TRX-01025', 0)">Return</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
<!-- New Transaction Modal -->
<div class="hidden fixed inset-0 z-[100] modal-overlay flex items-center justify-center p-md" id="new-transaction-modal">
<div class="bg-surface-container-lowest w-full max-w-2xl rounded-xl border border-outline-variant shadow-2xl flex flex-col overflow-hidden animate-in fade-in zoom-in duration-300">
<div class="px-lg py-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
<div>
<h3 class="font-headline-sm text-headline-sm text-primary">New Circulation Entry</h3>
<p class="text-on-surface-variant font-body-md text-body-md">Register a new book loan transaction.</p>
</div>
<button class="text-on-surface-variant hover:text-primary transition-colors" onclick="closeTransactionModal()">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<form class="p-lg space-y-md">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-primary block">Search Member</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="person_search">person_search</span>
<input class="w-full pl-xl pr-md py-sm bg-surface-container-low border border-outline-variant rounded-xl font-body-md focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" placeholder="ID or Name..." type="text"/>
</div>
<div class="p-xs bg-surface-container border border-outline-variant rounded-lg hidden">
<!-- Suggestion box -->
</div>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-primary block">Search Book</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search_insights">search_insights</span>
<input class="w-full pl-xl pr-md py-sm bg-surface-container-low border border-outline-variant rounded-xl font-body-md focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" placeholder="ISBN or Title..." type="text"/>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-primary block">Loan Date</label>
<input class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-xl font-body-md focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" type="date" value="2023-10-26"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-primary block">Due Date</label>
<input class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-xl font-body-md focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" type="date" value="2023-11-02"/>
</div>
</div>
<div class="bg-surface-container p-md rounded-xl space-y-xs">
<div class="flex justify-between font-label-lg text-label-lg text-on-surface-variant">
<span>Loan Duration</span>
<span class="text-primary">7 Days</span>
</div>
<div class="flex justify-between font-label-lg text-label-lg text-on-surface-variant">
<span>Late Fee Per Day</span>
<span class="text-primary">Rp 5.000</span>
</div>
</div>
<div class="pt-md border-t border-outline-variant flex justify-end gap-md">
<button class="px-lg py-sm font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors" onclick="closeTransactionModal()" type="button">Cancel</button>
<button class="bg-secondary text-on-secondary px-xl py-sm rounded-xl font-label-lg text-label-lg hover:shadow-lg transition-all active:scale-[0.98]" type="button">Confirm Loan</button>
</div>
</form>
</div>
</div>
<!-- Return Confirmation Modal -->
<div class="hidden fixed inset-0 z-[100] modal-overlay flex items-center justify-center p-md" id="return-modal">
<div class="bg-surface-container-lowest w-full max-w-md rounded-xl border border-outline-variant shadow-2xl p-lg animate-in fade-in slide-in-from-bottom-4">
<h3 class="font-headline-sm text-headline-sm text-primary mb-xs">Confirm Return</h3>
<p class="text-on-surface-variant font-body-md text-body-md mb-lg" id="return-desc">Processing return for TRX-00982.</p>
<div class="hidden p-md bg-error-container rounded-xl flex items-center gap-md mb-lg" id="fine-alert">
<span class="material-symbols-outlined text-on-error-container" data-icon="warning">warning</span>
<div>
<p class="font-label-lg text-label-lg text-on-error-container">Late Fine Detected</p>
<p class="text-on-error-container font-body-md text-body-md font-bold" id="fine-amount">Rp 15.000</p>
</div>
</div>
<div class="flex flex-col gap-sm">
<button class="bg-secondary text-on-secondary py-sm rounded-xl font-label-lg text-label-lg hover:shadow-lg transition-all" onclick="confirmReturnProcess()">Submit Return</button>
<button class="py-sm font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors" onclick="closeReturnModal()">Cancel</button>
</div>
</div>
</div>
<script>
        function openTransactionModal() {
            document.getElementById('new-transaction-modal').classList.remove('hidden');
        }

        function closeTransactionModal() {
            document.getElementById('new-transaction-modal').classList.add('hidden');
        }

        let currentTrx = '';
        function handleReturn(trxId, fine) {
            currentTrx = trxId;
            document.getElementById('return-desc').innerText = `Processing return for transaction ${trxId}. Ensure the book condition is verified.`;
            const fineAlert = document.getElementById('fine-alert');
            const fineAmount = document.getElementById('fine-amount');
            
            if (fine > 0) {
                fineAlert.classList.remove('hidden');
                fineAmount.innerText = `Rp ${fine.toLocaleString('id-ID')}`;
            } else {
                fineAlert.classList.add('hidden');
            }
            
            document.getElementById('return-modal').classList.remove('hidden');
        }

        function closeReturnModal() {
            document.getElementById('return-modal').classList.add('hidden');
        }

        function confirmReturnProcess() {
            // Logic to update UI or send to backend
            alert(`Transaction ${currentTrx} has been successfully returned.`);
            closeReturnModal();
        }

        function switchTab(tab) {
            const activeBtn = document.getElementById('tab-active');
            const historyBtn = document.getElementById('tab-history');
            const tbody = document.getElementById('transaction-tbody');

            if (tab === 'active') {
                activeBtn.className = "px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 bg-surface text-primary shadow-sm";
                historyBtn.className = "px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 text-on-surface-variant hover:text-on-surface";
                tbody.innerHTML = `
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-md py-md font-label-md text-label-md text-primary">TRX-00982</td>
                        <td class="px-md py-md"><div class="flex items-center gap-xs"><div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs">AS</div><div><p class="font-label-lg text-label-lg text-primary leading-tight">Aditya Saputra</p><p class="text-xs text-on-surface-variant">LIB-2024-042</p></div></div></td>
                        <td class="px-md py-md"><p class="font-label-lg text-label-lg text-primary line-clamp-1">Clean Code</p><p class="text-xs text-on-surface-variant">Robert C. Martin</p></td>
                        <td class="px-md py-md font-body-md text-body-md">Oct 20, 2023</td>
                        <td class="px-md py-md font-body-md text-body-md">Oct 27, 2023</td>
                        <td class="px-md py-md"><span class="inline-flex items-center px-xs py-[2px] rounded-full bg-secondary-fixed text-on-secondary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Dipinjam</span></td>
                        <td class="px-md py-md font-body-md text-body-md text-error">Rp 15.000 (Late)</td>
                        <td class="px-md py-md text-right"><button onclick="handleReturn('TRX-00982', 15000)" class="bg-secondary text-on-secondary px-sm py-1 rounded-lg text-label-md font-label-md hover:bg-on-secondary-fixed-variant transition-all">Return</button></td>
                    </tr>
                `;
            } else {
                historyBtn.className = "px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 bg-surface text-primary shadow-sm";
                activeBtn.className = "px-lg py-xs rounded-lg font-label-lg text-label-lg transition-all duration-200 text-on-surface-variant hover:text-on-surface";
                tbody.innerHTML = `
                    <tr class="hover:bg-surface-container-low transition-colors group opacity-70">
                        <td class="px-md py-md font-label-md text-label-md text-primary">TRX-00975</td>
                        <td class="px-md py-md"><div class="flex items-center gap-xs"><div class="w-8 h-8 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-xs">MD</div><div><p class="font-label-lg text-label-lg text-primary leading-tight">Maya Dewi</p><p class="text-xs text-on-surface-variant">LIB-2024-011</p></div></div></td>
                        <td class="px-md py-md"><p class="font-label-lg text-label-lg text-primary line-clamp-1">The Pragmatic Programmer</p><p class="text-xs text-on-surface-variant">Andrew Hunt</p></td>
                        <td class="px-md py-md font-body-md text-body-md">Oct 10, 2023</td>
                        <td class="px-md py-md font-body-md text-body-md">Oct 17, 2023</td>
                        <td class="px-md py-md"><span class="inline-flex items-center px-xs py-[2px] rounded-full bg-surface-container-high text-on-surface-variant text-[10px] font-bold uppercase tracking-wider">Kembali</span></td>
                        <td class="px-md py-md font-body-md text-body-md text-on-surface-variant">-</td>
                        <td class="px-md py-md text-right"><button class="text-on-surface-variant hover:text-primary"><span class="material-symbols-outlined" data-icon="visibility">visibility</span></button></td>
                    </tr>
                `;
            }
        }
    </script>
</body></html>