         <!--Start First Row Content -->
         
<!-- Start First row's content  -->
<!-- Start Blog -->
<div class="row">
	<h2><?php echo $subtitle; ?></h2>
		<div class="large-6 columns">
			
			<h3><?php echo $browse_doc; ?></h3>
		
			<div class="module">
				<ul class="bulleted-list">
				    <li>Type</li>
				    <ul>
				    	<li><?php echo anchor("index/doc_by_agency/PRORULE", "Proposed Rules", "title='Proposed Rules'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/RULE", "Final Rules", "title='Final Rules'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/NOTICE", "Notices", "title='Notices'"); ?></li>
				    	<li><?php echo anchor("index/doc_by_agency/PRESDOCU", "Presidential Document", "title='Presidential Document'"); ?></li>
				    </ul>
				    <li><?php echo anchor("index/agency", "Agency", "title='Agency'"); ?></li>
				    <li><a href="#">Date</a></li>
				</ul>
			</div>	
		</div>
<!-- End End Blog -->
</div>
<!-- End First row's content  --> 
