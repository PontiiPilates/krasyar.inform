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
                'name' => 'min:3',
                'message' => 'required|min:3',
            ];

            $messages = [
                'message.required' => 'Поле обязательно для заполнения'
            ];

            $validated = $request->validate($rules, $messages);

            $template = $task_manager->getTaskTemplate(591, 1297);

            $description = $request->message;

            $create_new_task = $task_manager->createNewTask($template, $description);

            if (isset($create_new_task['Task'])) {
                dd('Success');
            }
            if (isset($create_new_task['Message'])) {
                dd('Error');
            }
        }

        $some_variable = 'some_variable';
        return view('pages.inform', ['some_variable' => $some_variable]);
    }
}
