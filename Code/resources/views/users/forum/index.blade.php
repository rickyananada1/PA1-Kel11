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
    </head>

    <body>

        <div class="main">
            <div class="col-md-12">
                <div class="col-md-12 px-0">
                    <!-- Konten panel forum -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Forum</h3>
                            <div class="right">
                                <a href="#" class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Tambah Forum</a>
                            </div>
                        </div>
                        <hr>

                        <div class="panel-body">
                            <ul class="list-unstyled activity-list">

                                @foreach ($forums as $forum)
                                    <li>
                                        <img src="{{ url('storage/' . $forum->user->profile_photo_path) }}"
                                            class="img-circle pull-left avatar ">
                                        <p><a href="/forum/{{$forum->id}}/view"
                                                class="text-decoration-none text-dark">{{ $forum->user->name }}:
                                                {{ $forum->judul }} <span
                                                    class="timestamp">{{ $forum->created_at->diffForHumans() }}</span>

                                        </p>
                                        </a>
                                    </li>
                                    @if ($forum->user_id === auth()->user()->id)

                                        <div style="display: flex" class="p-3">
                                            <form action="{{ route('forum.destroy', $forum) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 btn btn-danger">Delete</button>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Forum</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="/forum/create" method="POST">
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

                    </forxm>

                </div>
            </div>
        </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
