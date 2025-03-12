@extends('layouts.app')

@section('title','Home - MyApp')

@section('content')
    <div class="card">
        <div class="card-header">
        <center>Tentang Saya<center>
        </div>
    </d>

    <br>
    <br>

    <div class="card bg-light py-5">
    <ul>
        <center> <h3>Perjalanan Saya</h3>
        <br>
        
        <p>
        Nama saya Thoyibatul Maulida, saya berusia 16 tahun. Sejak kecil, saya selalu bersemangat untuk belajar dan mencoba hal-hal baru.
        Pendidikan saya menjadi bagian penting dari perjalanan ini, di mana saya berusaha untuk mencapai yang terbaik di sekolah dan
        menggali berbagai minat yang saya miliki. Saya percaya bahwa ilmu adalah kunci untuk membuka banyak pintu kesempatan, dan itulah
        yang selalu mendorong saya untuk terus berusaha.
        </p>
        Selain itu, saya juga sangat tertarik untuk mengeksplorasi dunia luar, baik melalui buku maupun pengalaman langsung. Meskipun saya
        masih muda, saya menyadari bahwa setiap pengalaman, baik itu kegagalan maupun keberhasilan, merupakan bagian dari proses yang akan
        membentuk saya menjadi pribadi yang lebih baik.
        <p>
        Saya juga sangat menghargai dukungan keluarga dan teman-teman yang selalu ada untuk saya. Mereka adalah sumber kekuatan yang 
        membantu saya melewati berbagai tantangan dalam hidup. Di usia saya yang masih muda, saya merasa bersemangat untuk terus berkembang,
        mengejar impian, dan mencapai tujuan-tujuan saya di masa depan.
        </p>
        Perjalanan saya masih panjang, dan saya bertekad untuk terus belajar, tumbuh, dan memberikan yang terbaik dalam segala hal yang saya lakukan.
        Saya berharap setiap langkah yang saya ambil akan membawa saya lebih dekat kepada impian dan tujuan hidup saya.
</div>

<br><br> 

<div class="mb-5">
    <h2 class="text-center">Hubungi Saya</h2>
    <p class="text-center">
        Jika anda memiliki pertanyaan atau masukan,silahkan hubungi kami melalui;
    </p>
    <div class="text-center">
        <a href="{{ route('contact')}}" class="btn btn-primary btn-lg"> Hubungi Kami</a>
    </div>
</div>
@endsection