<x-app>
    <div class="card card-outline card-primary">

        <div class="card-body register-card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-info text-center" role="alert">
                    <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
                </div>
            @endif
            <p class="register-box-msg">Data Peserta Sertifikasi Mahasiswa Prodi Teknologi Informasi</p>

            <div class="row mb-2">
                <div class="col-sm-12">

                    <h4 class="loginleft"> Junior Web Programing</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40%">NIM </th>
                                <th class="text-center">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_data_pendaftar->where('jenis_sertifikasi', 'Junior Web Programing') as $data_pendaftar)
                                <tr>
                                    <td class="text-center">{{ $data_pendaftar->nim }}</td>
                                    <td class="text-center">{{ $data_pendaftar->nama_mahasiswa }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12">

                    <h4 class="loginleft"> Junior Grapich Designer</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40%">NIM </th>
                                <th class="text-center">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_data_pendaftar->where('jenis_sertifikasi', 'Junior Grapich Designer') as $data_pendaftar)
                                <tr>
                                    <td class="text-center">{{ $data_pendaftar->nim }}</td>
                                    <td class="text-center">{{ $data_pendaftar->nama_mahasiswa }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

          
        </div>
    </div>

</x-app>
