@captureSlots([
    'actions',
    'content',
    'footer',
    'header',
    'heading',
    'subheading',
    'trigger',
])

<x-filament-support::modal
    :attributes="\Filament\Support\prepare_inherited_attributes($attributes)->merge($slots)"
    heading-component="filament-actions::modal.heading"
    hr-component="filament-actions::hr"
    subheading-component="filament-actions::modal.subheading"
>
    {{ $slot }}
</x-filament-support::modal>
