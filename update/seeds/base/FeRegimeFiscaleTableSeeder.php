<?php

use Update\Seed;

class FeRegimeFiscaleTableSeeder extends Seed
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $this->capsule->table('fe_regime_fiscale')->truncate();

        $this->capsule->table('fe_regime_fiscale')->insert([
            [
                'codice' => 'RF01',
                'descrizione' => 'Ordinario',
            ],
            [
                'codice' => 'RF02',
                'descrizione' => 'Contribuenti minimi (art.1, c.96-117, L. 244/07)',
            ],
            [
                'codice' => 'RF04',
                'descrizione' => 'Agricoltura e attività connesse e pesca (artt.34 e 34-bis, DPR 633/72)',
            ],
            [
                'codice' => 'RF05',
                'descrizione' => 'Vendita sali e tabacchi (art.74, c.1, DPR. 633/72)',
            ],
            [
                'codice' => 'RF06',
                'descrizione' => 'Commercio fiammiferi (art.74, c.1, DPR  633/72)',
            ],
            [
                'codice' => 'RF07',
                'descrizione' => 'Editoria (art.74, c.1, DPR  633/72)',
            ],
            [
                'codice' => 'RF08',
                'descrizione' => 'Gestione servizi telefonia pubblica (art.74, c.1, DPR 633/72)',
            ],
            [
                'codice' => 'RF09',
                'descrizione' => 'Rivendita documenti di trasporto pubblico e di sosta (art.74, c.1, DPR  633/72)',
            ],
            [
                'codice' => 'RF10',
                'descrizione' => 'Intrattenimenti, giochi e altre attività di cui alla tariffa allegata al DPR 640/72 (art.74, c.6, DPR 633/72)',
            ],
            [
                'codice' => 'RF11',
                'descrizione' => 'Agenzie viaggi e turismo (art.74-ter, DPR 633/72)',
            ],
            [
                'codice' => 'RF12',
                'descrizione' => 'Agriturismo (art.5, c.2, L. 413/91)',
            ],
            [
                'codice' => 'RF13',
                'descrizione' => 'Vendite a domicilio (art.25-bis, c.6, DPR  600/73)',
            ],
            [
                'codice' => 'RF14',
                'descrizione' => 'Rivendita beni usati, oggetti d’arte, d’antiquariato o da collezione (art.36, DL 41/95)',
            ],
            [
                'codice' => 'RF15',
                'descrizione' => 'Agenzie di vendite all’asta di oggetti d’arte, antiquariato o da collezione (art.40-bis, DL 41/95)',
            ],
            [
                'codice' => 'RF16',
                'descrizione' => 'IVA per cassa P.A. (art.6, c.5, DPR 633/72)',
            ],
            [
                'codice' => 'RF17',
                'descrizione' => 'IVA per cassa (art. 32-bis, DL 83/2012)',
            ],
            [
                'codice' => 'RF18',
                'descrizione' => 'Altro',
            ],
            [
                'codice' => 'RF19',
                'descrizione' => 'Regime forfettario (art.1, c.54-89, L. 190/2014)',
            ],
        ]);
    }
}
