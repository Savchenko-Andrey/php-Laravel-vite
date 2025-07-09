@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="flex items-center justify-center w-full h-full p-6">
        <x-hero title="Добро пожаловать на наш сайт!" subtitle="Мы рады видеть вас здесь." buttonText="Узнать больше"
            buttonLink="/about" />
        <x-test :users='$users' title="Тестовый компонент" subtitle="Это подзаголовок тестового компонента."
            buttonText="Нажми меня" buttonLink="/about" />
    </div>
@endsection
