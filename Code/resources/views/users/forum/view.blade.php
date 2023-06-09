<x-app-layout>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            .panel {
                border-radius: 3px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
                background-color: #fff;
                margin-bottom: 30px;
            }

            .panel .panel-heading,
            .panel .panel-body,
            .panel .panel-footer {
                padding-left: 25px;
                padding-right: 25px;
            }

            .panel .panel-heading {
                padding-top: 20px;
                padding-bottom: 20px;
                position: relative;
            }

            .panel .panel-heading .panel-title {
                margin: 0;
                font-size: 18px;
                font-weight: 300;
            }

            .panel .panel-heading button {
                padding: 0;
                margin-left: 5px;
                background-color: transparent;
                border: none;
                outline: none;
            }

            .panel .panel-heading button i {
                font-size: 14px;
            }

            .panel .panel-body {
                padding-top: 10px;
                padding-bottom: 15px;
            }

            .panel .panel-note {
                font-size: 13px;
                line-height: 2.6;
                color: #777777;
            }

            .panel .panel-note i {
                font-size: 16px;
            }

            .panel .right {
                position: absolute;
                right: 20px;
                top: 32%;
            }

            .panel.panel-headline .panel-heading {
                border-bottom: none;
            }

            .panel.panel-headline .panel-heading .panel-title {
                margin-bottom: 8px;
                font-size: 22px;
                font-weight: normal;
            }

            .panel.panel-headline .panel-heading .panel-subtitle {
                margin-bottom: 0;
                font-size: 14px;
                color: #8D99A8;
            }

            .panel.panel-scrolling .btn-bottom {
                margin-bottom: 30px;
            }

            .panel .table>thead>tr>td:first-child,
            .panel .table>thead>tr>th:first-child,
            .panel .table>tbody>tr>td:first-child,
            .panel .table>tbody>tr>th:first-child,
            .panel .table>tfoot>tr>td:first-child,
            .panel .table>tfoot>tr>th:first-child {
                padding-left: 25px;
            }

            .panel .table>thead>tr>td:last-child,
            .panel .table>thead>tr>th:last-child,
            .panel .table>tbody>tr>td:last-child,
            .panel .table>tbody>tr>th:last-child,
            .panel .table>tfoot>tr>td:last-child,
            .panel .table>tfoot>tr>th:last-child {
                padding-left: 25px;
            }

            .panel-footer {
                background-color: #fafafa;
            }

            ul.activity-list>li {
                padding: 25px 0;
            }

            ul.activity-list>li:not(:last-child) {
                border-bottom: 1px solid #F0F0F0;
            }

            ul.activity-list>li .avatar {
                width: 40px;
            }

            ul.activity-list>li>p {
                margin-bottom: 0;
                padding-left: 3.5em;
            }

            ul.activity-list>li .timestamp {
                display: block;
                font-size: 13px;
                color: #a3a3a3;
            }

            .list-unstyled {
                padding-left: 0;
                list-style: none;
            }

            .img-circle {
                border-radius: 50%;
                width: 40px;
                height: 40px;
            }

            .pull-left {
                float: left !important;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>
        <div class="main text-dark">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <img src="{{ url('storage/' . $forum->user->profile_photo_path) }}"
                                class="img-circle pull-left avatar"
                                style="width: 60px; height: 60px; margin-right: 10px;">
                            <h3 class="pt-3 fw-bold">
                                {{ $forum->user->name }}
                                @if ($forum->user_id === auth()->user()->id || (auth()->check() && auth()->user()->is_admin))
                                    <div class="text-end mt-2">
                                        <div class="bg-primary p-2 rounded d-inline-block">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2">
                                                Edit Forum Title And Content
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </h3>
                            <hr style="border: none;
                                border-top: 3px solid #000;">
                            <div>
                                <h3 class="panel-title fw-semibold ">{{ $forum->judul }}</h3>
                                <p class="panel-subtitle ">{{ $forum->created_at }}</p>
                                {{ $forum->konten }}
                                <hr style="border: none;
                                border-top: 3px solid #000;">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="btn-group">
                                <div class="btn btn-primary" id="btn-komentar-utama"> <i
                                        class="fas fa-comment"></i>&nbsp;Komentar</div>
                            </div>
                            <form action="" id="komentar-utama" rows="4"
                                style="margin-top: 10px; display: none" method="POST">
                                @csrf
                                <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                                <input type="hidden" name="parent" value="0">
                                <textarea name="konten" class="form-control"></textarea><br>
                                <input type="submit" class="btn btn-primary" value="kirim">
                            </form>
                            <br><br>
                            {{-- Komentar Sectiom --}}
                            <h3>Komentar</h3>
                            <ul class="list-unstyled activity-list">
                                @foreach ($forum->komentar()->where('parent', 0)->orderBy('created_at', 'desc')->get() as $komentar)
                                    <hr style="border: none;  border-top: 3px solid #000;">
                                    <li>
                                        <img src="{{ url('storage/' . $komentar->user->profile_photo_path) }}"
                                            alt="Avatar" class="img-circle pull-left avatar">
                                        <p>
                                            <a href="#"
                                                class="text-decoration-none text-dark fw-bold">{{ $komentar->user->name }}</a>
                                            <br>
                                            {{ $komentar->konten }}
                                            <span class="timestamp">{{ $komentar->created_at->diffForHumans() }}</span>
                                        </p>
                                        <br>
                                        <div style="display: flex ">

                            @if ($komentar->user_id === auth()->user()->id || (auth()->user() && auth()->user()->is_admin))
                                            
                                                <form action="{{ route('komentar.destroy', $komentar->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="p-1 btn btn-outline-danger">Delete</button>
                                                </form>
                                            @endif

                                            <br>

                                            @if ($komentar->user_id === auth()->user()->id || (auth()->check() && auth()->user()->is_admin))
                                                <button type="button" class="btn btn-outline-warning mx-3 mb-3"
                                                    data-bs-toggle="modal"data-bs-target="#exampleModal">
                                                    Edit Komentars
                                                </button>
                                                <br>
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Modal title</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @if ($komentar->user_id === auth()->user()->id || auth()->user()->is_admin)
                                                                    <form action="{{ route('komentar.update', $komentar->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <textarea name="konten" class="form-control">{{ $komentar->konten }}</textarea>
                                                                        <br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="px-3 btn btn-primary">Update</button>
                                                            </div>
                                                            </form>
                                            @endif

                                        </div>
                        </div>
                    </div>
                    @endif


                </div>
                <h5>Balas Komentar : </h5>
                <form action="" method="POST" style="padding-left: 3.5em">
                    @csrf
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                    <input type="hidden" name="parent" value="{{ $komentar->id }}">
                    <input type="text" name="konten" class="form-control"><br>
                    <input type="submit" class="btn btn-primary btn-xs" value="Kirim">
                </form>

                <hr style="border: none; border-top: 3px solid #000;">
                <button class="btn btn-success show-reply">Tampilkan Balasan</button>

                <div class="reply-container rounded mt-3" style="display: none; background-color: #336e96">
                    @foreach ($komentar->childs()->orderBy('created_at', 'desc')->get() as $child)
                        <hr style="border: none;  border-top: 3px solid #000;">
                        <p class="p-4">
                            <img src="{{ url('storage/' . $child->user->profile_photo_path) }}" alt="Avatar"
                                class="img-circle pull-left avatar" style="margin-right: 10px;">
                            <a href="#"
                                class="text-decoration-none text-white">{{ $child->user->name }}</a><br>
                            <span class="timestamp text-white">{{ $child->created_at->diffForHumans() }}</span>
                            <span class="text-white">
                                {{ $child->konten }}
                            </span>

                        <div style="display: flex" class="p-3">
                            @if ($child->user_id === auth()->user()->id || (auth()->user() && auth()->user()->is_admin))
                                <form action="{{ route('komentar.destroy', $child->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="p-1 btn btn-outline-danger text-white">Delete</button>
                                </form>
                            @endif
                            @if ($child->user_id === auth()->user()->id || (auth()->user() && auth()->user()->is_admin))
                                <button type="button" class="btn btn-outline-warning text-white ml-3"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Edit Komentarz
                                </button>
                                <br>
                            @endif
                        </div>

                        </p>



                        {{-- Modal 1 --}}
                        <div class="modal fade" id="exampleModal1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modals title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('komentar.update', $child->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <textarea name="konten" class="form-control">{{ $child->konten }}</textarea>
                                            <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Closse</button>
                                        <button type="submit" class="px-3 btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </li>
                @endforeach
                </ul>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>


        <div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal titles</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       
                       
                       
                        <form action="{{ route('forum.update.utama', $forum->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Forum Titles</label>
                                    <input type="text" class="form-control" id="title" name="judul"
                                        value="{{ $forum->judul }}">
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Forum Content</label>
                                    <textarea class="form-control" id="content" name="konten" rows="4">{{ $forum->konten }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
































        @include('partials._footer')
    </body>

</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#btn-komentar-utama').click(function() {
            $('#komentar-utama').toggle('slide');
        })
    });

    var showReplyButtons = document.querySelectorAll(".show-reply");
    showReplyButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var replyContainer = this.nextElementSibling;
            if (replyContainer.style.display === "none") {
                replyContainer.style.display = "block";
                this.innerText = "Sembunyikan Balasan";
            } else {
                replyContainer.style.display = "none";
                this.innerText = "Tampilkan Balasan";
            }
        });
    });


    function showEditForm(komentarId) {
        // Hide the "Edit" button
        document.getElementById(`editButton-${komentarId}`).style.display = 'none';

        // Show the edit form
        document.getElementById(`editForm-${komentarId}`).style.display = 'block';
    }
</script>
