<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;

class StudentTest extends TestCase
{
     use RefreshDatabase;  // uma convenção no Laravel para garantir que seu banco de dados seja redefinido para um estado limpo antes de cada execução de teste. Isso permite que os testes sejam isolados e não afetem uns aos outros.
    public function test_minha_rota_api()  
    {
      $response =$this->get('/api/students');

      $response->assertStatus(200);
    //ou seja, a rota /api/students retornou uma resposta válida sem erros.
    }

    public function test_post_student()
    {
        $data = [
            'name' => 'Margarida',
            'course' => 'Medicina'
            // Adicione os dados que você deseja enviar em uma solicitação POST.
        ];

        $response = $this->post('/api/students', $data);

        $response->assertStatus(201); // Assumindo que a rota retorna 201 Created após uma solicitação POST bem-sucedida.
        // Adicione mais asserções conforme necessário para verificar a resposta.
    }
      public function test_update_student ()
      {
         $student = Student::create([
          'name' => 'João',
          'course' => 'Ciência da Computação',
         ]);

         $newData =[
          'name' => 'Maria',
          'course' => 'Engenharia de Software',
         ];

         $response = $this->put("/api/students/{$student->id}", $newData);
       
        $response->assertStatus(200);

        $this->assertDatabaseHas('students', $newData);

  }

  public function test_delete_student()
  { 
    $student = Student::create([
      'name' => 'João',
      'course' => 'Ciência da Computação',
     ]);

     $response = $this->delete("/api/students/{$student->id}");
    
     $response->assertStatus(200);
     $this->assertDatabaseMissing('students', ['id' => $student->id]);
    }
  }


    


