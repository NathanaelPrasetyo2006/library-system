@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-3xl font-bold text-gray-900">Dashboard Petugas</h1>
            <p class="mt-2 text-gray-600">Selamat datang, {{ Auth::user()->name }}</p>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 px-4 mb-8">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Buku
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <span class="text-blue-600">-</span>
                    </dd>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Anggota
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <span class="text-green-600">-</span>
                    </dd>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Peminjaman Aktif
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <span class="text-orange-600">-</span>
                    </dd>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Pengembalian Tertunda
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <span class="text-red-600">-</span>
                    </dd>
                </div>
            </div>
        </div>

        <!-- Menu Utama Petugas -->
        <div class="px-4 mb-8">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Menu Utama</h2>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Manajemen Buku -->
                <a href="{{ route('buku') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white mb-4">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Manajemen Buku</h3>
                    <p class="mt-2 text-sm text-gray-600">Kelola data buku perpustakaan</p>
                </a>

                <!-- Manajemen Anggota -->
                <a href="{{ route('anggota') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white mb-4">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-2a6 6 0 0112 0v2zm0 0h6v-2a6 6 0 00-9-5.697M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Manajemen Anggota</h3>
                    <p class="mt-2 text-sm text-gray-600">Kelola data anggota perpustakaan</p>
                </a>

                <!-- Peminjaman -->
                <a href="{{ route('peminjaman') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-500 text-white mb-4">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Peminjaman & Pengembalian</h3>
                    <p class="mt-2 text-sm text-gray-600">Kelola transaksi peminjaman buku</p>
                </a>

                <!-- Profil -->
                <a href="{{ route('profile.edit') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white mb-4">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Profil Saya</h3>
                    <p class="mt-2 text-sm text-gray-600">Kelola profil pengguna Anda</p>
                </a>
            </div>
        </div>

        <!-- Info Box -->
        <div class="px-4">
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1h2v2H7V4zm2 4H7v2h2V8zm2-4h2v2h-2V4zm2 4h-2v2h2V8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-blue-800">
                            Anda login sebagai Petugas. Akses terbatas pada manajemen buku, anggota, dan peminjaman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
