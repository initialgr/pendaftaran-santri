<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pendaftaran extends Component
{

    use WithFileUploads;

    public $email, $password, $nama_santri, $jenis_kelamin, $cabang_id = '', $nama_program = '', $bukti_tf, $registeredUser, $imagePreview,
        $cabangNames
        = [
            1 => 'IDN Jonggol Ikhwan',
            2 => 'IDN Jonggol Akhwat',
            3 => 'IDN Sentul'
        ];
        
    public function getCabangName($cabang_id)
    {
        return $this->cabangNames[$cabang_id];
    }

    public function updatedBuktiTf()
    {
        $this->imagePreview = $this->bukti_tf->temporaryUrl();
    }

    public function create()
    {
        // Define validation rules
        $rules = [
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'nama_santri' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'in:1,2'],
            'cabang_id' => ['required', 'integer'],
            'nama_program' => ['required', 'string'],
            'bukti_tf' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1048'],
        ];

        // Define custom messages
        $messages = [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 6 karakter.',
            'nama_santri.required' => 'Nama santri wajib diisi.',
            'nama_santri.string' => 'Nama santri harus berupa string.',
            'nama_santri.max' => 'Nama santri tidak boleh lebih dari 255 karakter.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in' => 'Jenis kelamin harus L (Laki-laki) atau P (Perempuan).',
            'cabang_id.required' => 'Cabang wajib dipilih.',
            'nama_program.required' => 'Nama program wajib diisi.',
            'nama_program.string' => 'Nama program harus berupa string.',
            'bukti_tf.required' => 'Bukti transfer wajib diunggah.',
            'bukti_tf.image' => 'Bukti transfer harus berupa file gambar.',
            'bukti_tf.mimes' => 'Bukti transfer harus berupa file dengan format: jpg, jpeg, png.',
            'bukti_tf.max' => 'Ukuran file bukti transfer tidak boleh lebih dari 2MB.',
        ];

        // Validate input
        $this->validate($rules, $messages);

        // create
        $this->registeredUser = User::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'nama_santri' => $this->nama_santri,
            'jenis_kelamin' => $this->jenis_kelamin,
            'cabang_id' => $this->cabang_id,
            'nama_program' => $this->nama_program,
            'bukti_tf' => $this->bukti_tf->store('bukti_transfer'),
        ]);

        // clear the input
        $this->reset(['email', 'password', 'nama_santri', 'jenis_kelamin', 'cabang_id', 'nama_program', 'bukti_tf']);

        // Send flash message
        session()->flash('success', 'Pendaftaran berhasil!');
    }

    public function render()
    {
        return view('livewire.pendaftaran');
    }
}
