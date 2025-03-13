<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
<style>
    p{
        font-size: 14pt;
    }
</style>
    <title>Hello, world!</title>
</head>
<body style="padding-left: 10%; padding-right: 10%;" class="container">
<div class="container">
    <div class="pt-5">
        <p style="text-align: center;" class="pt-3">
            <strong>
                O‘ZBEKISTON RESPUBLIKASI ADLIYAVAZIRLIGI <br>TOSHKENT DAVLAT YURIDIK UNIVERSITETI
            </strong>
        </p>
    </div>

    <hr style="border: 3px solid black;">

    <div style="float:left;">
        <p>
            20___yil __ ______ <br>
            _______________-son
        </p>
    </div>
    <div style="float: right;">
        <p>Toshkent shahri</p>
    </div>


    <div style="clear: right; margin-top: 50px;">
        <p style="text-align: center;"><strong>ARXIV MA’LUMOTNOMASI</strong></p>

        <div>
            <p style="text-indent: 50px; margin-top: 0; margin-bottom: 2px; ">
                Toshkent davlat yuridik {{ $enter_date > 2013 ? 'universitetining' : 'institutining' }} arxiv hujjatlariga asosan, {{ $student->last_name }}  {{ $student->first_name }} {{ $student->middle_name }}
                Toshkent davlat yuridik {{ $enter_date > 2013 ? 'universitetining' : 'institut' }} rektorining {{ $student->enter_order_date }} dagi {{ $student->enter_order }}-sonli buyrug‘i asosida kunduzgi
                bo‘limga {{ $student->is_contract == 1 ? 'kontrakt' : 'grand' }} asosida talabalar safiga qabul qilingan.
            </p>
        </div>

        <div>
            <p style="text-indent: 50px; margin-top: 0; margin-bottom: 2px;">
                Toshkent davlat yuridik {{ $graduate_date > 2013 ? 'universiteti' : 'instituti' }} rektorining {{ $student->graduated_order_date }} dagi {{ $student->graduated_order }}-son buyrug‘i asosida{{ $student->last_name }}  {{ $student->first_name }}
                {{ $student->middle_name }} “yurusprudensiya” yo‘nalishi bo‘yicha tamomlagan va unga @foreach($edu_type as $type) @if($type->id == $student->edu_type_id) {{ $type->name }} @endif @endforeach darajali {{ $student->diplom_type == 1 ? 'imtiyozsiz' : 'imtiyozli'}}
                diplom berilgan.
            </p>
        </div>

        <div>
            <p style="text-indent: 50px; margin-top: 0;">
                O‘zbekiston Respublikasi Prezidentining 2013-yil 28-iyundagi “Yuridik kadrlar tayyorlash tizimini yanada
                takomillashtirish chora- tadbirlari to‘g‘risida”gi PQ–1990-son qaroriga asosan Toshkent davlat yuridik
                instituti Toshkent davlat yuridik universiteti etib qayta tashkil etilgan.
            </p>
        </div>

        <div class="d-flex justify-content-between p-5">
            <div style="float: left;">
                <p>
                    <strong>Arxiv mudiri</strong>
                </p>
            </div>
            <div style="float: right;">
                <p>
                    <strong>{{ $mudir[0]->fio ?? '' }}</strong>
                </p>
            </div>
        </div>
    </div>

</div>


</body>
</html>
