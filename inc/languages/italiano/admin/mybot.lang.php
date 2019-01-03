<?php
// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: chack1172
// Editore: MyBB Italia
// Plugin: MyReactions
// --------------------------------------------------------------------------------

$l['mybot'] = "MyBot";
$l['mybot_permission'] = "Può configurare MyBot?";


/* Admin Modul */
$l['mybot_overview'] = "Panoramica di tutte le regole";
$l['mybot_addrule'] = "Aggiungi nuova regola";
$l['mybot_addrule_desc'] = "Qui puoi aggiungere una nuova regola";
$l['mybot_post'] = "Invia come bot";
$l['mybot_post_desc'] = "Qui puoi inviare come bot";
$l['mybot_documentation'] = "Documentazione";
$l['mybot_documentation_desc'] = "Qui puoi vedere tutte le variabili che puoi utilizzare in vari testi";
$l['mybot_cache_reload'] = "Ricarica Cache";
$l['mybot_no_id'] = "Nessun id fornito";
$l['mybot_no_rules'] = "Nessuna regola disponibile";

/* Auflistung */
$l['mybot_title'] = "Titolo";
$l['mybot_conditions'] = "Condizione";
$l['mybot_conditions_user'] = "Utente";
$l['mybot_conditions_group'] = "Gruppo utente";
$l['mybot_conditions_forum'] = "Forum";
$l['mybot_conditions_string'] = "Stringa";
$l['mybot_conditions_string_reverse'] = "Stringa inversa";
$l['mybot_conditions_postlimit'] = "Sotto {1} post";
$l['mybot_conditions_prefix'] = "Prefisso";
$l['mybot_actions'] = "Azioni";
$l['mybot_actions_answer'] = "Rispondi";
$l['mybot_actions_move'] = "Sposta";
$l['mybot_actions_delete'] = "Elimina";
$l['mybot_actions_softdelete'] = "Eliminazione soft";
$l['mybot_actions_stick'] = "Rilievo";
$l['mybot_actions_close'] = "Apri/Chiudi";
$l['mybot_actions_report'] = "Segnala";
$l['mybot_actions_approve'] = "Approva/Non approvare";
$l['mybot_actions_pm'] = "Scrivi MP";

/* Cache Update */
$l['mybot_cache_reloaded'] = "Cache aggiornata";

/* Documentation */
$l['mybot_variable'] = "Variabile";
$l['mybot_description'] = "Descrizione";
$l['mybot_global'] = "Variabili globali";
$l['mybot_doc_boardname'] = "Il nome della board";
$l['mybot_doc_botname'] = "Il nome del bot";
$l['mybot_register'] = "Variabili per la registrazione";
$l['mybot_doc_registered'] = "Il nome del nuovo registrato";
$l['mybot_doc_regid'] = "L'ID del nuovo registrato";
$l['mybot_birthday'] = "Variabili per il compleanno";
$l['mybot_doc_birthday'] = "Il nome dell'utente che ha il compleanno";
$l['mybot_doc_bid'] = "L'ID dell'utente che ha il compleanno";
$l['mybot_thread'] = "Variabili per le discussioni";
$l['mybot_doc_user'] = "Il nome di chi ha inviato il messaggio";
$l['mybot_doc_userlink'] = "Il nome di chi ha inviato il messaggio con un link MyCode al suo profilo";
$l['mybot_doc_subject'] = "L'oggetto del messaggio";
$l['mybot_doc_id'] = "L'ID del messaggio";
$l['mybot_doc_link'] = "Link MyCode del messaggio. L'oggetto è il testo che verrà mostrato";
$l['mybot_doc_date'] = "Data del messaggio";
$l['mybot_doc_time'] = "Tempo del messaggio";
$l['mybot_doc_message'] = "Il testo completo del messaggio";
$l['mybot_doc_uid'] = "L'ID dell'utente";
$l['mybot_doc_timestamp'] = "Timestamp del messaggio";
$l['mybot_doc_thread'] = "Tutte le variabili per l'ultimo messaggio sono disponibili anche per la discussione.<br />Esempio:<br />{lastpost->user} verrà sostituito con il nome dell'utente che ha scritto l'ultimo messaggio. {thread->user} verrà sostituito con il nome dell'utente che ha scritto il primo messaggio";
$l['mybot_doc_forum'] = "Il forum in cui è stata inviata la discussione";
$l['mybot_doc_answers'] = "Numero di risposte";
$l['mybot_doc_views'] = "Numero di visite";
$l['mybot_doc_foundstring'] = "La prima stringa trovata, se la funzione corrispondente è utilizzata. L'ordine è dato dal Pannello Amministrazione";

/* Post as Bot */
$l['mybot_post_forum'] = "Forum";
$l['mybot_post_forum_desc'] = "In che forum deve essere inviata?";
$l['mybot_post_forum_not'] = "Errore interno [1]";
$l['mybot_post_subject'] = "Titolo";
$l['mybot_post_subject_desc'] = "Il titolo della discussione";
$l['mybot_post_subject_not'] = "Nessun titolo fornito";
$l['mybot_post_text'] = "Testo";
$l['mybot_post_text_desc'] = "Il messaggio che deve essere inviato. MyCode e smiley sono attivi. <br />Nota: Le variabili di MyBot non sono disponibili qui";
$l['mybot_post_text_not'] = "Nessun testo fornito";
$l['mybot_post_submit'] = "Invia discussione";
$l['mybot_post_category'] = "Il forum scelto è una categoria nella quale non si possono creare discussioni.";
$l['mybot_post_inserted'] = "Discussione salvata";

/* Add/Edit/Delete Rule */
$l['mybot_editrule'] = "Modifica regola";
$l['mybot_add_title'] = "Titolo della regola";
$l['mybot_add_title_desc'] = "Necessaria per l'elenco";
$l['mybot_add_title_not'] = "Inserisci un titolo";
$l['mybot_add_conditions'] = "Condizioni";
$l['mybot_add_conditions_desc'] = "Quando deve essere eseguita la regola?<br />Utilizza Crtl per selezionare più di una condizione";
$l['mybot_add_conditions_user'] = "Se un utente specifico invia un messaggio";
$l['mybot_add_conditions_group'] = "Se un utente di un gruppo utente specifico invia un messaggio";
$l['mybot_add_conditions_forum'] = "Solo in forum specifici";
$l['mybot_add_conditions_string'] = "Se una specifica stringa è nel messaggio";
$l['mybot_add_conditions_postlimit'] = "Soltanto sotto x messaggi";
$l['mybot_add_conditions_prefix'] = "Soltanto nelle discussione con un prefisso specifico";
$l['mybot_add_conditions_not'] = "Selezionare almeno una condizione";
$l['mybot_add_action'] = "Azioni";
$l['mybot_add_action_desc'] = "Cosa deve fare il bot?<br />Utilizza Crtl per selezionare più di una azione";
$l['mybot_add_action_answer'] = "Rispondi";
$l['mybot_add_action_move'] = "Sposta discussione";
$l['mybot_add_action_delete'] = "Elimina messaggio/discussione";
$l['mybot_add_action_softdelete'] = "Eliminazione soft messaggio/discussione";
$l['mybot_add_action_stick'] = "Relievo/Rimuovi rilievo discusione";
$l['mybot_add_action_close'] = "Apri/Chiudi discussione";
$l['mybot_add_action_report'] = "Segnala messaggio";
$l['mybot_add_action_approve'] = "Approva/Non approvare discussione";
$l['mybot_add_action_pm'] = "Invia MP";
$l['mybot_add_action_not'] = "Selezionare almeno una azione";
$l['thread_creator'] = "Creatore discussione";
$l['mybot_add_user'] = "Utente";
$l['mybot_add_user_desc'] = "Su che utente deve reagire il bot?";
$l['mybot_add_user_not'] = "Seleziona un utente";
$l['mybot_add_group'] = "Gruppo utente";
$l['mybot_add_group_desc'] = "Su che gruppo utente deve reagire il bot?";
$l['mybot_add_group_not'] = "Seleziona un gruppo utente";
$l['mybot_add_forum'] = "Forum";
$l['mybot_add_forum_desc'] = "In che forum deve reagire il bot?";
$l['mybot_add_forum_not'] = "Seleziona un forum";
$l['mybot_add_string'] = "Stringa";
$l['mybot_add_string_desc'] = "Che stringa deve essere presente nel messaggio per far reagire il bot?";
$l['mybot_add_string_not'] = "Inserisci una stringa";
$l['mybot_add_string_reverse'] = "Stringa inversa?";
$l['mybot_add_string_reverse_desc'] = "Il bot reagisce quando una stringa non è nel messaggio";
$l['mybot_add_string_reverse_not'] = "Errore interno";
$l['mybot_add_postlimit'] = "Limite messaggi";
$l['mybot_add_postlimit_desc'] = "Dopo quanti messaggi deve reagire il bot?";
$l['mybot_add_postlimit_not'] = "Inserisci un limite di messaggi";
$l['mybot_add_prefix'] = "Prefisso";
$l['mybot_add_prefix_desc'] = "Su che prefissi deve reagire il bot?";
$l['mybot_add_prefix_not'] = "Seleziona almeno un prefisso";
$l['mybot_add_answer'] = "Risposta";
$l['mybot_add_answer_desc'] = "Cosa deve rispondere il bot?<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['mybot_add_answer_not'] = "Inserisci una risposta";
$l['mybot_add_move'] = "Sposta";
$l['mybot_add_move_desc'] = "Dove deve essere spostara la discussione?";
$l['mybot_add_move_not'] = "Seleziona il forum in cui deve essere spostata la discussione";
$l['mybot_add_move_invalid'] = "Non puoi spostare le discussioni in questo forum. Selezionane un'altro";
$l['mybot_add_delete'] = "Elimina";
$l['mybot_add_delete_desc'] = "Deve essere eliminata l'intera discussione o soltanto l'ultimo messaggio?";
$l['mybot_add_delete_not'] = "Errore interno [1]";
$l['mybot_add_softdelete'] = "Eliminazione Soft";
$l['mybot_add_softdelete_desc'] = "Deve essere eliminata in modo soft l'intera discussione o solo l'ultimo messaggio?";
$l['mybot_add_softdelete_not'] = "Errore interno [4]";
$l['thread'] = "Discussione";
$l['post'] = "Messaggio";
$l['mybot_add_report'] = "Motivo segnalazione";
$l['mybot_add_report_desc'] = "Inserisci una stringa che verrà salvata come motivo.";
$l['mybot_add_report_not'] = "Inserisci il motivo della segnalazione.";
$l['mybot_add_approve'] = "Approva/Non approvare";
$l['mybot_add_approve_desc'] = "Questa azione riguarda soltanto l'ultimo messaggio o l'intera discussione?";
$l['mybot_add_approve_not'] = "Errore interno [2]";
$l['mybot_add_pm'] = "Messaggio Privato";
$l['mybot_add_pm_desc'] = "A chi deve essere inviato il messaggio?";
$l['mybot_add_pm_not'] = "Errore interno [3]";
$l['mybot_add_pm_last'] = "Autore ultimo messaggio";
$l['mybot_add_pm_start'] = "Creatore discussione";
$l['mybot_add_pm_other'] = "Altro utente";
$l['mybot_add_pm_user'] = "Utente";
$l['mybot_add_pm_user_desc'] = "A che utente verrà inviato il messaggio?";
$l['mybot_add_pm_user_not'] = "Seleziona un utente";
$l['mybot_add_subject'] = "Soggetto";
$l['mybot_add_subject_desc'] = "Che oggetto deve avere il messaggio?<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['mybot_add_subject_not'] = "Inserisci un oggetto";
$l['mybot_add_message'] = "Messagio";
$l['mybot_add_message_desc'] = "Che messaggio deve scrivere il bot?<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['mybot_add_message_not'] = "Inserisci un messaggio";
$l['mybot_add_added'] = "Regola aggiunta";
$l['mybot_add_edited'] = "Regola modificata";
$l['mybot_delete_confirm'] = "Sei sicuro di voler eliminare questa regola?";
$l['mybot_delete_success'] = "Regola eliminata";

/* Install Process */
$l['mybot_installing'] = "Installazione MyBot";
//$l['mybot_already_installed'] = "MyBot ist bereits installiert";
$l['mybot_create_user'] = "Crea un nuovo utente";
$l['mybot_create_group'] = "Crea un nuovo gruppo";
$l['mybot_user'] = "Utente";
$l['mybot_user_desc'] = "Che utente deve essere usato come bot?";
$l['mybot_user_not'] = "Errore interno [1]";
$l['mybot_username'] = "Nome utente";
$l['mybot_username_desc'] = "Come deve essere chiamato il nuovo utente?";
$l['mybot_username_not'] = "Nessun nome utente fornito";
$l['mybot_pw'] = "Password";
$l['mybot_pw_desc'] = "Inserisci una password per il nuovo utente";
$l['mybot_pw_not'] = "Nessuna password fornita";
$l['mybot_email'] = "Indirizzo email";
$l['mybot_email_desc'] = "Inserisci un indirizzo email per il nuovo utente";
$l['mybot_email_not'] = "Nessun indirizzo email fornito";
$l['mybot_group'] = "Gruppo";
$l['mybot_group_desc'] = "A che gruppo deve essere assegnato il nuovo utente?";
$l['mybot_group_not'] = "Errore interno [2]";
$l['mybot_groupname'] = "Nome gruppo";
$l['mybot_groupname_desc'] = "Come deve essere chiamato il nuovo gruppo?";
$l['mybot_groupname_not'] = "Non hai fornito un nome per il nuovo gruppo";
$l['mybot_save'] = "Salva";
$l['mybot_installed_group'] = "{1}<br />utente \"{2}\" e gruppo \"{3}\" aggiunti<br />Si prega di modificarli di nuovo";
$l['mybot_installed_user'] = "{1}<br />utente \"{2}\" aggiunto<br />Si prega di modificarlo di nuovo";
$l['mybot_installed'] = "MyBot è stato installato con successo.";

$l['mybot_pl_missing'] = "Il plugin <a href='http://mods.mybb.com/view/pluginlibrary'>PluginLibrary</a> non è presente. Installalo";
$l['mybot_pl_old'] = "Il plugin necessita di una versione aggiornata di <a href='http://mods.mybb.com/view/pluginlibrary'>PluginLibrary</a>. Installa una nuova versione (Versione 8 o superiore richiesta)";

$l['setting_group_mybot'] = "Impostazione MyBot";
$l['setting_group_mybot_desc'] = "Impostazioni per il plugin \"MyBot\"";
$l['setting_mybot_user'] = "Bot";
$l['setting_mybot_user_desc'] = "Inserisci l'UID dell'utente che dovrebbe essere il bot";
$l['setting_mybot_selfreact'] = "Reagisce su se stesso?";
$l['setting_mybot_selfreact_desc'] = "Il bot deve reagire sui suoi messaggi quando qualcuno è loggato con questo utente?";
$l['setting_mybot_react'] = "Cosa deve fare il bot quando un nuovo utente si registra?";
$l['setting_mybot_react_none'] = "Niente";
$l['setting_mybot_react_post'] = "Crea una discussione";
$l['setting_mybot_react_pm_subject'] = "Oggetto (MP)";
$l['setting_mybot_react_pm_subject_desc'] = "Necessario soltanto quando il bot invia un MP a un nuovo utente<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['setting_mybot_react_pm'] = "Messaggio Privato (MP)";
$l['setting_mybot_react_pm_desc'] = "Inserisci il messaggio<br />Necessario soltanto quando il bot invia un MP a un nuovo utente<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['setting_mybot_react_post_forum'] = "Forum di benvenuto";
$l['setting_mybot_react_post_forum_desc'] = "Che forum deve usare il bot per inviare la dicussione?";
$l['setting_mybot_react_post_subject'] = "Oggetto (Discussione)";
$l['setting_mybot_react_post_subject_desc'] = "Necessario soltanto quando il bot invia una discussione in un forum quando un nuovo utente si registra<br />Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['setting_mybot_react_post_text'] = "Messaggio (Discussione)";
$l['setting_mybot_react_post_text_desc'] = $l['setting_mybot_react_post_subject_desc'];
$l['setting_mybot_bday'] = "Cosa fa il bot quando è il compleanno di qualcuno?";
$l['setting_mybot_bday_none'] = "Niente";
$l['setting_mybot_bday_post'] = "Crea una discussione";
$l['setting_mybot_bday_pm_subject'] = "Oggetto (MP)";
$l['setting_mybot_bday_pm_subject_desc'] = "Guarda la <a href=\"index.php?module=user-mybot&amp;action=documentation\">documentazione</a> per maggiori informazioni";
$l['setting_mybot_bday_pm'] = "Messaggio Privato (MP)";
$l['setting_mybot_bday_pm_desc'] = $l['setting_mybot_bday_pm_subject_desc'];
$l['setting_mybot_bday_post_forum'] = "Forum di auguri";
$l['setting_mybot_bday_post_forum_desc'] = "Che forum deve usare il bot per inviare la dicussione?";
$l['setting_mybot_bday_post_subject'] = "Oggetto (Discussione)";
$l['setting_mybot_bday_post_subject_desc'] = $l['setting_mybot_bday_pm_desc'];
$l['setting_mybot_bday_post_text'] = "Messaggio (Discussione)";
$l['setting_mybot_bday_post_text_desc'] = $l['setting_mybot_bday_post_subject_desc'];
?>