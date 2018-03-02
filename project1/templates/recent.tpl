{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
<div class="container">   
<h2>Recently Added</h2> 
  {foreach item=message from=$message_catalog}
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">{$message->getCategory()}
          <div class="panel-title pull-right">Author: {$message->getAuthor()}</div>
        </div>
        <div class="panel-body">
          <img src="{$message->getImage()}" class="img-responsive" style="width:100%" alt="Image">
          {$message->getMessage()}
        </div>
      </div>
    </div>
    {/foreach}
</div> <br>  
</main>

{include file='shared/footer.tpl'}