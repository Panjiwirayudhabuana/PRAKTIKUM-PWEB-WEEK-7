<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function contact(){
        return view("page/contact");
    }
    function login(){
        return view("page/login");
    }
    function register(){
        return view("page/register");
    }
    public function contact_data(){
        $data = [
            ['name' => 'Panji Wira Yudha buana', 'email' => 'buanawirayudhapanji@gmail.com', 'region' => 'Indonesia', 'phone' => '0822-5708-8004'],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@gmail.com', 'region' => 'Europe', 'phone' => '321-654-0987'],
            ['name' => 'Carlos Rodriguez', 'email' => 'carlos.rodriguez@gmail.com', 'region' => 'South America', 'phone' => '987-654-3210'],
            ['name' => 'Maria Garcia', 'email' => 'maria.garcia@gmail.com', 'region' => 'Asia', 'phone' => '654-321-9870'],
            ['name' => 'Wang Li', 'email' => 'wang.li@gmail.com', 'region' => 'Asia', 'phone' => '456-789-1234'],
            ['name' => 'Ahmed Hassan', 'email' => 'ahmed.hassan@gmail.com', 'region' => 'Middle East', 'phone' => '789-123-4567'],
            ['name' => 'Emily Davis', 'email' => 'emily.davis@gmail.com', 'region' => 'North America', 'phone' => '432-567-8901'],
            ['name' => 'Tom Hardy', 'email' => 'tom.hardy@gmail.com', 'region' => 'Europe', 'phone' => '543-210-6789'],
            ['name' => 'Natalie Cruz', 'email' => 'natalie.cruz@gmail.com', 'region' => 'South America', 'phone' => '890-123-4567'],
            ['name' => 'Yuki Tanaka', 'email' => 'yuki.tanaka@gmail.com', 'region' => 'Asia', 'phone' => '321-654-9870'],
            ['name' => 'Nina Patel', 'email' => 'nina.patel@gmail.com', 'region' => 'Middle East', 'phone' => '210-345-6789'],
            ['name' => 'Henry White', 'email' => 'henry.white@gmail.com', 'region' => 'Europe', 'phone' => '654-987-3210'],
            ['name' => 'Isabella Rossi', 'email' => 'isabella.rossi@gmail.com', 'region' => 'Europe', 'phone' => '987-123-6540'],
            ['name' => 'Lucas Martinez', 'email' => 'lucas.martinez@gmail.com', 'region' => 'South America', 'phone' => '567-890-1234'],
            ['name' => 'Sophia Kim', 'email' => 'sophia.kim@gmail.com', 'region' => 'Asia', 'phone' => '765-432-1098'],
            ['name' => 'Amir Khan', 'email' => 'amir.khan@gmail.com', 'region' => 'Middle East', 'phone' => '890-765-4321'],
            ['name' => 'Grace Lee', 'email' => 'grace.lee@gmail.com', 'region' => 'North America', 'phone' => '345-678-9012'],
            ['name' => 'Omar Khalid', 'email' => 'omar.khalid@gmail.com', 'region' => 'Middle East', 'phone' => '543-219-8765'],
            ['name' => 'Ivan Petrov', 'email' => 'ivan.petrov@gmail.com', 'region' => 'Europe', 'phone' => '765-123-9870'],
            ['name' => 'Elena Johnson', 'email' => 'elena.johnson@gmail.com', 'region' => 'North America', 'phone' => '789-456-1230'],
            ['name' => 'Liam Murphy', 'email' => 'liam.murphy@gmail.com', 'region' => 'Europe', 'phone' => '654-321-8765'],
            ['name' => 'Emma Rodriguez', 'email' => 'emma.rodriguez@gmail.com', 'region' => 'South America', 'phone' => '345-789-6540'],
            ['name' => 'Hiroshi Sato', 'email' => 'hiroshi.sato@gmail.com', 'region' => 'Asia', 'phone' => '210-876-5432'],
            ['name' => 'Fatima Al-Farsi', 'email' => 'fatima.farsi@gmail.com', 'region' => 'Middle East', 'phone' => '543-876-2109'],
            ['name' => 'Gabriel Silva', 'email' => 'gabriel.silva@gmail.com', 'region' => 'South America', 'phone' => '876-210-5439'],
            ['name' => 'Sarah Johnson', 'email' => 'sarah.johnson@gmail.com', 'region' => 'North America', 'phone' => '678-543-2109'],
            ['name' => 'Alicia Brown', 'email' => 'alicia.brown@gmail.com', 'region' => 'Europe', 'phone' => '345-987-6543'],
            ['name' => 'Ravi Kumar', 'email' => 'ravi.kumar@gmail.com', 'region' => 'Asia', 'phone' => '654-765-4321'],
            ['name' => 'Diego Rivera', 'email' => 'diego.rivera@gmail.com', 'region' => 'South America', 'phone' => '432-654-7890'],
            ['name' => 'Haruto Nakamura', 'email' => 'haruto.nakamura@gmail.com', 'region' => 'Asia', 'phone' => '987-210-3456'],
            ['name' => 'Leila Zahir', 'email' => 'leila.zahir@gmail.com', 'region' => 'Middle East', 'phone' => '765-432-1098'],
            ['name' => 'Noah Cooper', 'email' => 'noah.cooper@gmail.com', 'region' => 'North America', 'phone' => '765-123-4321'],
            ['name' => 'Julia White', 'email' => 'julia.white@gmail.com', 'region' => 'Europe', 'phone' => '210-543-8765'],
            ['name' => 'Santiago Vega', 'email' => 'santiago.vega@gmail.com', 'region' => 'South America', 'phone' => '543-210-7654'],
            ['name' => 'Mei Chen', 'email' => 'mei.chen@gmail.com', 'region' => 'Asia', 'phone' => '654-321-7654'],
            ['name' => 'Youssef Mansour', 'email' => 'youssef.mansour@gmail.com', 'region' => 'Middle East', 'phone' => '876-543-2109'],
            ['name' => 'Anna Müller', 'email' => 'anna.muller@gmail.com', 'region' => 'Europe', 'phone' => '543-123-6789'],
            ['name' => 'Miguel Torres', 'email' => 'miguel.torres@gmail.com', 'region' => 'South America', 'phone' => '789-654-1234'],
            ['name' => 'Sofia Lopez', 'email' => 'sofia.lopez@gmail.com', 'region' => 'South America', 'phone' => '123-987-4560'],
            ['name' => 'Aisha Hassan', 'email' => 'aisha.hassan@gmail.com', 'region' => 'Middle East', 'phone' => '123-654-7890'],
            ['name' => 'Jack Wilson', 'email' => 'jack.wilson@gmail.com', 'region' => 'North America', 'phone' => '432-109-8765'],
            ['name' => 'Lucia Costa', 'email' => 'lucia.costa@gmail.com', 'region' => 'South America', 'phone' => '321-987-6543'],
            ['name' => 'Arjun Mehta', 'email' => 'arjun.mehta@gmail.com', 'region' => 'Asia', 'phone' => '109-876-5432'],
            ['name' => 'Ibrahim Hussein', 'email' => 'ibrahim.hussein@gmail.com', 'region' => 'Middle East', 'phone' => '876-543-1098'],
            ['name' => 'William Black', 'email' => 'william.black@gmail.com', 'region' => 'Europe', 'phone' => '987-654-1098'],
            ['name' => 'Olivia Smith', 'email' => 'olivia.smith@gmail.com', 'region' => 'North America', 'phone' => '210-876-5430'],
        ];
        return view('page/contact',compact('data'));
    }
}
