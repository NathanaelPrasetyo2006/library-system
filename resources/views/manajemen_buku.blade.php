<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LibrisAdmin - Manajemen Buku</title>
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
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        .modal-backdrop { background-color: rgba(9, 20, 38, 0.4); backdrop-filter: blur(4px); }
        .card-shadow { shadow: 0px 4px 12px rgba(30, 41, 59, 0.05); }
    </style>
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
    <a class="flex items-center gap-sm px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant font-bold rounded-lg active:scale-[0.98] transition-all" href="{{ route('buku') }}">
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
<button class="w-full flex items-center justify-center gap-xs bg-secondary text-on-secondary px-md py-sm rounded-lg font-label-lg active:scale-95 transition-transform" onclick="openModal()">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
            Add New Book
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
<!-- Main Content Area -->
<main class="ml-[280px] min-h-screen flex flex-col">
<!-- TopNavBar -->
<header class="flex justify-between items-center h-16 px-margin w-full bg-surface border-b border-outline-variant shadow-sm sticky top-0 z-40">
<div class="flex items-center gap-md flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
<input class="w-full pl-xl pr-sm py-xs bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all" placeholder="Search books, ISBN, or authors..." type="text"/>
</div>
</div>
<div class="flex items-center gap-lg">
<div class="flex items-center gap-sm">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors relative">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="help">help</span>
</button>
</div>
<div class="h-8 w-[1px] bg-outline-variant"></div>
<div class="flex items-center gap-sm">
<div class="text-right hidden sm:block">
<p class="font-label-lg text-label-lg text-on-surface">Admin User</p>
<p class="text-[10px] uppercase tracking-wider text-outline">System Lead</p>
</div>
<img alt="User Avatar" class="w-10 h-10 rounded-full border border-outline-variant object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVfArGuIL0bvUcSr5sdBqU_sVEOJYoPiYdHgHaDU_cLQIaJDfRbvRVqN-K9f5jJ6NIlcjGjtJIFOmDuseCF7QRTV1vnlE9GPlDS7J4WzlB3oksf1u4T2kry6BGIMHwBuSkK-VzJmcfVZr-SgC2aDs1f99sL_slHJn7hGZlH6Ey_iNTkE6nKtRC005dMAxJ1lNLkMExbc3MPCgWFYq_saAL2eCNr1p4TqcHM78mX_bRPyMZ9532pF_eo_4PeMSaTKc_WY4E-7AEUXku"/>
</div>
</div>
</header>
<!-- Content Canvas -->
<div class="p-margin flex-grow bg-surface">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary">Manajemen Buku</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Update and monitor your library's intellectual inventory.</p>
</div>
<div class="flex gap-sm">
<button class="px-md py-sm bg-surface-container-lowest border border-outline-variant rounded-xl font-label-lg text-on-surface-variant flex items-center gap-xs hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined" data-icon="file_download">file_download</span>
                        Export CSV
                    </button>
<button class="px-md py-sm bg-secondary text-on-secondary rounded-xl font-label-lg flex items-center gap-xs hover:opacity-90 shadow-md active:scale-95 transition-all" onclick="openModal()">
<span class="material-symbols-outlined" data-icon="add">add</span>
                        Add New Book
                    </button>
</div>
</div>
<!-- Filters -->
<div class="flex flex-wrap items-center gap-sm mb-lg">
<span class="text-label-md font-label-md text-outline uppercase tracking-widest mr-xs">Filters:</span>
<button class="px-sm py-xs bg-secondary-fixed text-on-secondary-fixed-variant rounded-full font-label-md">All Categories</button>
<button class="px-sm py-xs bg-surface-container-lowest border border-outline-variant text-on-surface-variant rounded-full font-label-md hover:border-secondary transition-colors">Science Fiction</button>
<button class="px-sm py-xs bg-surface-container-lowest border border-outline-variant text-on-surface-variant rounded-full font-label-md hover:border-secondary transition-colors">History</button>
<button class="px-sm py-xs bg-surface-container-lowest border border-outline-variant text-on-surface-variant rounded-full font-label-md hover:border-secondary transition-colors">Biography</button>
<button class="px-sm py-xs bg-surface-container-lowest border border-outline-variant text-on-surface-variant rounded-full font-label-md hover:border-secondary transition-colors">Technical</button>
<button class="ml-auto text-secondary font-label-md flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span>
                    Advanced Filters
                </button>
</div>
<!-- Data Table Card -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-[0px_4px_12px_rgba(30,41,59,0.05)]">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low border-b border-outline-variant">
<tr>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant">Book Title</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant">ISBN</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant">Category</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant text-center">Stock</th>
<th class="px-md py-sm font-label-lg text-label-lg text-on-surface-variant text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
@foreach($books as $book)
<tr class="hover:bg-surface-container-lowest/50 transition-colors">
<td class="px-md py-md">
<div class="flex items-center gap-sm">
<div class="w-10 h-14 bg-surface-container rounded-sm flex-shrink-0 overflow-hidden">
<img class="w-full h-full object-cover" src="{{ $book->cover_url ?? 'https://via.placeholder.com/80x120?text=No+Cover' }}" alt="{{ $book->title }} cover" />
</div>
<div>
<p class="font-label-lg text-label-lg text-primary">{{ $book->title }}</p>
<p class="text-label-md text-on-surface-variant">{{ $book->author }}</p>
</div>
</div>
</td>
<td class="px-md py-md font-body-md text-on-surface-variant">{{ $book->isbn }}</td>
<td class="px-md py-md">
<span class="px-sm py-[2px] bg-secondary-fixed text-on-secondary-fixed-variant rounded-full text-[11px] font-bold uppercase tracking-wider">{{ $book->category ?? 'Uncategorized' }}</span>
</td>
<td class="px-md py-md text-center">
<div class="inline-flex items-center gap-xs px-sm py-[2px] bg-tertiary-fixed text-on-tertiary-fixed rounded-full text-[11px] font-bold">
<span class="w-1.5 h-1.5 bg-on-tertiary-container rounded-full"></span>
{{ $book->stock ?? 0 }}
</div>
</td>
<td class="px-md py-md text-right">
<div class="flex justify-end gap-xs">
<button type="button" class="p-xs text-on-surface-variant hover:text-secondary hover:bg-secondary-fixed/30 rounded-lg transition-all" data-id="{{ $book->id }}" data-title="{{ e($book->title) }}" data-author="{{ e($book->author) }}" data-isbn="{{ e($book->isbn) }}" data-stock="{{ $book->stock }}" data-category="{{ e($book->category) }}" data-cover_url="{{ e($book->cover_url) }}" onclick="openEditModal(this)">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<form method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('Delete this book?')">
    @csrf
    @method('DELETE')
    <button class="p-xs text-on-surface-variant hover:text-error hover:bg-error-container/30 rounded-lg transition-all" type="submit">
        <span class="material-symbols-outlined" data-icon="delete">delete</span>
    </button>
</form>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-md py-sm bg-surface-container-low border-t border-outline-variant flex items-center justify-between">
<p class="text-label-md text-on-surface-variant">Showing 1-10 of 1,284 books</p>
<div class="flex items-center gap-xs">
<button class="p-xs text-on-surface-variant hover:bg-surface-container rounded-lg disabled:opacity-30" disabled="">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center bg-secondary text-on-secondary rounded-lg font-label-md">1</button>
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container rounded-lg font-label-md">2</button>
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container rounded-lg font-label-md">3</button>
<span class="px-xs text-on-surface-variant">...</span>
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container rounded-lg font-label-md">129</button>
<button class="p-xs text-on-surface-variant hover:bg-surface-container rounded-lg">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<!-- Modal Form (Add/Edit) -->
<div class="fixed inset-0 z-[60] hidden" id="bookModal">
<div class="absolute inset-0 modal-backdrop"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-xl px-sm">
<div class="bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden border border-outline-variant">
<div class="px-lg py-md border-b border-outline-variant flex justify-between items-center">
<div>
<h3 class="font-headline-sm text-headline-sm text-primary">Add New Book</h3>
<p class="text-label-md text-on-surface-variant">Enter book details to register in catalog</p>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors" onclick="closeModal()">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<form class="p-lg space-y-md" id="bookForm" method="POST" action="{{ route('books.store') }}">
    @csrf
    <input type="hidden" name="_method" id="_method_input" value="POST" />
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="md:col-span-2 space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface">Book Title</label>
<input id="book_title" class="w-full px-sm py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all" name="title" placeholder="e.g. The Pragmatic Programmer" required="" type="text"/>
<p class="text-[11px] text-error hidden" id="titleError">Title is required.</p>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface">ISBN Number</label>
<input id="book_isbn" class="w-full px-sm py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all" name="isbn" placeholder="978-X-XXXX-XXXX-X" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface">Initial Stock</label>
<input id="book_stock" class="w-full px-sm py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all" min="0" name="stock" placeholder="0" type="number"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface">Category</label>
<select id="book_category" name="category" class="w-full px-sm py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all bg-surface-container-lowest">
<option>Technical</option>
<option>Fiction</option>
<option>History</option>
<option>Science</option>
<option>Philosophy</option>
</select>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface">Author</label>
<input id="book_author" class="w-full px-sm py-xs border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all" name="author" placeholder="Full name" type="text"/>
</div>
</div>
<div class="pt-md border-t border-outline-variant flex justify-end gap-sm">
<button class="px-md py-sm font-label-lg text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" onclick="closeModal()" type="button">
                            Cancel
                        </button>
<button class="px-md py-sm bg-secondary text-on-secondary rounded-xl font-label-lg shadow-md hover:opacity-90 active:scale-95 transition-all" type="submit">
                            Save Entry
                        </button>
</div>
</form>
</div>
</div>
</div>
<script>
        const modal = document.getElementById('bookModal');
        const form = document.getElementById('bookForm');
        const modalTitle = document.querySelector('#bookModal .font-headline-sm');
        const baseBooksUrl = "{{ url('books') }}";

        function openModal() {
            // prepare for creating new book
            form.reset();
            form.action = "{{ route('books.store') }}";
            document.getElementById('_method_input').value = 'POST';
            modalTitle.textContent = 'Add New Book';
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function openEditModal(btn) {
            const id = btn.getAttribute('data-id');
            document.getElementById('book_title').value = btn.getAttribute('data-title');
            document.getElementById('book_author').value = btn.getAttribute('data-author');
            document.getElementById('book_isbn').value = btn.getAttribute('data-isbn');
            document.getElementById('book_stock').value = btn.getAttribute('data-stock');
            document.getElementById('book_category').value = btn.getAttribute('data-category');
            // set form to update
            form.action = baseBooksUrl + '/' + id;
            document.getElementById('_method_input').value = 'PATCH';
            modalTitle.textContent = 'Edit Book';
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Close modal on backdrop click
        modal.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal-backdrop')) {
                closeModal();
            }
        });

        // Search highlight interaction
        const searchInput = document.querySelector('input[placeholder*="Search"]');
        if (searchInput) {
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('ring-2', 'ring-secondary/20');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('ring-2', 'ring-secondary/20');
            });
        }
    </script>
</body></html>