<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TaskManagerService;

class InformController extends Controller
{
    public function inform(Request $request, TaskManagerService $task_manager)
    {

        if ($request->method() == 'POST') {

            $uid = $request->ip(); // безопасность: ограничить множественную отправку формы с одного айпи

            $rules = [
                'name' => 'required|min:10',
                'message' => 'required|min:30',
            ];

            $messages = [
                'name.required' => 'Обязательно длля заполнения',
                'name.min' => 'Не может быть короче :min символов',
                'message.required' => 'Обязательно для заполнения',
                'message.min' => 'Не может быть короче :min символов',
            ];

            $validated = $request->validate($rules, $messages);

            $template = $task_manager->getTaskTemplate(591, 1297);
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

        $some_variable = 'some_variable';
        return view('pages.inform', ['some_variable' => $some_variable]);
    }
}
