<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TaskManagerService;
use App\Services\DepartmentGeneratorService;

class InformController extends Controller
{
    public function index(Request $request, TaskManagerService $task_manager)
    {

        if ($request->method() == 'POST') {

            $uid = $request->ip(); // безопасность: ограничить множественную отправку формы с одного айпи

            $rules = [
                // 'name' => 'required|min:10',
                'message' => 'required|min:3',
            ];

            $messages = [
                // 'name.required' => 'Обязательно длля заполнения',
                // 'name.min' => 'Не может быть короче :min символов',
                // 'message.required' => 'Обязательно для заполнения',
                'message.min' => 'Не может быть короче :min символов',
            ];

            $validated = $request->validate($rules, $messages);

            // $template = $task_manager->getTaskTemplate(591, 1297); // стартовая реализация
            $template = $task_manager->getTaskTemplate(1038, 1297);  // попытка создания на другом сервисе
            // dump($template);

            $description = $request->message;

            $create_new_task = $task_manager->createNewTask($template, $description);
            // dump($create_new_task);

            if (isset($create_new_task['Task'])) {
                $request->session()->now('message', ['type' => 'success', 'text' => 'Заявка успешно отправлена.']);
            }
            if (isset($create_new_task['Message'])) {
                $request->session()->now('message', ['type' => 'danger', 'text' => 'Не удалось создать заявку. Попробуйте позже или сообщите о проблеме.']);
            }
        }








        return view('pages.index');
    }

    public function krasyar()
    {
        $krasyar_list = new DepartmentGeneratorService;
        $krasyar_list = $krasyar_list->krasyarList();
        return view('pages.krasyar', ['krasyar_list' => $krasyar_list]);
    }

    public function baget()
    {
        $discounter_list = new DepartmentGeneratorService;
        $discounter_list = $discounter_list->discounterList();
        return view('pages.discounter', ['discounter_list' => $discounter_list]);
    }

    public function office()
    {
        return view('pages.office');
    }

    public function improve()
    {
        $krasyar_list = new DepartmentGeneratorService;
        $krasyar_list = $krasyar_list->krasyarList();
        $discounter_list = new DepartmentGeneratorService;
        $discounter_list = $discounter_list->discounterList();
        return view('pages.improve', ['discounter_list' => $discounter_list, 'krasyar_list' => $krasyar_list]);
    }
}
