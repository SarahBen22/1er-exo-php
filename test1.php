<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
    <link rel="stylesheet" href="./index.css" type="text/css" />
  </head>

  <body>

    <?php
    $a= false;
    $b=0;

//Titres&renseignements--

$Livre1 = array(
  'titre'=> 'La fille de papier',
  'prix'=> '10€',
  'note'=> 4,
  'prime'=>True
     );

$Livre2 = array(
  'titre'=> 'Harry Potter',
   'prix'=> '25€',
   'note'=> 3,
   'prime'=>False
 );
 $Livre3 = array(
   'titre'=> 'Andromaque',
    'prix'=> '13€',
    'note'=> 6,
    'prime'=>False
  );

  $Livre4 = array(
    'titre'=>'Les misérables',
     'prix'=> '7€',
     'note'=> 5,
     'prime'=>False
   );

   $Livre5 = array(
     'titre'=>'L Atelier de Roxanne',
      'prix'=> '5€',
      'note'=>2,
      'prime'=>False
    );

    $Livre6 = array(
      'titre'=>'Le mariage de Figaro',
       'prix'=> '3€',
       'note'=> 9,
       'prime'=>True
     );

     $Livre7 = array(
       'titre'=>'Hanger games',
        'prix'=> '39€',
        'note'=>10,
        'prime'=>True
      );

      $Livre8 = array(
        'titre'=>'Le Seigneur des anneaux',
         'prix'=> '10€',
         'note'=>6,
         'prime'=>True
       );

       $Livre9 = array(
         'titre'=>'Le manuscrit inachevé',
          'prix'=> '45€',
          'note'=>2,
          'prime'=>False
        );

        $Livre10 = array(
          'titre'=>'Orgeuil et préjugés',
           'prix'=> '10€',
           'note'=>9,
           'prime'=>False
         );

         //le détail de mes livres

$Library= array ($Livre1,$Livre2,$Livre3,$Livre4,$Livre5,$Livre6,$Livre7,$Livre8,$Livre9,$Livre10);
foreach($Library as $Livres){
  if ($Livres ['prime']== True) {
    echo '<ul> <li>'.$Livres ['titre']. '</li><li>'.$Livres['prix'].'</li><li>'.$Livres['note'].'</li><li>'.'prime</li></ul>';

  }
  else {
  echo '<ul> <li>'.$Livres ['titre']. '</li><li>'.$Livres['prix'].'</li><li>'.$Livres['note'].'</li><li>'.'Non prime</li></ul>';


  }
}

     ?>
  </body>
</html>
