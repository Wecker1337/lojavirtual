<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GW Produtos Derivados</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS via Vite -->
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('gw.jpg') }}" alt="Logo" class="h-12  rounded-full">
                <span class="text-2xl font-bold">GW</span>
            </div>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-md border border-gray-900 px-3 py-1 rounded-xl hover:bg-gray-200 transition">
                    {{ __('Login') }}
                </a>
                <a href="{{ route('register') }}" class="text-md border border-gray-900 px-3 py-1 rounded-xl hover:bg-gray-200 transition">
                    {{ __('Register') }}
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-4 py-10 text-center">
            <h1 class="text-4xl font-extrabold mb-4">Ofertas da Semana</h1>
            <p class="text-lg text-gray-700 mb-6">Aproveite os melhores preços em nossos produtos selecionados!</p>

            <div class="overflow-x-auto scrollbar-hide">
    <div class="flex space-x-4">
        @for ($i = 1; $i <= 6; $i++)  <!-- Atualize o limite para o número de produtos -->
            <div class="min-w-[220px] bg-white rounded-xl shadow-md p-4 hover:shadow-lg transition">
                <img src="{{ asset('produtos/produto' . $i . '.jpg') }}" alt="Produto {{ $i }}" class="h-40 w-full object-cover rounded-md mb-2">
                <h3 class="text-lg font-semibold">Produto {{ $i }}</h3>
                <p class="text-gray-600 text-sm">Descrição breve do produto {{ $i }}.</p>
                <span class="block mt-2 font-bold text-green-600">R$ {{ 10 * $i }},00</span>
            </div>
        @endfor
    </div>
</div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold mb-2">Sobre Nós</h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                A GW Derivados nasceu com o propósito de levar produtos de qualidade direto do produtor ao consumidor. Trabalhamos com ética, responsabilidade e paixão pelo que fazemos. Nosso compromisso é com a sua satisfação.
            </p>
        </div>
    </footer>

</body>
</html>
