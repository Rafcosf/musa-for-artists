<div class="w-64 bg-beige p-6 text-red-500">
    <div class="flex items-center justify-center mb-10">
        <img src="{{ asset('assets/musa_logo.png') }}" alt="Logo" class="w-24 h-24">
    </div>
    <nav class="space-y-4">
        <a href="{{ route('dashboard') }}" class="block hover:text-white">Dashboard</a>
        <a href="{{ route('albuns.create') }}" class="block hover:text-white">Criar Álbum</a>
        <a href="{{ route('musicas.create') }}" class="block hover:text-white">Criar Música</a>
        <a href="{{ route('perfil.editar') }}" class="block hover:text-white">Editar Conta</a>
    </nav>
</div>
