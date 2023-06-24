@extends('homepage.layout.appuser')

@section('content')
    <div class="page-content pages-home">
        <section class="pondok-header">
            <div class="container">
                <div class="row g-4 g-lg-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <ul class="nav nav-underline mb-3 nav-header-section border-bottom d-inline-flex" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Profil</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Brosur</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Pesantren</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <h1 class="section-title">Pembukaan
                                    Pendaftaran
                                    <br>Santri Baru 2023</br>
                                </h1>
                                <p class="section-subtitle">Pondok Pesantren Darujanah Jakarta 2023/2024</p>
                                <button class="btn py-3 px-4 btn-pondok-primary">Daftar Sekarang</button>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="{{ asset('user/images/Rectangle 22.png') }}" class="img-fluid rounded-1" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pondok-info">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-5" data-aos="fade-down">
                        <h2 class="section-title">معاهد دارالنجاح الإسلاميةمعاهد دارالنجاح الإسلامية</h2>
                    </div>
                </div>
                <div class="row g-5 justify-content-between">
                    <div class="col-md-4" data-aos="fade-down" data-aos-delay="100"><img class="img-fluid rounded-1"
                            src="{{ asset('user/images/info-1.png') }}" alt=""></div>
                    <div class="col-md-4" data-aos="fade-down" data-aos-delay="200"><img class="img-fluid rounded-1"
                            src="{{ asset('user/images/info-2.png') }}" alt=""></div>
                    <div class="col-md-4" data-aos="fade-down" data-aos-delay="300"><img class="img-fluid rounded-1"
                            src="{{ asset('user/images/info-3.png') }}" alt=""></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10" data-aos="fade-down" data-aos-delay="400">
                        <p class="section-subtitle">

                            Author: Pondok Pesantren Darunnajah 4 Tsurayya Padarincang Serang Banten
                            Berada di di Padarincang Serang Banten, Pondok Pesantren Tsurayya Darunnajah 4
                            menyelenggarakan pendidikan berkualitas bagi siswa siswi berprestasi. Pondok Pesantren
                            Tsurayya memiliki program unggulan Tahfidzul Quran (menghafal Al-Quran) dan kegiatan ekstra
                            kurikuler seperti Bahasa Arab, Bahasa Inggris, Pramuka, Pidato, Olahraga, Jurnalistik,
                            Marawis, Qosidah, Silat, Kesenian, Teater, Hadroh, Nasyid, dan lain-lain. Lingkungan alam
                            yang asri dan indah mendukung santri Pondok Pesantren Tsurayya untuk belajar dengan riang
                            dan penuh semangat.
                        </p>
                    </div>
                </div>
                <a href="" class="section-link" data-aos="fade-left" data-aos-delay="500">Selengkapnya &raquo;</a>
            </div>
        </section>
        <section class="pondok-info-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-3" data-aos="fade-right">
                        <div class="section-text">
                            <a href="">PAUD DARUNNAJAH 4 TSURAYYA IKUTI FIELD TRIP KE MERAK</a>
                            <br>10 May 2023</br>
                            Salah satu keunggulan pembelajaran di lembaga Pendidikan Anak Usia Dini (PAUD) ialah
                            kunjungan ke tempat-tempat tertentu sesuai tema pembelajaran. Seperti pada tema profesi,
                            PAUD Darunnajah adakan kunjungan ke stasiun kereta sekaligus naik kereta jurusan merak.

                        </div>
                        <a href="" class="section-link">Selengkapnya &raquo;</a>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ asset('user/images/section info 2.png') }}" class="img-fluid w-100 rounded-1"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pondok-benefit">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6" data-aos="fade-down" data-aos-delay="200">
                        <div class="text-center">
                            <img src="{{ asset('user/images/toga.png') }}" width="71px" class="img-fluid"
                                alt="">
                            <div class="section-title">Beasiswa Pesantren</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-down" data-aos-delay="300">
                        <div class="text-center">
                            <img src="{{ asset('user/images/toga.png') }}" width="71px" class="img-fluid"
                                alt="">
                            <div class="section-title">Beasiswa dalam negeri</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-down" data-aos-delay="400">
                        <div class="text-center">
                            <img src="{{ asset('user/images/toga.png') }}" width="71px" class="img-fluid"
                                alt="">
                            <div class="section-title">Beasiswa internasional</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-down" data-aos-delay="500">
                        <div class="text-center">
                            <img src="{{ asset('user/images/toga.png') }}" width="71px" class="img-fluid"
                                alt="">
                            <div class="section-title">Beasiswa timur tengah</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pondok-prestasi">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{ asset('user/images/foto 6.png') }}" class="img-fluid w-100 rounded-1"
                            alt="">
                        <div class="section-text">
                            Seragam Pesantren Putri Tsurayya Darunnajah 4
                            <a href="">Pondok Pesantren Darunnajah 4 Tsurayya Padarincang Serang Banten
                                13 April 2023</a>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <p class="section-subtitle">Serang, 12 April 2023
                            Bulan Ramadhan adalah bulan paling spesial di antara bulan yang lain,banyak keutamaan yang
                            didapat di bulan ini, amalan yang dilaksanakan pada bulan biasa mendapatkan pahala biasa
                            pula,namun berbeda dengan bulan Ramadhan ini semua amal kebaikan mendapatkan pahala yang
                            berlipat ganda,termasuk dalamnya amalan bersedekah untuk orang yang tidak mampu, tentu
                            pahalanya sangat besar.
                            Itulah yang di laksanakan di Pondok Pesantren Tsurayya Darunnajah 4 dengan momen yang
                            berharga ini santri bersama guru-guru berbondong-bondong dengan dibantu oleh Pesantren
                            Darunnajah 2 Cipining untuk mengadakan acara rutin tahunan yaitu Santunan Sosial atau SAS
                            dan Ifthar Shoimin.
                            Pada hari Senin,10 April 2023 sekitar 150 orang menghadiri acara SAS ini yang dilaksanakan
                            di Aula kampus 3,yang niat awal ingin dilaksanakan di lapangan tapi kondisi tidak
                            memungkinkan karena dari subuh hujan tak berhenti berhenti yang mengakibatkan lapangan
                            basah,maka aula menjadi alternatif terbaik.</p>
                        <img src="{{ asset('user/images/foto 7.png') }}" class="w-100 img-fluid rounded-1"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pondok-daftar-sekarang">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center" data-aos="fade-down">
                        <div class="position-relative py-4">
                            <div class="w-80">
                                <p class="section-text">“Senantiasa berdoa dan memohon kepada Allah SWT agar anak yang kita
                                    pondokkan mendapat kemudahan dalam menuntut ilmu, mendapatkan ilmu yang barokah, menjadi
                                    santri yang teladan dan pandai dalam membawa diri serta sopan santun yang terjaga.“</p>
                                <a href="" class="btn btn-pondok-primary py-2 px-4 d-inline-block"><i
                                        class="bi bi-whatsapp me-2"></i>Daftar Sekarang</a>
                            </div>
                            <img class="position-absolute elements-1" data-aos="fade-right" data-aos-delay="100"
                                width="40px" src="{{ asset('user/images/Elements1.png') }}" alt="">
                            <img class="position-absolute elements-2" data-aos="fade-right" data-aos-delay="200"
                                width="40px" src="{{ asset('user/images/Elements2.png') }}" alt="">
                            <img class="position-absolute elements-3" data-aos="fade-left" data-aos-delay="300"
                                width="72px" src="{{ asset('user/images/Elements3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
