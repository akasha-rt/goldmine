<div id="SalesFusionDiv" style="width:100%">

	<script type="text/javascript">

		var url = "{$url}";
		
		{literal}		
		function toggleSalesFusionPanel()
		{
			toggleVisibility("salesFusionExpand");
			toggleVisibility("salesFusionCollapse");
			toggleVisibility("SalesFusionFrameDiv");

			if (document.getElementById("salesFusionExpand").style.display == 'none')
			{
				document.getElementById("SalesFusionFrame").src = url;
			}
			
		}

		function toggleVisibility(element)
		{
			if (document.getElementById(element) != null)
			{
				if (document.getElementById(element).style.display == 'none')
				{
					document.getElementById(element).style.display = '';
				}
				else
				{
					document.getElementById(element).style.display = 'none';
				}
			}
		}
		{/literal}		
	</script>

	
	<table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
		<tbody>
			<tr>
				<td nowrap="" style="padding: 0px;padding-top: 5px;">
					<img src="{$logo}" border="0">
					<span id="salesFusionExpand">
						<a href="#" onclick="toggleSalesFusionPanel();"><img src="{$expand}" border="0"></a>
					</span>
					<span id="salesFusionCollapse" style="display: none">
						<a href="#" onclick="toggleSalesFusionPanel()"><img src="{$collapse}" border="0"></a>
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<div id="SalesFusionFrameDiv" style="width:100%;display: none;">
						<iframe id="SalesFusionFrame" src="" width="100%" height="500" frameBorder="0">
							<p>Your browser does not support iframes.</p>
						</iframe>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

</div>