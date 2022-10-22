<?php

use App\Models\Setting;
use App\Models\Transcode;
use App\Localization\Locale;
use Illuminate\Support\Facades\URL;



function getLang()
{

    $locale = new Locale;
    return $locale;
}

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
function evaluateSp($row, $lang, $forceToGetArabic = 0)
{
    try {
        $lang = $lang;
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
        if ($lang == 'en') {
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
        } else if ($lang == 'ar') {

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
        } else if ($lang == 'fr') {

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

function getAppName()
{
    static $appName;

    if (empty($appName)) {
        $appName = Setting::where('key', '=', 'app_name')->first()->value;
    }

    return $appName;
}

function deleteMedia($oldImageProduct, $path)
{
    $oldImage = public_path("img//$path//" . $oldImageProduct);
    if (file_exists($oldImage)) {
        unlink($oldImage);
    }
}

function getLogoUrl()
{
    $t = Setting::where('key', '=', 'logo')->first();
    if ($t->value == null) {
        $path = URL::asset('assets/img/brand/favicon.png');
    } else {
        $path = url("/") . "/img/app/logo/" . $t->value;
    }
    return $path;
}

function getIcon()
{
    static $Icon;

    if (empty($Icon)) {
        $Icon = Setting::where('key', '=', 'Icon')->first();
    }
    $path = url("/") . "/img/app/icon/" . $Icon->value;
    return $path;
}
function getPhones()
{

    $t1 = Setting::where('key', '=', 'phone')->first();
    if ($t1->value == null) {
        $t1->value = '0000000';
    }
    $phone = $t1->value;
    return $phone;
}
function getAddress()
{
    $t = Setting::where('key', '=', 'address')->first();
    return $t->value;
}
