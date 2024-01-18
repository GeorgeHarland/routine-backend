<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    // Test task creation
    public function testCreateTask()
    {
        $response = $this->postJson('/api/tasks', ['title' => 'New Task', 'category' => 'daily']);

        $response->assertStatus(201)
                 ->assertJsonPath('title', 'New Task');
    }

    // Test task update
    public function testUpdateTask()
    {
        $task = Task::create(['title' => 'Original Task', 'category' => 'daily']);

        $response = $this->putJson("/api/tasks/{$task->id}", ['title' => 'Updated Task', 'completed' => true]);

        $response->assertStatus(200)
                ->assertJson([
                    'id' => $task->id,
                    'title' => 'Updated Task',
                    'completed' => true
                ]);
    }
    
    // Test task deletion
    public function testDeleteTask()
    {
        $task = Task::create(['title' => 'Task to Delete', 'category' => 'daily']);

        $response = $this->deleteJson("/api/tasks/{$task->id}");

        $response->assertStatus(204); // No content
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }

    // Test listing tasks
    public function testListTasks()
    {
        $task1 = Task::create(['title' => 'Task 1', 'category' => 'daily']);
        $task2 = Task::create(['title' => 'Task 2', 'category' => 'todo']);

        $response = $this->getJson('/api/tasks');

        $response->assertStatus(200)
                ->assertJson([
                    ['id' => $task1->id, 'title' => 'Task 1', 'category' => 'daily'],
                    ['id' => $task2->id, 'title' => 'Task 2', 'category' => 'todo']
                ]);
    }
}
