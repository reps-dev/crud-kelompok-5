
<nav class="navbar navbar-expand-lg bg-dark text-light" data-bs-theme="light">
    <div class="container">
        <div class="navbar0-brand">Manajemen Karyawan</div>
        <button class="navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-target="#navbarTop">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <x-nav-item :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-item>
                <x-nav-item :href="route('karyawan.index')" :active="request()->routeIs('karyawan.index')">Data Karyawan</x-nav-item>
            </ul>
        </div>
    </div>
</nav>
