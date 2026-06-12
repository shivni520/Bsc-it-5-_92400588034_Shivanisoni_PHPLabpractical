<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $laptops = [
        "Apple" => [
            [
                "model" => "MacBook Air M3",
                "price" => 1099
            ],
            [
                "model" => "MacBook Pro 16-inch",
                "price" => 2499
            ]
        ],
        "Dell" => [
            [
                "model" => "XPS 13",
                "price" => 999
            ],
            [
                "model" => "Alienware m16",
                "price" => 1899
            ]
        ]
    ];
    
 
    
    echo "\n Multidimensional Array (Laptops) \n";
    print_r($laptops);
    ?>
</body>
</html>