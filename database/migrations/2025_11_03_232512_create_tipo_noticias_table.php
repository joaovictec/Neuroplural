<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration: Criar tabela de tipos de notícias
 * 
 * Esta tabela armazena as categorias/tipos de notícias
 * (ex: Política, Esportes, Cultura, Economia, Tecnologia).
 */
return new class extends Migration
{
    /**
     * Executa a migração (cria a tabela)
     * 
     * Estrutura da tabela tipos_noticias:
     * - id: Chave primária auto-incrementável
     * - nome: Nome do tipo (ex: "Política")
     * - slug: Versão do nome para URLs (ex: "politica") - único
     * - timestamps: created_at e updated_at automáticos
     */
    public function up(): void
    {
        Schema::create('tipos_noticias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');          // Nome do tipo (ex: "Política")
            $table->string('slug')->unique(); // Slug único para URLs
            $table->timestamps();            // created_at, updated_at
        });
    }

    /**
     * Reverte a migração (apaga a tabela)
     * 
     * Executado com: php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_noticias');
    }
};
