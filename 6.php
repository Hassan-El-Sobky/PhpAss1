<?php


$arrData=[
  [
    'name' => 'ahmed hamdy',
     'job' => 'front-end',
    'experience' => 3
   ],

   [
       'name' => 'mohammed shaker',
       'job' => 'back-end',
       'experience' => 2
   ],

   [
       'name' => 'ali hasan',
       'job' => 'full-stack',
       'experience' => 4
   ],
];


foreach($arrData as $data)
{
  echo $data['name']."<br>";
  echo $data['job']."<br>";
  echo $data['experience']."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
  <?php foreach($arrData as $data) { ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=  $data['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=  $data['job'];?></h6>
    <p class="card-text"><?=  $data['experience'];?></p>
 
  </div>
</div>
<?php }?>
</body>
</html>