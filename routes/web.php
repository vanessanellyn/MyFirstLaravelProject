<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
  return view('index', [
    'tasks' => \App\Models\Task::latest()->where('completed', true)->get() 
  ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
  return view('show', [
    'task' => \App\Models\Task::findOrFail($id)
  ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
  dd($request->all()); // shows the payload of the request
})->name('tasks.store');

Route::fallback(function () {
    return 'Still got somewhere!';    
});