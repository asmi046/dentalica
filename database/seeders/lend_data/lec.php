<?php
$lec_data = [
    [
        'part' => 'Как проходит лечение?',
        'picture' => '',
        'title' => 'Профессиональное удаление отложений:',
        'sub_title' => '',
        'content' => file_get_contents(public_path('old_data/lending_data/text/lec_treatment_work_1.html')),
    ],

    [
        'part' => 'Как проходит лечение?',
        'picture' => '',
        'title' => 'Плазмотерапия (плазмолифтинг):',
        'sub_title' => '',
        'content' => file_get_contents(public_path('old_data/lending_data/text/lec_treatment_work_2.html')),
    ],

    //____________________________________________________________
    [
        'part' => 'Почему выбирают нас:',
        'picture' => 'lending_icon/vector_para_pro.svg',
        'title' => '',
        'sub_title' => '',
        'content' => 'Современное немецкое оборудовани (VECTOR PARO PRO) для эффективного удаления отложений',
    ],
    [
        'part' => 'Почему выбирают нас:',
        'picture' => 'lending_icon/plasma_therapy_autoplasma.svg',
        'title' => '',
        'sub_title' => '',
        'content' => 'Плазмотерапия с использованием аутоплазмы для стимуляции регенерации',
    ],
    [
        'part' => 'Почему выбирают нас:',
        'picture' => 'lending_icon/medic_exp.svg',
        'title' => '',
        'sub_title' => '',
        'content' => 'Врачи-профессионалы с опытом работы от 20 лет и сертифицированным обучением',
    ],
    [
        'part' => 'Почему выбирают нас:',
        'picture' => 'lending_icon/complex_hirurg_estetic.svg',
        'title' => '',
        'sub_title' => '',
        'content' => 'Комплексный подход, включая хирургическое лечение и эстетическую коррекцию',
    ],

    //__________________________________________________________________________________
    [
        'part' => 'Как подготовиться к процедуре?',
        'picture' => 'lending_photo/lec-procedure.webp',
        'title' => '',
        'sub_title' => '',
        'content' => [
            'Подготовка к процедуре:' => file_get_contents(public_path('old_data/lending_data/text/lec_how_procedure_1.html')),
            'Рекомендации после лечения:' => file_get_contents(public_path('old_data/lending_data/text/lec_how_procedure_2.html'))
        ],
    ],

    //_____________________________________________________________________________________
    [
        'part' => 'Кому подходит лечение и когда проявлять осторожность?',
        'picture' => '',
        'title' => 'Показания:',
        'sub_title' => '',
        'content' => file_get_contents(public_path('old_data/lending_data/text/lec_treatment_poc.html')),
    ],
    [
        'part' => 'Кому подходит лечение и когда проявлять осторожность?',
        'picture' => '',
        'title' => 'Противопоказания:',
        'sub_title' => '',
        'content' => file_get_contents(public_path('old_data/lending_data/text/lec_treatment_prot.html')),
    ],

    //_____________________________________________________________________________________
    [
        'part' => 'Что вы получите после лечения?',
        'picture' => '',
        'title' => '',
        'sub_title' => '',
        'content' => file_get_contents(public_path('old_data/lending_data/text/lec_what_treatment.html')),
    ],
];
