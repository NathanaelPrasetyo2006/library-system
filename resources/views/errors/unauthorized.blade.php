@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <div>
            <h1 class="text-6xl font-bold text-red-600">403</h1>
            <h2 class="mt-4 text-2xl font-bold text-gray-900">Akses Ditolak</h2>
            <p class="mt-2 text-gray-600">
                Anda tidak memiliki izin untuk mengakses halaman ini.
            </p>
        </div>

        <div class="space-y-4">
            <a href="{{ route('dashboard') }}" class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                Kembali ke Dashboard
            </a>
            <a href="{{ route('profile.edit') }}" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                Profil Saya
            </a>
        </div>
    </div>
</div>
@endsection
