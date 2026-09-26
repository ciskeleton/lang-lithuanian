<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponentės';
$lang['admin_content'] = 'Turinys';
$lang['admin_database_backup'] = 'Duomenų bazės atsarginimai';
$lang['admin_extensions'] = 'Plėtiniai';
$lang['admin_firewall'] = 'Ugniasienė';
$lang['admin_help'] = 'Pagalba';
$lang['admin_languages'] = 'Kalbos';
$lang['admin_logs'] = 'Sistemos Žurnalai';
$lang['admin_media'] = 'Medijoteka';
$lang['admin_modules'] = 'Moduliai';
$lang['admin_plugins'] = 'Įskiepiai';
$lang['admin_reports'] = 'Aktyvumo Žurnalas';
$lang['admin_settings'] = 'Sistemos Nustatymai';
$lang['admin_sysinfo'] = 'Sistemos Informacija';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Sistemos ugniasienė';
$lang['admin_themes'] = 'Temos';
$lang['admin_updates'] = 'Sistemos Atnaujinimai';
$lang['admin_users'] = 'Vartotojai';
$lang['admin_view_site'] = 'Žiūrėti Svetainę';
$lang['per_page'] = 'Per puslapį';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Ačiū už kūrimą su <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nėra aktyvių elementų.} other{<b>#</b> iš <b>%s</b> elementų yra aktyvūs.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Diegimas nepavyko: %s';
$lang['admin_install_location_app'] = 'Tik šiai programai';
$lang['admin_install_location_core'] = 'Visos programos';
$lang['admin_install_location_select'] = '&#151; Pasirinkite vietą &#151;';
$lang['admin_install_update_confirm'] = 'Ar tikrai norite atnaujinti šį paketą?';
$lang['admin_install_update_error'] = 'Nepavyko atnaujinti paketo.';
$lang['admin_install_update_skip_confirm'] = 'Ar tikrai norite praleisti šį atnaujinimą?';
$lang['admin_install_update_skip_error'] = 'Nepavyko praleisti šio atnaujinimo.';
$lang['admin_install_update_skip_success'] = 'Atnaujinimas sėkmingai praleistas.';
$lang['admin_install_update_success'] = 'Paketas sėkmingai atnaujintas.';
$lang['admin_install_upload_tip'] = 'Įdiekite paketą įkeldami čia jo <b>.zip</b> failą.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nepavyksta išvalyti senus atsarginimo failus.';
$lang['admin_database_backup_clean_success'] = '%d atsarginimo failų ištrinta. %d disko vietos atlaisvinta.';
$lang['admin_database_backup_create'] = 'Sukurti Atsarginimą';
$lang['admin_database_backup_create_confirm'] = 'Ar tikrai norite sukurti atsarginimą dabar?';
$lang['admin_database_backup_create_error'] = 'Nepavyksta sukurti atsarginimo failą. Įsitikinkite, ar aplanka <b>%s</b> yra rašoma.';
$lang['admin_database_backup_create_success'] = 'Duomenų bazės atsarginimo failas <b>%s</b> sėkmingai sukurtas.';
$lang['admin_database_backup_delete_confirm'] = 'Ar tikrai norite ištrinti šius atsarginimo failus?';
$lang['admin_database_backup_delete_error'] = 'Nepavyksta ištrinti pasirinktus atsarginimo failus.';
$lang['admin_database_backup_delete_success'] = 'Atsarginimo failai sėkmingai ištrinti.';
$lang['admin_database_backup_download_error'] = 'Nepavyksta atsisiųsti pasirinktą atsarginimo failą.';
$lang['admin_database_backup_download_success'] = 'Atsarginimo failas sėkmingai atsisiųstas.';
$lang['admin_database_backup_lock_confirm'] = 'Ar tikrai norite užrakinti šius atsarginimo failus?';
$lang['admin_database_backup_lock_error'] = 'Nepavyksta užrakinti pasirinktus atsarginimo failus.';
$lang['admin_database_backup_lock_success'] = 'Atsarginimo failai sėkmingai užrakinti.';
$lang['admin_database_backup_locked_error'] = 'Nepavyksta ištrinti užrakintus atsarginimo failus.';
$lang['admin_database_backup_missing_error'] = 'Atsarginimo failas nerastas.';
$lang['admin_database_backup_unlock_confirm'] = 'Ar tikrai norite atrakinti šius atsarginimo failus?';
$lang['admin_database_backup_unlock_error'] = 'Nepavyksta atrakinti pasirinktus atsarginimo failus.';
$lang['admin_database_backup_unlock_success'] = 'Atsarginimo failai sėkmingai atrakinti.';
$lang['admin_database_prune'] = 'Išvalyti';
$lang['admin_database_prune_confirm'] = 'Ar tikrai norite išvalyti duomenų bazę? Atsarginimas bus sukurtas prieš vykdymo.';
$lang['admin_database_prune_error'] = 'Nepavyksta išvalyti duomenų bazę.';
$lang['admin_database_prune_next'] = 'Kita išvalymo: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Duomenų bazė sėkmingai išvalyta.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Ištrinti Žurnalus';
$lang['admin_logs_delete_confirm'] = 'Ar tikrai norite ištrinti pasirinktus žurnalų failus?';
$lang['admin_logs_delete_error'] = 'Nepavyksta ištrinti žurnalų failus.';
$lang['admin_logs_delete_success'] = 'Žurnalų failai sėkmingai ištrinti.';
$lang['admin_logs_error_disabled'] = 'Žurnalų vedimas šiuo metu nėra įjungtas.';
$lang['admin_logs_error_empty'] = 'Žurnalų failų nerasta.';
$lang['admin_logs_error_missing'] = 'Arba žurnalų failas nerastas, ar jis buvo tuščias.';
$lang['admin_logs_tip'] = 'Žurnalų vedimas gali greitai sukurti labai didelius failus. Tiesių svetainėms, pagalvokite senų žurnalų failų ištrynimą.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Ar tikrai norite ištrinti pasirinktus el. laiškus?';
$lang['admin_emails_delete_error'] = 'Nepavyksta ištrinti pasirinktus el. laiškus.';
$lang['admin_emails_delete_success'] = 'Pasirinkti el. laiškai sėkmingai ištrinti.';
$lang['admin_emails_email_from'] = 'Išsiųsta Nuo';
$lang['admin_emails_mail_queue'] = 'El. laiško Eilė';
$lang['admin_emails_mailer'] = 'Masinis El. laiškas';
$lang['admin_emails_search'] = 'Ieškoti el. laiškų pagal temą arba turinį...';
$lang['admin_emails_send_error'] = 'Nepavyko įdėti el. laišką. Bandykite dar kartą.';
$lang['admin_emails_send_none'] = 'Nėra vieno vartotojo atitinka jūsų pasirinkimo kriterijams.';
$lang['admin_emails_send_success'] = 'El. laiškas įdėtas eilėje ir bus išsiųstas netrukus.';
$lang['admin_emails_send_to_banned'] = 'Siųsti užblokuotiems vartotojams.';
$lang['admin_emails_send_to_deleted'] = 'Siųsti ištrintiems vartotojams.';
$lang['admin_emails_send_to_disabled'] = 'Siųsti neaktyviems vartotojams.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Pridėti vartotoją';
$lang['admin_users_all_users'] = 'Visi vartotojai';
$lang['admin_users_ban_confirm'] = 'Ar tikrai norite užblokuoti pasirinktus naudotojus?';
$lang['admin_users_ban_error'] = 'Nepavyko užblokuoti pasirinktų naudotojų.';
$lang['admin_users_ban_success'] = 'Pasirinkti naudotojai sėkmingai užblokuoti.';
$lang['admin_users_delete_confirm'] = 'Ar tikrai norite ištrinti pasirinktus naudotojus?';
$lang['admin_users_delete_error'] = 'Nepavyko ištrinti pasirinktų naudotojų.';
$lang['admin_users_delete_success'] = 'Pasirinkti naudotojai sėkmingai ištrinti.';
$lang['admin_users_disable_confirm'] = 'Ar tikrai norite išjungti pasirinktus naudotojus?';
$lang['admin_users_disable_error'] = 'Nepavyko išjungti pasirinktų naudotojų.';
$lang['admin_users_disable_success'] = 'Pasirinkti naudotojai sėkmingai išjungti.';
$lang['admin_users_edit'] = 'Redaguoti vartotoją';
$lang['admin_users_edit_error'] = 'Nepavyko atnaujinti vartotojo.';
$lang['admin_users_edit_success'] = 'Vartotojas sėkmingai atnaujintas.';
$lang['admin_users_enable_confirm'] = 'Ar tikrai norite įjungti pasirinktus naudotojus?';
$lang['admin_users_enable_error'] = 'Nepavyko įjungti pasirinktų naudotojų.';
$lang['admin_users_enable_success'] = 'Pasirinkti naudotojai sėkmingai įjungti.';
$lang['admin_users_groups'] = 'Grupės';
$lang['admin_users_lock_confirm'] = 'Ar tikrai norite užrakinti pasirinktus vartotojus?';
$lang['admin_users_lock_error'] = 'Nepavyko užrakinti pasirinktų vartotojų.';
$lang['admin_users_lock_success'] = 'Pasirinkti vartotojai sėkmingai užrakinti.';
$lang['admin_users_logged'] = 'Prisijungę vartotojai';
$lang['admin_users_manage'] = 'Tvarkyti vartotojus';
$lang['admin_users_remove_confirm'] = 'Ar tikrai norite visam laikui ištrinti pasirinktus naudotojus ir visus jų duomenis?';
$lang['admin_users_remove_error'] = 'Nepavyko visam laikui ištrinti pasirinktų naudotojų ir visų jų duomenų.';
$lang['admin_users_remove_success'] = 'Pasirinkti naudotojai ir visi jų duomenys sėkmingai ištrinti.';
$lang['admin_users_restore_confirm'] = 'Ar tikrai norite atkurti pasirinktus naudotojus?';
$lang['admin_users_restore_error'] = 'Nepavyko atkurti pasirinktų naudotojų.';
$lang['admin_users_restore_success'] = 'Pasirinkti naudotojai sėkmingai atkurti.';
$lang['admin_users_search'] = 'Ieškoti pagal vardą, vartotojo vardą ar el. paštą...';
$lang['admin_users_unban_confirm'] = 'Ar tikrai norite atblokuoti pasirinktus naudotojus?';
$lang['admin_users_unban_error'] = 'Nepavyko atblokuoti pasirinktų naudotojų.';
$lang['admin_users_unban_success'] = 'Pasirinkti naudotojai sėkmingai atblokuoti.';
$lang['admin_users_unlock_confirm'] = 'Ar tikrai norite atrakinti pasirinktus vartotojus?';
$lang['admin_users_unlock_error'] = 'Nepavyko atrakinti pasirinktų vartotojų.';
$lang['admin_users_unlock_success'] = 'Pasirinkti vartotojai sėkmingai atrakinti.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Išvalyti žurnalus';
$lang['admin_reports_clear_confirm'] = 'Ar tikrai norite išvalyti veiksmų žurnalą?';
$lang['admin_reports_clear_error'] = 'Nepavyko išvalyti veiksmų žurnalo.';
$lang['admin_reports_clear_success'] = 'Veiksmų žurnalas sėkmingai išvalytas.';
$lang['admin_reports_latest_actions'] = 'Naujausi veiksmai';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Ar tikrai norite ištrinti pasirinktus failus?';
$lang['admin_media_delete_error'] = 'Nepavyko ištrinti failų.';
$lang['admin_media_delete_success'] = 'Failai sėkmingai ištrinti.';
$lang['admin_media_file_delete_error'] = 'Nepavyko ištrinti failo.';
$lang['admin_media_file_delete_success'] = 'Failas sėkmingai ištrintas.';
$lang['admin_media_file_update_error'] = 'Nepavyko atnaujinti failo.';
$lang['admin_media_file_update_success'] = 'Failas sėkmingai atnaujintas.';
$lang['admin_media_search'] = 'Ieškoti pagal pavadinimą, aprašymą arba failo pavadinimą...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nėra aktyvių modulių.} other{<b>#</b> iš <b>%s</b> modulių yra aktyvūs.}';
$lang['admin_modules_add'] = 'Pridėti modulį';
$lang['admin_modules_delete_confirm'] = 'Ar tikrai norite ištrinti modulį: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nepavyko ištrinti modulio.';
$lang['admin_modules_delete_error_active'] = 'Aktyvių modulių negalima ištrinti.';
$lang['admin_modules_delete_success'] = 'Modulis sėkmingai ištrintas.';
$lang['admin_modules_disable_all_confirm'] = 'Ar tikrai norite išjungti visus modulius?';
$lang['admin_modules_disable_all_error'] = 'Nepavyko išjungti visų modulių.';
$lang['admin_modules_disable_all_success'] = 'Visi moduliai sėkmingai išjungti.';
$lang['admin_modules_disable_confirm'] = 'Ar tikrai norite išjungti modulį: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nepavyko išjungti modulio.';
$lang['admin_modules_disable_success'] = 'Modulis sėkmingai išjungtas.';
$lang['admin_modules_enable_all_confirm'] = 'Ar tikrai norite įjungti visus modulius?';
$lang['admin_modules_enable_all_error'] = 'Nepavyko įjungti visų modulių.';
$lang['admin_modules_enable_all_success'] = 'Visi moduliai sėkmingai įjungti.';
$lang['admin_modules_enable_confirm'] = 'Ar tikrai norite įjungti modulį: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nepavyko įjungti modulio.';
$lang['admin_modules_enable_success'] = 'Modulis sėkmingai įjungtas.';
$lang['admin_modules_global'] = 'Bendrasis modulis (bendrinamas)';
$lang['admin_modules_install_confirm'] = 'Ar tikrai norite įdiegti modulį: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Nepavyko įdiegti modulio.';
$lang['admin_modules_install_success'] = 'Modulis sėkmingai įdiegtas.';
$lang['admin_modules_install_tip'] = 'Moduliai prideda naujas funkcijas ir galimybes jūsų svetainei. Naršykite galimus modulius <a href="%s" target="_blank" rel="noopener">modulių kataloge</a> arba įkelkite vieną kaip <b>.zip</b> paketą.';
$lang['admin_modules_update_confirm'] = 'Ar tikrai norite atnaujinti šį modulį?';
$lang['admin_modules_update_error'] = 'Nepavyko atnaujinti modulio.';
$lang['admin_modules_update_success'] = 'Modulis sėkmingai atnaujintas.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nėra aktyvių įskiepių.} other{<b>#</b> iš <b>%s</b> įskiepių yra aktyvūs.}';
$lang['admin_plugins_add'] = 'Pridėti įskiepį';
$lang['admin_plugins_delete_confirm'] = 'Ar tikrai norite ištrinti įskiepį: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nepavyko ištrinti įskiepio.';
$lang['admin_plugins_delete_error_active'] = 'Aktyvių papildinių negalima ištrinti.';
$lang['admin_plugins_delete_success'] = 'Įskiepis sėkmingai ištrintas.';
$lang['admin_plugins_disable_all_confirm'] = 'Ar tikrai norite išjungti visus įskiepius?';
$lang['admin_plugins_disable_all_error'] = 'Nepavyko išjungti visų įskiepių.';
$lang['admin_plugins_disable_all_success'] = 'Visi įskiepiai sėkmingai išjungti.';
$lang['admin_plugins_disable_confirm'] = 'Ar tikrai norite išjungti įskiepį: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nepavyko išjungti įskiepio.';
$lang['admin_plugins_disable_success'] = 'Įskiepis sėkmingai išjungtas.';
$lang['admin_plugins_enable_all_confirm'] = 'Ar tikrai norite įjungti visus įskiepius?';
$lang['admin_plugins_enable_all_error'] = 'Nepavyko įjungti visų įskiepių.';
$lang['admin_plugins_enable_all_success'] = 'Visi įskiepiai sėkmingai įjungti.';
$lang['admin_plugins_enable_confirm'] = 'Ar tikrai norite įjungti įskiepį: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nepavyko įjungti įskiepio.';
$lang['admin_plugins_enable_success'] = 'Įskiepis sėkmingai įjungtas.';
$lang['admin_plugins_global'] = 'Bendrasis papildinys (bendrinamas)';
$lang['admin_plugins_install_confirm'] = 'Ar tikrai norite įdiegti papildinį: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Nepavyko įdiegti papildinio.';
$lang['admin_plugins_install_success'] = 'Papildinys sėkmingai įdiegtas.';
$lang['admin_plugins_install_tip'] = 'Įskiepiai išplečia esamas funkcijas su papildomomis parinktimis ar integracijomis. Įdiekite iš <a href="%s" target="_blank" rel="noopener">įskiepių katalogo</a> arba įkelkite <b>.zip</b> failą.';
$lang['admin_plugins_update_confirm'] = 'Ar tikrai norite atnaujinti šį papildinį?';
$lang['admin_plugins_update_error'] = 'Nepavyko atnaujinti papildinio.';
$lang['admin_plugins_update_success'] = 'Papildinys sėkmingai atnaujintas.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Pridėti temą';
$lang['admin_themes_delete_confirm'] = 'Ar tikrai norite ištrinti temą: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nepavyko ištrinti temos.';
$lang['admin_themes_delete_error_active'] = 'Negalite ištrinti šiuo metu aktyvios temos.';
$lang['admin_themes_delete_success'] = 'Tema sėkmingai ištrinta.';
$lang['admin_themes_disable_confirm'] = 'Ar tikrai norite išjungti temą: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Nepavyko išjungti temos.';
$lang['admin_themes_disable_error_active'] = 'Aktyvios temos negalima išjungti.';
$lang['admin_themes_disable_success'] = 'Tema sėkmingai išjungta.';
$lang['admin_themes_enable_confirm'] = 'Ar tikrai norite įjungti temą: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nepavyko aktyvuoti temos.';
$lang['admin_themes_enable_success'] = 'Tema sėkmingai aktyvuota.';
$lang['admin_themes_install_confirm'] = 'Ar tikrai norite įdiegti temą: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Nepavyko įdiegti temos.';
$lang['admin_themes_install_success'] = 'Tema sėkmingai įdiegta.';
$lang['admin_themes_install_tip'] = 'Temos keičia jūsų svetainės išvaizdą ir išdėstymą. Pasirinkite iš <a href="%s" target="_blank" rel="noopener">temų bibliotekos</a> arba įkelkite <b>.zip</b> failą, kad įdiegtumėte savo.';
$lang['admin_themes_none_tip'] = 'Ši programa veikia be temos. Įdiekite temą, kad pritaikytumėte viešąją sąsają.';
$lang['admin_themes_update_confirm'] = 'Ar tikrai norite atnaujinti šią temą?';
$lang['admin_themes_update_error'] = 'Nepavyko atnaujinti temos.';
$lang['admin_themes_update_success'] = 'Tema sėkmingai atnaujinta.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Meniu';
$lang['admin_menus_assign_error'] = 'Nepavyko atnaujinti meniu vietų.';
$lang['admin_menus_assign_success'] = 'Meniu vietos sėkmingai atnaujintos.';
$lang['admin_menus_header'] = 'Yra <b>%s</b> meniu vietos.';
$lang['admin_menus_location'] = 'Vieta';
$lang['admin_menus_locations'] = 'Meniu vietos';
$lang['admin_menus_manage'] = 'Tvarkyti meniu';
$lang['admin_menus_menu'] = 'Priskirtas meniu';
$lang['admin_menus_none'] = '&#151; Nėra &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Pridėti kalbą';
$lang['admin_languages_default_confirm'] = 'Ar tikrai norite padaryti šią kalbą svetainės numatytąja kalba?';
$lang['admin_languages_default_error'] = 'Nepavyko pakeisti numatytosios kalbos.';
$lang['admin_languages_default_error_nochange'] = 'Ši kalba jau yra numatytoji.';
$lang['admin_languages_default_success'] = 'Numatytoji kalba sėkmingai pakeista.';
$lang['admin_languages_delete_confirm'] = 'Ar tikrai norite ištrinti kalbą: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Nepavyko ištrinti kalbos.';
$lang['admin_languages_delete_error_active'] = 'Aktyvių kalbų negalima ištrinti.';
$lang['admin_languages_delete_error_default'] = 'Numatytosios kalbos negalima ištrinti.';
$lang['admin_languages_delete_success'] = 'Kalba sėkmingai ištrinta.';
$lang['admin_languages_disable_all_confirm'] = 'Ar tikrai norite išjungti visas kalbas?';
$lang['admin_languages_disable_all_error'] = 'Nepavyko išjungti visų kalbų.';
$lang['admin_languages_disable_all_success'] = 'Visos kalbos sėkmingai išjungtos.';
$lang['admin_languages_disable_confirm'] = 'Ar tikrai norite išjungti kalbą: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nepavyko išjungti kalbos.';
$lang['admin_languages_disable_error_default'] = 'Numatytosios kalbos išjungti negalima.';
$lang['admin_languages_disable_error_nochange'] = 'Ši kalba jau yra išjungta.';
$lang['admin_languages_disable_success'] = 'Kalba sėkmingai išjungta.';
$lang['admin_languages_enable_all_confirm'] = 'Ar tikrai norite įjungti visas kalbas?';
$lang['admin_languages_enable_all_error'] = 'Nepavyko įjungti visų kalbų.';
$lang['admin_languages_enable_all_success'] = 'Visos kalbos sėkmingai įjungtos.';
$lang['admin_languages_enable_confirm'] = 'Ar tikrai norite įjungti kalbą: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nepavyko įjungti kalbos.';
$lang['admin_languages_enable_error_nochange'] = 'Ši kalba jau yra įjungta.';
$lang['admin_languages_enable_success'] = 'Kalba sėkmingai įjungta.';
$lang['admin_languages_install_confirm'] = 'Ar tikrai norite įdiegti kalbą: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Nepavyko įdiegti kalbos.';
$lang['admin_languages_install_success'] = 'Kalba sėkmingai įdiegta.';
$lang['admin_languages_install_tip'] = 'Kalbos prideda vertimus jūsų svetainės sąsajai ir turiniui. Peržiūrėkite galimas kalbas <a href="%s" target="_blank" rel="noopener">kalbų kataloge</a> arba įkelkite <b>.zip</b> paketą, kad įdiegtumėte savo kalbą.';
$lang['admin_languages_tip'] = 'Įjunkite, išjunkite ir nustatykite svetainės numatytąją kalbą. Įjungtos kalbos yra prieinamos svetainės lankytojams.';
$lang['admin_languages_update_confirm'] = 'Ar tikrai norite atnaujinti šią kalbą?';
$lang['admin_languages_update_error'] = 'Nepavyko atnaujinti kalbos.';
$lang['admin_languages_update_success'] = 'Kalba sėkmingai atnaujinta.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paketas jau egzistuoja.';
$lang['package_archive_download_failed'] = 'Nepavyko atsisiųsti paketo archyvo.';
$lang['package_backup_create_error'] = 'Nepavyko sukurti paketo atsarginės kopijos.';
$lang['package_backup_dir_failed'] = 'Nepavyko sukurti atsarginės kopijos katalogo %s';
$lang['package_backup_missing'] = 'Atsarginės kopijos failas neegzistuoja.';
$lang['package_backup_path_error'] = 'Nepavyko nustatyti atsarginės kopijos failo kelio.';
$lang['package_backup_request_invalid'] = 'Neteisinga atsarginės kopijos užklausa.';
$lang['package_backup_restore_error'] = 'Nepavyko atkurti paketo atsarginės kopijos.';
$lang['package_catalog_type_unknown'] = 'Nežinomas katalogo tipas.';
$lang['package_checksum_error'] = 'Paketo kontrolinės sumos (checksum) patvirtinimas nepavyko.';
$lang['package_copy_files_error'] = 'Nepavyko nukopijuoti paketo failų į paskirties vietą.';
$lang['package_copy_updates_error'] = 'Nepavyko nukopijuoti atnaujinimo failų į paskirties vietą.';
$lang['package_dest_dir_failed'] = 'Nepavyko sukurti paskirties katalogo %s';
$lang['package_destination_error'] = 'Nepavyko nustatyti paketo paskirties vietos.';
$lang['package_download_dir_failed'] = 'Nepavyko sukurti atsisiuntimo katalogo %s';
$lang['package_download_empty'] = 'Paketo atsisiuntimas grąžino tuščią atsaką.';
$lang['package_download_request_invalid'] = 'Neteisinga paketo atsisiuntimo užklausa.';
$lang['package_extract_failed'] = 'Nepavyko išskleisti ZIP %s';
$lang['package_invalid_lang_files'] = 'Neteisinga kalba — trūksta privalomų programos kalbos failų.';
$lang['package_invalid_lang_structure'] = 'Neteisinga kalba — trūksta admin ir/arba ci3 katalogų.';
$lang['package_invalid_missing_info'] = 'Netinkamas %s: trūksta „info.php“.';
$lang['package_invalid_module_structure'] = 'Neteisingas modulis — trūksta privalomų config ir/arba controllers katalogų.';
$lang['package_invalid_plugin_boot'] = 'Neteisingas papildinys (plugin) — trūksta "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Neteisingas papildinys (plugin) — papildiniuose negali būti valdiklių ar rodinių (views).';
$lang['package_invalid_theme_boot'] = 'Neteisinga tema — trūksta "boot.php".';
$lang['package_invalid_theme_views'] = 'Neteisinga tema — trūksta views katalogo.';
$lang['package_no_root_dir'] = 'Pakete nėra šakninio (root) katalogo.';
$lang['package_not_downloadable'] = 'Paketas nėra viešai atsisiunčiamas.';
$lang['package_not_in_registry'] = 'Paketas nepasiekiamas viešajame registre.';
$lang['package_request_invalid'] = 'Neteisinga paketo užklausa.';
$lang['package_rollback_request_invalid'] = 'Neteisinga grąžinimo (rollback) užklausa.';
$lang['package_root_mismatch'] = 'Paketo archyvo šaknis neatitinka %s';
$lang['package_single_root_required'] = 'Pakete turi būti lygiai vienas šakninis katalogas.';
$lang['package_source_error'] = 'Nepavyko nustatyti paketo šaltinio.';
$lang['package_system_core_restricted'] = 'Sistemos komponentų negalima įdiegti kaip paketų.';
$lang['package_temp_dir_failed'] = 'Nepavyko sukurti laikinojo katalogo %s';
$lang['package_type_unknown'] = 'Nežinomas paketo tipas.';
$lang['package_update_request_invalid'] = 'Neteisinga paketo atnaujinimo užklausa.';
$lang['package_update_root_mismatch'] = 'Atnaujinimo archyvo šaknis neatitinka %s.';
$lang['package_upload_dir_failed'] = 'Nepavyko sukurti įkėlimo katalogo %s';
$lang['package_url_invalid'] = 'Neteisingas paketo platinimo URL.';
$lang['package_write_failed'] = 'Nepavyko įrašyti paketo į %s';
$lang['package_zip_not_found'] = 'Paketo ZIP failas neegzistuoja: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Galimi nauji atnaujinimai!';
$lang['update_backup_error'] = 'Nepavyko sukurti esamo paketo atsarginės kopijos. Atnaujinimas nutrauktas.';
$lang['update_check_disabled'] = 'Automatinis atnaujinimų tikrinimas išjungtas. Įjunkite jį, kad matytumėte atnaujinimus.';
$lang['update_check_error'] = 'Šiuo metu nepavyksta paleisti atnaujinimų patikros.';
$lang['update_check_success'] = 'Atnaujinimų patikra sėkmingai baigta.';
$lang['update_install_error'] = 'Paketo įdiegti nepavyko. Išlaikyta ankstesnė versija.';
$lang['update_install_success'] = 'Paketas sėkmingai atnaujintas į naujausią versiją.';
$lang['update_interval_3days'] = 'Kas 3 dienas';
$lang['update_interval_biweekly'] = 'Kas 2 savaites';
$lang['update_interval_daily'] = 'Kasdien';
$lang['update_interval_monthly'] = 'Kartą per mėnesį';
$lang['update_interval_weekly'] = 'Kartą per savaitę';
$lang['update_not_available'] = 'Jūsų svetainė atnaujinta.';
$lang['update_rollback_confirm'] = 'Ar tikrai norite atkurti ankstesnę versiją?';
$lang['update_rollback_error'] = 'Nepavyko atkurti ankstesnės versijos. Gali prireikti rankinio įsikišimo.';
$lang['update_rollback_success'] = 'Ankstesnė versija sėkmingai atkurta.';
$lang['updates_available'] = 'Galimi atnaujinimai';
$lang['updates_check_now'] = 'Tikrinti dabar';
$lang['updates_check_now_confirm'] = 'Ar tikrai norite patikrinti atnaujinimus dabar?';
$lang['updates_current_version'] = 'Dabartinė versija';
$lang['updates_enable'] = 'Įjungti atnaujinimus';
$lang['updates_last_check'] = 'Paskutinė patikra: %s';
$lang['updates_latest_version'] = 'Naujausia versija';
$lang['updates_next_check'] = 'Kita suplanuota patikra: %s';
$lang['updates_previous_version'] = 'Ankstesnė versija';
$lang['updates_recent'] = 'Neseniai atnaujinta';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Nurodyto IP adreso užblokavimas nepavyko.';
$lang['admin_firewall_ban_success'] = 'IP adresas sėkmingai užblokuotas.';
$lang['admin_firewall_block_ip'] = 'Užblokuoti IP adresą';
$lang['admin_firewall_delete_confirm'] = 'Ar tikrai norite atblokuoti pasirinktus IP adresus?';
$lang['admin_firewall_delete_error'] = 'Nepavyko atblokuoti pasirinktų IP adresų.';
$lang['admin_firewall_delete_success'] = 'Pasirinkti IP adresai sėkmingai atblokuoti.';
$lang['admin_firewall_duration'] = 'Blokavimo trukmė';
$lang['admin_firewall_permanent'] = 'Nuolatinis';
$lang['admin_firewall_reason'] = 'Blokavimo priežastis';
$lang['admin_firewall_tip'] = 'Peržiūrėkite ir tvarkykite užkardos užblokuotus IP adresus dėl pasikartojančių pažeidimų ar įtartinos veiklos.';

// Settings
$lang['404_ban_duration'] = '404 blokavimo trukmė';
$lang['404_threshold'] = '404 klaidų limitas';
$lang['uri_ban_duration'] = 'URI užblokavimo trukmė';
$lang['uri_strike_threshold'] = 'URI pažeidimų limitas';
