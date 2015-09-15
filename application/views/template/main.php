<?php 
$styles = array(
  'bootstrap/css/bootstrap.min.css',
  'font-awesome/css/font-awesome.min.css',
  'normalize.css',
  'style.css',
  'b64.css',
  'profile.css',
  'gallery.css',
  'override.css',
  'perfect-scroll/perfect-scrollbar.min.css',
  'slider/js-image-slider.css'
);

$scripts = array(
  'jquery/jquery.js',
  'bootstrap/js/bootstrap.min.js',
  'perfect-scroll/perfect-scrollbar.min.js',
  'slider/js-image-slider.js',
  'responsive.js'
);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head>
  <meta charset="utf-8">
  <title>* PMWS *</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <!--                       CSS                       -->
  <?php foreach ($styles as $file) echo '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/'.($file)."\">\n" ?>

  <!--link rel="shortcut icon" href="favicon.ico"-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div id="header-area" class="container-fluid">
 <div class="row">
  <div class='banner'>
   <div class='logo-wrapper'>
      <div class='logo'></div>
      <div id="search-form">
        <a href="#" id="search"><i class="fa fa-search fa-lg"></i></a>
        <form method="get" id="searchform" action="/">
            <input type="text" placeholder="search this site..." name="s" id="searchinput">
        </form>
      </div>
   </div>
   <?php echo $this->load->view('template/navigation.php');?>	 
  </div><!-- end banner -->
 </div><!-- end row -->
</div><!-- end header-area--> 
<?php if($module == 'home') echo $this->load->view('template/slider.php');?>	 
 <main class="container"><?= $contents ?></main>

 <?php echo $this->load->view('template/footer.php');?>

<?php foreach ($scripts as $file) echo '<script type="text/javascript" src="'.base_url().'assets/'.($file)."\"></script>\n" ?>
</body>
</html>
