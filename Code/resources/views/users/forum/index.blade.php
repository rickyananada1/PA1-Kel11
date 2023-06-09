<x-app-layout>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
        <link rel="stylesheet" href="{{ asset('assets2/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/tiny-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">

    </head>

    <body class="bg-dark">

        <div class="main">
            <div class="col-md-12">
                <div class="col-md-12 px-0">
                    <!-- Konten panel forum -->
                    <div class="panel">
                        
                        <div class="site-cover site-cover-sm same-height overlay single-page"
                        style="background-image: url('{{ asset('assets5/images.png') }}');">
                        <div class="container">
                            <div class=" justify-content-center">
                                    <div class="post-entry">
                                        <div class="d-flex align-items-center">
                                            <h1 style="margin-right: 20px;">Forum Diskusi</h1>
                                            <div class="right">
                                                <a href="#" class="btn btn-light text-white fw-bolderq" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #336e96">Tambah Forum</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-body"     >
                            <ul class="list-unstyled activity-list">

                                @foreach ($forums as $forum)
                                    <li >
                                        <img src="{{ url('storage/' . $forum->user->profile_photo_path) }}"
                                            class="img-circle pull-left avatar ">
                                        <p><a href="/forum/{{$forum->id}}/view"
                                                class="text-decoration-none text-dark fs-5">{{ $forum->user->name }}:
                                                  <b>  {{ $forum->judul }} </b>
                                                <span class="timestamp text-dark " style="font-size: 18px">{{ $forum->created_at->diffForHumans() }}</span>

                                        </p>
                                        </a>
                                    </li>
                                    @if ($forum->user_id === auth()->user()->id || auth()->user()->is_admin )

                                        <div style="display: flex" class="p-3">
                                            <form action="{{ route('forum.destroy', $forum) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2 btn btn-outline-danger">Delete</button>

                                            </form>
                                            <br>
                                    </div>
                                    @endif
                                    @endforeach


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>

    



        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Tambah Forum</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="/forum/create" method="POST" class="text-dark">
                            @csrf
                            <div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @if ($errors->has('judul'))
                                    <span class="help-block">{{ $errors->first('judul') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="exampleFormControlerTextArea1">Content</label>
                                <textarea name="konten" id="content" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
        
        @include('partials._footer')
        
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
