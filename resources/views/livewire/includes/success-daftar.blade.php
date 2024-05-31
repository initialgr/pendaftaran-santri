<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Selamat! Pendaftaran Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="card">
                <div class="card-body pb-0 mb-4">
                    <div class="row">
                        <h5 class="mt-4 fs-5"><strong>
                                Selamat pendaftaran berhasil
                            </strong>
                        </h5>
                        <h6 class="mb-4 mt-2">Anda telah berhasil daftar menjadi calon santri IDN,
                            berikut detail data pendaftaran anda :</h6>
                    </div>

                    <div class="row mb-2">
                        <h6 class="col-lg-3 col-md-4 label">Nama</h6>
                        <h6 class="col-lg-9 col-md-8 fs-6">: {{ $user->nama_santri }}</h6>
                    </div>

                    <div class="row mb-2">
                        <h6 class="col-lg-3 col-md-4 label">Cabang</h6>
                        <h6 class="col-lg-9 col-md-8">: {{ $this->getCabangName($user->cabang_id) }}</h6>
                    </div>

                    <div class="row mb-4">
                        <h6 class="col-lg-3 col-md-4 label">Program</h6>
                        <h6 class="col-lg-9 col-md-8">: {{ $user->nama_program }}</h6>
                    </div>
                    <h6>Untuk melanjutkan proses penerimaan santri baru, silahkan login
                        ke aplikasi.</h6>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="button">Login Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
