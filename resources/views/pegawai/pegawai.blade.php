
@extends('template.sidebar')
@section('sidebar')
    <!--/col-->
    <main class="col main pt-5 mt-3 h-100 overflow-auto">
        <h1 class="display-4 d-none d-sm-block">
            Data Pegawai
        </h1>
        <p class="lead d-none d-sm-block">Senin, 22 Januari 2023 22:23:24</p>

        {{-- grafik --}}
        <div class="row mb-3">
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card bg-success text-white h-100">
                    <div class="card-body bg-success">
                        <div class="rotate">
                            <i class="fa fa-kegiatan fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Perjadin Berjalan</h6>
                        <h1 class="display-6">10 Kegiatan</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-info h-100">
                    <div class="card-body bg-info">
                        <div class="rotate">
                            <i class="fa fa-pagu fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Pagu Perjadin</h6>
                        <h1 class="display-6">Rp. 2.500.000.000</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-danger h-100">
                    <div class="card-body bg-danger">
                        <div class="rotate">
                            <i class="fa fa-sisa fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Sisa Perjadin</h6>
                        <h1 class="display-6">Rp. 1.500.000.000</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 py-2">
                <div class="card text-white bg-warning h-100">
                    <div class="card-body">
                        <div class="rotate">
                            <i class="fa fa-pending fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Perjadin Pending</h6>
                        <h1 class="display-6">Rp.250.000.000</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--/end grafik-->


        {{-- <a id="flexbox"></a> --}}
        <hr>
        <h2 class="mt-4">Data Pegawai</h2>

        <div class="card-columns mb-3">
            <div class="card">
                <div class="card-body">

                    {{-- start add pegawai template --}}

                    <main class="container">

                        <!-- TOMBOL TAMBAH PEGAWAI -->
                        <div class="pb-3">
                            <a href='' class="btn btn-primary">+ Tambah Pegawai</a>
                            <!-- TOMBOL TAMBAH UNIT KERJA -->
                            <a href='' class="btn btn-primary">+ Tambah Unit Kerja</a>
                        </div>

                        <!-- START FORM -->
                        <form action="#" method='post'>
                            <div class="my-3 p-3 bg-body rounded shadow-sm">
                                <div class="mb-3 row">
                                    <label for="nim" class="col-sm-2 col-form-label">NIP / NIK Pegawai</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name='nip' id="nip">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='nama' id="nama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Pangkat / Golongan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='pangkat' id="pangkat">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='jabatan' id="jabatan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Unit Kerja</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='uker' id="uker">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-2 col-form-label">No Telp</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name='no_telp' id="no_telp">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                                        <button type="reset" class="btn btn-secondary" name="reset">RESET</button>

                                    </div>
                                </div>
                        </form>
                </div>
                <!-- AKHIR FORM -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


    {{-- end template add pegawai --}}


    {{-- tambah data pegawai --}}
    {{-- <form>
                        <div class="mt-4">
                            <label for="jenispegawai" class="form-label">Jenis Pegawai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategori_pegawai" id="pns" checked>
                            <label class="form-check-label" for="flexRadioDefault1">PNS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategori_pegawai" id="pppk">
                            <label class="form-check-label" for="flexRadioDefault1">PPPK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategori_pegawai" id="lainnya">
                            <label class="form-check-label" for="flexRadioDefault1">PKWT / Lainnya</label>
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIP / NIK</label>
                            <input type="text" class="form-control" id="nip">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama dan Gelar</label>
                            <input type="text " class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pangkat / Golongan</label>
                            <input type="text" class="form-control" id="pangkat">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pangkat / Golongan</label>
                            <input type="text" class="form-control" id="pangkat">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jabatan </label>
                            <input type="text" class="form-control" id="jabatan">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="uker">
                        </div>
                        <div class="row g-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form> --}}
    {{-- / tambah data pegawai --}}

    </div>
    </div>
    <div class="card card-body">
        <blockquote class="card-blockquote">
            <p>Data Pegawai Poltekkes Kemenkes Malang</p>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                {{-- <blockquote class="card-blockquote"> --}}
                {{-- <p>Database Pegawai Poltekkes Kemenkes Malang</p> --}}
                <div class="pb-3">
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-1" type="search" name="katakunci"
                            value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                            aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-auto">No</th>
                            <th class="col-md-1">NIP/NIK</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-1">Pangkat / Gol</th>
                            <th class="col-md-2">Jabatan</th>
                            <th class="col-md-3">Unit Kerja</th>
                            <th class="col-md-auto">No Telepon</th>


                            <th class="col-md-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>199012282023211017</td>
                            <td>Diyan Andika Kristanto, S.Kom</td>
                            <td>Golongan IX</td>
                            <td>Pranata Komputer Ahli - Pertama</td>
                            <td>Unit Data dan Informasi</td>
                            <td>081335257997</td>

                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- AKHIR DATA -->
        </blockquote>
    </div>
    <div class="card">
        <img class="card-img-top img-fluid" src="//placehold.it/600x200/bbb/fff?text=..." alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card card-body card-inverse card-primary text-center">
        <blockquote class="card-blockquote">
            <p>Create masonry or Pinterest-style card layouts in Bootstrap 4.</p>
            <footer>
                <small>
                    Someone famous in <cite title="Source Title">Bootstrap</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <div class="card card-body text-center">
        <h4 class="card-title">Clever heading</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
    </div>
    <div class="card">
        <img class="card-img img-fluid" src="//placehold.it/600x200/777/fff?text=..." alt="Card image">
    </div>
    <div class="card card-body text-right">
        <blockquote class="card-blockquote">
            <p>There are also some interesting new text classes to uppercase or capitalize.</p>
            <footer>
                <small class="text-muted">
                    Someone famous in <cite title="Source Title">Bootstrap</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <div class="card card-body">
        <h4 class="card-title">Responsive</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <div class="card">
        <div class="card-body">
            <ul class="list-unstyled">
                <li class="text-capitalize"><code class="text-lowercase">text-capitalize</code> Capitalize each
                    word</li>
                <li class="text-uppercase"><code class="text-lowercase">text-uppercase</code> Uppercase text</li>
                <li class="text-success"><code>text-success</code> Contextual colors for text</li>
                <li><code>text-muted</code> <span class="text-muted">Lighten with muted</span></li>
                <li><code>text-info</code> <span class="text-muted">Info text color</span></li>
                <li><code>text-danger</code> <span class="text-muted">Danger text color</span></li>
                <li><code>text-warning</code> <span class="text-muted">Warning text color</span></li>
                <li><code>text-primary</code> <span class="text-primary">Primary text color</span></li>
            </ul>
        </div>
    </div>
    <div class="card card-body">
        <h4 class="card-title">Heading</h4>
        <p class="card-text">So now that you've seen some of what Bootstrap 4 has to offer, are you going to give
            it a try?</p>
        <p class="card-text"><small class="text-muted">Last updated 12 mins ago</small></p>
    </div>
    </div>
    <!--/card-columns-->

    <a id="layouts"></a>
    <hr>
    <h2 class="sub-header mt-5">Interesting layouts and elements</h2>
    <div class="row mb-3">
        <div class="col-lg-6">

            <div class="card mb-3">
                <div class="card-header">
                    Bye .well, .panel &amp; .thumbnail
                </div>
                <div class="card-body">
                    <h4 class="card-title">Replaced with .card</h4>
                    <p class="card-text">All of these Bootstrap 3.x components have been dropped entirely for the new
                        card component.</p>
                    <button type="button" class="btn btn-secondary btn-lg">Large</button>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home1" role="tab" data-toggle="tab">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile1" role="tab" data-toggle="tab">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#messages1" role="tab" data-toggle="tab">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#settings1" role="tab" data-toggle="tab">Settings</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <br>
                <div role="tabpanel" class="tab-pane active" id="home1">
                    <h4>Home</h4>
                    <p>
                        1. These Bootstrap 4 Tabs work basically the same as the Bootstrap 3.x tabs.
                        <br>
                        <br>
                        <button class="btn btn-primary-outline btn-lg">Wow</button>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile1">
                    <h4>Pro</h4>
                    <p>
                        2. Tabs are helpful to hide or collapse some addtional content.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages1">
                    <h4>Messages</h4>
                    <p>
                        3. You can really put whatever you want into the tab pane.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings1">
                    <h4>Settings</h4>
                    <p>
                        4. Some of the Bootstrap 3.x components like well and panel have been dropped for the new card
                        component.
                    </p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-6">
            <div class="card card-default card-body">
                <ul id="tabsJustified" class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link" href="" data-target="#tab1" data-toggle="tab">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="" data-target="#tab2" data-toggle="tab">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-target="#tab3" data-toggle="tab">More</a>
                    </li>
                </ul>
                <!--/tabs-->
                <br>
                <div id="tabsJustifiedContent" class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="list-group">
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-success">51</span> Home Link</a>
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-success">8</span> Link 2</a>
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-success">23</span> Link 3</a>
                            <a href="" class="list-group-item text-muted">Link n..</a>
                        </div>
                    </div>
                    <div class="tab-pane active" id="tab2">
                        <div class="row">
                            <div class="col-sm-7">
                                <h4>Profile Section</h4>
                                <p>Imagine creating this simple user profile inside a tab card.</p>
                            </div>
                            <div class="col-sm-5"><img src="//placehold.it/170"
                                    class="float-right img-responsive img-rounded"></div>
                        </div>
                        <hr>
                        <a href="javascript:;" class="btn btn-info btn-block">Read More Profiles</a>
                        <div class="spacer5"></div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="list-group">
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-info label-pill">44</span> <code>.panel</code> is
                                now <code>.card</code></a>
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-info label-pill">8</span>
                                <code>.nav-justified</code> is deprecated</a>
                            <a href="" class="list-group-item"><span
                                    class="float-right label label-info label-pill">23</span> <code>.badge</code> is
                                now <code>.label-pill</code></a>
                            <a href="" class="list-group-item text-muted">Message n..</a>
                        </div>
                    </div>
                </div>
                <!--/tabs content-->
            </div><!--/card-->
        </div><!--/col-->
        <div class="col-lg-6">
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne" data-toggle="collapse"
                        data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion example
                    </div>
                    <div id="collapseOne" class="card-block collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <p>This is a Bootstrap 4 accordion that uses the <code>.card</code> classes instead of
                            <code>.panel</code>. The single-open section aspect is not working because the parent option
                            (dependent on .panel) has not yet been finalized in BS 4 alpha.
                        </p>
                    </div>
                    <div class="card-header" role="tab" id="headingTwo" data-toggle="collapse"
                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mobile-first
                    </div>
                    <div id="collapseTwo" class="card-block collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <p>Just like it's predecesor, Bootstrap 4 is mobile-first so that you start by designing for
                            smaller devices such as smartphones and tablets, then proceed to laptop and desktop layouts.
                        </p>
                    </div>
                    <div class="card-header" role="tab" id="headingThree" data-toggle="collapse"
                        data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Built for CSS3
                    </div>
                    <div id="collapseThree" class="card-block collapse" role="tabpanel" aria-labelledby="headingThree">
                        <p>Bootstrap employs a handful of important global styles and settings that you’ll need to be
                            aware of when using it, all of which are almost exclusively geared towards the normalization
                            of cross browser styles.</p>
                    </div>
                </div>
            </div>
            <p class="mt-4">
                <a href="/go/KrUO8QpyXP/bootstrao-4-dashboard" target="_ext">Get this Bootstrap 4 admin dashboard at
                    Codeply</a>
            </p>
        </div><!--/col-->
    </div><!--/row-->

    </main>
    <!--/main col-->
@endsection
