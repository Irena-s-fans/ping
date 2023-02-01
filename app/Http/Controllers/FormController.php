<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form(Request $request)
    {
        $mapping = [
            'newbie1' => 'Новички 1.0',
            'newbie2' => 'Новички 2.0',
            'assAndPress' => 'Попа пресс',
            'advanced' => 'Продвинутые',
            'oneToOne' => 'One-to-One'
        ];

        $params = [
            'name' => $request['name'],
            'tel' => $request['tel'],
            'email' => $request['email'],
            'program' => $mapping[$request['program']]
        ];

        try {
            Mail::to('fushick@gmail.com')->send(new Feedback($params));
            return \json_encode('Ваша заявка была успешно отправлена');
        } catch (\Exception $exception) {
            return \json_encode('Произошла ошибка при отправке заявки');
        }
    }
}
