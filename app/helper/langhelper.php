<?php

use App\Models\Transcode;
use App\Localization\Locale;



function add($row, $values_arr, $lang)
{
    $table = $row->table;
    $columns = $row->transcodeColumns;
    $row_id = $row->id;
    foreach ($columns as $col) {
        if ($values_arr[$col] != '') {
            $tc = new Transcode;
            $tc->table_ = $table;
            $tc->lang_ = $lang;
            $tc->column_ = $col;
            $tc->row_ = $row_id;
            $tc->transcode = $values_arr[$col];
            $tc->save();
        }
    }
}

function evaluate($row, $forceToGetArabic = 0)
{

    $locale = new Locale;


    try {
        $lang = $locale->locale;
        $table = $row->table;
        $columns = $row->transcodeColumns;
        $row_id = $row->id;
    } catch (\Exception $e) {
        dd($e);
        dd('Transcode Error');
    }

    $obj = array_combine($columns, array_fill(0, count($columns), null));


    $transCodes = \App\Models\Transcode::where('table_', $table)->where('row_', $row_id)->where('lang_', $lang)->get();
    if (!$forceToGetArabic) {
        if ($locale->locale == 'en') {
            foreach ($columns as $col) {
                if (!$row[$col]) {
                    $t = $transCodes->first(function ($i) use ($col) {
                        return $i->column_ == $col;
                    });

                    if ($t) {
                        $obj[$col] = $t->transcode;
                    } else {
                        $obj[$col] = '';
                    }
                } else {
                    $obj[$col] = $row[$col];
                }
            }
            return $obj;
        } else if ($locale->locale == 'ar') {

            foreach ($columns as $col) {

                $t = $transCodes->first(function ($i) use ($col) {
                    return $i->column_ == $col;
                });
                if ($t) {
                    $obj[$col] = $t->transcode;
                } else {
                    $obj[$col] = $row[$col];
                }
            }

            return $obj;
        } else if ($locale->locale == 'fr') {

            foreach ($columns as $col) {
                $t = $transCodes->first(function ($i) use ($col) {
                    return $i->column_ == $col;
                });
                if ($t) {
                    $obj[$col] = $t->transcode;
                } else {
                    $obj[$col] = $row[$col];
                }
            }

            return $obj;
        }
    } else {


        foreach ($columns as $col) {

            $t = $transCodes->first(function ($i) use ($col) {
                return $i->column_ == $col;
            });
            if ($t) {
                $obj[$col] = $t->transcode;
            } else {
                $obj[$col] = '';
            }
        }

        return $obj;
    }


    return [];
}
