@php
    $isAside = $isAside();
@endphp

<x-filament::section
    :aside="$isAside"
    :collapsed="$isCollapsed()"
    :collapsible="$isCollapsible() && (! $isAside)"
    :compact="$isCompact()"
    class="filament-infolists-section-component"
>
    <x-slot name="heading">
        {{ $getHeading() }}
    </x-slot>

    <x-slot name="description">
        {{ $getDescription() }}
    </x-slot>

    {{ $getChildComponentContainer() }}
</x-filament::section>
