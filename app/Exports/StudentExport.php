<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings, WithMapping
{

    public function __construct(string $class)
    {
        $this->class = $class;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::where(['status' => 'siswa', 'class' => $this->class])->get();
    }

    public function headings(): array
    {
        return ["nisn", "name", "date_of_birth", "class", "major", "role", "password"];
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
            $user->class,
            $user->major,
            $user->role,
            $user->password,
        ];
    }
}