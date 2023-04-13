<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TaskManagerService
{

    private static function createAuthorizationToken()
    {
        $token = config('inform.login') . ':' . config('inform.password');
        $token = base64_encode($token);
        $token = 'Basic' . ' ' . $token;

        return $token;
    }

    private static function createHeaders()
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => self::createAuthorizationToken(),
        ];

        return $headers;
    }

    public function getTaskTemplate($service_id, $task_type_id)
    {
        $headers = self::createHeaders();
        $path = config('inform.path') . 'api/newtask';
        $parameters = [
            'serviceid' => $service_id,
            'tasktypeid' => $task_type_id,
        ];

        $response = Http::withHeaders($headers)->get($path, $parameters);

        return $response->json()['Task'];
    }

    public function createNewTask($template, $description)
    {
        $template['Name'] = $description;
        // $template['Name'] = null;

        $headers = self::createHeaders();
        $path = config('inform.path') . 'api/task';

        $response = Http::withHeaders($headers)->post($path, $template);

        return $response->json();
    }
}
