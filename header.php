<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html>
  <head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(false); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <?$APPLICATION->ShowPanel();?>
    <h1><? $APPLICATION->ShowTitle(); ?></h1>
