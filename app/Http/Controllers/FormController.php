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
        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'design_service' => $this->mapping($request->design_service),
            'digital_ads' => $this->mapping($request->digital_ads),
            'offline_events' => $this->mapping($request->offline_events),
            'special_projects' => $this->mapping($request->special_projects),
            'tournaments' => $this->mapping($request->tournaments),
        ];

        try {
            Mail::to('dubchak@peopleingaming.com')->send(new Feedback($params));
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

    private function mapping($i): string
    {
        switch ($i) {
            case 'N':
                return 'Нет';
            case 'Y':
                return 'Да';
        }
    }
}
