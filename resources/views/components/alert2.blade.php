<div
    {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . ($class ?? 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400')]) }} role="alert">
    <span class="font-medium">{{ $title ?? "titulo" }}
    </span>
    {{ $slot ?? "This is an alert component." }}
</div>