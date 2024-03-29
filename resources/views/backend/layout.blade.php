<html>
<head>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Dash board</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
</head>
<style>
    .w-30 {
        width: 30%;
    }

    .w-40 {
        width: 40%;
    }

    .link-a:hover {
        color: #18b04c !important;
        font-weight: bold;
    }

    .name-blog {
        font-family: 'Climate Crisis', cursive;
    }

    .dropdown-toggle::after {
        display: none;
    }
</style>
<body style="font-family: Montserrat">
<div class="container-fluid p-0 d-flex min-vh-100 w-100">
    <div class="row w-100 p-0 m-0">
        <div class="container-content d-flex row col-md-12 p-0">
            <!-- == Start Sidebar == -->
            <div class="sidebar col-md-3 col-lg-2 p-0">
                <div class="d-flex flex-column p-3 text-white bg-dark h-100 w-100">
                    <a href=""
                       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"/>
                        </svg>
                        <span class="fs-4 name-blog">Hblog</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{ route('backend.index') }}" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"/>
                                </svg>
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        @can('list post')
                            <li style="margin-left: 44px">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-post-fill"></i>
                                    <button
                                        class="dropdown-toggle text-decoration-none text-white bg-transparent border-0"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                        Article <i class="bi bi-chevron-double-down"></i>
                                    </button>
                                    <div class="dropdown-menu p-2">
                                        @can('edit post')
                                            <div>
                                                <a class="text-decoration-none text-dark"
                                                   href="{{ route('backend.post.list', ['id'=>'all']) }}">
                                                    Article management
                                                </a>
                                            </div>
                                        @endcan
                                        <div>
                                            @can('edit comment')
                                                <a class="text-decoration-none text-dark"
                                                   href="{{ route('backend.comment.list', ['status'=>1]) }}">
                                                    Comment management
                                                </a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endcan
                        @can('list user')
                            <li>
                                <a href="{{ route('backend.listUser') }}" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle"/>
                                    </svg>
                                    <i class="bi bi-person"></i> User
                                </a>
                            </li>
                        @endcan

                        @role('admin')
                            <li>
                                <a href="{{ route('backend.permission.list') }}" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle"/>
                                    </svg>
                                    <i class="bi bi-box-seam"></i> Permission
                                </a>
                            </li>
                        @endrole
                    </ul>
                </div>
            </div>
            <!-- == End Sidebar == -->

            <!-- == Start content == -->

            <div class="content col-md-9 col-lg-10 m-0 p-0" style="background-color: #f2f2f2">
                <header class="w-100 bg-dark text-white d-flex justify-content-end p-2 align-items-center">
                    <span>{{ auth()->user()->name }} - {{ role() }}</span>
                    <a href="{{ route('backend.logout') }}" class="nav-link text-warning">&nbsp;<i
                            class="bi bi-box-arrow-in-right text-warning"></i> &nbsp;Logout</a>
                </header>
                <div class="main-content p-3">
                    <div class="container-box d-flex justify-content-around">
                        @yield('statistical')
                    </div>
                    @yield('comment')
                    @yield('posts')
                    @yield('user')
                    @yield('editUser')
                    @yield('createUser')
                    @yield('permission')
                    @yield('permissionList')
                    @yield('addRole')
                    @yield('editPost')
                    @yield('addPost')
                    @yield('detailComment')
                </div>
            </div>
            <!-- == End content == -->
        </div>
    </div>
</div>
</body>
</html>
