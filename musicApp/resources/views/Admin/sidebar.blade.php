
<!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo text-white border-white rounded border-bottom" href="{{route('dashboard')}}">Dashboard</a>
            <a class="sidebar-brand brand-logo-mini" href="{{route('dashboard')}}">dashboard</a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <a class="" href="{{route('dashboard')}}">
                            <div class="count-indicator">
{{--                            <img class="img-xs rounded-circle " src="/admin/assets/images/faces/face15.jpg" alt="">--}}
                                <i class="mdi mdi-monitor  text-info"></i>
                            </div>
                        </a>

                            <div class="profile-name">

                            <h5 class="mb-0 font-weight-normal">Mohammad Ali</h5>
                        </div>

                    </div>
                    <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link text-white">Navigation</span>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

{{--artist--}}
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon"><i class="mdi  mdi-account-multiple-outline"></i></span>
                    <span class="menu-title">Artist</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('artist.create')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">Add Artist</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('artist.index')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View Artists</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


{{--genre--}}
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon"><i class="mdi  mdi-music-note-sixteenth"></i></span>
                    <span class="menu-title">Genres</span><i class="menu-arrow"></i></a>
                <div class="collapse1" id="auth2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('genre.create')}}">
                                 <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                 <span class="menu-title">Add Genre</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('genre.index')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View Genres</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

{{--Song--}}
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon"><i class="mdi   mdi-music-circle"></i></span>
                    <span class="menu-title">Song</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="auth3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('song.create')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">Add Song</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('song.index')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View Song</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

{{--Album--}}
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon"><i class="mdi  mdi-spotify"></i></span>
                    <span class="menu-title">Album</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="auth4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('album.create')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">Add Album</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('album.index')}}">
                                <span class="menu-icon"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View Album</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
{{--ARTISThasALBUM--}}
            <li class="nav-item menu-items ms-0">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon"><i class="mdi  mdi-spotify"></i></span>
                    <span class="menu-title">ARTISThasALBUM</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="auth4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('ArtisthasGenre.create')}}">
                                <span class="menu-icon p-3"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">Add ArtisthasGenre</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ArtisthasGenre.index')}}">
                                <span class="menu-icon p-3"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View ArtisthasGenre</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

{{--ARTISThasALBUM--}}
            <li class="nav-item menu-items ms-0">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon"><i class="mdi  mdi-spotify"></i></span>
                    <span class="menu-title">SongHasGenre</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="auth4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('SongHasGenre.create')}}">
                                <span class="menu-icon p-3"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">Add SongHasGenre</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('SongHasGenre.index')}}">
                                <span class="menu-icon p-3"><i class="mdi mdi-file-document-box"></i></span>
                                <span class="menu-title">View SongHasGenre</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </nav>
