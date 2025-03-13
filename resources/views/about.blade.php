@extends('layouts.app')

@section('title', 'About - MyApp')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h3>Tentang Saya</h3>
        </div>
    </div>

    <!-- Perjalanan Saya -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Perjalanan Saya</h5>
                <p>
                Nama saya Thoyibatul Maulida, saya berusia 16 tahun. Sejak kecil, saya selalu bersemangat untuk belajar dan mencoba hal-hal baru.
                Pendidikan saya menjadi bagian penting dari perjalanan ini, di mana saya berusaha untuk mencapai yang terbaik di sekolah dan
                 menggali berbagai minat yang saya miliki. Saya percaya bahwa ilmu adalah kunci untuk membuka banyak pintu kesempatan, dan itulah
                yang selalu mendorong saya untuk terus berusaha.
                </p>
                <p>
                Selain itu, saya juga sangat tertarik untuk mengeksplorasi dunia luar, baik melalui buku maupun pengalaman langsung. Meskipun saya
                masih muda, saya menyadari bahwa setiap pengalaman, baik itu kegagalan maupun keberhasilan, merupakan bagian dari proses yang akan
                membentuk saya menjadi pribadi yang lebih baik.
                </p>
            <p> 
               Saya juga sangat menghargai dukungan keluarga dan teman-teman yang selalu ada untuk saya. Mereka adalah sumber kekuatan yang 
               membantu saya melewati berbagai tantangan dalam hidup. Di usia saya yang masih muda, saya merasa bersemangat untuk terus berkembang,
               mengejar impian, dan mencapai tujuan-tujuan saya di masa depan.
            </p>
                 Perjalanan saya masih panjang, dan saya bertekad untuk terus belajar, tumbuh, dan memberikan yang terbaik dalam segala hal yang saya lakukan.
                 Saya berharap setiap langkah yang saya ambil akan membawa saya lebih dekat kepada impian dan tujuan hidup saya.
   

            </div>
        </div>
    </div>
    
    <!-- Visi, Misi, dan Tujuan -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Visi</h5>
                <p class="text-center">
                Menjadi individu yang terus berkembang, berkontribusi
                dalam dunia pendidikan dan kehidupan, serta memberikan
                dampak positif bagi masyarakat melalui ilmu dan keterampilan yang dimiliki.
                </p>

                <h5 class="text-center mt-4">Misi</h5>
                <ul class="text-center list-unstyled">
                    <li>Mewujudkan impian dan tujuan hidup dengan semangat kerja keras, disiplin, dan dedikasi yang tinggi.</li>
                    <li>Berkontribusi dalam dunia pendidikan dan komunitas dengan berbagi ilmu serta pengalaman yang bermanfaat.</li>
                    <li>Beradaptasi dengan perubahan dan selalu terbuka terhadap peluang baru yang dapat meningkatkan kualitas diri.</li>
                </ul>

                <h5 class="text-center mt-4">Tujuan</h5>
                <p class="text-center">
                Tujuan saya adalah terus belajar dan berkembang, meningkatkan keterampilan sosial serta kepemimpinan, dan beradaptasi dengan perubahan.
                 Dengan kerja keras dan dedikasi, saya ingin mewujudkan impian serta memberikan dampak positif bagi sekitar.
                </p>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="container mt-4">
        <div class="card">
            <div class="card-body text-center">
                <h5>Hubungi Saya</h5>
                <p>
                    Jika Anda ingin berkomunikasi lebih lanjut, jangan ragu untuk menghubungi saya.
                </p>
                <ul style="list-style-type: none"><center>
                <li> Email: <a href="thoyibatulmaulidaaa@gmail.com">thoyibatulmaulidaaa@gmail</a></li>
                <li> No telp: <a href="0812345678">0812345678</a></li>
                <li> Alamat: Demak, Jawa Tengah, Indonesia</li>
            </ul></center>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
@endsection