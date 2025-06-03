<x-app-layout>
    <div class="flex min-h-screen bg-black text-red-500">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#f5f5dc] p-6">
            <div class="flex items-center justify-center mb-10">
                <img src="{{ asset('assets/musa_logo.png') }}" alt="Logo" class="w-24 h-24">
            </div>
            <nav class="space-y-6">
                <a href="{{ route('dashboard') }}" class="block hover:text-white">Dashboard</a>
                <a href="{{ route('album') }}" class="block hover:text-white">Criar Álbum</a>
                <a href="{{route('musica') }}" class="block hover:text-white">Criar Música</a>
                <a href="{{route('conta') }}" class="block hover:text-white">Editar Conta</a>
            </nav>
        </aside>

        <!-- Conteúdo -->
        <main class="flex-1 p-10">
            <h1 class="text-4xl font-bold mb-8 text-[#f5f5dc]">Meus Álbuns</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for($i = 1; $i <= 6; $i++)
                <div class="bg-[#f5f5dc] rounded-2xl p-5 shadow-lg hover:scale-105 transition">
                    <div class="h-40 bg-black rounded-xl mb-4 flex items-center justify-center text-[#f5f5dc]">
                        Capa do Álbum {{$i}}
                    </div>
                    <h2 class="text-xl font-semibold mb-3">Álbum {{$i}}</h2>
                    <div class="flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-700">Excluir</button>
                        <button class="bg-black text-[#f5f5dc] px-4 py-1 rounded hover:bg-gray-800"><a href="{{Route('mostraalbum')}}">Visualizar</a></button>
                    </div>
                </div>
                @endfor
            </div>
        </main>

    </div>
</x-app-layout>
