<?php
// --------------------------------------------------------------------------------
// MyBB Traduzione Italiana
// ================================================================================
// Autore: chack1172
// Editore: MyBB Italia
// --------------------------------------------------------------------------------

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Mohamed Benjelloun
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE. 
 */

// plugin's info()
$l['mp_myprofile'] = "MyProfile";
$l['mp_myprofile_desc'] = "Migliora i profili di default aggiungendo commenti, ultimo accesso, lista amici e molto altro.";

// settings
//// comments
$l['mp_myprofile_comments'] = "Commenti MyProfile";
$l['mp_myprofile_comments_desc'] = "Attivando i Commenti puoi migliorare i profili degli utenti con un potente sistema di commenti.";
$l['mp_myprofile_comments_enabled'] = "MyProfile Commenti Attivato";
$l['mp_myprofile_comments_enabled_desc'] = "Imposta su 'Yes' per attivare i commenti sui profili, oppure 'No' per disattivarli.";
$l['mp_myprofile_comments_ajax_enabled'] = "AJAX attivato";
$l['mp_myprofile_comments_ajax_enabled_desc'] = "Imposta su 'Yes' per attivare le richieste basate sulla tecnologia AJAX, questa opzione permette agli utenti di modificare / archiviare / richiamare i commenti senza dover ricaricare la pagina ad ogni azione effettuata. Se non sai come configurare questa opzione, lasciala impostata su 'Yes'. <strong>Ti preghiamo di notare che alcune azioni verrebbero eseguite con la tecnologia AJAX anche se questa opzione verrà disattivata.</strong>.";
$l['mp_myprofile_comments_notification'] = "Sistema di Notifica";
$l['mp_myprofile_comments_notification_desc'] = "Seleziona il sistema di notifiche che MyProfile Comments dovrà usare per avvisare gli utenti del ricevimento di nuovi commenti. Se verrà selezionato <strong>MyAlerts or Alert bar</strong>, verrà verificato che il plugin MyAlerts sia installato, altrimenti, verrà usata la Alert bar (Barra delle Notifiche). Se selezioni <em>MyAlerts</em>, verrà utilizzato solamente se il plugin in questione è installato.";
$l['mp_myprofile_comments_notification_myalerts_alertbar'] = "MyAlerts o Alert bar (Barra delle Notifiche)";
$l['mp_myprofile_comments_notification_myalerts'] = "MyAlerts";
$l['mp_myprofile_comments_notification_alertbar'] = "Alert bar (Barra delle Notifiche)";
$l['mp_myprofile_comments_notification_none'] = "Nessuno";
$l['mp_myprofile_comments_perpage'] = "Numero di Commenti Per Pagina";
$l['mp_myprofile_comments_perpage_desc'] = "Seleziona il numero di commenti da visualizzare in ciascuna pagina.";
$l['mp_myprofile_comments_min_length'] = "Caratteri Minimi per ogni commento";
$l['mp_myprofile_comments_min_length_desc'] = "Inserisci il numero di caratteri neccessari perchè un commento venga inviato.";
$l['mp_myprofile_comments_max_length'] = "Caratteri Massimi per ogni commento";
$l['mp_myprofile_comments_max_length_desc'] = "Inserisci il numero massimo di caratteri da visualizzare in ogni commento. Ricorda che anche i codici MyCodes come [b] e [/b] che modificano lo stile del testo vengono contateggiati.";
$l['mp_myprofile_comments_ignore'] = "Escludi Gli Utenti Ignorati Dall'Invio Di Commenti";
$l['mp_myprofile_comments_ignore_desc'] = "Attiva quest'opzione se volete che gli utenti ignorati non possano inviare commenti sul profilo dell'utente che gli ha aggiunti alla lista degli ignorati.";
$l['mp_myprofile_comments_edit_time'] = "Tempo di modifica dei commenti";
$l['mp_myprofile_comments_edit_time_desc'] = "Seleziona il numero di <strong>minuti</strong> che gli utenti hanno per modificare i propri commenti. Seleziona 0 per Infiniti.";
$l['mp_myprofile_comments_flood_time'] = "Anti-Flood Commenti";
$l['mp_myprofile_comments_flood_time_desc'] = "Seleziona il numero di <strong>secondi</strong> che gli utenti dovranno aspettare prima di poter inviare un altro commento.";
$l['mp_myprofile_comments_status_enabled'] = "Stato Privato/Pubblico Attivato?";
$l['mp_myprofile_comments_status_enabled_desc'] = "Imposta su 'Yes' per attivare gli stati utente privati/pubblici. Uno stato privato è visualizzabile soltanto dall'autore e dai moderatori.";
$l['mp_myprofile_comments_allow_img'] = "Attiva l'inserimento di Immagini Nei Commenti";
$l['mp_myprofile_comments_allow_img_desc'] = "Imposta su 'Yes' per permettere l'inserimento di Immagini nei commenti.";
$l['mp_myprofile_comments_allow_video'] = "Attiva l'inserimento di Video Nei Commenti";
$l['mp_myprofile_comments_allow_video_desc'] = "Imposta su 'Yes' per permettere l'inserimento di Video nei commenti.";
$l['mp_myprofile_comments_allow_smilies'] = "Attiva Emoticon Nei Commenti";
$l['mp_myprofile_comments_allow_smilies_desc'] = "Imposta su 'Yes' per permettere l'inserimento di Emoticon nei commenti.";
$l['mp_myprofile_comments_allow_mycode'] = "Attiva MyCode Nei Commenti";
$l['mp_myprofile_comments_allow_mycode_desc'] = "Imposta su 'Yes' per permettere l'inserimento di codice MyCode nei commenti. MyCode corrisponde a [b], [i] ecc.";
$l['mp_myprofile_comments_filter_badwords'] = "Censura Parole Volgari Nei Commenti";
$l['mp_myprofile_comments_filter_badwords_desc'] = "Imposta su 'Yes' per attivare la censura delle parole volgari nei commenti.";
$l['mp_myprofile_comments_allow_html'] = "Attiva HTML nei commenti";
$l['mp_myprofile_comments_allow_html_desc'] = "Imposta su 'Yes' per permettere agli utenti di includere codice HTML nei loro commenti. <strong>Si prega di NON attivarlo se non sai cosa significa, può causare notevoli problemi di sicurezza.</strong>";
$l['mp_myprofile_comments_show_wysiwyg'] = "Visualizza l'editor WYSIWYG nei commenti";
$l['mp_myprofile_comments_show_wysiwyg_desc'] = "Imposta su 'Yes' per visualizzare l'editor WYSIWYG nei commenti, oppure 'No' se vuoi visualizzare un'area di testo vuota.";
$l['mp_myprofile_comments_closed_on_banned'] = "Impedire l'invio di commenti sul profilo degli utenti bannati?";
$l['mp_myprofile_comments_closed_on_banned_desc'] = "Imposta su 'Yes' per impedire l'invio di nuovi commenti sul profilo degli utenti bannati.";
$l['mp_myprofile_comments_show_stats'] = "Visualizza il contatore dei commenti nelle statistiche degli utenti";
$l['mp_myprofile_comments_show_stats_desc'] = "Imposta su 'Yes' per visualizzare il contatore dei commenti nelle statistiche degli utenti.";


//// last visitors
$l['mp_myprofile_visitors'] = "MyProfile Ultimi Visitatori";
$l['mp_myprofile_visitors_desc'] = "Permette di visualizzare gli ultimi visitatori di ogni profilo utente.";
$l['mp_myprofile_visitors_enabled'] = "MyProfile Ultimi Visitatori attivato";
$l['mp_myprofile_visitors_enabled_desc'] = "Imposta su 'Yes' per attivare la visualizzazione degli ultimi visitatori, oppure 'No' per disattivarla.";
$l['mp_myprofile_visitors_record'] = "Numero di Visitatori da visualizzare.";
$l['mp_myprofile_visitors_record_desc'] = "Seleziona il numero di Visitatori da visualizzare in ogni profilo utente.";

//// buddylist
$l['mp_myprofile_buddylist'] = "MyProfile Lista Amici";
$l['mp_myprofile_buddylist_desc'] = "Permette di visualizzare una lista amici su ciascun profilo utente.";
$l['mp_myprofile_buddylist_enabled']  = "MyProfile Lista Amici Attivato";
$l['mp_myprofile_buddylist_enabled_desc'] = "Imposta su 'Yes' per attivare la lista amici sui profili degli utenti, oppure 'No' per disattivarla.";
$l['mp_myprofile_buddylist_record'] = "Numero di Amici da visualizzare su ogni pagina";
$l['mp_myprofile_buddylist_record_desc'] = "Seleziona il numero di amici da visualizzare in ogni profilo utente. Ogni linea è costituita da 4 amici, quindi selezionando 8, per esempio, visualizzerà due righe.";
$l['mp_myprofile_buddylist_avatar_max_dimensions'] = "Dimensioni Massime degli Avatar nella lista amici.";
$l['mp_myprofile_buddylist_avatar_max_dimensions_desc'] = "Imposta le dimensioni massime per gli avatar da visualizzare nella lista amici, nella forma <b>ALTEZZAxLARGHEZZA</b>, dove ALTEZZA e LARGHEZZA sono rispettivamente la massima altezza e larghezza dell'avatar avatar.";
 
//// permissions
$l['mp_myprofile_referredby'] = "MyProfile Referente";
$l['mp_myprofile_referredby_desc'] = "Consenti agli utenti di mostrare il loro referente nei loro profili.";
$l['mp_myprofile_referredby_enabled'] = "MyProfile Referente Abilitato";
$l['mp_myprofile_referredby_enabled_desc'] = "Imposta su Si se vuoi attivare la funzionalità Referente nei profili degli utenti, o No per disattivarla.";


//// permissions
$l['mp_myprofile_permissions'] = "MyProfile Permessi";
$l['mp_myprofile_permissions_desc'] = "Consenti agli utenti di scegliere chi può vedere i loro profili.";
$l['mp_myprofile_permissions_enabled'] = "MyProfile Permessi Attivo";
$l['mp_myprofile_permissions_enabled_desc'] = "Imposta su Si se vuoi attivare il sistema dei permessi nei profili degli utenti, o No per disattivarlo.";
$l['mp_myprofile_permissions_groups'] = "MyProfile Gruppi Autorizzati";
$l['mp_myprofile_permissions_groups_desc'] = "Seleziona i gruppi che possono impostare i loro permessi del profilo.";

// acp
$l['mp_options_can_use_image_background'] = "Può usare un immagine come sfondo?";
$l['mp_options_can_manage_comments'] = "Può gestire i commenti? (Può modificare ed elimitare tutti i commenti)";
$l['mp_options_can_send_comments'] = "Può inviare nuovi commenti?";
$l['mp_options_can_edit_own_comments'] = "Può modificare i propri commenti?";
$l['mp_options_can_delete_own_comments'] = "Può eliminare i propri commenti?";

// Permission Viewer stuff
$l['mp_options_can_use_image_background'] = "Può usare un'immagine di sfondo?";
$l['mp_options_canmanagecomments'] = "Può gestire i commenti? (Può modificare e eliminare tutti i commenti)";
$l['mp_options_cansendcomments'] = "Può inviare i commenti?";
$l['mp_options_caneditowncomments'] = "Può modificare i propri commenti?";
$l['mp_options_candeleteowncomments'] = "Può eliminare i propri commenti?";
$l['mp_options_commentsperday'] = "Commenti al giorno.";
