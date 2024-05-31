<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="card mb-3">

                <div class="card-body">
                    <div class="image">
                        <div class="d-flex justify-content-center">
                            <a class="d-flex align-items-center w-auto">
                                <img class="mt-4 mb-4" style="width: 100px" src="{{ asset('logo.png') }}" alt="">
                            </a>
                        </div><!-- End Logo -->
                        <h5 class="card-title text-center pt-0 pb-2 fs-4">Pendaftaran Santri Baru</h5>
                        <p class="small text-center">Silahkan isi data di bawah ini untuk membuat akun di
                            <strong style="color: #0d6efd">
                                Aplikasi PSB Online IDN Boarding School</strong>
                        </p>
                    </div>

                    <!-- Vertical Form -->
                    <div class="d-flex align-items-center">
                        <hr class="flex-grow-1">
                        <span class="card-title mx-3">Form Pendaftaran</span>
                        <hr class="flex-grow-1">
                    </div>

                    <form class="row g-3" wire:submit.prevent="create">
                        <div class="col-12">
                            <h6 for="email" class="form-label mb-0">Email</h6>
                            <input wire:model="email" type="text" class="form-control" id="email">
                            @error('email')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <h6 for="password" class="form-label mb-0">Password</h6>
                            <input wire:model="password" type="password" class="form-control" id="password">
                            @error('password')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <h6 for="namaSantri" class="form-label mb-0">Nama Santri</h6>
                            <input wire:model="nama_santri" type="text" class="form-control" id="namaSantri">
                            @error('nama_santri')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <h6 class="form-label col-12 mb-0">Jenis Kelamin</h6>
                            <div class="form-check d-inline-block me-3">
                                <input class="form-check-input" type="radio" wire:model="jenis_kelamin"
                                    value="1">
                                <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                            </div>
                            <div class="form-check d-inline-block me-3">
                                <input class="form-check-input" type="radio" wire:model="jenis_kelamin"
                                    value="2">
                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                            </div>
                            <div class="col-12">
                                @error('jenis_kelamin')
                                    <span class="text-danger fs-6"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <h6 class="form-label mb-0">Cabang IDN</h6>
                            <select wire:model="cabang_id" name="cabang_id" id="cabang_id" class="form-select">
                                <option value="" disabled selected>--Pilih--</option>
                                <option value="1">IDN Jonggol Ikhwan</option>
                                <option value="2">IDN Jonggol Akhwat</option>
                                <option value="3">IDN Sentul</option>
                            </select>
                            @error('cabang_id')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-3" id="program-container">
                            <h6 for="nama_program" class="form-label mb-0">Program IDN</h6>
                            <select wire:model="nama_program" name="nama_program" id="nama_program" class="form-select">
                                <option value="" disabled selected>--Pilih--</option>
                                <option value="SMP">SMP</option>
                                <option value="SMK-TKJ">SMK TKJ</option>
                                <option value="SMK-RPL">SMK RPL</option>
                                <option value="SMK-DKV">SMK DKV</option>
                            </select>
                            <small id="quota-info" class="form-text text-muted mt-1"></small>
                            @error('nama_program')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror

                        </div>

                        <div class="col-12">
                            <h6 for="formFile" class="form-label mb-0">Bukti Transfer</h6>
                            <div class="col-12">
                                <input wire:model="bukti_tf" class="form-control" type="file" id="formFile">
                            </div>
                            @error('bukti_tf')
                                <span class="text-danger fs-6"> {{ $message }}</span>
                            @enderror
                            @if ($imagePreview)
                                <div class="mt-2">
                                    <h6 class="form-label mb-0">Preview:</h6>
                                    <img src="{{ $imagePreview }}" alt="Image Preview" class="img-fluid">
                                </div>
                            @endif
                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="submit">Daftar</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
