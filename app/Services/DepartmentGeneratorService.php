<?php

namespace App\Services;

/**
 * Генерирует наименования структурных подразделений.
 */
class DepartmentGeneratorService
{
    public function krasyarList()
    {
        $krasyar_list = [];

        for ($i = 1; $i < 80; $i++) {
            $prefix = 'КЯ-';
            if ($i < 10) {
                $prefix = 'КЯ-0';
            }
            $krasyar_list[] = $prefix . $i;
        }

        return $krasyar_list;
    }

    public function discounterList()
    {
        $discounter_list = [];

        for ($i = 1; $i < 78; $i++) {
            $prefix = 'Д0';
            if ($i < 10) {
                $prefix = 'Д00';
            }
            $discounter_list[] = $prefix . $i;
        }

        return $discounter_list;
    }
}
