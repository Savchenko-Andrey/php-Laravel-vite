<div class="bg-gray w-full h-full flex gap-10 items-center justify-center p-6">
    <div class="text-sm shadow-md bg-white rounded text-gray w-full max-w-xl">
        <p class="mb-2">🕓 Поточний час: {{ now()->format('H:i:s') }}</p>
        <p class="mb-2">📅 Дата: {{ now()->format('d.m.Y') }}</p>
        <p class="mb-2">🔗 Сторінка: {{ request()->path() }}</p>
        <p class="mb-2">🌐 IP-адреса: {{ request()->ip() }}</p>
        <p class="mb-4">👤 Користувач: {{ auth()->check() ? auth()->user()->name : 'Гість' }}</p>
    </div>

    @if (!empty($users) && count($users))
        <div class="bg-white  rounded shadow-md rounded p-4 w-full max-w-xl">
            <h2 class="text-xl font-semibold mb-3">Список користувачів</h2>
            <ul class="space-y-2">
                @foreach ($users as $user)
                    <li class="border-b pb-2">👤 {{ $user->name }} — ✉️ {{ $user->email }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p class="text-gray-500 mt-6">Немає жодного користувача для показу.</p>
    @endif
</div>
