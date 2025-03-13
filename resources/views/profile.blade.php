@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <!-- Container Tengah -->
    <div class="d-flex justify-content-center align-items-center py-5">
        <div class="card border-0 shadow-lg p-4 text-center" 
             style="max-width: 450px; width: 100%; border-radius: 20px; 
                    background: rgba(255, 255, 255, 0.8); 
                    backdrop-filter: blur(10px); 
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);">
            
            <!-- Foto Profil -->
            <div class="position-relative">
                <img class="rounded-circle profile-pic" 
                     src="{{ asset($profile['profile_picture'] ?? 'images/default.png') }}" 
                     alt="Profile Picture" 
                     width="120">
            </div>

            <!-- Nama & Info -->
            <h3 class="fw-bold mt-3" 
                style="font-family: 'Poppins', sans-serif; color: #333;">{{ $profile['name'] ?? 'Nama tidak tersedia' }}</h3>
            <p class="text-muted" style="font-size: 14px;">📩 {{ $profile['email'] ?? 'Email tidak tersedia' }}</p>
            <p class="fst-italic text-dark" style="font-size: 14px; opacity: 0.8;">"{{ $profile['bio'] ?? 'Tidak ada bio yang tersedia' }}"</p>

            <!-- Skill List -->
            @if(!empty($profile['skills']) && count($profile['skills']) > 0)
                <h5 class="mt-3" style="color: #555;">✨ Skills:</h5>
                <div class="d-flex flex-wrap justify-content-center mt-2">
                    @foreach($profile['skills'] as $skill)
                        <span class="badge skill-badge">{{ $skill }}</span>
                    @endforeach
                </div>
            @else
                <p class="text-muted mt-3">Belum ada skill yang ditampilkan</p>
            @endif
        </div>
    </div>

    <!-- Efek Hover untuk Foto Profil & Skill Badges -->
    <style>
        /* Foto Profil dengan Efek Hover */
        .profile-pic {
            border: 4px solid white;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .profile-pic:hover {
            transform: scale(1.08);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        }

        /* Skill Badge */
        .skill-badge {
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            border-radius: 15px;
            padding: 6px 12px;
            font-size: 13px;
            margin: 3px;
            color: white;
            font-weight: 500;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .skill-badge:hover {
            transform: scale(1.1);
        }
    </style>
@endsection
