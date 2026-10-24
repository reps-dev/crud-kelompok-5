<li  class="nav-item">
    <a class="nav-link {{ $active? 'text-primary' : 'text-white' }}" href="{{ $href }}" >
        {{ $slot }}
    </a>
</li>