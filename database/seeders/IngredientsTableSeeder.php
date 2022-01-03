<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $ingredients = [

        //     'fruits' => [
    
        //         // ["-", "category", "subcategory", "-","КОСТИЛКОВИ"],
        //         // ["-", "category", "subcategory", "-","--------------------------"],

        //         ["avokado",
        //             'drupes', 'subcategory',
        //             "avokado","авокадо"],

        //         ["beli-chereshi",
        //             'drupes', 'subcategory',
        //             "beli chereshi","бели череши"],

        //         ["vishna",
        //             'drupes', 'subcategory',
        //             "vishna","вишна"],
                    
        //         ["kaysii",
        //             'seed', 'subcategory',
        //             "kaysii","кайсии"],

        //         ["kokos",
        //             'drupes', 'subcategory',
        //             "kokos","кокос"],

        //         ["maslini",
        //             'drupes', 'subcategory',
        //             "maslini","маслини"],

        //         ["praskova",
        //             'drupes', 'subcategory',
        //             "praskova","праскова"],
                    
        //         ["slivi",
        //             'drupes', 'subcategory',
        //             "slivi","сливи"],

        //         ["chereshi",
        //             'drupes', 'subcategory',
        //             "chereshi","череши"],



        //         // ["-", "category", "subcategory", "-", ""],
        //         // ["-", "category", "subcategory", "-","СУШЕНИ"],
        //         // ["-", "category", "subcategory", "-","--------------------------"],
                    
        //         ["dyulya",
        //             'dried', 'subcategory',
        //             "dyulya","дюля"],

        //         ["krushi",
        //             'seed', 'subcategory',
        //             "krushi","круши"],

        //         ["kaysii",
        //             'seed', 'subcategory',
        //             "kaysii","кайсии"],

        //         ["furmi",
        //             'category', 'subcategory',
        //             "dried","фурми"],

        //         ["cherveni-borovinki",
        //             'seed', 'subcategory',
        //             "cherveni borovinki","червени боровинки"],

        //     ]
        // ];

        $ingredients = [

            'fruits' => [
    
                ["-", "category", "subcategory", "-","КОСТИЛКОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["avokado",
                    'drupes', 'subcategory',
                    "avokado","авокадо"],

                ["beli-chereshi",
                    'drupes', 'subcategory',
                    "beli chereshi","бели череши"],

                ["vishna",
                    'drupes', 'subcategory',
                    "vishna","вишна"],
                    
                ["kaysii",
                    'seed', 'subcategory',
                    "kaysii","кайсии"],

                ["kokos",
                    'drupes', 'subcategory',
                    "kokos","кокос"],

                ["maslini",
                    'drupes', 'subcategory',
                    "maslini","маслини"],

                ["praskova",
                    'drupes', 'subcategory',
                    "praskova","праскова"],
                    
                ["slivi",
                    'drupes', 'subcategory',
                    "slivi","сливи"],

                ["chereshi",
                    'drupes', 'subcategory',
                    "chereshi","череши"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","СУШЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                    
                ["dyulya",
                    'dried', 'subcategory',
                    "dyulya","дюля"],

                ["krushi",
                    'seed', 'subcategory',
                    "krushi","круши"],

                ["kaysii",
                    'seed', 'subcategory',
                    "kaysii","кайсии"],

                ["furmi",
                    'category', 'subcategory',
                    "dried","фурми"],

                ["cherveni-borovinki",
                    'seed', 'subcategory',
                    "cherveni borovinki","червени боровинки"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","СЕМКОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["mushmuli",
                    'seed', 'subcategory',
                    "mushmuli","мушмули"],

                ["yabalki",
                    'seed', 'subcategory',
                    "yabalki", "ябълки"],

            

                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ТРОПИЧНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["ananas",
                    'tropical', 'subcategory',
                    "ananas","ананас"],
                
                ["banan",
                    'tropical', 'subcategory',
                    "banan","банан"],

                ["greipfrut",
                    'tropical', 'subcategory',
                    "greipfrut","грейпфрут"],

                ["laym-zelen-limon",
                    'tropical', 'subcategory',
                "laym zelen limon","лайм зелен лимон"],
                
                ["limon",
                    'tropical', 'subcategory',
                    "limon","лимон"],
                
                ["mango",
                    'tropical', 'subcategory',
                    "mango","манго"],

                ["portokal",
                    'tropical', 'subcategory',
                    "portokal","портокал"],

                ["smokini",
                    'tropical', 'subcategory',
                    "smokini","смокини"],
                
                ["furmi",
                    'category', 'subcategory',
                    "furmi","фурми"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЯГОДОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["borovinki",
                    'strawberies', 'subcategory',
                    "borovinki","боровинки"],

                ["grozde",
                    'strawberies', 'subcategory',
                    "grozde","грозде"],
                
                ["kapini",
                    'strawberies', 'subcategory',
                    "kapini","капини"],

                ["kasis",
                    'strawberies', 'subcategory',
                    "kasis","касис"],

                ["kivi",
                    'strawberies', 'subcategory',
                    "kivi","киви"],

                ["malini",
                    'strawberies', 'subcategory',
                    "malini","малини"],

                ["stafidi",
                    'strawberies', 'subcategory',
                    "stafidi","стафиди"],

                ["yagodi",
                    'strawberies', 'subcategory',
                    "yagodi","ягоди"],

            ],



            'vegetables' => [

                ["-", "category", "subcategory", "-","КОРЕНО-ПЛОДНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["morkovi",
                    'koreno-plodni', 'subcategory',
                    "morkovi","моркови"],

                ["repichka",
                    'koreno-plodni', 'subcategory',
                    "ryapa","репичка"],

                ["repichki",
                    'koreno-plodni', 'subcategory',
                    "repichki","репички"],

                ["ryapa",
                    'koreno-plodni', 'subcategory',
                    "ryapa","ряпа"],

                ["byala-ryapa",
                    'koreno-plodni', 'subcategory',
                    "byala-ryapa","бяла ряпа"],

                ["paschtarnak",
                    'koreno-plodni', 'subcategory',
                    "paschtarnak","пащърнак"],

                ["tsveklo",
                    'koreno-plodni', 'subcategory',
                    "tsveklo","цвекло"],

                ["cherveno-tsveklo",
                    'koreno-plodni', 'subcategory',
                    "cherveno tsveklo","червено цвекло"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","КЛУБЕНО-ПЛОДНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["kartofi",
                    'klubeno-plodni', 'subcategory',
                    "kartofi","картофи"],
                
                ["sladki-kartofi",
                    'klubeno-plodni', 'subcategory',
                    "sladki-kartofi","сладки картофи"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЛИСТНО-СТЪБЛЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["alabash",
                    'listno-stableni', 'subcategory',
                    "alabash","алабаш"],
                
                ["artishok-(anginar)",
                    'listno-stableni', 'subcategory',
                    "artishok (anginar)","артишок (ангинар)"],

                ["brokoli",
                    'listno-stableni', 'subcategory',
                    "brokoli","броколи"],

                ["guliya-zemna yabalka",
                    'listno-stableni', 'subcategory',
                    "guliya-zemna yabalka","гулия-земна ябълка"],

                ["zele",
                    'listno-stableni', 'subcategory',
                    "zele","зеле"],

                ["zele-kitaisko",
                    'listno-stableni', 'subcategory',
                    "zele kitaisko","зеле китайско"],

                ["zele-kudravo",
                    'catlistno-stableniegory', 'subcategory',
                    "zele kudravo","зеле къдраво"],

                ["zelena-salata",
                    'listno-stableni', 'subcategory',
                    "zelena salata","зелена салата"],

                ["karfiol",
                    'listno-stableni', 'subcategory',
                    "karfiol","карфиол"],

                ["kiselo-zele",
                    'listno-stableni', 'subcategory',
                    "kiselo zele","кисело зеле"],

                ["lapad",
                    'listno-stableni', 'subcategory',
                    "lapad","лапад"],

                ["magdanoz",
                    'listno-stableni', 'subcategory',
                    "magdanoz","магданоз"],
                    
                ["marulya",
                    'listno-stableni', 'subcategory',
                    "marulya","маруля"],

                ["pryasno-zele",
                    'listno-stableni', 'subcategory',
                    "pryasno zele","прясно зеле"],
                
                ["rukola",
                    'listno-stableni', 'subcategory',
                    "rukola","рукола"],

                ["salata",
                    'listno-stableni', 'subcategory',
                    "salata","салата"],
                
                ["salata-aysberg",
                    'listno-stableni', 'subcategory',
                    "salata aysberg","салата айсберг"],
                
                ["spanak",
                    'listno-stableni', 'subcategory',
                    "spanak","спанак"],
                
                ["tselina",
                    'listno-stableni', 'subcategory',
                    "tselina","целина"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЛУКОВИЧНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["presen-luk",
                    'lukovichni', 'subcategory',
                    "presen luk","пресен лук"],
                

                ["zelen-luk",
                    'lukovichni', 'subcategory',
                    "zelen luk","зелен лук"],
                
                ["luk",
                    'lukovichni', 'subcategory',
                    "luk","лук"],
                
                ["praz",
                    'lukovichni', 'subcategory',
                    "praz","праз"],

                ["presen-chesan",
                    'lukovichni', 'subcategory',
                    "presen chesan","пресен чесън"],
                    
                ["cherven-luk",
                    'lukovichni', 'subcategory',
                    "cherven-luk","червен лук"],

                ["chesun",
                    'lukovichni', 'subcategory',
                    "chesun","чесън"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПЛОДОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["dinya",
                    'fruity', 'subcategory',
                    "dinya","диня"],

                ["domati",
                    'fruity', 'subcategory',
                    "domati","домати"],

                ["green-piper",
                    'fruity', 'subcategory',
                    "piper-chushka","зелен пипер"],

                ["kornishon",
                    'fruity', 'subcategory',
                    "kornishon","корнишон"],

                ["krastavitsa",
                    'fruity', 'subcategory',
                    "krastavitsa","краставица"],

                ["lyuti-chushki",
                    'fruity', 'subcategory',
                    "lyuti chushki","люти чушки"],

                ["patladzhan",
                    'fruity', 'subcategory',
                    "patladzhan","патладжан"],

                ["papesh",
                    'fruity', 'subcategory',
                    "papesh","пъпеш"],
        
                ["tikva",
                    'fruity', 'subcategory',
                    "tikva","тиква"],
                
                ["tikvichki",
                    'fruity', 'subcategory',
                    "tikvichki","тиквички"],

                ["red-piper",
                    'fruity', 'subcategory',
                    "piper-chushka","червен пипер"],
                    
                ["cheri-domati",
                    'fruity', 'subcategory',
                    "cheri domati","чери домати"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПЪПКОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["bryukselsko-zele",
                    'papkovi', 'subcategory',
                    "bryukselsko zele","брюкселско зеле"],

                ["kapersi",
                    'papkovi', 'subcategory',
                    "kapersi","каперси"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ДРУГИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["asperzhi",
                    'others', 'subcategory',
                    "asperzhi","аспержи"],
                
                ["bakla",
                    'others', 'subcategory',
                    "bakla","бакла"],

                ["bamya",
                    'others', 'subcategory',
                    "bamya","бамя"],

                ["batat",
                    'others', 'subcategory',
                    "batat","батат"],
                
                ["kiselets",
                    'others', 'subcategory',
                    "kiselets","киселец"],
                
                ["kalnove",
                    'others', 'subcategory',
                    "kalnove","кълнове"],
                
                ["levurda",
                    'others', 'subcategory',
                    "levurda","левурда"],

                ["tuchenitsa",
                    'others', 'subcategory',
                    "tuchenitsa","тученица"],

                ["hryan",
                    'others', 'subcategory',
                    "hryan","хрян"],
                
                ["tsarevitsa",
                    'others', 'subcategory',
                    "tsarevitsa","царевица"], 
            
            ],



            'grain-wheat-legumes' => [

                ["-", "category", "subcategory", "-","БОБОВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["bulgur",
                    'legumes', 'subcategory',
                    "bulgur","булгур"],

                ["grah",
                    'legumes', 'subcategory',
                    "grah","грах"],
                
                ["zelen-bob",
                    'legumes', 'subcategory',
                    "zelen bob","зелен боб"],

                ["leshta",
                    'legumes', 'subcategory',
                    "leshta","леща"],

                ["nahut",
                    'legumes', 'subcategory',
                    "nahut","нахут"],

                ["smilyanski-bob",
                    'legumes', 'subcategory',
                    "smilyanski bob","смилянски боб"],

                ["soya",
                    'legumes', 'subcategory',
                    "soya","соя"],
                    
                ["fasul-bob",
                    'legumes', 'subcategory',
                    "fasul","фасул"],

                ["chervena-leshta",
                    'legumes', 'subcategory',
                    "chervena leshta","червена леща"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЖИТНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["kafyav oriz",
                    'wheat', 'subcategory',
                    "kafyav oriz","кафяв ориз"],
                
                ["oriz",
                    'wheat', 'subcategory',
                    "oriz","ориз"],

                ["pshenichen granulat",
                    'wheat', 'subcategory',
                    "pshenichen granulat","пшеничен гранулат"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЗЪРНЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["brashno-ot-limets",
                    'grain', 'subcategory',
                    "brashno ot limets","брашно от лимец"],

                ["byalo-brashno",
                    'grain', 'subcategory',
                    "byalo brashno","бяло брашно"],
                
                ["orizovo-brashno",
                    'grain', 'subcategory',
                    "orizovo brashno","оризово брашно"],

                ["palnozarnesto-brashno",
                    'grain', 'subcategory',
                    "palnozarnesto brashno","пълнозърнесто брашно"],

                ["spelta",
                    'grain', 'subcategory',
                    "spelta","спелта"],
                
                ["tsarevichno-brashno",
                    'grain', 'subcategory',
                    "tsarevichno brashno","царевично брашно"],

            ],



            'mushrooms' => [

                ["-", "category", "subcategory", "-","ГЪБИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["gabi",
                    'category', 'subcategory',
                    "gabi","гъби"],
                
                ["gabi-kladnitsa",
                    'category', 'subcategory',
                    "gabi kladnitsa","гъби кладница"],
                
                ["gabi-pachi-krak",
                    'category', 'subcategory',
                    "gabi pachi krak","гъби пачи крак"],
                    
                ["manatarki",
                    'category', 'subcategory',
                    "manatarki","манатарки"],
                    
                ["pechurki",
                    'category', 'subcategory',
                    "pechurki","печурки"],

            ],



            'nuts' => [
                
                ["-", "category", "subcategory", "-","ЯДКИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["bademi",
                    'category', 'subcategory',
                    "bademi","бадеми"],
                
                ["echemicheni-yadki",
                    'category', 'subcategory',
                    "echemicheni yadki","ечемичени ядки"],
                
                ["kashu",
                    'category', 'subcategory',
                    "kashu","кашу"],

                ["kedrovi-yadki",
                    'category', 'subcategory',
                    "kedrovi yadki","кедрови ядки"],
                
                ["leblebiya",
                    'category', 'subcategory',
                    "leblebiya","леблебия"],
                
                ["oveseni-yadki",
                    'category', 'subcategory',
                    "oveseni yadki","овесени ядки"],

                ["orehi",
                    'category', 'subcategory',
                    "orehi","орехи"],

                ["pshenichni-yadki",
                    'category', 'subcategory',
                    "pshenichni yadki","пшенични ядки"],

                ["razheni-yadki",
                    'category', 'subcategory',
                    "razheni yadki","ръжени ядки"],

                ["surovi-yadki",
                    'category', 'subcategory',
                    "surovi yadki","сурови ядки"],
                
                ["surovo-kashu",
                    'category', 'subcategory',
                    "surovo kashu","сурово кашу"],

                ["surovi-bademi",
                    'category', 'subcategory',
                    "surovi bademi","сурови бадеми"],
                
                ["surovi-leshnitsi",
                    'category', 'subcategory',
                    "surovi leshnitsi","сурови лешници"],
                
                ["smleni-orehi",
                    'category', 'subcategory',
                    "smleni orehi","смлени орехи"],

                ["fastaci",
                    'category', 'subcategory',
                    "fastaci","фъстъци"],

                ["sham-fustuk",
                    'category', 'subcategory',
                    "sham-fustuk","шам-фъстък"],
            ],



            'seeds' => [
                
                ["-", "category", "subcategory", "-","СЕМЕНА"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["zhito",
                    'category', 'subcategory',
                    "zhito","жито"],
                    
                ["kinoa",
                    'category', 'subcategory',
                    "kinoa","киноа"],
                
                ["cacao",
                    'category', 'subcategory',
                    "cacao","какао"],
            
                ["coffee",
                    'category', 'subcategory',
                    "coffee","кафе"],

                ["leneno-seme",
                    'category', 'subcategory',
                    "leneno seme","ленено семе"],

                ["makovo-seme",
                    'category', 'subcategory',
                    "makovo seme","маково семе"],

                ["surovi-slanchogledovi-semki",
                    'category', 'subcategory',
                    "surovi slanchogledovi semki","сурови слънчогледови семки"],
            
                ["surovi-tikveni-semki",
                    'category', 'subcategory',
                    "surovi tikveni semki","сурови тиквени семки"],

                ["surovi-semena",
                    'category', 'subcategory',
                    "surovi semena","сурови семена"],
                
                ["slanchogledovi-semki",
                    'category', 'subcategory',
                        "slanchogledovi semki","слънчогледови семки"],

                ["semena",
                        'category', 'subcategory',
                        "semena","семена"],
                    
                ["susam",
                        'category', 'subcategory',
                        "susam","сусам"],
                
                ["tikveni-semki",
                    'category', 'subcategory',
                    "tikveni semki","тиквени семки"],
                
                ["chiya",
                    'category', 'subcategory',
                    "chiya","чия"],

            ],



            'spices' => [

                ["-", "category", "subcategory", "-","ПОДПРАВКИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["bahar",
                    'category', 'subcategory',
                    "bahar","бахар"],
                
                ["bakpulver",
                    'category', 'subcategory',
                    "bakpulver","бакпулвер"],

                ["bosilek",
                    'category', 'subcategory',
                    "bosilek","босилек"],

                ["vaniliya",
                    'category', 'subcategory',
                    "vaniliya","ванилия"], 

                ["dafinov-list",
                    'category', 'subcategory',
                    "dafinov list","дафинов лист"],
                
                ["dzhodzhen",
                    'category', 'subcategory',
                    "dzhodzhen","джоджен"],
                
                ["devesil",
                    'category', 'subcategory',
                    "devesil","девесил"],

                ["dzhindzhifil",
                    'category', 'subcategory',
                    "dzhindzhifil","джинджифил"],
                
                ["indiysko-orehche",
                    'category', 'subcategory',
                    "indiysko orehche","индийско орехче"],

                ["kanela",
                    'category', 'subcategory',
                    "kanela","канела"],
                
                ["koriandar",
                    'category', 'subcategory',
                    "koriandar","кориандър"],
                
                ["kurkuma",
                    'category', 'subcategory',
                    "kurkuma","куркума"],
                
                ["karamfil",
                    'category', 'subcategory',
                    "karamfil","карамфил"],
                
                ["kimion",
                    'category', 'subcategory',
                    "kimion","кимион"],
                
                ["kari",
                    'category', 'subcategory',
                    "kari","къри"],
                
                ["kardamon",
                    'category', 'subcategory',
                    "kardamon","кардамон"],

                ["kopar",
                    'category', 'subcategory',
                    "kopar","копър"],

                ["limontozu",
                    'category', 'subcategory',
                    "limontozu","лимонтозу"],
                
                ["magdanoz",
                    'category', 'subcategory',
                    "magdanoz","магданоз"],

                ["morska-sol",
                    'category', 'subcategory',
                    "morska sol","морска сол"],
                
                ["pipereni-zarna",
                    'category', 'subcategory',
                    "pipereni zarna","пиперени зърна"],
            
                ["rigan",
                    'category', 'subcategory',
                    "rigan","риган"],

                ["rozmarin",
                    'category', 'subcategory',
                    " rozmarin","розмарин"],

                ["sol",
                    'category', 'subcategory',
                    "sol","сол"],
                
                ["soda-bikarbonat",
                    'category', 'subcategory',
                    "soda-bikarbonat","сода бикарбонат"],

                ["sminduh",
                    'category', 'subcategory',
                    "sminduh","сминдух"],

                ["himalaiska-sol",
                    'category', 'subcategory',
                    "himalaiska sol","хималайска сол"],

                ["tselina",
                    'category', 'subcategory',
                    "tselina","целина"],

                ["chili",
                    'category', 'subcategory',
                    "chili","чили"],

                ["cheren-piper",
                    'category', 'subcategory',
                    "cheren piper","черен пипер"],

                ["cherven-piper",
                    'category', 'subcategory',
                    "cherven piper","червен пипер"],

                ["red-hot-pepper",
                    'category', 'subcategory',
                    "red-hot-pepper","червен лют пипер"],
                
                ["chubritsa",
                    'category', 'subcategory',
                    "chubritsa","чубрица"],
                    
                ["sharena-sol",
                    'category', 'subcategory',
                    "sharena-sol","шарена сол"],

                ["shafran",
                    'category', 'subcategory',
                    "shafran","шафран"],

            ],



            'herbs' => [

                ["-", "category", "subcategory", "-","БИЛКИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
            
                ["kopriva",
                    'category', 'subcategory',
                    "kopriva","коприва"],     
                
                ["lazarkinya",
                    'category', 'subcategory',
                    "lazarkinya","лазаркиня"],
                
                ["menta",
                    'category', 'subcategory',
                    "menta","мента"],
                
                ["mashterka",
                    'category', 'subcategory',
                    "mashterka","мащерка"],
                
                ["mascherka-diva",
                    'category', 'subcategory',
                    "mascherka diva","мащерка дива"],
                
                ["rigan",
                    'category', 'subcategory',
                    "rigan","риган"],
                
                ["rozmarin",
                    'category', 'subcategory',
                    "rozmarin","розмарин"],
                
                ["salviya",
                    'category', 'subcategory',
                    "salviya","салвия"],
                
                ["tsikoriya",
                    'category', 'subcategory',
                    "tsikoriya","цикория"],  
                
            ],



            'eggs' => [
                
                ["-", "category", "subcategory", "-","ЯЙЦА"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["beltatsi",
                    'category', 'subcategory',
                    "beltatsi","белтъци"],
                
                ["vareni-yaytsa",
                    'category', 'subcategory',
                    "vareni yaytsa","варени яйца"],
                
                ["zhaltatsi",
                    'category', 'subcategory',
                    "zhaltatsi","жълтъци"],

                ["mayoneza",
                    'category', 'subcategory',
                    "mayoneza","майонеза"],

                ["padpadachi-yaytsa",
                    'category', 'subcategory',
                    "padpadachi yaytsa","пъдпъдъчи яйца"],
                
                ["yaytsa",
                    'category', 'subcategory',
                    "yaytsa","яйца"],
                
            ],



            'milk' => [

                ["-", "category", "subcategory", "-","МЛЕЧНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["gotvarska-smetana",
                    'category', 'subcategory',
                    "gotvarska smetana","готварска сметана"],
                
                ["zakvasena-smetana",
                    'category', 'subcategory',
                    "zakvasena smetana","заквасена сметана"],
                
                ["kiselo-mlyako",
                    'category', 'subcategory',
                    "kiselo mlyako","кисело мляко"],
                
                ["pryasno-mlyako",
                    'category', 'subcategory',
                    "pryasno mlyako","прясно мляко"],
                
                ["suho-mlyako",
                    'category', 'subcategory',
                    "suho mlyako","сухо мляко"],
                
                ["sladkarska-smetana",
                    'category', 'subcategory',
                    "sladkarska smetana","сладкарска сметана"],

                ["tsedeno kiselo mlqko ",
                    'category', 'subcategory',
                    "tsedeno kiselo mlqko","цедено кисело мляко"],

            ],



            'cheese' => [

                ["-", "category", "subcategory", "-","СИРЕНА"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["bri",
                    'category', 'subcategory',
                    "bri","бри"],

                ["izvara",
                    'category', 'subcategory',
                    "izvara","извара"],

                ["kamember",
                    'category', 'subcategory',
                    "kamember","камембер"],

                ["krema-sirene",
                    'category', 'subcategory',
                    "krema sirene","крема сирене"],
                
                ["kashkaval",
                    'category', 'subcategory',
                    "kashkaval","кашкавал"],

                ["motsarela",
                    'category', 'subcategory',
                    "motsarela","моцарела"],

                ["maskarpone",
                    'category', 'subcategory',
                    "maskarpone","маскарпоне"],

                ["parmezan",
                    'category', 'subcategory',
                    "parmezan","пармезан"],
                
                ["sirene",
                    'category', 'subcategory',
                    "sirene","сирене"],

                ["sinyo-sirene",
                    'category', 'subcategory',
                    "sinyo sirene","синьо сирене"],
                
                ["topeno-sirene",
                    'category', 'subcategory',
                    "topeno sirene","топено сирене"],
                
            ],



            'fish' => [

                ["-", "category", "subcategory", "-","МОРСКИ ДЕЛИКАТЕСИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["krab",
                    'seafood', 'subcategory',
                    "krab","краб"],

                ["kalmari",
                    'seafood', 'subcategory',
                    "kalmari","калмари"],

                ["midi",
                    'seafood', 'subcategory',
                    "midi","миди"],

                ["oktopodi",
                    'seafood', 'subcategory',
                    "oktopodi","октоподи"],

                ["raci",
                    'seafood', 'subcategory',
                    "raci","раци"],

                ["skaridi",
                    'seafood', 'subcategory',
                    "skaridi","скариди"],

                ["stridi",
                    'seafood', 'subcategory',
                    "stridi","стриди"],

                ["sepii",
                    'seafood', 'subcategory',
                    "sepii","сепии"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","МАРИНОВАНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["anshoa",
                    'marinated', 'subcategory',
                    "anshoa","аншоа"],

                ["akula",
                    'marinated', 'subcategory',
                    "akula","акула"],
                
                ["pasturva",
                    'marinated', 'subcategory',
                    "pasturva","пъстърва"],

                ["pangasius",
                    'marinated', 'subcategory',
                    "pangasius","пангасиус"],

                ["skumriya",
                    'marinated', 'subcategory',
                    "skumriya","скумрия"],

                ["safrid",
                    'marinated', 'subcategory',
                    "safrid","сафрид"],

                ["syomga",
                    'marinated', 'subcategory',
                    "syomga","сьомга"],

                ["tilapiya",
                    'marinated', 'subcategory',
                    "tilapiya","тилапия"],

                ["tricona",
                    'marinated', 'subcategory',
                    "tricona","трицона"],
                
                ["heringa-file",
                    'marinated', 'subcategory',
                    "heringa-file","херинга филе"],

                ["heringa-salata",
                    'marinated', 'subcategory',
                    "heringa-salata","херинга салата"],

                ["shproti",
                    'marinated', 'subcategory',
                    "shproti","шпроти"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ОХЛАДЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["byal amur",
                    'cool', 'subcategory',
                    "byal amur","бял амур"],

                ["kefal",
                    'cool', 'subcategory',
                    "kefal","кефал"],

                ["kostur",
                    'cool', 'subcategory',
                    "riba ton","костур"],

                ["lavrak",
                    'cool', 'subcategory',
                    "lavrak","лаврак"],

                ["palamud",
                    'cool', 'subcategory',
                    "palamud","паламуд"],

                ["pasturva",
                    'cool', 'subcategory',
                    "pasturva","пъстърва"],
                
                ["riba-ton",
                    'cool', 'subcategory',
                    "riba ton","риба тон"],
                
                ["riba-mech",
                    'cool', 'subcategory',
                    "riba mech","риба меч"],

                ["sardini",
                    'cool', 'subcategory',
                    "sardini","сардини"],

                ["safrid",
                    'cool', 'subcategory',
                    "safrid","сафрид"],

                ["siomga",
                    'cool', 'subcategory',
                    "siomga","сьомга"],

                ["som",
                    'cool', 'subcategory',
                    "som","сом"],

                ["skumriya",
                    'cool', 'subcategory',
                    "skumriya","скумрия"],

                ["tolostolob",
                    'cool', 'subcategory',
                    "tolostolob","толостолоб"],

                ["tsipura",
                    'cool', 'subcategory',
                    "tsipura","ципура"],
                
                ["sharan",
                    'cool', 'subcategory',
                    "sharan","шаран"],

                ["shtuka",
                    'cool', 'subcategory',
                    "shtuka","щука"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПУШЕНИ РИБИ И ХАЙВЕРИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["palamud-pushen",
                    'smoked_caviar', 'subcategory',
                    "palamud-pushen","паламуд-пушен"],

                ["pasturva-pushena",
                    'smoked_caviar', 'subcategory',
                    "pasturva-pushena","пастърва-пушена"],

                ["razbit haiver",
                    'smoked_caviar', 'subcategory',
                    "razbit haiver","разбит хайвер"],

                ["syomga-pushena",
                    'smoked_caviar', 'subcategory',
                    "syomga-pushena","сьомга-пушена"], 
                    
                ["skumriya-pushena",
                    'smoked_caviar', 'subcategory',
                    "skumriya-pushena","скумрия-пушена"],

                ["safrid-pushen",
                    'smoked_caviar', 'subcategory',
                    "safrid-pushen","сафрид-пушен"],

                ["tarama haiver",
                    'smoked_caviar', 'subcategory',
                    "tarama haiver","тарама хайвер"],

                ["chiruz",
                    'smoked_caviar', 'subcategory',
                    "chiruz","чируз"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","СТЕРИЛИЗИРАНИ РИБНИ КОНСЕРВИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["riba ton",
                    'sterilized_fish_cans', 'subcategory',
                    "riba ton","риба тон"],
                
                ["skumriya",
                    'sterilized_fish_cans', 'subcategory',
                    "skumriya","скумрия"],

                ["sardini",
                    'sterilized_fish_cans', 'subcategory',
                    "sardini","сардини"],

                ["heringa",
                    'sterilized_fish_cans', 'subcategory',
                    "heringa","херинга"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПЪРЖЕНИ И ПЕЧЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["raci",
                    'fried_baked', 'subcategory',
                    "raci","раци"],

                ["tsatsa",
                    'fried_baked', 'subcategory',
                    "tsatsa","цаца"],

                ["safrid",
                    'fried_baked', 'subcategory',
                    "safrid","сафрид"],

                ["syomga",
                    'fried_baked', 'subcategory',
                    "syomga","сьомга"],

                ["pangasius",
                    'fried_baked', 'subcategory',
                    "pangasius","пангасиус"],

                ["pasturva",
                    'fried_baked', 'subcategory',
                    "pasturva","пъстърва"],

                ["palamud",
                    'fried_baked', 'subcategory',
                    "palamud","паламуд"],

                ["skumriya",
                    'fried_baked', 'subcategory',
                    "skumriya","скумрия"],

                ["hek",
                    'fried_baked', 'subcategory',
                    "hek","хек"],

                ["byala riba",
                    'fried_baked', 'subcategory',
                    "byala riba","бяла риба"],

                ["sharan",
                    'fried_baked', 'subcategory',
                    "sharan","шаран"],

                ["som",
                    'fried_baked', 'subcategory',
                    "som","сом"],

                ["kalmari",
                    'fried_baked', 'subcategory',
                    "kalmari","калмари"],



                ["-", "category", "subcategory", "-", ""],    
                ["-", "category", "subcategory", "-","ЗАМРАЗЕНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["akula",
                    'frozen', 'subcategory',
                    "akula","акула"],

                ["byala riba",
                    'frozen', 'subcategory',
                    "byala riba","бяла риба"],

                ["palamud",
                    'frozen', 'subcategory',
                    "palamud","паламуд"],

                ["pangasius",
                    'frozen', 'subcategory',
                    "pangasius","пангасиус"],

                ["som",
                    'frozen', 'subcategory',
                    "som","сом"],

                ["skumriya",
                    'frozen', 'subcategory',
                    "skumriya","скумрия"],

                ["tilapiya",
                    'frozen', 'subcategory',
                    "tilapiya","тилапия"],
                
                ["hek",
                    'frozen', 'subcategory',
                    "hek","хек"],

                ["caca",
                    'frozen', 'subcategory',
                    "caca","цаца"],

                ["sharan",
                    'frozen', 'subcategory',
                    "sharan","шаран"],
                
                ["shtuka",
                    'frozen', 'subcategory',
                    "shtuka","щука"],    
                    
            ],



            'meat' => [

                ["-", "category", "subcategory", "-","АГНЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["agneshko",
                    'lamb', 'subcategory',
                    "agneshko","агнешко"],
                
                ["agneshka-pleshka",
                    'lamb', 'subcategory',
                    "agneshka pleshka","агнешка плешка"],

                ["chrevtsa",
                    'lamb', 'subcategory',
                    "chrevtsa","чревца"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ГОВЕЖДО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["govejdo-meso",
                    'beef', 'subcategory',
                    "zaeshko meso","говеждо месо"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ДРУГИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["kayma",
                    'category', 'subcategory',
                    "kayma","кайма"],
                
                ["nadenitsa",
                    'category', 'subcategory',
                    "nadenitsa","наденица"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЕЛЕНСКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["elensko-meso",
                    'venison', 'subcategory',
                    "zaeshko meso","еленско месо"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЗАЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["zaeshko-meso",
                    'category', 'subcategory',
                    "zaeshko meso","заешко месо"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","КОЗЕ"],
                ["-", "category", "subcategory", "-","--------------------------"],
    
                    ["koze-meso",
                        'goat', 'subcategory',
                        "zaeshko meso","козе месо"],
    


                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ОВЧЕ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["ovche-meso",
                    'sheep', 'subcategory',
                    "zaeshko meso","овче месо"],


                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПАТЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["pateshko-meso",
                    'duck', 'subcategory',
                    "zaeshko meso","патешко месо"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПУЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["turkey-meso",
                    'category', 'subcategory',
                    "zaeshko meso","пуешко месо"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ПИЛЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["pileshko-meso",
                    'chicken', 'subcategory',
                    "pileshko meso","пилешко месо"],    

                ["pileshki-butcheta",
                    'chicken', 'subcategory',
                    "pileshki butcheta","пилешки бутчета"],
                
                ["pileshki-sartsa",
                    'chicken', 'subcategory',
                    "pileshki sartsa","пилешки сърца"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","СВИНСКО"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["bekon",
                    'pork', 'subcategory',
                    "bekon","бекон"],

                ["svinsko-meso",
                    'pork', 'subcategory',
                    "svinsko meso","свинско месо"],
                
                ["svinski-dzholan",
                    'pork', 'subcategory',
                    "svinski dzholan","свински джолан"],
                
                ["cheren-drob",
                    'pork', 'subcategory',
                    "cheren drob","черен дроб"],
                    
                ["hamon",
                    'pork', 'subcategory',
                    "hamon","хамон"],

                ["shkembe",
                    'pork', 'subcategory',
                    "shkembe","шкембе"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ТЕЛЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["teleshko-meso",
                    'category', 'subcategory',
                    "teleshko meso","телешко месо"],
                
                ["teleshki-dzholan",
                    'category', 'subcategory',
                    "teleshki dzholan","телешки джолан"],
                
                

                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЯРЕШКО"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["yareshko-meso",
                    'kid', 'subcategory',
                    "zaeshko meso","ярешко месо"],


            ],



            'drinks' => [
                
                ["-", "category", "subcategory", "-","НАПИТКИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["byalo-vino",
                    'category', 'subcategory',
                    "byalo vino","бяло вино"],

                ["bira",
                    'category', 'subcategory',
                    "bira","бира"],

                ["vodka",
                    'category', 'subcategory',
                    "vodka","водка"],
            
                ["voda",
                    'category', 'subcategory',
                    "voda","вода"],
            
                ["gazirana-voda",
                    'category', 'subcategory',
                    "gazirana voda","газирана вода"],

                ["djin",
                    'category', 'subcategory',
                    "djin","джин"],

                ["konyak",
                    'category', 'subcategory',
                    "konyak","коняк"],
                
                ["marsala",
                    'category', 'subcategory',
                    "marsala","марсала"],

                ["rakiya",
                    'category', 'subcategory',
                    "rakiya","ракия"],

                ["rom",
                    'category', 'subcategory',
                    "rom","ром"],

                ["wiskey",
                    'category', 'subcategory',
                    "wiskey","уиски"],
                
                ["cherveno-vino",
                    'category', 'subcategory',
                    "cherveno vino","червено вино"],
            ],



            'bee-products' => [

                ["-", "category", "subcategory", "-","ПЧЕЛНИ ПРОДУКТИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["pchelen med ",
                    'category', 'subcategory',
                    "pchelen med","пчелен мед"],

                ["akaciev med",
                    'category', 'subcategory',
                    "pchelen med","акациев мед"],

                ["lipov med",
                    'category', 'subcategory',
                    "pchelen med","липов мед"],
            ],



            'food-fats' => [

                ["-", "category", "subcategory", "-","РАСТИТЕЛНИ МАЗНИНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["zehtin",
                    'vegie_fats', 'subcategory',
                    "zehtin","зехтин"],
                
                ["leneno-maslo",
                    'vegie_fats', 'subcategory',
                    "leneno maslo","ленено масло"],

                ["olio",
                    'vegie_fats', 'subcategory',
                    "olio","олио"],



                ["-", "category", "subcategory", "-", ""],
                ["-", "category", "subcategory", "-","ЖИВОТИНСКИ МАЗНИНИ"],
                ["-", "category", "subcategory", "-","--------------------------"],
                
                ["krave-maslo",
                    'animal_fats', 'subcategory',
                    "krave maslo","краве масло"],

                ["svinska-mas",
                    'animal_fats', 'subcategory',
                    "svinska mas","свинска мас"],  
            ],



            'others' => [

                ["-", "category", "subcategory", "-","ДРУГИ"],
                ["-", "category", "subcategory", "-","--------------------------"],

                ["balsamov-otset",
                    'category', 'subcategory',
                    "balsamov otset","балсамов оцет"],

                ["bishkoti",
                    'category', 'subcategory',
                    "bishkoti","бишкоти"],

                ["bergamotovo-maslo",
                    'category', 'subcategory',
                    "bergamotovo maslo","бергамотово масло"],

                ["bulyon",
                    'category', 'subcategory',
                    "bulyon","бульон"],

                ["galeta",
                    'category', 'subcategory',
                    "galeta","галета"],

                ["domateno-pyure",
                    'category', 'subcategory',
                    "domateno pyure","доматено пюре"],
                
                ["espreso",
                    'category', 'subcategory',
                    "espreso","еспресо"],

                ["zahar",
                    'category', 'subcategory',
                    "zahar","захар"],

                ["karameleni-bonboni",
                    'category', 'subcategory',
                    "karameleni bonboni","карамелени бонбони"],

                ["kokosovo-mlyako",
                    'category', 'subcategory',
                    "kokosovo mlyako","кокосово мляко"],
                
                ["kokosovo-maslo",
                    'category', 'subcategory',
                    "kokosovo maslo","кокосово масло"],

                ["kokosovi-stargotini",
                    'category', 'subcategory',
                    "kokosovi stargotini","кокосови стърготини"],

                ["kus-us",
                    'category', 'subcategory',
                    "kus kus","кус кус"],
                
                ["kornfleyks",
                    'category', 'subcategory',
                    "kornfleyks","корнфлейкс"],

                ["lyutenitsa",
                    'category', 'subcategory',
                    "lyutenitsa","лютеница"],

                ["lozovi-lista",
                    'category', 'subcategory',
                    "lozovi lista","лозови листа"],
                
                ["lista-ot-chemshir",
                    'category', 'subcategory',
                    "lista ot chemshir","листа от чемшир"],

                ["lista-ot-maslodayna-roza",
                    'category', 'subcategory',
                    "lista ot maslodayna roza","листа от маслодайна роза"],
                
                ["maya",
                    'category', 'subcategory',
                    "maya","мая"],

                ["maslo-ot-tikveno-seme",
                    'category', 'subcategory',
                    "maslo ot tikveno seme","масло от тиквено семе"],
                
                ["marmalad-",
                    'category', 'subcategory',
                    "marmalad ","мармалад "],

                ["makaroni",
                    'category', 'subcategory',
                    "makaroni","макарони"],

                ["nisheste",
                    'category', 'subcategory',
                    "nisheste","нишесте"],

                ["obiknoveni-biskviti",
                    'category', 'subcategory',
                    "obiknoveni biskviti","обикновени бисквити"],

                ["otset",
                    'category', 'subcategory',
                    "otset","оцет"],

                ["pasta",
                    'category', 'subcategory',
                    "pasta","паста"],

                ["pudra-zahar",
                    'category', 'subcategory',
                    "pudra zahar","пудра захар"],

                ["soleni-biskviti",
                    'category', 'subcategory',
                    "soleni biskviti","солени бисквити"],
                
                ["spageti",
                    'category', 'subcategory',
                    "spageti","спагети"],

                ["sladkarska-boya",
                    'category', 'subcategory',
                    "sladkarska boya","сладкарска боя"],

                ["sladko",
                    'category', 'subcategory',
                    "sladko","сладко"],
                
                ["sladko-ot-borovinki",
                    'category', 'subcategory',
                    "sladko ot borovinki","сладко от боровинки"],
                
                ["steviya",
                    'category', 'subcategory',
                    "steviya","стевия"],

                ["suha-maya",
                    'category', 'subcategory',
                    "suha maya","суха мая"],

                ["susamov-tahan",
                    'category', 'subcategory',
                    "susamov tahan","сусамов тахан"],

                ["tikveni-tsvetove",
                    'category', 'subcategory',
                    "tikveni tsvetove","тиквени цветове"],

                ["tocheni-kori",
                    'category', 'subcategory',
                    "tocheni kori","точени кори"],
                    
                ["fide",
                    'category', 'subcategory',
                    "fide","фиде"],

                ["filiyki-hlyab",
                    'category', 'subcategory',
                    "filiyki hlyab","филийки хляб"],
                
                ["franzela",
                    'category', 'subcategory',
                    "franzela","франзела"],

                ["hlyab",
                    'category', 'subcategory',
                    "hlyab","хляб"],

                ["tsarevichen-gris",
                    'category', 'subcategory',
                    "tsarevichen gris","царевичен грис"],

                ["shokolad",
                    'category', 'subcategory',
                    "shokolad","шоколад"],
            ]

        ];
    
        foreach ($ingredients as $key => $values)
        {
            foreach ($values as $value)
            {
                DB::table('ingredients')->insert([
                    'slug' => mb_strtolower($value[0]),
                    'group' => mb_strtolower($key),
                    'category' => mb_strtolower($value[1]),
                    'en_name' => mb_strtolower($value[3]),
                    'bg_name' => ($value[4]),
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
