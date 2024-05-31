<div>
    @if (session('success') && isset($registeredUser))
        @include('livewire.includes.success-daftar', ['user' => $registeredUser])
    @else
        @include('livewire.includes.pendaftaran-form')
    @endif
</div>
