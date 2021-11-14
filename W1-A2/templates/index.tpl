{config_load file=setup.conf section="setup"}

{include file="header.tpl" title=Smarty-template}

<div class="w3-container">

	<PRE>

	{if #bold#}<b>{/if}

	<h4>About Smarty:</h4>

	<i>{$aboutSmarty|escape}</i>

	<h4>The Philosophy:</h4>

	<i>The Smarty design was largely driven by these goals:</i>

	<i>
	{section name=outer loop=$thePhilosophy}
		{$smarty.section.outer.rownum} . {$thePhilosophy[outer]}
	{/section}
	</i>

	<h4>Other Template Engines:</h4>

	<i>{$engines}</i>

</div>
{include file="footer.tpl"}
