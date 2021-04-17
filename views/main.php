<!DOCTYPE html>
<html>
<head>
    <?php require_once("controllers/refer.php");?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147541185-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147541185-1');
</script>

</head>
<body>

    <div class="wrapper ">
       
        <?php require_once("controllers/header.php");?>
                                                                                                    
        <?php require_once($link_call);?>
      
        <?php require_once("controllers/footer.php");?>    
        
    </div>

 
   <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

	
</body>
</html>
