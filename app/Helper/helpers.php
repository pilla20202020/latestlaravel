<?php

use App\Models\Setting\Setting;
use App\Modules\Models\Country\Country;
use App\Modules\Models\District\District;
use App\Modules\Models\Menu\Menu;
use App\Modules\Models\Province\Province;
use App\Modules\Models\User;
use Illuminate\Support\Facades\Storage;

function setting($query)
{
    $setting = Setting::fetch($query)->first();

    return $setting ? $setting->value : null;
}

// SMS CURL
function smsPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
