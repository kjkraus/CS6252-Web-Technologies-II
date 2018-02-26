<?php
/* Smarty version 3.1.30, created on 2018-02-25 20:06:59
  from "C:\xampp\htdocs\project1\templates\shared\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a93095376e8d6_93861978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e99d85878052968cde6497149941eb03b1c075' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\shared\\nav.tpl',
      1 => 1519585617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a93095376e8d6_93861978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php?action=show_home_page">TLC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?action=show_catalog_page">All</a></li>
                <li><a href="index.php?action=show_addnew_page">+ Add</a></li>
        <li><a href="index.php?action=show_humor_page">Humor</a></li>
        <li><a href="index.php?action=show_romance_page">Romance</a></li>
        <li><a href="index.php?action=show_birthdays_page">Birthdays</a></li>
         <li><a href="index.php?action=show_congratulations_page">Congratulations</a></li>
        <li><a href="index.php?action=show_apologies_page">Apologies</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php?action=show_visitors_page"> Vistors</a></li>
        <li><a href="index.php?action=show_credits_page"> Credits</a></li>
      </ul>
    </div>
  </div>
</nav><?php }
}
