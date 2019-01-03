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

// Plugin API
$l['setting_group_ougc_awards'] = 'OUGC Awards';
$l['setting_group_ougc_awards_desc'] = 'Aggiunge al forum un sistema di premi.';

// Importazione
$l['ougc_awards_import_title'] = 'Importa Premi';
$l['ougc_awards_import_desc'] = '<br />&nbsp;&nbsp;&nbsp;<a href="./index.php?module=config-plugins&amp;ougc_awards_import=mybbawards">Importa da MyAwards</a>
<br />&nbsp;&nbsp;&nbsp;<a href="./index.php?module=config-plugins&amp;ougc_awards_import=nickawards">Imposta dall\'Awards System di Nickman</a>';
$l['ougc_awards_import_confirm_myawards'] = 'Sei sicuro di voler importare i premi da MyAwards?';
$l['ougc_awards_import_confirm_nickawards'] = 'Sei sicuro di voler importare i premi dall\'award system di Nickman?';
$l['ougc_awards_import_end'] = 'Premi importati con successo.';
$l['ougc_awards_import_error'] = 'Si è verificato un errore durante l\'importazione dei premi selezionati. La tabella "{1}" non è stata trovata.';

// Impostazioni
$l['setting_ougc_awards_postbit'] = 'Premi Massimi nei Messaggi';
$l['setting_ougc_awards_postbit_desc'] = 'Numero massimo di premi da mostrare nei messaggi. -1 per illimitato. 0 per disattivare.';
$l['setting_ougc_awards_postbit_maxperline'] = 'Numero massimo di premi per linea';
$l['setting_ougc_awards_postbit_maxperline_desc'] = 'Inserisci il numero massimo di premi da mostrare nella stessa riga nei messaggi prima di andare a capo. Lascia 0 per disattivare.';
$l['setting_ougc_awards_profile'] = 'Premi Massimi nel Profilo';
$l['setting_ougc_awards_profile_desc'] = 'Numero massimo di premi da mostrare nei profili. -1 per illimitato. 0 per disattivare.';
$l['setting_ougc_awards_modcp'] = 'Abilita Pannello Moderatore';
$l['setting_ougc_awards_modcp_desc'] = 'Permette ai moderatori di gestire gli annunci dal pannello moderatore.';
$l['setting_ougc_awards_modgroups'] = 'Gruppi Moderatore';
$l['setting_ougc_awards_modgroups_desc'] = 'Gruppi autorizzati a moderare questa caratteristica.';
$l['setting_ougc_awards_pagegroups'] = 'Gruppi Autorizzati Alla Pagina Premi';
$l['setting_ougc_awards_pagegroups_desc'] = 'Gruppi autorizzati a vedere la pagina premi.';
$l['setting_ougc_awards_perpage'] = 'Articoli Per Pagina';
$l['setting_ougc_awards_perpage_desc'] = 'Numero massimo di articoli da mostrare per pagina o nella lista.';
$l['setting_ougc_awards_sendpm'] = 'Invia MP';
$l['setting_ougc_awards_sendpm_desc'] = 'Vuoi inviare un MP agli utenti quando ricevono un premio?';
$l['setting_ougc_awards_welcomeblock'] = 'Mostra lista nel blocco di benvenuto';
$l['setting_ougc_awards_welcomeblock_desc'] = 'Attiva questa impostazione per mostrare una lista completa dei premi ottenuti nel blocco di benvenuto.';
$l['setting_ougc_awards_enablestatspage'] = 'Attiva Statistiche';
$l['setting_ougc_awards_enablestatspage_desc'] = 'Mostra nella pagine delle statistiche gli utenti con più premi e gli ultimi premi ricevuti';
$l['setting_ougc_awards_myalerts'] = 'Integrazioni MyAlerts';
$l['setting_ougc_awards_myalerts_desc'] = 'Vuoi inviare un avviso agli utenti quando ricevono un premio';

// Permessi Amministratore
$l['ougc_awards_acp_permissions'] = 'Pu&ograve; gestire i premi?';

// ACP Module: Logs
$l['ougc_awards_logs_task'] = 'Task';
$l['ougc_awards_logs_user'] = 'Utente';
$l['ougc_awards_logs_received'] = 'Premio Ricevuto';
$l['ougc_awards_logs_revoked'] = 'Premio Revocato';
$l['ougc_awards_logs_date'] = 'Data';
$l['ougc_awards_logs_empty'] = 'Non ci sono log da mostrare.';
$l['ougc_awards_logs_prune'] = 'Elimina';
$l['ougc_awards_logs_none'] = 'Nessuno';

// ACP Module: Tabs
$l['ougc_awards_acp_nav'] = 'Gestisci Premi';
$l['ougc_awards_tab_view'] = 'Guarda';
$l['ougc_awards_tab_view_d'] = 'Guarda tutti i premi attuali da gestire in questa categoria.';
$l['ougc_awards_tab_add'] = 'Aggiungi';
$l['ougc_awards_tab_add_d'] = 'Aggiungi un nuovo premio.';
$l['ougc_awards_tab_addc_desc'] = 'Aggiungi una nuova categoria.';
$l['ougc_awards_tab_edit'] = 'Modifica';
$l['ougc_awards_tab_edit_d'] = 'Modifica un premio esistente.';
$l['ougc_awards_tab_editc_desc'] = 'Modifica una categoria esistente.';
$l['ougc_awards_tab_editt_desc'] = 'Modifica un task esistente.';
$l['ougc_awards_tab_give'] = 'Assegna';
$l['ougc_awards_tab_give_d'] = 'Assegna premio.';
$l['ougc_awards_tab_revoke'] = 'Revoca';
$l['ougc_awards_tab_revoke_d'] = 'Revoca premio.';
$l['ougc_awards_tab_users'] = 'Visualizza Utenti';
$l['ougc_awards_tab_users_d'] = 'Visualizza utenti con questo premio.';
$l['ougc_awards_tab_owners'] = 'Gestisci Proprietari';
$l['ougc_awards_tab_owners_d'] = 'Gestisci i proprietari del premio.';
$l['ougc_awards_tab_owners_form'] = 'Aggiungi Proprietario';
$l['ougc_awards_tab_edit_user'] = 'Modifica Premio Utente';
$l['ougc_awards_tab_edit_user_d'] = 'Modifica dati del premio di questo utente.';
$l['ougc_awards_tab_delete'] = 'Elimina';
$l['ougc_awards_tab_cache'] = 'Ricostruisci Cache';
$l['ougc_awards_tab_categories'] = 'Categorie';
$l['ougc_awards_tab_categories_desc'] = 'Qui puoi gestire tutte le categorie.';
$l['ougc_awards_tab_tasks'] = 'Task';
$l['ougc_awards_tab_tasks_desc'] = 'Qui puoi creare una task che assegna o revoca automaticamente i premi agli utenti.';
$l['ougc_awards_tab_tasks_logs'] = 'Log';
$l['ougc_awards_tab_tasks_logs_desc'] = 'Qui puoi vedere i log delle task.';

// ACP Module: Form
$l['ougc_awards_form_add'] = 'Aggiungi Nuovo Articolo';
$l['ougc_awards_form_name'] = 'Nome';
$l['ougc_awards_form_name_d'] = 'Inserisci un breve nome per questo articolo.';
$l['ougc_awards_form_username'] = 'Nome utente';
$l['ougc_awards_form_username_d'] = 'Inserisci il nome dell\'utente a cui assegnare/revocare il premio selezionato.';
$l['ougc_awards_form_owner_username_d'] = 'Inserisci il nome dell\'utente a cui assegnare lo stato di proprietario di questo premio.';
$l['ougc_awards_form_reason'] = 'Motivo';
$l['ougc_awards_form_reason_d'] = 'Inserisci un motivo per cui assegnare questo premio';
$l['ougc_awards_form_thread'] = 'Discussione';
$l['ougc_awards_form_thread_d'] = 'Inserisci una discussione da abbinare al premio.';
$l['ougc_awards_form_multiple'] = 'Utenti Multipli';
$l['ougc_awards_form_multiple_desc'] = 'Selezionare se si vuole assegnare il premio a più utenti contemporaneamente.<br />
Separa ogni nome con una virgola senza inserire spazi all\'interno del campo sopra.<br />
Lo stesso motivo sarà utilizzato per tutti gli utenti.<br />
Tutti i nomi utente devono essere corretti.';
$l['ougc_awards_form_gived'] = 'Seleziona Premio Assegnato';
$l['ougc_awards_form_gived_desc'] = 'Seleziona il premio assegnato che vuoi revocare.';
$l['ougc_awards_form_category'] = 'Categoria';
$l['ougc_awards_form_category_desc'] = 'Seleziona la categoria a cui il premio appartiene.';
$l['ougc_awards_form_desc'] = 'Descrizione';
$l['ougc_awards_form_desc_d'] = 'Scrivi una breve descrizione per questo articolo.';
$l['ougc_awards_form_image'] = 'Immagine / Classe';
$l['ougc_awards_form_image_d'] = 'Inserisci il percorso dell\'immagine o la classe di questo premio. Puoi utilizzare le variabili seguenti.<br/><span class="smalltext">&nbsp;&nbsp;{bburl} -> URL Forum<br />
&nbsp;&nbsp;{homeurl} -> URL Home<br />
&nbsp;&nbsp;{imgdir} -> URL Cartella Tema<br />
&nbsp;&nbsp;{aid} -> ID Premio<br />
&nbsp;&nbsp;{cid} -> ID Categoria
</span>';
$l['ougc_awards_form_template'] = 'Tipo Template';
$l['ougc_awards_form_template_d'] = 'Scegli se mostrare utilizzando un template immagine, un template classe o un template personalizzato (avanzato).';
$l['ougc_awards_form_template_0'] = 'Template Immagine';
$l['ougc_awards_form_template_1'] = 'Template Classe';
$l['ougc_awards_form_template_2'] = 'Template Personalizzato (Avanzato)';
$l['ougc_awards_form_visible'] = 'Visibile';
$l['ougc_awards_form_allowrequests'] = 'Consenti Richieste';
$l['ougc_awards_form_hidden'] = 'Nascosto';
$l['ougc_awards_form_visible_d'] = 'L\'articolo è visibile?';
$l['ougc_awards_form_active'] = 'Attiva?';
$l['ougc_awards_form_active_desc'] = 'La task è attiva?';
$l['ougc_awards_form_logging'] = 'Abilita Logging';
$l['ougc_awards_form_logging_desc'] = 'Vuoi salvare i log delle azioni di questa task?';
$l['ougc_awards_form_allowrequests_desc'] = 'Permettere agli utenti di richiedere questo articolo?';
$l['ougc_awards_form_pm'] = 'MP';
$l['ougc_awards_form_pm_d'] = 'Scrivi il contenuto del MP da inviare.<br />
	{1} = Nome Utente<br/>
	{2} = Nome Premio<br/>
	{3} = Motivo<br/>
	{4} = Immagine<br/>';
$l['ougc_awards_form_type'] = 'Tipo';
$l['ougc_awards_form_type_d'] = 'Scegli se mostrare solo nei messaggi, nel profilo o entrambi.';
$l['ougc_awards_form_order'] = 'Ordine';
$l['ougc_awards_form_order_d'] = 'Ordine con cui verr&agrave; elaborato questo articolo.';
$l['ougc_awards_form_type_0'] = 'Entrambi';
$l['ougc_awards_form_type_1'] = 'Profilo';
$l['ougc_awards_form_type_2'] = 'Messaggi';
$l['ougc_awards_button_submit'] = 'Invia';
$l['ougc_awards_button_order'] = 'Aggiorna Ordine';

// ACP Module: Messages
$l['ougc_awards_error_add'] = 'Si è verificato un errore durante la creazione del nuovo articolo.';
$l['ougc_awards_success_add'] = 'L\'articolo è stato creato con successo.';
$l['ougc_awards_success_edit'] = 'L\'articolo/utente è stato modificato con successo.';
$l['ougc_awards_error_invalidcategory'] = 'La categoria selezionata non esiste.';
$l['ougc_awards_error_invalidaward'] = 'Il premio selezionato non esiste.';
$l['ougc_awards_error_invalidtask'] = 'La task selezionata non esiste.';
$l['ougc_awards_error_invaliduser'] = 'L\'utente selezionato non esiste.';
$l['ougc_awards_error_invalidname'] = 'Il nome inserito &egrave; troppo corto.';
$l['ougc_awards_error_invaliddesscription'] = 'La descrizione inserita &egrave; troppo lunga.';
$l['ougc_awards_error_invalidimage'] = 'L\'immagine selezionata &egrave; troppo lunga.';
$l['ougc_awards_error_give'] = 'L\'utente selezionato ha gi&agrave; questo premio.';
$l['ougc_awards_error_giveperm'] = 'Non hai i permessi per modificare l\'utente selezionato.';
$l['ougc_awards_success_give'] = 'L\'utente selezionato &egrave; stato premiato con successo.';
$l['ougc_awards_success_owner_grant'] = 'All\'utente selezionato è stato assegnato lo stato di proprietario.';
$l['ougc_awards_success_owner_revoke'] = 'All\'utente selezionato è stato revocato lo stato di proprietario.';
$l['ougc_awards_success_owner_duplicated'] = 'L\'utente selezionato ha già lo stato di proprietario.';
$l['ougc_awards_error_revoke'] = 'L\'utente selezionato non ha questo premio.';
$l['ougc_awards_error_invalidthread'] = 'Hai inserito un valore non valido per la discussione.';
$l['ougc_awards_error_invaliddate'] = 'Hai inserito un valore non valido per la data.';
$l['ougc_awards_success_revoke'] = 'Il premio selezionato &egrave; stato revocato con successo.';
$l['ougc_awards_success_delete'] = 'L\'articolo selezionato è stato eliminato con successo.';
$l['ougc_awards_success_cache'] = 'La cache &egrave; stata ricostruita con successo.';

// Owner revoke page
$l['ougc_awards_owner_revoke_title'] = 'Revoca Proprietario Premio';
$l['ougc_awards_owner_revoke_desc'] = 'Sei sicuro di voler revocare lo stato di proprietario selezionato?';

// Tasks
$l['ougc_awards_form_usergroups'] = 'Gruppi Utente';
$l['ougc_awards_form_usergroups_desc'] = 'Seleziona i gruppi utente in cui gli utenti devono essere per eseguire la task.';
$l['ougc_awards_form_additionalgroups'] = 'Gruppi Utente Secondari';
$l['ougc_awards_form_additionalgroups_desc'] = 'Seleziona se la task deve controllare anche i gruppi utente addizionali.';
$l['ougc_awards_form_give'] = 'Assegna Premio';
$l['ougc_awards_form_give_desc'] = 'Seleziona i premi da assegnare all\'utente.';
$l['ougc_awards_form_allowmultiple'] = 'Consenti Premi Multipli';
$l['ougc_awards_form_allowmultiple_desc'] = 'Seleziona se la task deve assegnare i premi anche se l\'utente già li ha.';
$l['ougc_awards_form_revoke'] = 'Revoca Premio';
$l['ougc_awards_form_revoke_desc'] = 'Seleziona i premi da revocare all\'utente.';
$l['ougc_awards_form_requirements'] = 'Requisiti';
$l['ougc_awards_form_requirements_desc'] = 'Seleziona le regole per eseguire la task sugli utenti.';
$l['ougc_awards_form_requirements_post'] = 'Numero Messaggi';
$l['ougc_awards_form_requirements_threads'] = 'Numero Discussioni';
$l['ougc_awards_form_requirements_fposts'] = 'Numero Messaggi Forum';
$l['ougc_awards_form_requirements_fposts_desc'] = 'Inserisci il numero di messaggi richiesti nel forum selezionato. Il valore Numero Messaggi Forum deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per i messaggi.';
$l['ougc_awards_form_requirements_fthreads'] = 'Numero Discussioni Forum';
$l['ougc_awards_form_requirements_fthreads_desc'] = 'Inserisci il numero di discussioni richieste nel forum selezionato. Il valore Numero Discussioni Forum deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per le discussioni.';
$l['ougc_awards_form_requirements_registered'] = 'Tempo Registrato';
$l['ougc_awards_form_requirements_online'] = 'Tempo Online';
$l['ougc_awards_form_requirements_reputation'] = 'Reputazione';
$l['ougc_awards_form_requirements_referrals'] = 'Utenti Referiti';
$l['ougc_awards_form_requirements_warnings'] = 'Punti Avvertimento';
$l['ougc_awards_form_requirements_newpoints'] = 'Punti Newpoints';
$l['ougc_awards_form_requirements_newpoints_desc'] = 'Inserisci il numero di punti Newpoints richiesti. Il valore Punti Newpoints deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per i punti Newpoints.';
$l['ougc_awards_form_requirements_previousawards'] = 'Premi Precedenti';
$l['ougc_awards_form_requirements_previousawards_desc'] = 'Seleziona i premi che l\'utente deve avere per soddisfare il criterio. Il valore Premi Precedenti deve essere selezionato come requisito per essere incluso.';
$l['ougc_awards_form_requirements_profilefields'] = 'Campi Utente Riempiti';
$l['ougc_awards_form_requirements_profilefields_desc'] = 'Seleziona i campi utente richiesti. Il valore Campi Utente Riempiti deve essere selezionato come requisito per essere incluso.';
$l['ougc_awards_form_requirements_mydownloads'] = 'Numero File MyDownloads';
$l['ougc_awards_form_requirements_mydownloads_desc'] = 'Inserisci il numero di file di MyDownloads richiesti. Il valore Numero File MyDownloads deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per i file di MyDownloads.';
$l['ougc_awards_form_requirements_myarcadechampions'] = 'Numero Campionati MyArcade';
$l['ougc_awards_form_requirements_myarcadechampions_desc'] = 'Inserisci il numero di campionati MyArcade richiesti. Il valore Campionati MyArcade deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per i campionati MyArcade.';
$l['ougc_awards_form_requirements_myarcadescores'] = 'Punteggio MyArcade';
$l['ougc_awards_form_requirements_myarcadescores_desc'] = 'Inserisci il punteggio MyArcade richiesto. Il valore Punteggio MyArcade deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per il punteggio MyArcade.';
$l['ougc_awards_form_requirements_ougc_customrep_r'] = 'Reputazione Ricevuta OUGC Custom Reputation';
$l['ougc_awards_form_requirements_ougc_customrep_r_desc'] = 'Inserisci il numero di reputazione ricevuta con OUGC Custom Reputation per il tipo di reputazione selezionato. Il valore Reputazione Ricevuta OUGC Custom Reputation deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per la reputazione ricevuta con OUGC Custom Reputation.';
$l['ougc_awards_form_requirements_ougc_customrep_g'] = 'Reputazione Data OUGC Custom Reputation';
$l['ougc_awards_form_requirements_ougc_customrep_g_desc'] = 'Inserisci il numero di reputazione data con OUGC Custom Reputation per il tipo di reputazione selezionato. Il valore Reputazione Data OUGC Custom Reputation deve essere selezionato come requisito per essere incluso. Seleziona il tipo di confronto per la reputazione data con OUGC Custom Reputation.';

// ACP Module: Home
$l['ougc_awards_view_image'] = 'Immagine';
$l['ougc_awards_view_actions'] = 'Opzioni';
$l['ougc_awards_view_empty'] = 'Al momento non ci sono articoli da mostrare.';

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
