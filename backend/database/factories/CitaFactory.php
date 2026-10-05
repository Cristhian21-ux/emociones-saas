<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Cita>
 * Se debe pasar centro_id, paciente_id y psicologo_id al crearla.
 */
class CitaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fecha' => now()->addDays(7)->toDateString(),
            'hora' => '10:00',
            'motivo' => 'Evaluación inicial',
            'estado' => 'pendiente',
            'pagado' => false,
        ];
    }
}
