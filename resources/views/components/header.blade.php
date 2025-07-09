<header class="bg-gray-900 text-white shadow-md">
    <div class="mx-auto px-10 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-blue-400 hover:text-blue-300 transition">MyApp</a>

        <!-- Navigation -->
        <nav class="space-x-6 hidden md:flex">
            <a href="/" class="hover:text-blue-300 transition">Головна</a>
            <a href="/about" class="hover:text-blue-300 transition">Про нас</a>
            <a href="/services" class="hover:text-blue-300 transition">Послуги</a>
            <a href="/contact" class="hover:text-blue-300 transition">Контакти</a>
        </nav>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
        <a href="/" class="block py-2 border-b border-gray-700 hover:text-blue-300">Головна</a>
        <a href="/about" class="block py-2 border-b border-gray-700 hover:text-blue-300">Про нас</a>
        <a href="/services" class="block py-2 border-b border-gray-700 hover:text-blue-300">Послуги</a>
        <a href="/contact" class="block py-2 hover:text-blue-300">Контакти</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</header>
