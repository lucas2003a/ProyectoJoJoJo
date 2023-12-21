<?php

if(isset($_POST["operacion"])){

    $contenido = [
        "lucas" =>[
            "imagen"    => "FL001A",
            "nombres"   => "Lucas Atuncar",    
            "deseo"     => "Te deseo muchos éxitos",
            "mensaje"   => "Hola Lucas te de seo lo mejor par tu vida Hola Lucas te de seo lo mejor par tu vida Hola Lucas te de seo lo mejor par tu vida Hola Lucas te de seo lo mejor par tu vida Hola Lucas te de seo lo mejor par tu vida",
        ],
        "adriana" =>[
            "imagen"    => "FA001D",
            "nombres"   => "Adriana Arlet Durand Buenamarca",
            "deseo"     => "Dios te bendiga y te guarde",
            "mensaje"   => "Le agradesco a Dios por haberme permitido conocerte, gracias por el apoyo y la ayuda que me diste en muchos momentos, pude ver en tí alguien que de verdad se apasiona por Cristo y como una vez te dije, no enconcontré a nadie que me respondiera de tal forma, pido al señor que te cuide y te guíe en toda sabiduría y conocimiento de Él, con todo el amor, deseo que Dios siga guiando tu vida,yo haré lo que pueda en ayudarate siempre que lo necesites, pero que bueno es haberte conocido, y más aún es bueno tener a alguien con quien pueda compartir a Cristo 😊.<hr> Psdt: Disculpame, no pude encontrar una foto tuya, busque hasta en la RENIEC, pero esa foto, es el unico recuerdo que tengo de tí, ojala te guste",
        ],
        "yorghet" =>[
            "imagen"    => "FY001Y",
            "nombres"   => "Yorghet Fernanda Hernandez Yeren",
            "deseo"     => "Te deseo muchos éxitos y bendiciones",
            "mensaje"   => "Creo que despues de tantos conflictos y discusiones formales que tuvimos concluí que apesar de todo buscas dar lo mejor de tí, claro como tu mismo lo has dicho y como también te he dicho hay cosas por mejorar en nuestra actitud, pero te he conocido más y veo que eres alguien que está buscando siempre esforzarse, lograr las cosas de una manera correcta, sabes lo mucho que te aprecio y que en lo que pueda te ayudaré deseo que en esta navidad Jesús nazca en tu corazón.",
        ],
        "alonso" =>[
            "imagen"    => "FA001A",
            "nombres"   => "Alonso Enrrique Muñoz Quispe",
            "deseo"     => "Te deseo muchos éxitos y bendiciones",
            "mensaje"   => "Por estas fechas te quiero desear muchos exitos y bendiciones, apenas creo que hemos socializado pero te agradezco mucho toda la ayuda que me diste sin esperar nada a cambio, no te subestimo, creo que tienes mucho potencial por eso te aliento a que sigas aprendiendo lo más que puedas, que en esta navidad Cristo nazca en tu corazón y en el de toda tu familia, y los colme de su paz que sobrepaza todo entendimiento.",
        ],
        "luis" =>[
            "imagen"    => "FL001L",
            "nombres"   => "Luis Miguel Llancary Vicerrel",
            "deseo"     => "Te deseo muchos éxitos y bendiciones",
            "mensaje"   => "Muy buena experciencia el haber trabajo contigo, cuando se acabaron todos los trabajos recuerdas que dijiste que las noches seríam mas aburridas?? xD, bueno lamento varias noches el haberte levantado de madrugadam y agradesco tu paciencia por enseñarme sinceramente extraño las reuniones con la jefa, en esta navidad lo mejor que te puedo desear es que Jesús nazca en tu corazon, y Él colme de felicidad a tu familia y tu corazón sea lleno de Él plenamente. <hr> Psdt: No si es tu foto, pero te pareses xD.",
        ],
        "jhon" =>[
            "imagen"    => "FJ001J",
            "nombres"   => "Inst. Jhon Edward Francia Minaya",
            "deseo"     => "Le deseo muchos éxitos y bendiciones, para usted y toda su familia",
            "mensaje"   => "Gracias por el gran desempeño en su labor como instructor, por ese afan de enseñarnos de todas las formas posibles con el objetivo de hacer crecer a sus alumos, por su rectitud e imparcialidad, que dicho sea de paso no es común ver en las personas de hoy. <br> Gracias por su compromiso, su entrega, el respeto que tiene a sus alumnos, y tambien quiero felicitarlo, porque se que todo lo que usted ha hecho y hace, todo eso bueno se que Dios lo bendice por que el es justo, y asi mismo, deseo que en esta navidad Dios reine en su hogar y los colme de mucha felicidad y bendiciones 🤗.",
        ],
        "hector" =>[
            "imagen"    => "FH001H",
            "nombres"   => "Hector Oliva",
            "deseo"     => "Que Dios te de paz y mucho amor",
            "mensaje"   => "Hector, que en esta navidad puedas comprender que el verdadero significado, es que Jesús nace, para que así nazca en tí la esperanza y el amor que se necesita para enfrentar la vida, y verdaderamente vivir, y vivir eternamente, apesar de los dolores, que Cristo nunca te falte y sea el tu soporte y ayuda en todos los momentos de tu vida, que el perdone todos tus pecados, sigue la justicia la verdad y el amor, que la esperanza de Cristo, brille en ti hoy y siempre.",
        ]
    ];


    switch($_POST["operacion"]){
        case "1": 
            //in_array = verifica si existe un valor en el array NO UNA CLAVE
            //array_key_exists

            if(array_key_exists($_POST["nombre"],$contenido)){

                $datosRecibidos = [$_POST["nombre"]];
    
                $datosMostrar = $contenido[$datosRecibidos[0]];

                echo json_encode($datosMostrar);
            }else{

                $respuesta = [
                    "imagen"    => "gatito",
                    "nombres"   => "estimado amigo",
                    "deseo"     => "Éxitos",
                    "mensaje"   => "bendiciones"
                ];

                echo json_encode($respuesta);
            }

        break;
    }
}