<x-app>
    <div class="card card-outline card-primary">

        <div class="card-body register-card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-info text-center" role="alert">
                    <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
                </div>
            @endif
            <p class="register-box-msg">Pendaftaran Sertifikasi Mahasiswa Prodi Teknologi Informasi</p>

            <form action="{{ url('/') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input name="nim" type="text" class="form-control" placeholder="3042022+++"
                                required  maxlength="10" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input name="nama_mahasiswa" type="text" class="form-control"
                                placeholder="Nama Mahasiswa" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Sertifikasi</label>
                        <div class="col-sm-10">
                            <select name="jenis_sertifikasi" class="form-control" required>
                                <option value=""> Pilih Jenis Sertifikasi</option>

                                @if ($junior_web->count('Junior Web') >= 0 && $junior_web->count('Junior Web') < 30)
                                    <option value="Junior Web Programing"> Junior Web Programing</option>
                                @endif

                                @if ($junior_desain->count('Junior Desain') >= 0 && $junior_desain->count('Junior Desain') < 30)
                                    <option value="Junior Grapich Designer"> Junior Grapich Designer</option>
                                @endif


                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary float-end"> Simpan</button>

                </div>
            </form>
        </div>
        <div class="card-body register-card-body">
            <div class="row">
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-info">
                        <div class="inner">
                            <h3>{{$dt_web}} Peserta</h3> 
                            <p>Junior Web Programing</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{url('data-peserta')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>

                 <div class="col-lg-6">
                    <!--begin::Small Box Widget 1-->
                    <div class="small-box text-bg-info">
                        <div class="inner">
                            <h3>{{$dt_desain}} Peserta</h3>
                            <p>Junior Grapich Designer</p>
                        </div>
                        <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        <a href="{{url('data-peserta')}}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
            </div>
        </div>
    </div>
</x-app>
