<!-- Begin Main Menu -->
<?php $RootMenu = new cMenu(EW_MENUBAR_ID) ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(4, "mi_cf01_home_php", $Language->MenuPhrase("4", "MenuText"), "cf01_home.php", -1, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}cf01_home.php'), FALSE, TRUE);
$RootMenu->AddMenuItem(8, "mci_Setup", $Language->MenuPhrase("8", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(1, "mi_t00_sekolah", $Language->MenuPhrase("1", "MenuText"), "t00_sekolahlist.php", 8, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}t00_sekolah'), FALSE, FALSE);
$RootMenu->AddMenuItem(2, "mi_t01_kelas", $Language->MenuPhrase("2", "MenuText"), "t01_kelaslist.php", 8, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}t01_kelas'), FALSE, FALSE);
$RootMenu->AddMenuItem(3, "mi_t02_siswa", $Language->MenuPhrase("3", "MenuText"), "t02_siswalist.php", 8, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}t02_siswa'), FALSE, FALSE);
$RootMenu->AddMenuItem(9, "mi_t99_audittrail", $Language->MenuPhrase("9", "MenuText"), "t99_audittraillist.php", -1, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}t99_audittrail'), FALSE, FALSE);
$RootMenu->AddMenuItem(5, "mi_t96_employees", $Language->MenuPhrase("5", "MenuText"), "t96_employeeslist.php", -1, "", AllowListMenu('{DCB8868F-2909-4349-AFEF-80A438B4A06C}t96_employees'), FALSE, FALSE);
$RootMenu->AddMenuItem(6, "mi_t97_userlevels", $Language->MenuPhrase("6", "MenuText"), "t97_userlevelslist.php", -1, "", (@$_SESSION[EW_SESSION_USER_LEVEL] & EW_ALLOW_ADMIN) == EW_ALLOW_ADMIN, FALSE, FALSE);
$RootMenu->AddMenuItem(7, "mi_t98_userlevelpermissions", $Language->MenuPhrase("7", "MenuText"), "t98_userlevelpermissionslist.php", -1, "", (@$_SESSION[EW_SESSION_USER_LEVEL] & EW_ALLOW_ADMIN) == EW_ALLOW_ADMIN, FALSE, FALSE);
$RootMenu->AddMenuItem(-2, "mi_changepwd", $Language->Phrase("ChangePwd"), "changepwd.php", -1, "", IsLoggedIn() && !IsSysAdmin());
$RootMenu->AddMenuItem(-1, "mi_logout", $Language->Phrase("Logout"), "logout.php", -1, "", IsLoggedIn());
$RootMenu->AddMenuItem(-1, "mi_login", $Language->Phrase("Login"), "login.php", -1, "", !IsLoggedIn() && substr(@$_SERVER["URL"], -1 * strlen("login.php")) <> "login.php");
$RootMenu->Render();
?>
<!-- End Main Menu -->
