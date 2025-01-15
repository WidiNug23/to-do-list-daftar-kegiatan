<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index()
    {
        $data['tasks'] = $this->taskModel->where('is_completed', 0)->findAll();
        return view('tasks/index', $data);
    }

    public function add()
{
    $this->taskModel->save([
        'title'       => $this->request->getPost('title'),
        'description' => $this->request->getPost('description'),
        'date'        => $this->request->getPost('date'),
        'time'        => $this->request->getPost('time'),
    ]);
    return redirect()->to('http://localhost:8080/');
}


    public function edit($id)
    {
        $data['task'] = $this->taskModel->find($id);
        return view('tasks/edit', $data);
    }

    public function update($id)
    {
        $this->taskModel->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'time'        => $this->request->getPost('time'),
        ]);
        return redirect()->to('http://localhost:8080/');
    }

    public function delete($id)
    {
        $this->taskModel->delete($id);
        return redirect()->to('http://localhost:8080/');
    }

    public function complete($id)
    {
        $this->taskModel->update($id, ['is_completed' => 1]);
        return redirect()->to('http://localhost:8080/');
    }

    public function completedTasks()
    {
        $data['tasks'] = $this->taskModel->where('is_completed', 1)->findAll();
        return view('tasks/completed', $data);
    }
}
