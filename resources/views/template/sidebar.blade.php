<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-SPPD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body,
        html {
            height: 100%;
            overflow: hidden;
        }

        /*
      * Off Canvas sidebar at medium breakpoint
      * --------------------------------------------------
      */
        @media screen and (max-width: 992px) {

            .row-offcanvas {
                position: relative;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }

            .row-offcanvas-left .sidebar-offcanvas {
                left: -33%;
            }

            .row-offcanvas-left.active {
                left: 33%;
                margin-left: -6px;
            }

            .sidebar-offcanvas {
                position: absolute;
                top: 0;
                width: 33%;
                height: 100%;
                overflow: auto;
            }
        }

        /*
      * Off Canvas wider at sm breakpoint
      * --------------------------------------------------
      */
        @media screen and (max-width: 34em) {
            .row-offcanvas-left .sidebar-offcanvas {
                left: -45%;
            }

            .row-offcanvas-left.active {
                left: 45%;
                margin-left: -6px;
            }

            .sidebar-offcanvas {
                width: 45%;
            }
        }

        .card {
            overflow: hidden;
        }

        .card-body .rotate {
            z-index: 8;
            float: right;
            height: 100%;
        }

        .card-body .rotate i {
            color: rgba(20, 20, 20, 0.15);
            position: absolute;
            left: 0;
            left: auto;
            right: -10px;
            bottom: 0;
            display: block;
            -webkit-transform: rotate(-44deg);
            -moz-transform: rotate(-44deg);
            -o-transform: rotate(-44deg);
            -ms-transform: rotate(-44deg);
            transform: rotate(-44deg);
        }
    </style>

    <script>
        $(document).ready(function() {

            $('[data-toggle=offcanvas]').click(function() {
                $('.row-offcanvas').toggleClass('active');
            });

        });
    </script>
</head>
</head>


<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas"
                title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" title="Header E-SPPD">
                {{-- lOGO E-SPPD --}}
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="bootstrap" viewBox="0 0 118 94">

                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
                        </path>
                    </symbol>
                    <!-- bootstrap sidebar -->
                    <div id="app" class="d-flex">
                        <a href="/"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <svg class="bi me-4" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="nav-item fs-4">E-SPPD</span>
                        </a>
                        {{-- // lOGO E-SPPD --}}

                    </div>
    </nav>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left vh-100">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas h-100 overflow-auto bg-light pl-0" id="sidebar"
                role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="border-top my-3"></li>
                    <li class="nav-item">SPPD</li>
                    <li class="nav-item"><a class="nav-link" href="/create_sppd">Pembuatan SPPD</a></li>
                    <li class="border-top my-3">Keuangan SPPD</li>
                    <li class="nav-item"><a class="nav-link" href="#">Pengajuan Persekot</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Last Item</a></li>
                    <li class="border-top my-3">Bendahara Perjadin</li>
                    <li class="nav-item"><a class="nav-link" href="#">Data Perjadin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Persekot Perjadin</a></li>
                    <li class="border-top my-3">SPJ Perjadin</li>
                    <li class="nav-item"><a class="nav-link" href="#">Daftar Perjadin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Approval Perjadin</a></li>
                    <li class="border-top my-3">Pengaturan</li>
                    <li class="nav-item"><a class="nav-link" href="/pegawai">Kepegawaian</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Standar Biaya Masukan (SBM)</a></li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Profile</a></li>
                                <li><a href="/login" class="link-dark rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                    {{-- ACCOUNT SETTING --}}
                    <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                class="rounded-circle me-2">
                            <strong>User</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                            <li><a class="dropdown-item" href="#">Change Password</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
            </div>
            {{-- // ACCOUNT SETTING --}}
            </ul>

            <!-- halaman sidebar-->
            @yield('sidebar')
        </div>


    </div>

    <!--/.container-->



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is a dashboard layout for Bootstrap 4. This is an example of the Modal component which you
                        can use to show content.
                        Any content can be placed inside the modal and it can use the Bootstrap grid classes.</p>
                    <p>
                        <a href="https://www.codeply.com/go/KrUO8QpyXP" target="_ext">Grab the code at Codeply</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
