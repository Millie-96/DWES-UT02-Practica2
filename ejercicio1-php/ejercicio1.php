<?php

$socios = [
    1 => [
        "id" => 1,
        "nombre" => "Victor",
        "apellidos" => "Lopez Martinez",
        "dni" => "78842412A",
        "email" => "victor@martinez.com",
        "telefono" => "697358199",

        "pagos" => [
            "2024-01" => [
                "mes" => "Enero",
                "importe" => 20,
                "estado" => "Pagado",
                "fecha" => "2024-01-05"
            ],
            "2024-02" => [
                "mes" => "Febrero",
                "importe" => 20,
                "estado" => "Pagado",
                "fecha" => "2024-02-05"
            ],
            "2024-03" => [
                "mes" => "Marzo",
                "importe" => 20,
                "estado" => "Pendiente",
                "fecha" => null
            ],
        ]
    ]
];


/*
1 ARRAY INDEXADO
- Es un array donde los elementos van en orden y PHP les pone un número empezando desde 0.
- Es como una lista normal.
- Ejemplo:
    $colores = ["Rojo", "Verde", "Azul"];
- Para acceder:
    echo $colores[0]; Muestra "Rojo" 

2 ARRAY ASOCIATIVO
- Aquí los elementos tienen un nombre en vez de un número.
- Sirve para guardar información más clara.
- Ejemplo:
    $persona = [
        "nombre" => "Victor",
        "edad" => 20
    ];
- Para acceder:
    echo $persona["nombre"]; Muestra "Victor"

3 ARRAY MULTIDIMENSIONAL
- Es un array que tiene otros arrays dentro.
- Se usa cuando queremos guardar información más completa.
- Ejemplo:
    $clase = [
        "alumno1" => [
            "nombre" => "Carlos",
            "nota" => 9
        ],
        "alumno2" => [
            "nombre" => "Lucía",
            "nota" => 8
        ]
    ];
- Para acceder:
    echo $clase["alumno1"]["nota"]; Muestra 9
*/
?>