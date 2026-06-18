<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - LibrisAdmin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-login-pattern {
            background-color: #091426;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
        }
        /* Custom scrollbar for institutional feel */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="bg-login-pattern min-h-screen flex items-center justify-center p-md font-body-md text-on-surface">
<!-- Login Container -->
<div class="w-full max-w-[1100px] grid grid-cols-1 md:grid-cols-2 rounded-xl overflow-hidden shadow-2xl bg-surface-container-lowest">
<!-- Left Side: Visual/Brand (Desktop Only) -->
<div class="hidden md:flex relative flex-col justify-between p-xl bg-primary overflow-hidden">
<!-- Decorative Element -->
<div class="absolute -top-24 -left-24 w-64 h-64 bg-secondary opacity-20 rounded-full blur-3xl"></div>
<div class="absolute -bottom-24 -right-24 w-80 h-80 bg-secondary opacity-10 rounded-full blur-3xl"></div>
<div class="relative z-10">
<div class="flex items-center gap-xs mb-lg">
<span class="material-symbols-outlined text-on-primary text-[32px]">menu_book</span>
<h1 class="font-headline-md text-headline-md text-on-primary">LibrisAdmin</h1>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-primary mb-md leading-tight">
                    The quiet engine behind <br/><span class="text-secondary-fixed-dim">world-class learning.</span>
</h2>
<p class="font-body-lg text-body-lg text-on-primary-container max-w-sm">
                    Manage institutional knowledge with speed, precision, and a systematic administrative core.
                </p>
</div>
<div class="relative z-10 mt-auto">
<div class="flex gap-md items-center text-on-primary-container">
<div class="flex -space-x-3">
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="A professional headshot of a middle-aged librarian with a kind expression, wearing spectacles and a corporate blue shirt. The background is a blurred library aisle with neatly organized bookshelves, creating an atmosphere of institutional expertise and systematic order. The lighting is soft and natural, emphasizing clarity and trustworthiness." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEw6k9NMqT7wV_nUEi7ZTGdJVrquA0i0Hi30K82DO3PYrJsp6jqB7BfTKlam0VgkEmdlP5z4fEBl7JZqB37tWfAaTyHa48w9nfiwTNLQhgoDRfBlvkvJv8VCQH-070TDXuGM4BV245Q8HGfEi9Bv-p6hx7ROUvPeuKYkzQCKK_HCBhoo1p3sgAhzfuYADdIAfnRcCFZ1uc89mfy0giRxSQCVnUKOB1wB4r2zh1LtbmG5hMJbWE7K0i5gdN0VWSLiZt-OD0wlmVDcde"/>
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="A young professional staff member in a contemporary library setting, smiling confidently while holding a digital tablet. The setting is a bright, modern information center with minimalist white furniture and high-key lighting. The overall aesthetic is professional, systematic, and clean, reflecting a corporate modern style with a focus on administrative efficiency." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBneWngezrJJ49ydqjv72PPz7Rwo8183Vax41FgLgBbbGu4W1lyyKQ3w_uPV6aAxJROJZ0oW8orAKdCFj07-MKQOptuK1G5lIUhvSf4H71ZBe7K2g9xSHXxFRNLNn9goKKSKOyaxx-Z-_oKlxfMWqSJDPXyxbu_CdezUZnSB-WNLrKfL7A3TvYWrJtegexKQPi-s23GToOy2gKRIuhTKoV-WN3KzOPJhnIpfBhJA5wW6nMd6xxoxtWbCl9-QGOPLdGXVG4B0rZkw26g"/>
</div>
<p class="font-label-md text-label-md">Trusted by 500+ Institutions</p>
</div>
</div>
<!-- Foreground Image Decoration -->
<img class="absolute bottom-0 right-0 w-2/3 h-1/2 object-cover opacity-20 mask-linear-gradient" data-alt="A high-angle architectural shot of a massive, modern library's multi-level bookshelves. The image showcases the repetitive, geometric patterns of book spines and shelves in a deep navy and charcoal palette. The lighting is dramatic, highlighting the scale and systematic organization of the repository, aligning with an authoritative and professional brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuArI5j6qTZh5ih479Fhc0oeJ0wFNIKjHZvQU_kYA0lVcKd7JTSOv8LEVj0DFIXviz89Ykto2YRF7ploItyoRGWnezuNVDtqzN58vj2hg5ebOopwCBrw4yw6iPLcNs4ZyvoHBlPKU-k_Jv5QHAdmqDwvDz6I-EjPCs-6bSri94Y316V62hbqqYJqu-ymfNeHeqjS5LDhiOzE-ktW5my8LMR-D5Akhn-_DSOGZCd3qcoPK0Ufbd097R3OzXnyObxF64acvr0Su9IcLpJB"/>
</div>
<!-- Right Side: Login Form -->
<div class="p-lg md:p-xl flex flex-col justify-center">
<div class="max-w-[400px] mx-auto w-full">
<div class="mb-lg">
<div class="flex md:hidden items-center gap-xs mb-md">
<span class="material-symbols-outlined text-primary text-[28px]">menu_book</span>
<h1 class="font-headline-sm text-headline-sm text-primary">LibrisAdmin</h1>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-xs">Welcome back</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Please enter your credentials to access the system.</p>
</div>
<form class="space-y-md" method="POST" action="{{ route('login') }}">
@csrf
<!-- Email/Username -->
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="email">Email</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
<input class="w-full pl-[40px] pr-md py-sm bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="email" name="email" placeholder="e.g. admin@perpustakaan.test" type="email" value="{{ old('email') }}" required/>
@if($errors->has('email'))
<p class="text-error text-label-md mt-1">{{ $errors->first('email') }}</p>
@endif
</div>
</div>
<!-- Password -->
<div class="space-y-xs">
<div class="flex justify-between items-center">
<label class="font-label-lg text-label-lg text-on-surface-variant" for="password">Password</label>
<a class="text-secondary text-label-md hover:underline" href="{{ route('password.request') }}">Forgot password?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
<input class="w-full pl-[40px] pr-[44px] py-sm bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none" id="password" name="password" placeholder="••••••••" type="password" required/>
<button class="absolute right-sm top-1/2 -translate-y-1/2 text-outline hover:text-on-surface-variant transition-colors" onclick="togglePassword()" type="button">
<span class="material-symbols-outlined text-[20px]" id="password-toggle-icon">visibility</span>
</button>
@if($errors->has('password'))
<p class="text-error text-label-md mt-1">{{ $errors->first('password') }}</p>
@endif
</div>
</div>
<!-- Remember Me -->
<div class="flex items-center gap-xs">
<input class="w-4 h-4 rounded border-outline-variant text-secondary focus:ring-secondary cursor-pointer" id="remember" name="remember" type="checkbox"/>
<label class="font-body-md text-body-md text-on-surface-variant cursor-pointer select-none" for="remember">Remember me</label>
</div>

@if($errors->any())
<!-- Generic Error Message -->
<div class="p-sm bg-error-container text-on-error-container rounded-lg flex items-center gap-xs">
<span class="material-symbols-outlined text-[18px]">error</span>
<span class="text-label-md">Login gagal. Periksa email dan password Anda.</span>
</div>
@endif

<!-- Login Button -->
<button class="w-full py-sm bg-primary text-on-primary font-label-lg text-label-lg rounded-lg shadow-sm hover:bg-primary-container active:scale-[0.98] transition-all flex items-center justify-center gap-xs" id="loginBtn" type="submit">
<span>Login to Dashboard</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</form>
<form class="mt-sm" method="POST" action="{{ route('login.guest') }}">
@csrf
<button class="w-full py-sm bg-surface-container text-on-surface-variant font-label-lg text-label-lg rounded-lg border border-outline-variant hover:bg-surface-container-high active:scale-[0.98] transition-all flex items-center justify-center gap-xs" type="submit">
<span class="material-symbols-outlined text-[18px]">visibility</span>
<span>Login as Guest</span>
</button>
</form>
<div class="mt-xl pt-lg border-t border-outline-variant">
<p class="text-center font-label-md text-label-md text-on-surface-variant">
                        By logging in, you agree to our <a class="text-on-surface font-semibold hover:underline" href="#">Terms of Service</a> and <a class="text-on-surface font-semibold hover:underline" href="#">Privacy Policy</a>.
                    </p>
</div>
</div>
</div>
</div>
<!-- Micro-interaction Scripts -->
<script>
    function togglePassword() {
        const pwd = document.getElementById('password');
        const icon = document.getElementById('password-toggle-icon');
        if (pwd.type === 'password') {
            pwd.type = 'text';
            icon.innerText = 'visibility_off';
        } else {
            pwd.type = 'password';
            icon.innerText = 'visibility';
        }
    }
</script>
</body></html>