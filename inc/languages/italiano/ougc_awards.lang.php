<?php
// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: chack1172
// Editore: MyBB Italia
// --------------------------------------------------------------------------------

/***************************************************************************
 *
 *	OUGC Awards plugin (/inc/languages/italiano/ougc_awards.lang.php)
 *	Author: Omar Gonzalez
 *	Copyright: © 2012-2019 Omar Gonzalez
 *
 *	Website: http://omarg.me
 *
 *	Adds a powerful awards system to you community.
 *
 ***************************************************************************

****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/

// Informazioni Plugin.
$l['ougc_awards'] = 'OUGC Awards';

// Pannello Moderatore
$l['ougc_awards_usercp_nav'] = 'Premi';
$l['ougc_awards_modcp_nav'] = 'Gestisci Premi';
$l['ougc_awards_modcp_list_desc'] = 'Assegna o revoca i premi da questo pannello.';

// Richieste
$l['ougc_awards_modcp_requests_nav'] = 'Richieste';
$l['ougc_awards_modcp_requests_logs_nav'] = 'Richieste';
$l['ougc_awards_modcp_requests_list_title'] = 'Gestisci Richieste';
$l['ougc_awards_modcp_requests_list_desc'] = 'Gestisci le richieste di premi in attesa o guarda i log delle richieste.';
$l['ougc_awards_modcp_requests_list_empty'] = 'Non ci sono richiede da vedere al momento.';
$l['ougc_awards_modcp_requests_list_viewlogs'] = 'Guarda Log';
$l['ougc_awards_modcp_requests_list_accept'] = 'Accetta';
$l['ougc_awards_modcp_requests_list_reject'] = 'Rifiuta';
$l['ougc_awards_modcp_requests_list_status_pending'] = 'In Attesa';
$l['ougc_awards_modcp_requests_list_status_rejected'] = 'Rifiutata';
$l['ougc_awards_modcp_requests_list_status_accepted'] = 'Accettata';

// Errori.
$l['ougc_awards_error_wrongaward'] = 'Il premio selezionato non esiste.';
$l['ougc_awards_error_wrongowner'] = 'Il tuo stato per questo premio non è valido.';
$l['ougc_awards_error_invalidcategory'] = 'La categoria selezionata non esiste.';
$l['ougc_awards_error_invaliduser'] = 'L\'utente selezionato non esiste.';
$l['ougc_awards_error_give'] = 'L\'utente selezionato ha gi&agrave; questo premio.';
$l['ougc_awards_error_notgive'] = 'L\'utente selezionato non ha ancora questo premio.';
$l['ougc_awards_error_giveperm'] = 'Non hai i permessi per modificare questo utente.';
$l['ougc_awards_error_invalidthread'] = 'Hai inserito un valore non valido per la discussione.';
$l['ougc_awards_error_noneselected'] = 'Non hai selezionato nessun premio su cui effettuare questa azione.';
$l['ougc_awards_error_active'] = 'Il sistema dei premi non &egrave; al momento attivo.';
$l['ougc_awards_error_pendingrequest'] = 'C\'è una tua richiesta in attesa per questo premio.';

// Parole
$l['ougc_awards_modcp_username'] = 'Nome utente';
$l['ougc_awards_modcp_multiple'] = 'Utenti Multipli';
$l['ougc_awards_modcp_multiple_note'] = 'Selezionare se si vuole assegnare il premio a più utenti contemporaneamente.<br />
Lo stesso motivo sarà utilizzato per tutti gli utenti.<br />
Tutti i nomi utente devono essere corretti.';
$l['ougc_awards_modcp_give'] = 'Assegna';
$l['ougc_awards_modcp_revoke'] = 'Revoca';
$l['ougc_awards_modcp_reason'] = 'Motivo';
$l['ougc_awards_modcp_thread'] = 'Discussione';
$l['ougc_awards_modcp_gived'] = 'Premio Assegnato';

// Frasi
$l['ougc_awards_modcp_title_give'] = 'Gestione Premio: {1}';
$l['ougc_awards_modcp_title_give_desc'] = 'In questa pagina puoi gestire questo premio, sia come moderatore o come proprietario.';
$l['ougc_awards_modcp_list_empty'] = 'Non ci sono premi da gestire.';
$l['ougc_awards_modcp_cache'] = 'Aggiorna Cache';

// Reindirizzamenti
$l['ougc_awards_redirect_gived'] = 'Premio assegnato con successo.';
$l['ougc_awards_redirect_revoked'] = 'Premio revocato con successo.';
$l['ougc_awards_redirect_cache'] = 'Cache aggiornata con successo.';
$l['ougc_awards_redirect_request'] = 'Premio richiesto con successo.';
$l['ougc_awards_redirect_request_accepted'] = 'Richiesta per il premio accettata con successo.';
$l['ougc_awards_redirect_request_rejected'] = 'Richiesta per il premio rifiutata con successo.';

// Profilo
$l['ougc_awards_profile_empty'] = 'Questo utente non ha alcun premio in questo momento.';
$l['ougc_awards_profile_tine'] = '{1} <i>alle</i> {2}';
$l['ougc_awards_profile_title'] = 'Premi di {1}.';

// MP
$l['ougc_awards_pm_title'] = 'Hai ricevuto il premio {1}!';
$l['ougc_awards_pm_noreason'] = 'Non &egrave; stato specificato un motivo.';
$l['ougc_awards_pm_noreason_request_accepted'] = 'La tua richiesta per il premio è stata accettata.';
$l['ougc_awards_pm_noreason_request_rejected_subject'] = 'La tua richiesta per il premio "{1}" è stata rifiutata.';
$l['ougc_awards_pm_noreason_request_rejected_message'] = 'Ciao {1}. Questo è un messaggio automatico per informarti che la tua richiesta per il premio {2} è stata rifiutata.

Saluti.';

// Guarda tutti
$l['ougc_awards_viewall'] = 'Guarda Premi Dell\'Utente';
$l['ougc_awards_viewall_title'] = 'Premi di {1}';

// Strighe pagina
$l['ougc_awards_page_title'] = 'Premi';
$l['ougc_awards_page_list_empty'] = 'Non sono stati trovati premi.';
$l['ougc_awards_page_list_award'] = 'Premio';
$l['ougc_awards_page_list_name'] = 'Nome';
$l['ougc_awards_page_list_description'] = 'Descrizione';
$l['ougc_awards_page_list_request'] = 'Richiesta';
$l['ougc_awards_page_view_date'] = 'Data';
$l['ougc_awards_page_view_empty'] = 'Nessun utente trovato.';

// blocco di benvenuto
$l['ougc_awards_welcomeblock'] = 'Miei Premi';
$l['ougc_awards_welcomeblock_empty'] = 'La tua lista dei premi è attualmente vuota.'; 

// Modal
$l['ougc_awards_request_title'] = 'Richiedi Premio';
$l['ougc_awards_request_desc'] = 'Richiedi questo premio ad un moderatore.';
$l['ougc_awards_request_name'] = 'Premio:';
$l['ougc_awards_request_message'] = 'Messaggio:';
$l['ougc_awards_request_button'] = 'Invia';

// Statistiche
$l['ougc_awards_stats_most'] = 'Più Premiati';
$l['ougc_awards_stats_last'] = 'Ultimi Premiati';
$l['ougc_awards_stats_empty'] = 'Non ci sono statistiche da mostrare.';
$l['ougc_awards_stats_username'] = 'Nome utente';
$l['ougc_awards_stats_total'] = 'Totale';
$l['ougc_awards_stats_viewall'] = 'Mostra Tutto';

// UserCP
$l['ougc_awards_usercp_list_visible'] = 'Mostrare';
$l['ougc_awards_usercp_list_disporder'] = 'Ordine';
$l['ougc_awards_usercp_list_reason'] = 'Motivo';
$l['ougc_awards_usercp_list_from'] = 'Dall\'Utente';

// Globale
$l['ougc_awards_global_menu'] = 'Premi';
$l['ougc_awards_page_pending_requests'] = 'Hai {1} richiesta/e in attesa per questo premio.';
$l['ougc_awards_page_pending_requests_moderator'] = '<a href="{1}/{2}?action=awards&amp;manage=requests"><strong>Nota per il moderatore:</strong> C\'è una richiesta in attesa per un premio da controllare.</a>';
$l['ougc_awards_page_pending_requests_moderator_plural'] = '<a href="{1}/{2}?action=awards&amp;manage=requests"><strong>Nota per il moderatore:</strong> Ci sono {3} richieste di premi in attesa da controllare.<a>';

// WOL
$l['ougc_awards_wol'] = 'Visualizzando <a href="{1}/awards.php">la pagina de premi<a>';

// MyAlerts
$l['ougc_awards_myalerts'] = '{1}, hai ricevuto il premio {3} da {2}.';// {4} outputs the award formatted image
$l['myalerts_setting_ougc_awards'] = 'Ricevere avvisi relativi ai premi?'; 
