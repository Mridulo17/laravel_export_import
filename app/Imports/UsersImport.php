<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToCollection, WithStartRow
{
//    use Importable;

    public function startRow(): int
    {
        return 2;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            $name = trim($row[0]);
            $email = trim($row[1]);
            $replace = trim($row[2]);
            if(!empty($name) && !empty($email) && !empty($replace))
            {
                $check_exist = User::where('name', $name)
                                       ->where('email', $email)
                                       ->first();
                if($check_exist)
                {
                        $update_user        = User::find($check_exist->id);
                        $update_user->email = $replace;
                        $update_user->save();
                }
            }
        }
    }
}

