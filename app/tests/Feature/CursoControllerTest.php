<?php

namespace Tests\Feature;

use App\Models\Curso;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CursoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_puede_ver_el_listado_de_cursos()
    {
        Curso::factory()->count(3)->create();
        $response = $this->get(route('cursos.index'));
        $response->assertStatus(200);
        $response->assertViewIs('cursos.index');
    }

    public function test_puede_ver_un_curso()
    {
        $curso = Curso::factory()->create();
        $response = $this->get(route('cursos.show', $curso->id));
        $response->assertStatus(200);
        $response->assertViewIs('cursos.show');
        $response->assertSee($curso->nombre);
    }

    public function test_puede_crear_un_curso()
    {
        $data = [
            'nombre' => 'Curso Test',
            'descripcion' => 'Descripción de prueba',
            'categoria' => 'Categoría Test',
        ];
        $response = $this->post(route('cursos.dataFormCursos'), $data);
        $response->assertRedirect();
        $this->assertDatabaseHas('cursos', $data);
    }

    public function test_valida_campos_obligatorios_al_crear()
    {
        $response = $this->post(route('cursos.dataFormCursos'), []);
        $response->assertSessionHasErrors(['nombre', 'descripcion', 'categoria']);
    }

    public function test_puede_editar_un_curso()
    {
        $curso = Curso::factory()->create();
        $response = $this->get(route('cursos.edit', $curso->id));
        $response->assertStatus(200);
        $response->assertViewIs('cursos.edit');
    }

    public function test_puede_actualizar_un_curso()
    {
        $curso = Curso::factory()->create();
        $data = [
            'nombre' => 'Nuevo Nombre',
            'descripcion' => 'Nueva descripción',
            'categoria' => 'Nueva categoría',
        ];
        $response = $this->put(route('cursos.update', $curso->id), $data);
        $response->assertRedirect(route('cursos.show', $curso->id));
        $this->assertDatabaseHas('cursos', $data);
    }
}
