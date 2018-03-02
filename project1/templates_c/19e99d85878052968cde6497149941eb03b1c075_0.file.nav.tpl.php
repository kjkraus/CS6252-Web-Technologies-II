<?php
/* Smarty version 3.1.30, created on 2018-03-02 03:52:32
  from "C:\xampp\htdocs\project1\templates\shared\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98bc705256a0_72806269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e99d85878052968cde6497149941eb03b1c075' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project1\\templates\\shared\\nav.tpl',
      1 => 1519959150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98bc705256a0_72806269 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <a class="navbar-brand" href="index.php?action=show_catalog_page">All</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?action=show_addnew_page">+ Add</a></li>
        <li><a href="index.php?action=show_humor_page">Humor</a></li>
        <li><a href="index.php?action=show_romance_page">Romance</a></li>
        <li><a href="index.php?action=show_birthdays_page">Birthdays</a></li>
         <li><a href="index.php?action=show_congratulations_page">Congratulations</a></li>
        <li><a href="index.php?action=show_apologies_page">Apologies</a></li>
        <li><a href="index.php?action=show_recent_page">Recent</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php?action=show_visitors_page"> Vistors</a></li>
        <li><a href="index.php?action=show_credits_page"> Credits</a></li>
      </ul>
    </div>
  </div>
</nav><?php }
}
