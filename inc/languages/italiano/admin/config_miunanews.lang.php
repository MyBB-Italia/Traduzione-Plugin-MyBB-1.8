<?php
/**
 * Miuna News
 * https://github.com/martec
 *
 * Copyright (C) 2015-2015, Martec
 *
 * Miuna News is licensed under the GPL Version 3, 29 June 2007 license:
 *	http://www.gnu.org/copyleft/gpl.html
 *
 * @fileoverview Miuna News - Websocket News for Mybb
 * @author Martec
 * @requires jQuery, Nodejs, Socket.io, Express, debug and Mybb
 * @credits notify.png icon from http://community.mybb.com/post-861176.html
 * @credits some part of code based in MyAlerts of Euan T (http://community.mybb.com/thread-127444.html)
 */

// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: redfuegolight
// Editore: MyBB Italia
// --------------------------------------------------------------------------------

$l['miunanews_plug_desc'] = 'Notizie websocket per Mybb.';
$l['miunanews_sett_desc'] = 'Impostazioni per Notizie Miuna.';
$l['miunanews_onoff_title'] = 'Abilitare Notizie Miuna?';
$l['miunanews_onoff_desc'] = 'Imposta se vuoi abilitare o disabilitare Notizie Miuna.';
$l['miunanews_newslimit_title'] = 'Quantità di notizie';
$l['miunanews_newslimit_desc'] = 'Imposta la quantità delle notizie che verranno mostrate.';
$l['miunanews_newsmyalimit_title'] = 'Quantità delle notizie di Myalerts';
$l['miunanews_newsmyalimit_desc'] = 'Imposta la quantità di notizie generate da Myalerts che potranno apparire.';
$l['miunanews_nogrp_title'] = 'Gruppo senza il permesso di utilizzo';
$l['miunanews_nogrp_desc'] = 'Imposta il gruppo che non ha il permesso di utilizzare Notizie Miuna.';
$l['miunanews_server_title'] = 'Link del server Notizie Miuna';
$l['miunanews_server_desc'] = 'Imposta i\'indirizzo del tuo server di Notizie Miuna .';
$l['miunanews_socketio_title'] = 'Indirizzo Socket.io';
$l['miunanews_socketio_desc'] = 'Imposta l\'indirizzo a cui miuna shout box sarà connessa.<br />Raccomandata per gli utenti openshift "wss://xxxxxx.rhcloud.com:8443" (sostituisci xxxxxx con il tuo account).';
$l['miunanews_serusr_title'] = 'Username del Server Notizie Miuna';
$l['miunanews_serusr_desc'] = 'Fornisci le Notizie del tuo Server Notizie Miuna.';
$l['miunanews_serpass_title'] = 'Password del server Notizie Miuna';
$l['miunanews_serpass_desc'] = 'Fornisci la password del tuo Server Notizie Miuna.';
$l['miunanews_newpost_title'] = 'Nuovo messaggio';
$l['miunanews_newpost_desc'] = 'Mostra l\'avviso delle notizie quando qualcuno pubblica un messaggio in un argomento.';
$l['miunanews_newthread_title'] = 'Nuovo argomento';
$l['miunanews_newthread_desc'] = 'Mostra l\'avviso delle notizie quando qualcuno pubblica un nuovo argomento.';
$l['miunanews_foldacc_title'] = 'Cartelle ignorate da nuovi messaggi e argomenti';
$l['miunanews_foldacc_desc'] = 'Imposta la cartella che Notizie Miuna dovrà ignorare quando qualcuno pubblica sul forum (valore in id).<br />Separa ogni id del forum con una virgola.';
$l['miunanews_newpost_lang'] = 'pubblicato nell\'argomento {1}';
$l['miunanews_newthread_lang'] = 'pubblicato un nuovo argomento {1}';
$l['miunanews_dataf_title'] = 'Formato Data';
$l['miunanews_dataf_desc'] = 'Imposta qui il formato della data (Le opzioni del formato possono essere controllate qui http://momentjs.com/docs/).';
$l['miunanews_newpostcolor_title'] = 'Colore dei Nuovi Messaggi';
$l['miunanews_newpostcolor_desc'] = 'Imposta il colore utilizzato da Notizie Miuna per i Nuovi Messaggi';
$l['miunanews_newthreadcolor_title'] = 'Colore Nuovo Argomento';
$l['miunanews_newthreadcolor_desc'] = 'Imposta il colore utilizzato da Notizie Miuna per i Nuovi Argomenti';
$l['miunanews_myalertscolor_title'] = 'Colore delle notizie MyAlerts';
$l['miunanews_myalertscolor_desc'] = 'Imposta il colore usato da Notizie Miuna per le notizie di Myalerts';
$l['miunanews_myalertonoff_title'] = 'Supporto per Myalert';
$l['miunanews_myalertonoff_desc'] = 'Imposta se vuoi abilitare il supporto a myalert. Questa caratteristica richiede myalert installato e myalerts.php configurato.';
$l['miunanews_usefsockopen_title'] = 'Utilizzare fsockopen al posto di curl?';
$l['miunanews_usefsockopen_desc'] = 'Imposta se vuoi attivare fsockopen al posto di curl. Se selezioni si, Notizie Miuna utilizzerà fsockopen.';
