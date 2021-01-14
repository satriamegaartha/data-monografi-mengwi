<div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
                <nav>
                        <ul class="nav">

                                <li><a href="/dashboard"
                                                class="{{(request()->segment(1) == 'dashboard') ? 'active' : ''}}"><i
                                                        class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

                                @if(auth()->user()->role == 'Petugas')
                                <li>
                                        <a href="/periode"
                                                class="{{(request()->segment(1) == 'periode') ? 'active' : ''}}">
                                                <i class="lnr lnr-clock"></i>
                                                <span>Periode</span>
                                        </a>
                                </li>
                                <li>
                                        <a href="#dataStatis"
                                                class=" {{(request()->segment(1) == 'statis') ? 'active' : ''}}"
                                                data-toggle="collapse" class="collapsed" aria-expanded="false"><i
                                                        class="lnr lnr-pencil"></i>
                                                <span>Data Statis</span> <i
                                                        class="icon-submenu lnr lnr-chevron-left"></i></a>
                                        <div id="dataStatis" class="collapse" aria-expanded="false"
                                                style="height: 0px;">
                                                <ul class="nav">
                                                        <li><a href="/statis/kumum"
                                                                        class="{{(request()->segment(2) == 'kumum') ? 'active' : ''}}">Keterangan
                                                                        Umum</a>
                                                        </li>
                                                        <li><a href="/statis/ldaerah"
                                                                        class="{{(request()->segment(2) == 'ldaerah') ? 'active' : ''}}">Luas
                                                                        Daerah/Wilayah</a></li>
                                                        <li><a href="/statis/pemdesa"
                                                                        class="{{(request()->segment(2) == 'pemdesa') ? 'active' : ''}}">Pemerintahan
                                                                        Desa/Kelurahan</a></li>
                                                        <li><a href="/statis/prasarana"
                                                                        class="{{(request()->segment(2) == 'prasarana') ? 'active' : ''}}">Prasarana
                                                                        Pemerintah Desa/Kelurahan Sekecamatan</a></li>
                                                        <li><a href="/statis/pemkec"
                                                                        class="{{(request()->segment(2) == 'pemkec') ? 'active' : ''}}">Pemerintah
                                                                        Kecamatan</a></li>
                                                        <li><a href="/statis/pengangkutan"
                                                                        class="{{(request()->segment(2) == 'pengangkutan') ? 'active' : ''}}">Prasarana/Sarana
                                                                        Pengangkutan dan Komunikasi</a></li>
                                                        <li><a href="/statis/pjgjalan"
                                                                        class="{{(request()->segment(2) == 'pjgjalan') ? 'active' : ''}}">Panjang
                                                                        Jalan dan
                                                                        Jembatan</a></li>
                                                        <li><a href="/statis/perekonomian"
                                                                        class="{{(request()->segment(2) == 'perekonomian') ? 'active' : ''}}">Sarana
                                                                        Perekonomian</a></li>
                                                        <li><a href="/statis/jumlahusaha"
                                                                        class="{{(request()->segment(2) == 'jumlahusaha') ? 'active' : ''}}">Jumlah
                                                                        Perusahaan/Usaha</a></li>
                                                        <li><a href="/statis/saranasosbud"
                                                                        class="{{(request()->segment(2) == 'saranasosbud') ? 'active' : ''}}">Sarana
                                                                        Sosial/Budaya</a></li>
                                                </ul>
                                        </div>
                                </li>
                                <li>
                                        <a href="#dataDinamis" data-toggle="collapse"
                                                class=" {{(request()->segment(1) == 'dinamis') ? 'active' : ''}}"
                                                aria-expanded="false"><i class="lnr lnr-tag"></i> <span>Data
                                                        Dinamis</span> <i
                                                        class="icon-submenu lnr lnr-chevron-left"></i></a>
                                        <div id="dataDinamis" class="collapse" aria-expanded="false"
                                                style="height: 0px;">
                                                <ul class="nav">
                                                        <li><a href="/dinamis/pemkecamatan"
                                                                        class="{{(request()->segment(2) == 'pemkecamatan') ? 'active' : ''}}">Pemerintahan
                                                                        Kecamatan</a></li>
                                                        <li><a href="/dinamis/kependudukan"
                                                                        class="{{(request()->segment(2) == 'kependudukan') ? 'active' : ''}}">Kependudukan</a>
                                                        </li>
                                                        <li><a href="/dinamis/keagrariaan"
                                                                        class="{{(request()->segment(2) == 'keagrariaan') ? 'active' : ''}}">Keagrariaan</a>
                                                        </li>
                                                        <li><a href="/dinamis/tanaman"
                                                                        class="{{(request()->segment(2) == 'tanaman') ? 'active' : ''}}">Tanam-Tanaman</a>
                                                        </li>
                                                        <li><a href="/dinamis/pangan"
                                                                        class="{{(request()->segment(2) == 'pangan') ? 'active' : ''}}">Pangan</a>
                                                        </li>
                                                        <li><a href="/dinamis/perikanan"
                                                                        class="{{(request()->segment(2) == 'perikanan') ? 'active' : ''}}">Perikanan</a>
                                                        </li>
                                                        <li><a href="/dinamis/transportasi"
                                                                        class="{{(request()->segment(2) == 'transportasi') ? 'active' : ''}}">Transportasi</a>
                                                        </li>
                                                        <li><a href="/dinamis/polkam"
                                                                        class="{{(request()->segment(2) == 'polkam') ? 'active' : ''}}">Polkam</a>
                                                        </li>
                                                </ul>
                                        </div>
                                </li>
                                @endif

                        </ul>
                </nav>
        </div>
</div>