<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Surat</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".jpg, .jpeg, .png">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Layanan Administrasi') }}
        </h2>
    </x-slot>

    @if (\Session::has('success'))
    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="section">
                        {!! \Session::get('success') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (\Session::has('error'))
    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="section" style="color:red">
                        {!! \Session::get('error') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="section">
                            <div class="section-header">Formulir Kartu Keluarga</div>

                            <div class="mt-4">
                            <button onclick="location.href='../download/layanan-administrasi/Formulir-Kartu-Keluarga.pdf'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Unduh') }}
                            </button>

                            <br>
                            <div class="section-content">
                            </div>
                            </div>

                            @auth
                            <div class="mt-4">
                                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <input type="hidden" name="type" value="layanan-administrasi">
                                    <input type="hidden" name="doctype" value="formulir-kartu-keluarga">
                                    <x-primary-button class="ms-3">
                                        {{ __('Unggah') }}
                                    </x-primary-button>
                                </form>
                            </div>
                            @endauth
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section">
                            <div class="section-header">Formulir Permohonan KTP</div>

                            <div class="mt-4">
                            <button onclick="location.href='../download/layanan-administrasi/Formulir-Permohonan-KTP.pdf'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Unduh') }}
                            </button>

                            <br>
                            <div class="section-content">
                            </div>
                            </div>
                            @auth
                            <div class="mt-4">
                                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <input type="hidden" name="type" value="layanan-administrasi">
                                    <input type="hidden" name="doctype" value="formulir-permohonan-ktp">
                                        <x-primary-button class="ms-3">
                                            {{ __('Unggah') }}
                                        </x-primary-button>
                                </form>
                            </div>
                            @endauth
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="section">
                            <div class="section-header">Surat Keterangan Domisili</div>

                            <div class="mt-4">
                            <button onclick="location.href='../download/layanan-administrasi/Surat-Keterangan-Domisili.doc'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Unduh') }}
                            </button>

                            <br>
                            <div class="section-content">
                            </div>
                            </div>

                            @auth
                            <div class="mt-4">
                                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <input type="hidden" name="type" value="layanan-administrasi">
                                    <input type="hidden" name="doctype" value="surat-keterangan-domisili">
                                        <x-primary-button class="ms-3">
                                            {{ __('Unggah') }}
                                        </x-primary-button>
                                </form>
                            </div>
                            @endauth
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
