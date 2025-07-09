<div class="bg-gray shadow-md rounded p-6 text-center flex flex-col items-center justify-center">
  <h1 class="text-4xl font-bold text-blue-600 mb-4">
    {{ $title ?? 'Заголовок по замовчуванню' }}
  </h1>
  <p class="text-lg text-gray-600 mb-6">
    {{ $subtitle ?? 'Це підзаголовок вашого hero-компонента.' }}
  </p>
  <a
    href="{{ $buttonLink ?? '#' }}"
    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded"
  >
    {{ $buttonText ?? 'Дізнатися більше' }}
  </a>
</div>
