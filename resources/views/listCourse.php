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
    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="/">Cursos</a>
       <form class="form-inline md-form form-sm mt-0" action="/search">
		  <i class="fa fa-search" aria-hidden="true"></i>
		  <input class="form-control form-control-sm ml-3 w-75" name=word type="text" placeholder="Search" aria-label="Search">
		</form>
       
      

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
         
        </ul>
        
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template" style="padding-top: 70px";  >
        <div class="card-deck">
			<?php foreach ($object as $item):?>
				<?php $end = "/course/show?id=".$item->id ?>
				<a href=<?=$end?>>
					<div class="card text-white bg-primary mb-3" style="min-width: 21rem; max-width: 21rem;" >
						<div class="card-head"><?= $item->category ?></div>
						<div class="card-body">
							<h5 class="card-title"> <?= $item->title ?> </h5>							
							<p class="card-text"> <?= $item->city ?></p>							
							<div class="card-head"><?= $item->finish == "" ? date('d',strtotime($item->start))." de ".date('M',strtotime($item->start))." de ".date('Y',strtotime($item->start))  : "De ". date('d/m',strtotime($item->start)) ." a ". date('d/m/y',strtotime($item->finish))?> <span class="oi oi-calendar" style="float:right"></span></div>
						</div>
					</div>
				</a>
			<?php endforeach ?>
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




		
		