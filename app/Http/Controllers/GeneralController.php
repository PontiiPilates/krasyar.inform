<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TaskManagerService;
use App\Services\DepartmentGeneratorService;
use App\Services\ValidatorService;

use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function krasyar()
    {
        $krasyar_list = new DepartmentGeneratorService;
        $krasyar_list = $krasyar_list->krasyarList();
        return view('pages.krasyar', ['krasyar_list' => $krasyar_list]);
    }

    public function krasyarSend(Request $request, TaskManagerService $task_manager)
    {
        // валидация принимаемых данных
        $validator = Validator::make($request->all(), ValidatorService::validRulesKrasyar(), ValidatorService::validMessagesKrasyar());

        // действие при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('krasyar'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();

        // получение сообщения
        $description = $validated['message'];
        // получение подразделения
        $department = $validated['krasyar_list'];

        // маршрутизация на сервисы в зависимости от выбранной темы
        // каждый кейс получает шаблон заявки от сервиса
        switch ($request->theme) {
            case 'rudeness_staff':
                $template = $task_manager->getTaskTemplate(1045, 1297);
                break;
            case 'rudeness_director':
                $template = $task_manager->getTaskTemplate(1049, 1297);
                break;
            case 'fraud_staff':
                $template = $task_manager->getTaskTemplate(1046, 1297);
                break;
            case 'fraud_director':
                $template = $task_manager->getTaskTemplate(1050, 1297);
                break;
            case 'gratitude_staff':
                $template = $task_manager->getTaskTemplate(1048, 1297);
                break;
            case 'gratitude_director':
                $template = $task_manager->getTaskTemplate(1051, 1297);
                break;
        }

        // создание заявки на основе шаблона и полученного сообщения
        $create_new_task = $task_manager->createNewTask($template, $description, $department);

        if (isset($create_new_task['Task'])) {
            $request->session()->flash('message', ['type' => 'success', 'text' => 'Заявка успешно отправлена.']);
        }
        if (isset($create_new_task['Message'])) {
            $request->session()->flash('message', ['type' => 'danger', 'text' => 'Не удалось создать заявку. Попробуйте позже или сообщите о проблеме.']);
        }

        return redirect(route('krasyar'));
    }

    public function discounter()
    {
        $discounter_list = new DepartmentGeneratorService;
        $discounter_list = $discounter_list->discounterList();
        return view('pages.discounter', ['discounter_list' => $discounter_list]);
    }

    public function discounterSend(Request $request, TaskManagerService $task_manager)
    {
        // валидация принимаемых данных
        $validator = Validator::make($request->all(), ValidatorService::validRulesDiscounter(), ValidatorService::validMessagesDiscounter());

        // действие при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('discounter'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();

        // получение сообщения
        $description = $validated['message'];
        // получение подразделения
        $department = $validated['discounter_list'];

        // маршрутизация на сервисы в зависимости от выбранной темы
        // каждый кейс получает шаблон заявки от сервиса
        switch ($request->theme) {
            case 'rudeness_staff':
                $template = $task_manager->getTaskTemplate(1054, 1297);
                break;
            case 'rudeness_director':
                $template = $task_manager->getTaskTemplate(1057, 1297);
                break;
            case 'fraud_staff':
                $template = $task_manager->getTaskTemplate(1055, 1297);
                break;
            case 'fraud_director':
                $template = $task_manager->getTaskTemplate(1058, 1297);
                break;
            case 'gratitude_staff':
                $template = $task_manager->getTaskTemplate(1056, 1297);
                break;
            case 'gratitude_director':
                $template = $task_manager->getTaskTemplate(1059, 1297);
                break;
        }

        // создание заявки на основе шаблона и полученного сообщения
        $create_new_task = $task_manager->createNewTask($template, $description, $department);

        if (isset($create_new_task['Task'])) {
            $request->session()->flash('message', ['type' => 'success', 'text' => 'Заявка успешно отправлена.']);
        }
        if (isset($create_new_task['Message'])) {
            $request->session()->flash('message', ['type' => 'danger', 'text' => 'Не удалось создать заявку. Попробуйте позже или сообщите о проблеме.']);
        }

        return redirect(route('discounter'));
    }

    public function office()
    {
        return view('pages.office');
    }

    public function officeSend(Request $request, TaskManagerService $task_manager)
    {
        // валидация принимаемых данных
        $validator = Validator::make($request->all(), ValidatorService::validRulesOffice(), ValidatorService::validMessagesOffice());

        // действие при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('office'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();

        // получение сообщения
        $description = $validated['message'];
        // получение подразделения
        $department = 'Центральный офис';

        // маршрутизация на сервисы в зависимости от выбранной темы
        // каждый кейс получает шаблон заявки от сервиса
        switch ($request->theme) {
            case 'rudeness_employee':
                $template = $task_manager->getTaskTemplate(1061, 1297);
                break;
            case 'fraud_employee':
                $template = $task_manager->getTaskTemplate(1062, 1297);
                break;
            case 'gratitude_employee':
                $template = $task_manager->getTaskTemplate(1063, 1297);
                break;
        }

        // создание заявки на основе шаблона и полученного сообщения
        $create_new_task = $task_manager->createNewTask($template, $description, $department);

        if (isset($create_new_task['Task'])) {
            $request->session()->flash('message', ['type' => 'success', 'text' => 'Заявка успешно отправлена.']);
        }
        if (isset($create_new_task['Message'])) {
            $request->session()->flash('message', ['type' => 'danger', 'text' => 'Не удалось создать заявку. Попробуйте позже или сообщите о проблеме.']);
        }

        return redirect(route('office'));
    }

    public function improve()
    {
        $krasyar_list = new DepartmentGeneratorService;
        $krasyar_list = $krasyar_list->krasyarList();
        $discounter_list = new DepartmentGeneratorService;
        $discounter_list = $discounter_list->discounterList();
        return view('pages.improve', ['discounter_list' => $discounter_list, 'krasyar_list' => $krasyar_list]);
    }

    public function improveSend(Request $request, TaskManagerService $task_manager)
    {
        // валидация принимаемых данных
        $validator = Validator::make($request->all(), ValidatorService::validRulesImprove(), ValidatorService::validMessagesImprove());

        // действие при появлении невалидных данных
        if ($validator->fails()) {
            return redirect(route('improve'))->withErrors($validator)->withInput();
        }

        // данные, прошедшие валидацию
        $validated = $validator->validated();

        // получение сообщения
        $description = $validated['message'];

        // получение подразделения
        switch ($request->structure) {
            case 'office':
                $department = 'Центральный офис';
                break;
            case 'krasyar':
                $department = $validated['krasyar_list'];
                break;
            case 'discounter':
                $department = $validated['discounter_list'];
                break;
        }

        // маршрутизация на сервисы в зависимости от выбранной темы
        // каждый кейс получает шаблон заявки от сервиса
        switch ($request->structure) {
            case 'office':
                $template = $task_manager->getTaskTemplate(1038, 1297);
                break;
            case 'krasyar':
                $template = $task_manager->getTaskTemplate(1039, 1297);
                break;
            case 'discounter':
                $template = $task_manager->getTaskTemplate(1040, 1297);
                break;
        }

        // создание заявки на основе шаблона и полученного сообщения
        $create_new_task = $task_manager->createNewTask($template, $description, $department);

        if (isset($create_new_task['Task'])) {
            $request->session()->flash('message', ['type' => 'success', 'text' => 'Заявка успешно отправлена.']);
        }
        if (isset($create_new_task['Message'])) {
            $request->session()->flash('message', ['type' => 'danger', 'text' => 'Не удалось создать заявку. Попробуйте позже или сообщите о проблеме.']);
        }

        return redirect(route('improve'));
    }
}
