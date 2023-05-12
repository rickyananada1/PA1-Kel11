<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->

        <div class="app-brand" >
            
            <a href="#" >
              <img src="{{asset('logo/lumbanbinanga.jpeg')}}" class="user-image" alt="User Image" style="margin-left: -10px" />
                <span class="brand-name" style="font-size: 14px; color: black; font-weight: bold ;margin-left: -6px">Admin Dashboard</span>
                </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->

            <ul class="nav sidebar-inner" id="sidebar-menu">

                {{-- Home  Sidebar --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-home"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            {{-- Menu Update Slider --}}
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.slider')}}">
                                    <span class="nav-text">Home Slider</span>
                                </a>
                            </li>


                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.about')}}">
                                    <span class="nav-text">Home About</span>
                                </a>
                            </li>


                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.team')}}">
                                    <span class="nav-text">Home Destination</span>
                                </a>
                            </li>


                            
                        </div>
                    </ul>
                </li>


                {{-- Profil Desa Sidebar --}}
                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-home-modern"></i>
                        <span class="nav-text">Profil Desa</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.struktur')}}">
                                    <span class="nav-text">Struktur Desa</span>

                                </a>
                            </li>
                            
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.visimisi')}}">
                                    <span class="nav-text">Visi & Misi Desa</span>
                                </a>
                            </li>
                            
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.galeri')}}">
                                    <span class="nav-text">Galeri Desa</span>
                                </a>
                            </li>
                            
                            <li class="active">
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Sejarah Desa (Belum) </span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>


                {{-- Pengelolaan Sampah Sidebar --}}
                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-recycle"></i>
                        <span class="nav-text">Pengelolaan Sampah</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Jenis - Jenis Sampah</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">3R</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Jadwal Pengambilan Sampah</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Lokasi TPA</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>


                {{-- Contacts Sidebar --}}
                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Contacts</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Contact Profil</span>
                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Contact Message</span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                {{-- Destinasi & Berita Sidebar --}}
                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#destinasiberita" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-map-marker"></i>
                        <span class="nav-text">Destinasi & Berita</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="destinasiberita" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{route('home.destinasi')}}">
                                    <span class="nav-text">Destinasi Wisata</span>
                                </a>
                            </li>
                        
                        </div>
                    </ul>
                </li>

                {{--Komentar --}}
                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#komentar" aria-expanded="false" aria-controls="charts">
                        <i class="mdi mdi-comment-multiple-outline"></i>
                        <span class="nav-text">Komentar</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="komentar" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{route('home.destinasi')}}">
                                    <span class="nav-text">#</span>
                                </a>
                            </li>
                          
                        </div>
                    </ul>
                </li>

               
            </ul>

        </div>

        <hr class="separator" />

        <div class="sidebar-footer">
        </div>
    </div>
</aside>
