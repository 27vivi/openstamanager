-- Fix nome colonna 'Cliente' ddt vendita e acquisto
UPDATE `zz_views` SET `name` = 'Ragione sociale' WHERE `zz_views`.`id_module` = (SELECT `id` FROM `zz_modules` WHERE `name` = 'Ddt di vendita') AND name = 'Cliente';
UPDATE `zz_views` SET `name` = 'Ragione sociale' WHERE `zz_views`.`id_module` = (SELECT `id` FROM `zz_modules` WHERE `name` = 'Ddt di acquisto') AND name = 'Cliente';

-- Rinomino colonna Rel. in Relazione
UPDATE `zz_views` SET `name` = 'color_Relazione', `search_inside` = 'color_title_Relazione' WHERE `zz_views`.`id_module` = (SELECT `id` FROM `zz_modules` WHERE `name` = 'Anagrafiche') AND name = 'color_Rel.';
UPDATE `zz_views` SET `name` = 'color_title_Relazione' WHERE `zz_views`.`id_module` = (SELECT `id` FROM `zz_modules` WHERE `name` = 'Anagrafiche') AND name = 'color_title_Rel.';

-- Rinomino colonna Tipologia in Tipo
UPDATE `zz_views` SET `name` = 'Tipo' WHERE `zz_views`.`id_module` = (SELECT `id` FROM `zz_modules` WHERE `name` = 'Anagrafiche') AND name = 'Tipologia';

-- Nuova colonna Tipologia
INSERT INTO `zz_views` (`id`, `id_module`, `name`, `query`, `order`, `search`, `slow`, `format`, `search_inside`, `order_by`, `visible`, `summable`, `default` ) VALUES (NULL, (SELECT `id` FROM `zz_modules` WHERE `name` = 'Anagrafiche'), 'Tipologia', 'tipo', 3, 1, 0, 0, NULL, NULL, 1, 0, 0);

-- Fix dei widget con nuova colonna Tipo
UPDATE `zz_widgets` SET `more_link` = 'if($(\'#th_Tipo input\').val()!= \'Tecnico\'){ $(\'#th_Tipo input\').val(\'Tecnico\').trigger(\'keyup\');} else reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Numero di tecnici';

UPDATE `zz_widgets` SET `more_link` = 'if($(\'#th_Tipo input\').val()!= \'Cliente\'){ $(\'#th_Tipo input\').val(\'Cliente\').trigger(\'keyup\');} else reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Numero di clienti';

UPDATE `zz_widgets` SET `more_link` = 'if($(\'#th_Tipo input\').val()!= \'Fornitore\'){ $(\'#th_Tipo input\').val(\'Fornitore\').trigger(\'keyup\');} else reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Numero di fornitori';

UPDATE `zz_widgets` SET `more_link` = 'if($(\'#th_Tipo input\').val()!= \'Agente\'){ $(\'#th_Tipo input\').val(\'Agente\').trigger(\'keyup\');} else reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Numero di agenti';

UPDATE `zz_widgets` SET `more_link` = 'if($(\'#th_Tipo input\').val()!= \'Vettore\'){ $(\'#th_Tipo input\').val(\'Vettore\').trigger(\'keyup\');} else reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Numero di vettori';

UPDATE `zz_widgets` SET `more_link` = 'reset(\'Tipo\');' WHERE `zz_widgets`.`name` = 'Tutte le anagrafiche';