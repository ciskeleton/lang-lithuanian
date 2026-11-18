<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Galimi sistemos atnaujinimai';
$lang['emails_updates_available_message'] = <<<EOT
Sveiki,

Aptikta naujų sistemos atnaujinimų {site_anchor}.

Šie atnaujinimai gali apimti saugumo pataisas, našumo patobulinimus arba naujas funkcijas.
Rekomenduojame juos peržiūrėti kuo greičiau.

Galite peržiūrėti ir valdyti galimus atnaujinimus iš administratoriaus valdymo skydo:
{link}

Jei jau peržiūrėjote arba pritaikėte atnaujinimus, jokių papildomų veiksmų atlikti nereikia.

Tai yra automatinis sistemos pranešimas, išsiųstas {site_name}.
Prašome neatsakyti į šį laišką.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Paskyros aktyvavimas';
$lang['emails_account_activation_request_message'] = <<<EOT
Sveiki, {name},

Ačiū, kad užsiregistravote {site_anchor}. Jūsų paskyra sukurta, tačiau prieš ją naudojant reikia ją aktyvuoti.

Norėdami aktyvuoti savo paskyrą, spustelėkite šią nuorodą arba nukopijuokite ją ir įklijuokite į savo naršyklę:
{link}

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nauja aktyvavimo nuoroda';
$lang['emails_account_activation_resend_message'] = <<<EOT
Sveiki, {name},

Jūs neseniai paprašėte naujos aktyvavimo nuorodos {site_anchor}, nes Jūsų paskyra nebuvo aktyvi.
Norėdami aktyvuoti savo paskyrą, spustelėkite šią nuorodą arba nukopijuokite ją ir įklijuokite į savo naršyklę:
{link}

Jei Jūs to neprašėte, jokių papildomų veiksmų nereikia.

Šis veiksmas buvo paprašytas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Paskyra aktyvuota';
$lang['emails_account_activation_success_message'] = <<<EOT
Sveiki, {name},

Jūsų paskyra {site_anchor} sėkmingai aktyvuota. Dabar galite <a href="{login_url}" target="_blank" rel="noopener">prisijungti</a> bet kuriuo metu.

Tikimės, kad Jums patiks būti pas mus.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Paskyra laukia patvirtinimo';
$lang['emails_account_approval_pending_message'] = <<<EOT
Sveiki, {name},

Ačiū, kad prisijungėte prie {site_anchor}. Jūsų paskyra sukurta, bet prieš ji taps aktyvi, ji turi būti patvirtinta administratoriaus.
Atsiprašome už šį papildomą žingsnį - jis atliekamas tik saugumo sumetimais.

Jūs gausite patvirtinimo el. laišką, kai tik Jūsų paskyra bus patvirtinta.

Tikimės, kad Jums patiks būti pas mus.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Paskyra patvirtinta';
$lang['emails_account_approval_success_message'] = <<<EOT
Sveiki, {name},

Geros naujienas! Jūsų paskyra {site_anchor} buvo patvirtinta.

Dabar galite prisijungti ir iš karto pradėti naudoti savo paskyrą:
{link}

Mes džiaugiamės, kad esate su mumis.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Paskyra atkurta';
$lang['emails_account_restored_message'] = <<<EOT
Sveiki, {name},

Šis el. laiškas patvirtina, kad Jūsų paskyra {site_anchor} buvo sėkmingai atkurta.

Sveiki sugrįžę! Tikimės, kad šį kartą Jums patiks būti pas mus.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Sveiki atvykę į {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Sveiki, {name},

Dauguma žmonių turi tikrai ilgas sveikinimo el. laiškų sekas po to, kai jūs registruojatės jų svetainėje.

Geros naujienos: mes ne tokie, kaip dauguma žmonių.
Bet, mes vis tiek norime jus sveikinti ir padėkoti, kad prisijungėte prie {site_anchor}.

Tikimės, kad jums patiks būti pas mus. Prašome priimti mūsų pagarbius sveikinus.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'El. pašto keitimo užklausa';
$lang['emails_email_change_request_message'] = <<<EOT
Sveiki, {name},

Jūs gavote šį el. laišką, nes gavome prašymą pakeisti el. paštą Jūsų paskyrai {site_anchor}.

Jei norite tęsti, spustelėkite šią nuorodą arba nukopijuokite ją ir įklijuokite į savo naršyklę:
{link}

Jei Jūs neprašėte pakeisti el. pašto adreso, nereikia jokių papildomų veiksmų.

Šis veiksmas buvo paprašytas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'El. pašto adresas pakeistas';
$lang['emails_email_change_success_message'] = <<<EOT
Sveiki, {name},

Šis el. laiškas patvirtina, kad Jūsų {site_anchor} naudojamas el. pašto adresas buvo sėkmingai pakeistas.

Jeigu Jūs neatlikote šio veiksmo, prašome kuo greičiau susisiekti su mumis, kad išspręstume šią problemą.

Šis veiksmas buvo atliktas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Nesėkmingo prisijungimo įspėjimas';
$lang['emails_login_alert_failure_message'] = <<<EOT
Sveiki, {name},

Nesen kažkas bandė prisijungti prie Jūsų {site_name} paskyros naudodamas neteisingą slaptažodį.

Serverio data: {date}
Įrenginys: {browser}, {platform}
IP adresas: {ip_link}

Jei tai nebuvo Jūs, nerimėkite - prisijungimo bandymas nepavyko.

Jei tai buvote Jūs, bet neatsimenate slaptažodžio, spustelėkite žemiau esančią nuorodą, kad jį atstatytumėte:
{reset_link}

Jei turite problemų prisijungiant, susisiekite su mūsų komanda arba paprašykite vienkartinio prisijungimo nuorodos.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Sėkmingo prisijungimo pranešimas';
$lang['emails_login_alert_success_message'] = <<<EOT
Sveiki, {name},

Mes siunčiame jums šį el. laišką po sėkmingo prisijungimo prie jūsų {site_name} paskyros.

Serverio data: {date}
Įrenginys: {browser}, {platform}
IP adresas: {ip_link}

Jei tai buvote jūs, galite saugiai ignoruoti šį el. laišką.

Jei tai nebuvo jūs, nedelsdami pakeiskite savo slaptažodį, kad apsaugotumėte savo paskyrą.

Jei reikia pagalbos, susisiekite su mūsų palaikymo komanda.

-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Greito prisijungimo nuoroda';
$lang['emails_login_magic_link_message'] = <<<EOT
Sveiki, {name},

Čia jūsų maginė nuoroda prisijungimui prie jūsų {site_name} paskyros.

Spustelėkite žemiau esančią nuorodą, kad prisijungtumėte:
{link}

Nuorodos galiojimas baigiasi: {time}

Jei jūs neprašėte šios nuorodos, galite ignoruoti šį el. laišką.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Dviejų veiksnių autentifikavimas';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Sveiki, {name},

Jūsų dviejų faktorių autentifikavimo kodas yra: <strong>{code}</strong>

Jūs bet kuriuo metu galite išjungti dviejų faktorių autentifikavimą savo paskyros nustatymuose.

Šis veiksmas buvo atliktas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Slaptažodžio atstatymo užklausa';
$lang['emails_password_change_request_message'] = <<<EOT
Sveiki, {name},

Jūs gaunate šį el. laišką, nes gavome slaptažodžio atstatymo užklausą jūsų {site_name} paskyrai.

Spustelėkite šią nuorodą arba nukopijuokite ir įklijuokite ją į savo naršyklę, jei norite tęsti:
{link}

Jei jūs neprašėte slaptažodžio atstatymo, jokių papildomų veiksmų nereikia.

Šis veiksmas buvo užklaustas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Slaptažodis sėkmingai pakeistas';
$lang['emails_password_change_success_message'] = <<<EOT
Sveiki, {name},

Šis el. laiškas patvirtina, kad jūsų slaptažodis {site_name} svetainėje sėkmingai pakeistas. Dabar galite <a href="{login_url}" target="_blank" rel="noopener">prisijungti</a> naudodami naują slaptažodį.

Jeigu jūs neatlikote šio veiksmo, prašome susisiekti su mumis kuo greičiau, kad išspręstume šią problemą.

Šis veiksmas buvo atliktas iš šio IP adreso: {ip_link}.

Su pagarba,
-- {site_name} komanda.
EOT;
