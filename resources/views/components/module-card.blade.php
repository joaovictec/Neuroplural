{{-- Este código substitui todo o bloco repetitivo do card-item --}}
@props(['title', 'description', 'link', 'icon', 'color' => 'bg-orange-500'])

<a href="{{ $link }}" class="
    block transition duration-300
    hover:scale-[1.03] hover:shadow-xl
    w-full md:w-[320px]
    bg-white p-8 rounded-2xl shadow-lg
    text-center
">
    {{-- CÍRCULO DO ÍCONE (Seus estilos CSS traduzidos para Tailwind) --}}
    <div class="
        {{ $color }} text-white
        w-20 h-20 rounded-full
        flex items-center justify-center
        mx-auto mb-5 text-3xl
    ">
        {{-- Aqui usamos Font Awesome ou um ícone similar --}}
        <i class="{{ $icon }}"></i>
    </div>

    <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $title }}</h3>
    <p class="text-sm text-gray-500 mb-4">{{ $description }}</p>

    {{-- Link de Acesso com Efeito de Seta --}}
    <span class="
        inline-block mt-3
        font-semibold text-blue-600
        transition duration-200
        group-hover:translate-x-1
    ">
        Acessar →
    </span>
</a>
