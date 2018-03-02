{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
  <div class="container">
  <h2>TLC Messages > Visitors</h2>
  {foreach item=visitor from=$visitor_catalog}
  <div class="row">
    <div class="col-sm-4">
      <div class="alert alert-success" role="alert">
  		<strong>{$visitor->getSignature()}</strong> visited on {$visitor->getDate()}
	  </div>		    
    </div>
  </div>
<div>
{/foreach}
</main>
{include file='shared/footer.tpl'}