<?php  return '<?php 
/** Fenom template \'fe4d181451ae386544909e571ca005e5\' compiled at 2025-02-12 20:40:41 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><!doctype html>
<html lang="ru">
<head itemscope itemtype="http://schema.org/WPHeader">
    <?php
/* base.tpl:4: {insert \'meta.tpl\'} */
 ?><base href="<?php
/* meta.tpl:1: {$_modx->config[\'site_url\']} */
 echo $var["_modx"]->config[\'site_url\']; ?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi">
<meta name="MobileOptimized" content="320">

<link rel="icon" href="https://webartplus.ru/favicon.ico" type="image/x-icon">

<title itemprop="headline"><?php
/* meta.tpl:9: {$_modx->resource.seotitle?:$_modx->resource.pagetitle} */
 echo (empty($var["_modx"]->resource["seotitle"]) ? ($var["_modx"]->resource["pagetitle"]) : $var["_modx"]->resource["seotitle"]); ?></title>

<meta itemprop="description" name="description" content="<?php
/* meta.tpl:11: {$_modx->resource.seodescription} */
 echo $var["_modx"]->resource["seodescription"]; ?>">

<meta itemprop="keywords" name="keywords" content="<?php
/* meta.tpl:13: {$_modx->resource.seokeywords} */
 echo $var["_modx"]->resource["seokeywords"]; ?>">

<link rel="stylesheet" href="assets/template/css/main.min.css">
<?php ?>
</head>
<body>
    <?php
/* base.tpl:7: {insert \'header.tpl\'} */
 ?><?php ?>
    
<h1 class=""><?php
/* fe4d181451ae386544909e571ca005e5:4: {$_modx->resource.seoH1 ?: $_modx->resource.pagetitle} */
 echo (empty($var["_modx"]->resource["seoH1"]) ? ($var["_modx"]->resource["pagetitle"]) : $var["_modx"]->resource["seoH1"]); ?></h1>

    <?php
/* base.tpl:11: {insert \'footer.tpl\'} */
 ?><?php ?>
    <?php
/* base.tpl:12: {insert \'scripts.tpl\'} */
 ?><?php ?>
</body>
</html><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'fe4d181451ae386544909e571ca005e5\',
	\'base_name\' => \'runtime\',
	\'time\' => 0,
	\'depends\' => array (
  0 => 
  array (
    \'base.tpl\' => 0.0,
    \'runtime\' => 0.0,
  ),
),
	\'macros\' => array(),

        ));
';