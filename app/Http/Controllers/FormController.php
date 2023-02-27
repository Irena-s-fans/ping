<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Project;
use App\Models\Seo;
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

    public function seoForm(Request $request)
    {
       $item = new Seo();
       $item->title = $request['title'];
       $item->description = $request['description'];
       $item->save();
    }

    public function offerForm(Request $request)
    {
        $item = new Project();
        if ($request->hasFile('preview')) {
            $destinationPath = 'img/preview';
            $file = $request->file('preview');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath , $file_name)) {
                $item->preview = $file_name;
            }
        }

        if ($request->hasFile('media')) {
            $destinationPath = 'img/media';
            $file = $request->file('media');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath , $file_name)) {
                $item->pic = $file_name ?: '';
            }
        }

        $item->title = $request->title;
        $item->description = $request->text;
        $item->save();
    }
}
