<?php

namespace App\Services;

/**
 * Здесь прописана валидация для каждого поля.
 * Было мало времени, поэтому торопился и не стал продумывать и тестировать.
 * По хорошему конечно нужно унифицировать правила и продумать валидацию.
 * Но это рабочая схема. Пока не стали ломать. А ломать врятли станут, потому что это для сотрудников.
 * Но если сломают, то можно валидировать селекты и усложнить имеющзиеся правила.
 */
class ValidatorService
{
    public static function validRulesKrasyar()
    {
        return [
            'message' => 'required|min:10',
            'krasyar_list' => 'required',
            'theme' => 'required',
        ];
    }

    public static function validMessagesKrasyar()
    {
        return [
            'message.required' => 'Обязательно для заполнения',
            'message.min' => 'Не может быть короче :min символов',
            'krasyar_list.required' => 'Обязательно для заполнения',
            'theme.required' => 'Обязательно для заполнения',
        ];
    }


    public static function validRulesDiscounter()
    {
        return [
            'message' => 'required|min:10',
            'discounter_list' => 'required',
            'theme' => 'required',
        ];
    }

    public static function validMessagesDiscounter()
    {
        return [
            'message.required' => 'Обязательно для заполнения',
            'message.min' => 'Не может быть короче :min символов',
            'discounter_list.required' => 'Обязательно для заполнения',
            'theme.required' => 'Обязательно для заполнения',
        ];
    }

    public static function validRulesOffice()
    {
        return [
            'message' => 'required|min:10',
            'theme' => 'required',
        ];
    }

    public static function validMessagesOffice()
    {
        return [
            'message.required' => 'Обязательно для заполнения',
            'message.min' => 'Не может быть короче :min символов',
            'theme.required' => 'Обязательно для заполнения',
        ];
    }

    public static function validRulesImprove()
    {
        return [
            'structure' => 'required',
            'krasyar_list' => '',
            'discounter_list' => '',
            'message' => 'required|min:10',
        ];
    }

    public static function validMessagesImprove()
    {
        return [
            'structure.required' => 'Обязательно для заполнения',
            'krasyar_list.required' => 'Обязательно для заполнения',
            'discounter_list.required' => 'Обязательно для заполнения',
            'message.required' => 'Обязательно для заполнения',
            'message.min' => 'Не может быть короче :min символов',
        ];
    }
}
