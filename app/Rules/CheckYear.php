<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Kumum;

class CheckYear implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $year_v = date_format(date_create($value), "Y");
        $bulan_v = intval(date_format(date_create($value), "m"));
        if ($bulan_v <= 6) {
            $semester_v = 1;
        } else {
            $semester_v = 2;
        }

        $year = date_format(date_create($value), "Y");
        $begin_date = $year . "-01-01";
        $end_date = $year . "-12-31";
        // dd($attribute);
        $check_data_per_year = Kumum::whereBetween(DB::raw('DATE(tanggal)'), array($begin_date, $end_date))->get();

        // dd($check_data_per_year);

        foreach ($check_data_per_year as $c) {
            $year = date_format(date_create($c->tanggal), "Y");
            $bulan = intval(date_format(date_create($c->tanggal), "m"));
            if ($bulan <= 6) {
                $semester = 1;
            } else {
                $semester = 2;
            }
            var_dump($year_v);
            var_dump($bulan_v);
            var_dump($semester_v);
            var_dump($year);
            var_dump($bulan);
            var_dump($semester);
            // die;

            if ($year_v == $year) {
                // dd("a");
                if ($semester_v != $semester) {
                    // dd("b");
                    return $semester != $semester_v;
                }
            }
        }











        // $yeark = "";
        // if ($check_data_per_year) {
        //     $yeark = date_format(date_create($check_data_per_year->tanggal), "Y");
        // }
        // $yearvalue = date_format(date_create($value), "Y");
        // return $yearvalue != $yeark;


        // return $value >= 1896 && $value <= date('Y') && $value % 4 == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Data in this period is already entered';
    }
}
