<?php
/**
 * This file is part of Mark Edited as Unread plugin for MyBB.
 * Copyright (C) 2010-2013 Lukasz Tkacz <lukasamd@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */ 

// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: redfuegolight
// Editore: MyBB Italia
// --------------------------------------------------------------------------------

$l['markEditedName'] = 'Segna i messaggi modificati come non letti';
$l['markEditedDesc'] = 'Questo plugin segna i messaggi modificati come non letti entro la data cambiata, se il messaggio è l\'ultimo dell\'argomento.';

$l['markEditedSettingGroupDesc'] = 'Imposti per il plugin "Segna i messaggi modificati come non letti"';

$l['markEditedCompareType'] = 'Confronta i messaggi basandosi sul numero dei caratteri modificati';
$l['markEditedCompareTypeDesc'] = 'Se attivata, i messaggi saranno controllati in base al numero dei caratteri modificati, altrimenti in base alla percentuale di similarità.';

$l['markEditedMessageStatus'] = 'Segna come non letto l\'ultimo messaggio se è stato modificato';
$l['markEditedMessageStatusDesc'] = "Se disabilitato, i messaggi modificati non saranno contrassegnati come non letti.";

$l['markEditedMessageValue'] = 'Esclude le modifiche dei messaggi simile all\'originale';
$l['markEditedMessageValueDesc'] = "Gli ultimi messaggi che sono simili alla loro pre-modifica con questa % o più, non saranno contrassegnati come non letto (ciò significa che la modifica era minima). Impostare a 0 per segnare da leggere su <i>qualsiasi</i> modifica.";

$l['markEditedSubjectStatus'] = 'Se il soggetto viene modificato allora viene segnato come non letto';
$l['markEditedSubjectStatusDesc'] = "Se disabilitata, la modificato del soggetto non mostrerà il messaggio come non letto.";

$l['markEditedSubjectValue'] = 'Escludi i cambiamenti del soggetto simili all\'originale';
$l['markEditedSubjectValueDesc'] = "Gli ultimi messaggi con il soggetto che è simile a quello pre-modificato con questa % o più, non saranno contrassegnati come non letti (ciò significa che la modifica del soggetto era minore). Impostare a 0 per segnare da leggere su <i>qualsiasi</i> modifiche del soggetto.";

$l['markEditedMinTime'] = 'Intervallo di tempo minimo (minuti)';
$l['markEditedMinTimeDesc'] = "Le modifiche ai messaggi o al suo soggetto effettuate prima di questo tempo, non contrassegnerà i messaggi come non letto.";

$l['markEditedMaxTime'] = 'Intervallo di tempo massimo (minuti)';
$l['markEditedMaxTimeDesc'] = "Le modifiche ai messaggi o al suo soggetto effettuato dopo questo tempo, non contrassegnerà i messaggi come non letto.";

$l['markEditedCheckUser'] = 'Contrassegna solamente i messaggi non letti modificati dall\'autore originale';
$l['markEditedCheckUserDesc'] = 'Se abilitato, il plugin contrassegnerà come non letti solo gli ultimi messaggi modificati dall\'autore originale. Se disabilitato, gli ultimi messaggi modificati dai moderatori saranno contrassegnati lo stesso.';
