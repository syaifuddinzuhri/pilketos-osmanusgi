<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeacherExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::where('status', 'guru')->get();
    }

    public function headings(): array
    {
        return ["nisn", "name", "date_of_birth", "role", "password"];
    }

    /**
     * @var Invoice $invoice
     */
    public function map($user): array
    {
        return [
            $user->nisn,
            $user->name,
            $user->date_of_birth,
            $user->role,
            $user->password,
        ];
    }
}