<?php

include_once __DIR__.'/../../core.php';

?><form action="editor.php?id_module=$id_module$" method="post">
	<input type="hidden" name="op" value="add">
	<input type="hidden" name="backto" value="record-edit">

	<div class="row">
		<div class="col-md-6">
			 {[ "type": "text", "label": "<?php echo _("Nome preventivo"); ?>", "name": "nome", "required": 1, "value": "" ]}
		</div>
		<div class="col-md-6">
			{[ "type": "select", "label": "<?php echo _("Cliente"); ?>", "name": "idanagrafica", "required": 1, "values": "query=SELECT an_anagrafiche.idanagrafica AS id, ragione_sociale AS descrizione, idtipointervento_default FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE (descrizione='Cliente') AND deleted=0 ORDER BY ragione_sociale", "value": "", "value": "<?php echo $idanagrafica ?>", "ajax-source": "clienti" ]}
		</div>

	</div>
	<div class="row">

		<div class="col-md-6">
			{[ "type": "select", "label": "<?php echo _("Tipo di Attività"); ?>", "name": "idtipointervento", "required": 1, "values": "query=SELECT idtipointervento AS id, descrizione FROM in_tipiintervento", "value": "<?php echo $idtipointervento ?>" ]}
		</div>

	</div>

	<!-- PULSANTI -->
	<div class="row">
		<div class="col-md-12 text-right">
			<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo _("Aggiungi"); ?></button>
		</div>
	</div>
</form>
