<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="/"><span class="oi oi-arrow-left"></span></a>
      

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        </ul>
        
      </div>
    </nav>

    <main role="main" class="container">

      	<div class="starter-template" style="padding-top: 70px"; >
        	
      		<div class="card">
			  <div class="card-header">
			    <h3><?=$course->title?></h3>
			  </div>
			  <div class="card-body">
			    <p class="card-text"><?=$course->description?></p>
			    <p class="card-text"><span class="oi oi-calendar"></span> <?= $course->finish == "" ? date('d',strtotime($course->start))." de ".date('M',strtotime($course->start))." de ".date('Y',strtotime($course->start))  : "De ". date('d/m',strtotime($course->start)) ." a ". date('d/m/y',strtotime($course->finish))?></p>
			    <p class="card-text"><span class="oi oi-clock"></span> <?= $course->finish == "" ? date('H:i',strtotime($course->start)) : "De ". date('H:i',strtotime($course->start)) ." às ". date('H:i',strtotime($course->finish)) . " - ". date('H:i',strtotime($course->finish) - strtotime($course->start))."h"  ?></p>
			    <a href=".../../"><p class="card-text"><span class="oi oi-map-marker"></span> <?=$course->street?><br><?=$course->city?></p></a>
			    <p class="card-text"><span class="oi oi-dollar"></span> R$<?= str_replace('.',',',$course->price) ?></p>
			    <p class="card-text"><span class="oi oi-tag"></span> <?=$course->category?></p>
			    <p class="card-text"><img src=<?=$course->avatar?> class="img-circle" alt="professora" width="50" height="20"> <?=$course->name?></p>
			    <a href="#" class="btn btn-primary">INSCRIÇÃO</a>
			  </div>
			</div>

      	</div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>




		
