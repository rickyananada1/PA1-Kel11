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
                                <a class="sidenav-item-link" href="{{route('home.sejarah')}}">
                                    <span class="nav-text">Sejarah Desa </span>
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>


                


                {{-- Contacts Sidebar --}}
                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elementss" aria-expanded="false" aria-controls="ui-elementss">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Contact Pages</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elementss" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
                                    <span class="nav-text">Contact Profil</span>
                                </a>
                            </li>
                            
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('admin.message') }}">
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

            </ul>

        </div>

        <hr class="separator" />

        <div class="sidebar-footer">
        </div>
    </div>
</aside>
