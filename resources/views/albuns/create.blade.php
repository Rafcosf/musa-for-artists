<x-app-layout>
    <div class="flex min-h-screen bg-black text-red-500">
        @include('partials.sidebar')

        <main class="flex-1 p-10">
            <h1 class="text-4xl font-bold mb-8">Criar Álbum</h1>

            <form class="space-y-6">
                <div>
                    <label class="block mb-2">Título do Álbum</label>
                    <input type="text" class="w-full p-3 rounded bg-beige text-black">
                </div>
                <div>
                    <label class="block mb-2">Foto da Capa</label>
                    <input type="file" class="w-full p-3 rounded bg-beige text-black">
                </div>
                <button class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-700">Salvar</button>
            </form>
        </main>
    </div>
</x-app-layout>
