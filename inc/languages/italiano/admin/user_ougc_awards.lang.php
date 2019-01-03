<?php
// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: chack1172
// Editore: MyBB Italia
// --------------------------------------------------------------------------------

/***************************************************************************
 *
 *	OUGC Awards plugin (/inc/anguages/italiano/admin/user_ougc_awards.lang.php)
 *	Author: Omar Gonzalez
 *	Copyright: © 2012-2014 Omar Gonzalez
 *
 *	Website: http://omarg.me
 *
 *	Extend your forum with a powerful awards system.
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

// Plugin API
$l['setting_group_ougc_awards'] = 'OUGC Awards';
$l['setting_group_ougc_awards_desc'] = 'Aggiunge al forum un sistema di premi.';

// Importazione
$l['ougc_awards_import_title'] = 'Importa Premi';
$l['ougc_awards_import_desc'] = '<br />&nbsp;&nbsp;&nbsp;<a href="./index.php?module=config-plugins&amp;ougc_awards_import=mybbcentral">Importa MyAwards da MyBB-Central</a>';
$l['ougc_awards_import_confirm_mybbcentral'] = 'Sei sicuro di voler importare i premi da MyAwards di MyBB-Central?';
$l['ougc_awards_import_end'] = 'Premi importati con successo.';

// Impostazioni
$l['setting_ougc_awards_postbit'] = 'Premi Massimi nei Messaggi';
$l['setting_ougc_awards_postbit_desc'] = 'Numero massimo di premi da mostrare nei messaggi. -1 per illimitato.';
$l['setting_ougc_awards_profile'] = 'Premi Massimi nel Profilo';
$l['setting_ougc_awards_profile_desc'] = 'Numero massimo di premi da mostrare nei profili. -1 per illimitato.';
$l['setting_ougc_awards_modcp'] = 'Abilita Pannello Moderatore';
$l['setting_ougc_awards_modcp_desc'] = 'Permette ai moderatori di gestire gli annunci dal pannello moderatore.';
$l['setting_ougc_awards_modgroups'] = 'Gruppi Moderatore';
$l['setting_ougc_awards_modgroups_desc'] = 'Gruppi autorizzati a moderare questa caratteristica.';
$l['setting_ougc_awards_pagegroups'] = 'Gruppi Autorizzati Alla Pagina Premi';
$l['setting_ougc_awards_pagegroups_desc'] = 'Gruppi autorizzati a vedere la pagina premi.';
$l['setting_ougc_awards_perpage'] = 'Articoli Per Pagina';
$l['setting_ougc_awards_perpage_desc'] = 'Numero massimo di articoli da mostrare per pagina nella lista di coda nel pannello moderatore.';
$l['setting_ougc_awards_sendpm'] = 'Invia MP';
$l['setting_ougc_awards_sendpm_desc'] = 'Vuoi inviare un MP agli utenti quando ricevono un premio?';
$l['setting_ougc_awards_myalerts'] = 'Integrazioni MyAlerts';
$l['setting_ougc_awards_myalerts_desc'] = 'Vuoi inviare un avviso agli utenti quando ricevono un premio';

// Permessi Amministratore
$l['ougc_awards_acp_permissions'] = 'Pu&ograve; gestire i premi?';

// ACP Module: Tabs
$l['ougc_awards_acp_nav'] = 'Gestisci Premi';
$l['ougc_awards_tab_view'] = 'Guarda';
$l['ougc_awards_tab_view_d'] = 'Guarda tutti i premi attuali da gestire.';
$l['ougc_awards_tab_add'] = 'Aggiungi';
$l['ougc_awards_tab_add_d'] = 'Aggiungi un nuovo premio alla lista premi.';
$l['ougc_awards_tab_edit'] = 'Modifica';
$l['ougc_awards_tab_edit_d'] = 'Modifica un premio esistente.';
$l['ougc_awards_tab_give'] = 'Assegna';
$l['ougc_awards_tab_give_d'] = 'Assegna premio.';
$l['ougc_awards_tab_revoke'] = 'Revoca';
$l['ougc_awards_tab_revoke_d'] = 'Revoca premio.';
$l['ougc_awards_tab_users'] = 'Visualizza Utenti';
$l['ougc_awards_tab_users_d'] = 'Visualizza utenti con questo premio.';
$l['ougc_awards_tab_edit_user'] = 'Modifica Premio Utente';
$l['ougc_awards_tab_edit_user_d'] = 'Modifica dati del premio di questo utente.';
$l['ougc_awards_tab_delete'] = 'Elimina';
$l['ougc_awards_tab_cache'] = 'Ricostruisci Cache';

// ACP Module: Form
$l['ougc_awards_form_add'] = 'Aggiungi Nuovo Premio';
$l['ougc_awards_form_name'] = 'Nome';
$l['ougc_awards_form_name_d'] = 'Inserisci un breve nome per questo premio.';
$l['ougc_awards_form_username'] = 'Nome utente';
$l['ougc_awards_form_username_d'] = 'Inserisci il nome dell\'utente a cui assegnare/revocare il premio selezionato.';
$l['ougc_awards_form_reason'] = 'Motivo';
$l['ougc_awards_form_reason_d'] = 'Inserisci un motivo per cui assegnare questo premio';
$l['ougc_awards_form_desc'] = 'Descrizione';
$l['ougc_awards_form_desc_d'] = 'Scrivi una breve descrizione per questo premio.';
$l['ougc_awards_form_image'] = 'Immagine';
$l['ougc_awards_form_image_d'] = 'Immagine di questo premio.<br/><span class="smalltext">&nbsp;&nbsp;{bburl} -> URL Forum<br />
&nbsp;&nbsp;{homeurl} -> URL Home<br />
&nbsp;&nbsp;{imgdir} -> URL Cartella Tema
</span>';
$l['ougc_awards_form_visible'] = 'Visibile';
$l['ougc_awards_form_hidden'] = 'Nascosto';
$l['ougc_awards_form_visible_d'] = 'Il premio &egrave; visibile?';
$l['ougc_awards_form_pm'] = 'MP';
$l['ougc_awards_form_pm_d'] = 'Scrivi il contenuto del MP da inviare.<br />
	{1} = Nome Utente<br/>
	{2} = Nome Premio<br/>
	{3} = Motivo<br/>
	{4} = Immagine<br/>';
$l['ougc_awards_form_type'] = 'Tipo';
$l['ougc_awards_form_type_d'] = 'Scegli se mostrare solo nei messaggi, nel profilo o entrambi.';
$l['ougc_awards_form_order'] = 'Ordine';
$l['ougc_awards_form_order_d'] = 'Ordine con cui verr&agrave; elaborato questo premio.';
$l['ougc_awards_form_type_0'] = 'Entrambi';
$l['ougc_awards_form_type_1'] = 'Profilo';
$l['ougc_awards_form_type_2'] = 'Messaggi';
$l['ougc_awards_button_submit'] = 'Invia';
$l['ougc_awards_button_order'] = 'Aggiorna Ordine';

// ACP Module: Messages
$l['ougc_awards_error_add'] = 'Si &egrave; verificato un errore durante la creazione del nuovo premio';
$l['ougc_awards_success_add'] = 'Il premio &egrave; stato creato con successo.';
$l['ougc_awards_success_edit'] = 'Il premio/l\'utente &egrave; stato modificato con successo.';
$l['ougc_awards_error_invalidaward'] = 'Il premio selezionato non esiste.';
$l['ougc_awards_error_invaliduser'] = 'L\'utente selezionato non esiste.';
$l['ougc_awards_error_invalidname'] = 'Il nome inserito &egrave; troppo corto.';
$l['ougc_awards_error_invaliddesscription'] = 'La descrizione inserita &egrave; troppo lunga.';
$l['ougc_awards_error_invalidimage'] = 'L\'immagine selezionata &egrave; troppo lunga.';
$l['ougc_awards_error_give'] = 'L\'utente selezionato ha gi&agrave; questo premio.';
$l['ougc_awards_error_giveperm'] = 'Non hai i permessi per modificare l\'utente selezionato.';
$l['ougc_awards_success_give'] = 'L\'utente selezionato &egrave; stato premiato con successo.';
$l['ougc_awards_error_revoke'] = 'L\'utente selezionato non ha questo premio.';
$l['ougc_awards_success_revoke'] = 'Il premio selezionato &egrave; stato revocato con successo.';
$l['ougc_awards_success_delete'] = 'Il premio &egrave; stato eliminato con successo.';
$l['ougc_awards_success_cache'] = 'La cache &egrave; stata ricostruita con successo.';

// ACP Module: Home
$l['ougc_awards_view_image'] = 'Immagine';
$l['ougc_awards_view_actions'] = 'Opzioni';
$l['ougc_awards_view_empty'] = 'Al momento non ci sono annunci da mostrare.';

// ACP Module: Users
$l['ougc_awards_users_date'] = 'Data';
$l['ougc_awards_users_timestamp'] = 'Time Stamp';
$l['ougc_awards_users_timestamp_d'] = 'Modifica time stamp.';
$l['ougc_awards_users_time'] = '{1} <i>alle</i> {2}';
$l['ougc_awards_users_empty'] = 'Questo premio non &egrave; posseduto da nessuno.';

// PMs
$l['ougc_awards_pm_title'] = 'Hai ricevuto il premio {1}!';
$l['ougc_awards_pm_noreason'] = 'Non &egrave; stato specificato un motivo.';

// PluginLibrary
$l['ougc_awards_pl_required'] = 'Questo plugin richiede che la versione {2} o successiva di <a href="{1}">PluginLibrary</a> sia caricata sul forum.';
$l['ougc_awards_pl_old'] = 'Questo plugin richiede la versione {2} o successiva di <a href="{1}">PluginLibrary</a>, mentre la tua attuale versione &egrave; la {3}.';
