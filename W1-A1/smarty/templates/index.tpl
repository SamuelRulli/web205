{config_load file=test.conf section="setup"}
{include file="header.tpl" title=Smarty-template}

<PRE>

{if #bold#}<b>{/if}

Title: {#title#|capitalize}

{if #bold#}</b>{/if}

<b>1 - What is Smarty?  What are some use cases or scenarios that you might use Smart?  Provide explanation and Sample code snippets as needed.</b>

{$Answer}

I created an example below to show some of its features which are basically:

{section name=outer loop=$Advantage}
	{$smarty.section.outer.rownum} . {$Advantage[outer]}
{/section}

All code is available on gitHub at the following address: <a href="{$GitAddress}">www.github.com</a>

{include file="footer.tpl"}
