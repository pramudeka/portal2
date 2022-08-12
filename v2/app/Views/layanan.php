
        <!-- Portfolio Grid-->
        <section class="page-section  flex-grow-1" id="portfolio">
            <div class=" kat text-center" >
                <h3 id="kategori" class="section-heading" data-aos="fade-down" data-aos-duration="1000">Kategori</h3>
                <ul id="portfolio-flters" class="text-center" data-aos="fade-right" data-aos-duration="1000" data-aos-anchor="#kategori">
                  <li data-filter="all" class="filter-active" >All</li>
                  <li data-filter="filter-kab" >Pemkab</li>
                  <li data-filter="filter-info" >Informasi</li>
                  <li data-filter="filter-surat" >Surat</li>
                  <li data-filter="filter-ijin" >Perijinan</li>
                  <li data-filter="filter-daftar" >Pendaftaran</li>
                  <li data-filter="filter-bayar" >Pembayaran</li>
                  <li data-filter="filter-extra" >Lain-lain</li>
                </ul>
            </div>
        </section>

        <section id="portfolio" class="page-section  flex-grow-1">
            <div class="container">
                <span class="popcon" hidden=""></span>
                <div class="row item-list" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-anchor="#kategori">
                    <div class=" portfolio-item filter-kab filter-surat">
                        <!-- Portfolio item 1-->
                            <a id="apeldeskel" class="portfolio-link" href="http://apeldeskel.blitarkab.go.id" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-1.jpg" alt="Apeldeskel | Aplikasi layanan surat menyurat di wilayah Desa/Kelurahan" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Apeldeskel</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-surat">
                        <!-- Portfolio item 1-->
                            <a id="gmail" class="portfolio-link" href="https://mail.google.com/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-2.jpg" alt="Gmail | Layanan surat menyurat elektronik (e-mail) milik Google" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Gmail</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-surat">
                        <!-- Portfolio item 1-->
                            <a id="ymail" class="portfolio-link" href="https://mail.yahoo.com/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-3.jpg" alt="Ymail | Layanan surat menyurat elektronik (e-mail) milik Yahoo" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ymail</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-ijin">
                        <!-- Portfolio item 1-->
                            <a id="oss" class="portfolio-link" href="https://www.oss.go.id/oss/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-4.jpg" alt="OSS | Perijinan berusaha terintegrasi secara elektronik / Online Single Submission" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">OSS</div>
                            </div>
                    </div>
                    <div id="imobil" class=" portfolio-item filter-ijin filter-kab">
                        <!-- Portfolio item 1-->
                            <a class="portfolio-link" href="http://i-mobil.blitarkab.go.id/web/home" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-5.jpg" alt="I-Mobil | Layanan mengajukan ijin usaha di DPMPTSP" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">I-Mobil</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-kab filter-extra">
                        <!-- Portfolio item 1-->
                            <a id="skm" class="portfolio-link" href="http://skmdev.blitarkab.go.id/user/login" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-6.jpg" alt="SKM | Data dan informasi tingkat kepuasan masyarakat tentang pelayanan publik Kabupaten Blitar" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Survey Kepuasan</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="pln" class="portfolio-link" href="https://www.pln.co.id/pelanggan/layanan-online" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-7.jpg" alt="Pendaftaran Listrik | Layanan PLN untuk pendaftaran listrik secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Daftar PLN</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="bpjs" class="portfolio-link" href="https://antrian.bpjsketenagakerjaan.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-8.jpg" alt="BPJS Ketenagakerjaan | Layanan jaminan sosial ketenagakerjaan" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BPJS Naker</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="esiap" class="portfolio-link" href="http://siak.blitarkab.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-9.jpg" alt="E-Siap | Layanan pendaftaran data kependudukan (KTP, KK, Akte Kelahiran, dll) secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Siap Online</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-info">
                        <!-- Portfolio item 1-->
                            <a id="subpln" class="portfolio-link" href="http://subsidi.djk.esdm.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-10.jpg" alt="Subsidi Listrik | Layanan PLN utuk mengajukan dan mengadukan subsidi listrik" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Subsidi Listrik</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="npwp" class="portfolio-link" href="https://ereg.pajak.go.id/login" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-11.jpg" alt="NPWP | Layanan pendaftaran NPWP secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">NPWP</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-bayar">
                        <!-- Portfolio item 1-->
                            <a id="billing" class="portfolio-link" href="https://www.pajak.go.id/id/e-billing" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-12.jpg" alt="E-Billing | Layanan pembayaran pajak secara online menggunakan kode billing" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Billing</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="paspor" class="portfolio-link" href="https://antrian.imigrasi.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-13.jpg" alt="Pendaftaran Paspor | Layanan pendaftaran paspor secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Daftar Paspor</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-info filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="tki" class="portfolio-link" href="http://gotki.blitarkab.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-14.jpg" alt="Go TKI | Layanan pendaftaran calon TKI di luar negeri di Disnaker" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Go TKI</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-info">
                        <!-- Portfolio item 1-->
                            <a id="filing" class="portfolio-link" href="https://www.online-pajak.com/e-filing" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-15.jpg" alt="E-Filing | Layanan penyampaian Surat Pemberitahuan (SPT) secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Filing</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-bayar">
                        <!-- Portfolio item 1-->
                            <a id="kai" class="portfolio-link" href="https://www.kai.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-16.jpg" alt="Tiket KAI | Layanan pembelian tiket kereta api" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tiket KAI</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="ikm" class="portfolio-link" href="http://ikm.blitarkab.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-17.jpg" alt="Katalog IKM | Informasi produk Industri Kecil Menengah (IKM)" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Katalog IKM</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab ">
                        <!-- Portfolio item 1-->
                            <a id="website" class="portfolio-link" href="http://www.blitarkab.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-18.jpg" alt="blitarkab.go.id | Website resmi Pemerintah Kabupaten Blitar" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Wesite Blitarkab</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-info">
                        <!-- Portfolio item 1-->
                            <a id="kredit" class="portfolio-link" href="https://eform.bankjatim.co.id/eformbjtm/home" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-19.jpg" alt="Kredit Bank Jatim | Informasi kredit dan pengajuan kredit di Bank Jatim" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Kredit Bank Jatim</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="skck" class="portfolio-link" href="https://skck.polri.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-20.jpg" alt="SKCK Online | Layanan pendaftaran SKCK secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SKCK Online</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="loker" class="portfolio-link" href="http://jobsinfo.bnp2tki.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-21.jpg" alt="Info Pekerjaan Luar Negeri" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Loker Luar Negeri</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="samsat" class="portfolio-link" href="https://esamsat.jatimprov.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-22.jpg" alt="E-Samsat | Layanan cek pajak kendaraan bermotor secara online menggunakan NOPOL" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Samsat</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="eraterang" class="portfolio-link" href="https://eraterang.badilum.mahkamahagung.go.id/masuk" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-23.jpg" alt="Eraterang | Layanan permohonan surat keterangan pada pengadilan negeri secara elektronik" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Eraterang</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-info filter-bayar">
                        <!-- Portfolio item 1-->
                            <a id="court" class="portfolio-link" href="https://ecourt.mahkamahagung.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-24.jpg" alt="E-Court | Layanan pendaftaran perkara, taksiran panjar biaya perkara, pembayaran, pemanggilan hingga sidang" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Court</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="antri" class="portfolio-link" href="http://layanan.dispendukcapil.blitarkab.go.id/antrian/login.php" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-25.jpg" alt="Antrian Dispendukcapil | Layanan pendaftaran antrian di Dispendukcapil secara online" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Antrian Dispendukcapil</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="sipp" class="portfolio-link" href="https://sipp.pa-blitar.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-26.jpg" alt="SIPP | Sistem Informasi Penelusuran Perkara oleh Pengadilan Agama Kabupaten Blitar" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">SIPP</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="sim" class="portfolio-link" href="http://sim.korlantas.polri.go.id/devregistrasi/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-27.jpg" alt="Pendaftaran SIM | Layanan pendaftaran SIM secara online oleh Korlantas Polri" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pendaftaran SIM</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="persero" class="portfolio-link" href="https://ahu.go.id/sabh/perseroan/pesannama" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-28.jpg" alt="Pencatatan Persero | Pencatatan dan pemesanan nama persero, yayasan maupun perkumpulan oleh Kemenkumham" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pencatatan Persero</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="ormas" class="portfolio-link" href="https://ula.kemendagri.go.id/daftar" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-29.jpg" alt="Pendaftaran Ormas | Layanan pendaftaran organisasi masyarakat secara online di Kemendagri" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pendaftaran Ormas</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-bayar">
                        <!-- Portfolio item 1-->
                            <a id="ppob" class="portfolio-link" href="https://transaksi.klikmbc.co.id/ppob/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-30.jpg" alt="PPOB | Layanan transaksi pembayaran tagihan dalam satu tempat" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PPOB</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="lelang" class="portfolio-link" href="https://lelang.go.id/kantor/66/KPKNL-Malang.html" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-31.jpg" alt="Lelang | Layanan proses lelang aset pemerintah daerah" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lelang</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="bpom" class="portfolio-link" href="https://cekbpom.pom.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-32.jpg" alt="Cek BPOM | Layanan pengecekan produk obat dan makanan yang telah mendapat petsetujuan ijin edar oleh BPOM" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cek Produk BPOM</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="halal" class="portfolio-link" href="https://e-lppommui.org/new/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-33.jpg" alt="Halal MUI | Sertifikasi halal untuk perusahaan makanan, kosmetik, dan obat-obatan oleh MUI" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sertifikat Halal MUI</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="motor" class="portfolio-link" href="https://info.dipendajatim.go.id/index.php?page=info_pkb" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-34.jpg" alt="PKB | Layanan informasi pajak kendaran bermotor oleh Dipenda Pemprov Jatim" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pajak Kendaraan</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-ijin">
                        <!-- Portfolio item 1-->
                            <a id="imb" class="portfolio-link" href="http://simbg.pu.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-35.jpg" alt="IMB | Layanan perijinan membangun baru, mengubah, memperluas, mengurangi, dan/atau merawat bangunan gedung" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ijin Mendirikan Bangunan</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="kecamatan" class="portfolio-link" href="https://blitarkab.bps.go.id/publication.html" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-36.jpg" alt="Kecamatan Dalam Angka | Gambaran perkembangan Kecamatan di Kabupaten Blitar menurut Badan Pusat Statistik" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Kecamatan Dalam Angka</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab">
                        <!-- Portfolio item 1-->
                            <a id="health" class="portfolio-link" href="https://ehealth.blitarkab.go.id/#home" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-37.jpg" alt="E-Health | Layanan kesehatan Pemerintah Kabupaten Blitar" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-Health</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="haji" class="portfolio-link" href="http://www.indonesiabaik.id/infografis/cek-nomor-porsi-untuk-perkiraan-berangkat-haji" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-38.jpg" alt="Perkiraan Haji | Layanan cek nomor porsi untuk perkiraan berangkat haji" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Perkiraan Haji</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-bayar">
                        <!-- Portfolio item 1-->
                            <a id="toped" class="portfolio-link" href="https://www.tokopedia.com/pajak/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-39.jpg" alt="Pembayaran Pajak di Tokopedia | Layanan pembayaran pajak tahunan dan PPOB melalui Tokopedia" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bayar Pajak di Tokopedia</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info">
                        <!-- Portfolio item 1-->
                            <a id="simkah" class="portfolio-link" href="http://simkah.kemenag.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-40.jpg" alt="Simkah | Sistem Informasi Manajemen Nikah oleh Kemenag" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Simkah</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-ijin">
                        <!-- Portfolio item 1-->
                            <a id="p2t" class="portfolio-link" href="http://izin.p2t.jatimprov.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-41.jpg" alt="Ijin P2T | Pelayanan Perijinan Terpadu oleh Pemprov Jatim" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ijin P2T</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-ijin filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="inatrade" class="portfolio-link" href="http://inatrade.kemendag.go.id/index.php/registrasi" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-42.jpg" alt="Inatrade | Layanan perijinan pendaftaran eksport-import oleh Kemendag" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Inatrade</div>
                            </div>
                    </div>
                    <div class=" portfolio-item filter-info filter-kab filter-daftar">
                        <!-- Portfolio item 1-->
                            <a id="ppdb" class="portfolio-link" href="http://ppdb.blitarkab.go.id/" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url('/public')?>/assets/img/icon2/ikon portals_design-43.jpg" alt="PPDB Online | Layanan pendaftaran penerimaan peserta didik baru di Kabupaten Blitar" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PPDB Online</div>
                            </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Modal -->
<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <h5></h5>
        <p></p>
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0);" class="btn-go btn btn-primary btn-sm">Lanjutkan <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>
