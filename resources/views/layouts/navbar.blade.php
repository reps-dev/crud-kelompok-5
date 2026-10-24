
<nav class="navbar navbar-expand-lg bg-dark text-light" data-bs-theme="light">
    <div class="container">
        <div class="navbar-brand text-white">Manajemen Karyawan</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
            <span class="navbar-toggler-icon"style="filter: invert(1)"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <x-nav-item :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-item>
                <x-nav-item :href="route('karyawan.index')" :active="request()->routeIs('karyawan.index')">Data Karyawan</x-nav-item>
            </ul>
        </div>
    </div>
</nav>
