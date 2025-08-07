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
                                required />
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

                                @if ($junior_web->count('Junior Web') >= 0 && $junior_web->count('Junior Web') < 5)
                                    <option value="Junior Web Programing"> Junior Web Programing</option>
                                @endif

                                @if ($junior_desain->count('Junior Desain') >= 0 && $junior_desain->count('Junior Desain') < 5)
                                <option value="Junior Grapich Designer"> Junior Grapich Designer</option>
                                @endif

                            
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary float-end"> Simpan</button>

                </div>
            </form>
        </div>
    </div>
</x-app>
