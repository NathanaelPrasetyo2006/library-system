<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LibrisAdmin - Dashboard</title>
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
        body {
            background-color: #f7f9fb;
            font-family: 'Inter', sans-serif;
            color: #191c1e;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .card-shadow {
            box-shadow: 0px 4px 12px rgba(30, 41, 59, 0.05);
        }
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="flex overflow-hidden">
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
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('dashboard') }}">
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
    <a class="flex items-center gap-sm px-sm py-xs text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200 active:scale-[0.98]" href="{{ route('laporan') }}">
        <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
        <span class="font-body-md text-body-md">Reports</span>
    </a>
</nav>
<div class="mt-auto space-y-xs pt-md border-t border-outline-variant">
<!-- <button class="w-full flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-lg font-label-lg active:scale-95 transition-transform">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
<span>Add New Entry</span>
</button> -->
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
<div class="flex-1 flex flex-col ml-[280px] w-[calc(100%-280px)] overflow-hidden h-screen">
<!-- TopNavBar -->
<header class="flex justify-between items-center h-16 px-margin bg-surface border-b border-outline-variant shadow-sm z-20">
<div class="flex items-center flex-1 max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all" placeholder="Search books, members, or transactions..." type="text"/>
</div>
</div>
<div class="flex items-center gap-md ml-md">
<button class="text-on-surface-variant hover:text-secondary transition-all duration-200 relative">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
<span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
</button>
<button class="text-on-surface-variant hover:text-secondary transition-all duration-200">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant"></div>
<div class="flex items-center gap-xs cursor-pointer group">
<img alt="User Avatar" class="w-8 h-8 rounded-full border border-outline-variant" data-alt="A professional male administrator portrait in a high-key corporate environment. The lighting is soft and natural, emphasizing clarity and approachability. He is wearing a minimalist dark navy blazer. The background is a slightly blurred modern office space with clean lines and soft grey and white tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPYZn-mjBMipRmYFVYbo_EW74JxWMP8RwUJu0R09Lvtu9R3Qf_PbgdlxYO9XYvagb7sWwQJ3srSsCulHtxi6KgcDZFVKizlDmIKPOrwtV_yMAIz9WcIZSMgCi0G5aNQj5U4oijMoi0_97iDhDJEwgYum8PBynB1c-Hb69_GTdi5Sr7-7tSogxLnGQ51AZnjyzA_nY4JykkdHplSoE8F8xobQXuZy_cH8SLl8UXV_9COZBrg4PGwmvufhHibazTJzHfdsGATGnjk-Jb"/>
<span class="font-label-lg text-label-lg text-on-surface group-hover:text-secondary transition-colors">Admin Profile</span>
<span class="material-symbols-outlined text-on-surface-variant">expand_more</span>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto bg-surface p-margin">
<div class="max-w-[1400px] mx-auto space-y-lg">
<!-- Welcome Section -->
<section>
<h2 class="font-headline-lg text-headline-lg text-primary">Library Overview</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">System snapshot as of <span id="current-date">October 24, 2023</span></p>
</section>
<!-- Statistics Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="bg-surface-container-lowest p-md rounded-xl card-shadow border border-outline-variant/30 flex items-start gap-md">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined">library_books</span>
</div>
<div>
<p class="text-label-md font-label-md text-on-surface-variant">Total Books</p>
<h3 class="text-headline-md font-headline-md text-primary">12,845</h3>
<p class="text-xs text-emerald-600 font-medium mt-1">↑ 120 this month</p>
</div>
</div>
<div class="bg-surface-container-lowest p-md rounded-xl card-shadow border border-outline-variant/30 flex items-start gap-md">
<div class="w-12 h-12 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined">person_add</span>
</div>
<div>
<p class="text-label-md font-label-md text-on-surface-variant">Active Members</p>
<h3 class="text-headline-md font-headline-md text-primary">2,104</h3>
<p class="text-xs text-emerald-600 font-medium mt-1">↑ 42 new today</p>
</div>
</div>
<div class="bg-surface-container-lowest p-md rounded-xl card-shadow border border-outline-variant/30 flex items-start gap-md">
<div class="w-12 h-12 rounded-lg bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined">sync_alt</span>
</div>
<div>
<p class="text-label-md font-label-md text-on-surface-variant">Books Borrowed Today</p>
<h3 class="text-headline-md font-headline-md text-primary">186</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">85% of daily avg</p>
</div>
</div>
<div class="bg-surface-container-lowest p-md rounded-xl card-shadow border border-outline-variant/30 flex items-start gap-md">
<div class="w-12 h-12 rounded-lg bg-error-container flex items-center justify-center text-on-error-container">
<span class="material-symbols-outlined">history_toggle_off</span>
</div>
<div>
<p class="text-label-md font-label-md text-on-surface-variant">Overdue Returns</p>
<h3 class="text-headline-md font-headline-md text-error">12</h3>
<p class="text-xs text-error font-medium mt-1">Action required</p>
</div>
</div>
</section>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Recent Transactions Table -->
<div class="lg:col-span-2 bg-surface-container-lowest rounded-xl card-shadow border border-outline-variant/30 overflow-hidden">
<div class="px-md py-md border-b border-outline-variant flex justify-between items-center">
<h3 class="font-headline-sm text-headline-sm text-primary">Recent Transactions</h3>
<button class="text-secondary font-label-lg hover:underline transition-all">View All</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="px-md py-3 text-label-md font-label-md text-on-surface-variant">Member</th>
<th class="px-md py-3 text-label-md font-label-md text-on-surface-variant">Book Title</th>
<th class="px-md py-3 text-label-md font-label-md text-on-surface-variant">Action</th>
<th class="px-md py-3 text-label-md font-label-md text-on-surface-variant">Status</th>
<th class="px-md py-3 text-label-md font-label-md text-on-surface-variant">Date</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
@forelse($recentTransactions as $t)
    <tr class="hover:bg-surface-container transition-colors">
        <td class="px-md py-4">
            <div class="flex items-center gap-xs">
                <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-[10px] font-bold text-on-primary-fixed">{{ strtoupper(substr($t->member_name,0,2)) }}</div>
                <span class="text-body-md font-medium">{{ $t->member_name }}</span>
            </div>
        </td>
        <td class="px-md py-4">
            <span class="text-body-md">{{ $t->book_title }}</span>
        </td>
        <td class="px-md py-4">
            <span class="px-2 py-1 rounded text-[10px] font-bold uppercase bg-surface-container-high text-on-surface-variant">{{ ucfirst($t->action) }}</span>
        </td>
        <td class="px-md py-4">
            @php $statusClass = $t->status === 'completed' ? 'text-emerald-600' : 'text-amber-600'; @endphp
            <span class="flex items-center gap-1 text-[12px] font-medium {{ $statusClass }}">
                <span class="w-1.5 h-1.5 rounded-full {{ $t->status === 'completed' ? 'bg-emerald-600' : 'bg-amber-600' }}"></span>
                {{ ucfirst($t->status) }}
            </span>
        </td>
        <td class="px-md py-4 text-body-md text-on-surface-variant">{{ $t->created_at->diffForHumans() }}</td>
    </tr>
@empty
    <tr>
        <td class="px-md py-4" colspan="5">No transactions yet.</td>
    </tr>
@endforelse
</tbody>
</table>
</div>
</div>
<!-- Side Section: Quick Actions & Status -->
<div class="space-y-gutter">
<!-- Quick Actions -->
<div class="bg-surface-container-lowest p-md rounded-xl card-shadow border border-outline-variant/30">
<h3 class="font-headline-sm text-headline-sm text-primary mb-md">Quick Actions</h3>
<div class="space-y-sm">
    <a href="{{ route('buku') }}?action=create" class="w-full flex items-center gap-sm p-sm bg-surface-container rounded-lg border border-transparent hover:border-secondary hover:text-secondary transition-all active:scale-[0.98]">
        <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
            <span class="material-symbols-outlined">add_box</span>
        </div>
        <div class="text-left">
            <p class="font-label-lg">Add New Book</p>
            <p class="text-xs text-on-surface-variant">Update the catalog</p>
        </div>
    </a>
    <a href="{{ route('anggota') }}?action=register" class="w-full flex items-center gap-sm p-sm bg-surface-container rounded-lg border border-transparent hover:border-secondary hover:text-secondary transition-all active:scale-[0.98]">
        <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
            <span class="material-symbols-outlined">person_add_alt</span>
        </div>
        <div class="text-left">
            <p class="font-label-lg">Register Member</p>
            <p class="text-xs text-on-surface-variant">New library membership</p>
        </div>
    </a>
    <a href="{{ route('peminjaman') }}?action=checkout" class="w-full flex items-center gap-sm p-sm bg-surface-container rounded-lg border border-transparent hover:border-secondary hover:text-secondary transition-all active:scale-[0.98]">
        <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
            <span class="material-symbols-outlined">barcode_scanner</span>
        </div>
        <div class="text-left">
            <p class="font-label-lg">Quick Checkout</p>
            <p class="text-xs text-on-surface-variant">Scan book &amp; member IDs</p>
        </div>
    </a>
</div>
</div>
<!-- System Status -->
<div class="bg-primary-container p-md rounded-xl card-shadow text-on-primary-container relative overflow-hidden">
<div class="relative z-10">
<div class="flex items-center gap-xs mb-sm">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<p class="text-xs font-bold uppercase tracking-widest text-on-primary-container">System Status</p>
</div>
<h4 class="font-headline-sm text-headline-sm text-white mb-xs">Online &amp; Secure</h4>
<p class="text-body-md opacity-80 mb-md">All databases are synchronized and the catalog is up-to-date.</p>
<div class="h-1 bg-white/10 rounded-full overflow-hidden">
<div class="h-full w-4/5 bg-secondary rounded-full"></div>
</div>
<div class="flex justify-between mt-2">
<p class="text-[10px] font-medium opacity-60 uppercase">Storage Used</p>
<p class="text-[10px] font-medium opacity-90 uppercase">8.2 TB / 10 TB</p>
</div>
</div>
<!-- Subtle abstract decoration -->
<div class="absolute -right-8 -bottom-8 w-32 h-32 bg-secondary opacity-20 blur-2xl rounded-full"></div>
</div>
</div>
</div>
<!-- Featured Books / New Arrivals Bento (Extra Visual Flourish) -->
<section>
<div class="flex justify-between items-end mb-md">
<div>
<h3 class="font-headline-sm text-headline-sm text-primary">New Arrivals</h3>
<p class="font-body-md text-on-surface-variant">Latest additions to the main branch</p>
</div>
<button class="bg-surface-container-high px-md py-sm rounded-lg font-label-lg hover:bg-surface-variant transition-colors">Manage Collection</button>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-sm">
@forelse($newArrivals as $book)
    <a href="{{ route('buku') }}?book_id={{ $book->id }}" class="bg-surface-container-lowest p-xs rounded-xl card-shadow border border-outline-variant/30 hover:scale-[1.02] transition-transform cursor-pointer group">
        <div class="aspect-[2/3] bg-surface-container rounded-lg overflow-hidden relative mb-2">
            @php
                $cover = $book->cover_url;
                if (empty($cover)) {
                    $coverSrc = 'https://via.placeholder.com/300x450?text=' . urlencode($book->title);
                } elseif (preg_match('/^https?:\/\//', $cover)) {
                    $coverSrc = $cover;
                } else {
                    $coverSrc = asset('storage/' . ltrim($cover, '/'));
                }
            @endphp
            <img alt="{{ $book->title }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" src="{{ $coverSrc }}" />
            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <span class="material-symbols-outlined text-white text-3xl">info</span>
            </div>
        </div>
        <p class="font-label-lg text-primary truncate px-1">{{ $book->title }}</p>
        <p class="text-label-md text-on-surface-variant px-1">{{ $book->author }}</p>
    </a>
@empty
    <div class="col-span-6 p-md text-center text-on-surface-variant">No new arrivals</div>
@endforelse
</div>
</section>
</div>
</main>
</div>
<script>
        // Update current date
        const dateElement = document.getElementById('current-date');
        const now = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        dateElement.textContent = now.toLocaleDateString('en-US', options);

        // Micro-interactions for buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', () => {
                button.classList.add('scale-95');
            });
            button.addEventListener('mouseup', () => {
                button.classList.remove('scale-95');
            });
            button.addEventListener('mouseleave', () => {
                button.classList.remove('scale-95');
            });
        });
    </script>
</body></html>