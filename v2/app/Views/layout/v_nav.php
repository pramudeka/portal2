    <body id="page-top" class=" d-flex  flex-column <?=isset($back)?$back:''?>">
        <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
                <a class="navbar-brand" href="<?=base_url('/')?>"><img src="<?=base_url('public/')?>/assets/img/logo-nav.svg" alt="Mall Pelayanan Publik Kab. Blitar"></a>
                <a class="navbar-toggler" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link <?=$menu=='home'?'active':''?>" href="<?=base_url('')?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link <?=$menu=='layanan'?'active':''?>" href="<?=base_url('layanan')?>">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link <?=$menu=='profil'?'active':''?>" href="<?=base_url('profil')?>">Profil</a></li>
                        <li class="nav-item"><a class="nav-link <?=$menu=='berita'?'active':''?>" href="<?=base_url('berita')?>">Berita</a></li>
                        <li class="nav-item"><a class="nav-link <?=$menu=='lapor'?'active':''?>" href="<?=base_url('lapor')?>">Saran &amp; Aduan</a></li>
                        <li class="nav-item"><a class="nav-link <?=$menu=='faq'?'active':''?>" href="<?=base_url('faq')?>">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link saran" style="" href="https://forms.gle/KffbGtNErNEv9tvN8"><i class="fa-solid fa-comment-dots"></i> Kuesioner</a></li>
                    </ul>
                </div>
        </nav>
        