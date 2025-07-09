<footer class="bg-gray-900 text-white mt-auto">
    <div class=" mx-auto px-10 py-8 grid md:grid-cols-3 gap-8">
        <!-- Logo & Description -->
        <div>
            <h2 class="text-2xl font-bold text-blue-400 mb-2">MyApp</h2>
            <p class="text-sm text-gray-400">
                Тестовий проєкт на Laravel + Tailwind. Стильний футер у темних тонах.
            </p>
        </div>

        <!-- Navigation -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Навігація</h3>
            <ul class="space-y-1 text-gray-400 flex gap-6">
                <li><a href="/" class="hover:text-blue-300 transition">Головна</a></li>
                <li><a href="/about" class="hover:text-blue-300 transition">Про нас</a></li>
                <li><a href="/services" class="hover:text-blue-300 transition">Послуги</a></li>
                <li><a href="/contact" class="hover:text-blue-300 transition">Контакти</a></li>
            </ul>
        </div>

        <!-- Контакти -->
        <div>
            <h3 class="text-lg font-semibold mb-2 ">Контакти</h3>
            <div class="flex gap-6">
                <p class="text-gray-400 text-sm">Email: info@example.com</p>
                <p class="text-gray-400 text-sm">Телефон: +380 99 123 4567</p>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800 text-center text-sm py-4 text-gray-500">
        &copy; {{ date('Y') }} MyApp. Всі права захищено.
    </div>
</footer>
