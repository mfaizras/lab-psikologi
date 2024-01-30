@extends('layouts.main')

@section('main_section')
<div class="bg-landing-bg h-full min-h-screen overflow-x-hidden">
    <div class="container-md">
    @include('landing.layouts.navbartest')
    <section class="row" id="home">
        <div class="col col-lg-7 h-[760px]">
            <div class="h-[600px] w-full grid content-center max-lg:text-center max-lg">
                <div class="lg:hidden">
                    <img src="{{asset('assets/undraw_programming_re_kg9v.svg')}}" class="mt-10 w-3/5 h-3/5 mx-auto" alt="">
                </div>
                <h1 class="text-landing-headline font-bold text-5xl max-lg:text-3xl mb-3">Laboratorium Psikologi Universitas Gunadarma</h1>
                <p class="text-landing-pargraph text-lg">Laboratorium Psikologi merupakan unit yang memberikan pelayanan kegiatan praktikum untuk menunjang pembelajaran yang terintegrasi dengan mata kuliah di dalam kurikulum jenjang S1</p>
            </div>
        </div>
        <div class="col col-lg-5 max-lg:hidden">
            <div class="z-40 bg-landing-button mt-[-70px] mr-[-25px] h-[760px] w-screen rounded-bl-[280px]">
                <div class="h-[600px] w-full grid content-center">
                    <img src="{{asset('assets/undraw_programming_re_kg9v.svg')}}" class="mt-10 w-[520px] h-[380px]" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
    <section class="bg-landing-bgSecondary w-screen mt-[-170px] min-h-[200px] z-0" id="program">
        <div class="container-md pt-5">
            <h1 class="uppercase text-landing-headline text-3xl max-lg:text-2xl max-lg:text-center font-bold mb-5">SUB UNIT LABORATORIUM PSIKOLOGI</h1>
            <div class="grid lg:grid-cols-3 gap-5 pb-5">
                <div class="bg-landing-bg rounded-lg min-h-[350px] p-3">
                    <h1 class="text-landing-headline text-center text-2xl font-bold mb-3">Laboratorium Psikologi Dasar</h1>
                    <p class="text-center text-landing-paragraph">Laboratorium Psikologi Dasar merupakan unit yang memberikan pelayanan kegiatan praktikum untuk menunjang pembelajaran yang terintegrasi dengan mata kuliah di dalam kurikulum jenjang S1. Upaya dalam mengikuti perkembangan teknologi yang ada Laboratorium Psikologi Dasar turut mengembangkan materi praktikum Psikologi Faal yaitu berupa materi 3D untuk menjelaskan bagian-bagian indera manusia.</p>
                </div>
                <div class="bg-landing-bg rounded-lg min-h-[350px] p-3">
                    <h1 class="text-landing-headline text-center text-2xl font-bold mb-3">Laboratorium Psikologi Menengah</h1>
                    <p class="text-center text-landing-paragraph">Fokus pembelajaran dalam praktikum di Laboratorium Psikologi Menengah adalah kemampuan dan keterampilan praktikan (mahasiswa) untuk dapat melakukan administrasi alat tes psikologi.</p>
                </div>
                <div class="bg-landing-bg rounded-lg min-h-[350px] p-3">
                    <h1 class="text-landing-headline text-center text-2xl font-bold mb-3">Laboratorium Psikologi Lanjut</h1>
                    <p class="text-center text-landing-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia natus qui, adipisci iusto aspernatur, minus quo molestiae aut soluta saepe necessitatibus minima quas animi laudantium at eum nihil. Nemo cupiditate deleniti nostrum temporibus? Blanditiis autem esse numquam. Fugiat animi quo sit, natus voluptates, iure delectus distinctio nemo ex provident facilis!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-3 pb-3 container-md" id="lokasi">
        <h1 class="text-center text-2xl lg:text-4xl font-bold text-landing-headline mb-3">Temukan Kami</h1>
        <div class="grid lg:grid-cols-3 gap-5 pb-5">
            <div class="bg-landing-headline rounded-lg min-h-[350px] p-3">
                <h1 class="text-landing-bg text-center text-2xl font-bold mb-3">Kampus Depok</h1>
                <ul class="text-landing-paragraph2 text-center">
                    <li>D331 : Ruang Laboratorium Observasi dan Wawancara</li>
                    <li>D332 : Ruang Laboratorium Psikologi Lanjut</li>
                    <li>D333 - 334 : Ruang Laboratorium Psikologi Dasar</li>
                    <li>D335 - 336 : Ruang Laboratorium Psikologi Menengah</li>
                    <li>D337 - 339A : Ruang Laboratorium Psikologi Lanjut</li>
                </ul>
            </div>
            <div class="bg-landing-headline rounded-lg min-h-[350px] p-3">
                <h1 class="text-landing-bg text-center text-2xl font-bold mb-3">Kampus Kalimalang</h1>
                <ul class="text-landing-paragraph2 text-center">
                    <li>Kampus J1</li>
                    <li>Kampus J2</li>
                </ul>
            </div>
            <div class="bg-landing-headline rounded-lg min-h-[350px] p-3">
                <h1 class="text-landing-bg text-center text-2xl font-bold mb-3">Kampus Karawaci</h1>
                <ul class="text-landing-paragraph2 text-center">
                    <li>K285</li>
                    <li>K286</li>
                </ul>
            </div>
        </div>

        </div>
    </section>
    <section class="pt-3 pb-3 bg-landing-bgSecondary" id="join">
        <div class="container-md ">
            <h1 class="text-center text-2xl lg:text-4xl font-bold text-landing-headline mb-3">Tertarik Menjadi Bagian Dari Laboratorium Psikologi?</h1>
            <p class="text-landing-paragraph text-center text-md lg:text-lg mb-3">Membuka Peluang bagi Anda mahasiswa aktif Universitas Gunadarma untuk menjadi bagian dari Lab Psikologi Universitas Gunadarma. Dapatkan kesempatan untuk mengembangkan potensi diri. Kami membuka beberapa Posisi yang tersedia. Segera daftarkan diri anda Sekarang Juga </p>
            <div class="mb-5 grid place-content-center">
                <a href="/register" class="bg-[#3da9fc] text-white p-3 px-5 rounded-full ">Bergabung Sekarang</a>
            </div>
        </div>
    </section>
</div>

@endsection
