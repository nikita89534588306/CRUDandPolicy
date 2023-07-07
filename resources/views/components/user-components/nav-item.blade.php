<div>
    <li class="nav-item">
        <a {{ $attributes->merge(['class' => "nav-link link-body-emphasis px-2"]) }}>
            {{ $slot }}
        </a>
    </li>
</div>