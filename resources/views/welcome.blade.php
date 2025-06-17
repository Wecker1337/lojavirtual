<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GW Produtos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">


    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('gw.jpg') }}" alt="Logo" class="h-12  rounded-full">
                <span class="text-2xl font-bold">GW Produtos</span>
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
        @for ($i = 1; $i <= 6; $i++)  
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

   <footer class="bg-gray-900 text-white py-6 mt-10">
  <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-6">
    <p class="text-center text-sm">&copy; 2025 GW Produtos. Todos os direitos reservados.</p>

    <div class="flex gap-6">
      <a href="#" class="flex items-center gap-2 hover:text-red-500">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
          <path d="M23.5 6.2c-.3-1.2-1.2-2-2.4-2.3C18.7 3.5 12 3.5 12 3.5s-6.7 0-9.1.4C1.7 4.2.8 5 .5 6.2.1 8.1 0 10 0 10s0 1.9.5 3.8c.3 1.2 1.2 2 2.4 2.3C5.3 17.5 12 17.5 12 17.5s6.7 0 9.1-.4c1.2-.3 2.1-1.1 2.4-2.3.4-1.9.5-3.8.5-3.8s-.1-1.9-.5-3.8zM9.8 13.6V6.4l6.3 3.6-6.3 3.6z"/>
        </svg>
        <span>GWTube</span>
      </a>

      <a href="#" class="flex items-center gap-2 hover:text-blue-400">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
          <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.18 4.18 0 001.82-2.31 8.3 8.3 0 01-2.64 1 4.15 4.15 0 00-7.06 3.78A11.78 11.78 0 013 5.1a4.15 4.15 0 001.28 5.54 4.1 4.1 0 01-1.88-.52v.05a4.15 4.15 0 003.32 4.07 4.16 4.16 0 01-1.88.07 4.15 4.15 0 003.87 2.88A8.32 8.32 0 012 19.54"/>
        </svg>
        <span>GWX</span>
      </a>

      <a href="#" class="flex items-center gap-2 hover:text-pink-400">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
          <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.8.3 2.3.5.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.5.4 1.1.5 2.3.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.8-.5 2.3-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.5.2-1.1.4-2.3.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.8-.3-2.3-.5-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.5-.4-1.1-.5-2.3C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-1.8.5-2.3.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.5-.2 1.1-.4 2.3-.5C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.1 0-3.5 0-4.8.1-1 .1-1.5.2-1.8.4-.5.2-.8.5-1.1.8-.3.3-.6.6-.8 1.1-.2.3-.3.8-.4 1.8-.1 1.3-.1 1.7-.1 4.8s0 3.5.1 4.8c.1 1 .2 1.5.4 1.8.2.5.5.8.8 1.1.3.3.6.6 1.1.8.3.2.8.3 1.8.4 1.3.1 1.7.1 4.8.1s3.5 0 4.8-.1c1-.1 1.5-.2 1.8-.4.5-.2.8-.5 1.1-.8.3-.3.6-.6.8-1.1.2-.3.3-.8.4-1.8.1-1.3.1-1.7.1-4.8s0-3.5-.1-4.8c-.1-1-.2-1.5-.4-1.8-.2-.5-.5-.8-.8-1.1-.3-.3-.6-.6-1.1-.8-.3-.2-.8-.3-1.8-.4-1.3-.1-1.7-.1-4.8-.1zm0 3.2a5.8 5.8 0 110 11.6 5.8 5.8 0 010-11.6zm0 1.8a4 4 0 100 8 4 4 0 000-8zm4.5-2.2a1.3 1.3 0 110 2.6 1.3 1.3 0 010-2.6z"/>
        </svg>
        <span>GWGram</span>
      </a>

      <a href="#" class="flex items-center gap-2 hover:text-blue-600">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
          <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0022 12z"/>
        </svg>
        <span>GWBook</span>
      </a>
    </div>
  </div>
</footer>


</body>
</html>
