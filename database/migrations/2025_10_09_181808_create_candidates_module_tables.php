<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabla principal de candidatos
        Schema::create('candidates', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->string('email', 100)->unique();
            $table->string('telefono', 20)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['M', 'F', 'Otro', 'Prefiero no decir'])->nullable();
            $table->enum('estado_civil', ['Soltero', 'Casado', 'Divorciado', 'Viudo', 'Unión libre'])->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('ciudad', 50)->nullable();
            $table->string('pais', 50)->default('Colombia');
            $table->date('disponibilidad_inicio')->nullable();
            $table->enum('modalidad_preferida', ['Presencial', 'Remoto', 'Híbrido', 'Cualquiera'])->nullable();
            $table->decimal('expectativa_salarial', 10, 2)->nullable();
            $table->enum('estado', ['Activo', 'Inactivo'])->default('Activo');
            $table->timestamps();
        });

        // Documentos del candidato
        Schema::create('documentos_candidato', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_candidato')->constrained('candidates')->onDelete('cascade');
            $table->enum('tipo_documento', ['CV', 'Carta_Presentacion', 'Certificado', 'Portfolio', 'Otro']);
            $table->string('nombre_archivo', 100)->nullable();
            $table->string('url_archivo', 255)->nullable();
            $table->boolean('es_principal')->default(false);
            $table->timestamps();
        });

        // Experiencia laboral
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_candidato')->constrained('candidates')->onDelete('cascade');
            $table->string('empresa', 100);
            $table->string('cargo', 80);
            $table->text('descripcion')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->boolean('actualmente_trabaja')->default(false);
            $table->decimal('salario', 10, 2)->nullable();
            $table->text('logros')->nullable();
            $table->text('referencias')->nullable();
            $table->timestamps();
        });

        // Educación
        Schema::create('educacion', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_candidato')->constrained('candidates')->onDelete('cascade');
            $table->string('institucion', 100);
            $table->string('titulo', 100);
            $table->enum('nivel_educativo', ['Técnico', 'Tecnológico', 'Pregrado', 'Especialización', 'Maestría', 'Doctorado']);
            $table->string('area_estudio', 80)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_graduacion')->nullable();
            $table->boolean('en_curso')->default(false);
            $table->decimal('promedio', 3, 2)->nullable();
            $table->timestamps();
        });

        // Competencias
        Schema::create('competencias', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 80);
            $table->text('descripcion')->nullable();
            $table->enum('categoria', ['Técnica', 'Blanda', 'Idioma', 'Herramienta']);
            $table->integer('nivel_maximo')->default(5);
            $table->timestamps();
        });

        // Relación candidato-competencias
        Schema::create('candidato_competencias', function (Blueprint $table) {
            $table->foreignId('id_candidato')->constrained('candidates')->onDelete('cascade');
            $table->foreignId('id_competencia')->constrained('competencias')->onDelete('cascade');
            $table->integer('nivel_actual');
            $table->integer('años_experiencia')->default(0);
            $table->string('certificacion', 100)->nullable();
            $table->timestamp('fecha_ultima_actualizacion')->useCurrent();
            $table->primary(['id_candidato', 'id_competencia']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidato_competencias');
        Schema::dropIfExists('competencias');
        Schema::dropIfExists('educacion');
        Schema::dropIfExists('experiencia_laboral');
        Schema::dropIfExists('documentos_candidato');
        Schema::dropIfExists('candidates');
    }
};
