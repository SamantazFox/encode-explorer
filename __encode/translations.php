<?php
/***************************************************************************
 *
 * Encode Explorer
 *
 * Author : Marek Rei (marek ät marekrei dot com)
 * Version : 6.4.1
 * Homepage : encode-explorer.siineiolekala.net
 *
 *
 * NB!:If you change anything, save with UTF-8! Otherwise you may
 *     encounter problems, especially when displaying images.
 *
 ***************************************************************************/


$_TRANSLATIONS = array();

// Albanian
$_TRANSLATIONS["al"] = array(
	"file_name" => "Emri Skedarit",
	"size" => "Madhësia",
	"last_changed" => "Ndryshuar",
	"total_used_space" => "Memorija e përdorur total",
	"free_space" => "Memorija e lirë",
	"password" => "Fjalëkalimi",
	"upload" => "Ngarko skedarë",
	"failed_upload" => "Ngarkimi i skedarit dështoi!",
	"failed_move" => "Lëvizja e skedarit në udhëzuesin e saktë deshtoi!",
	"wrong_password" => "Fjalëkalimi i Gabuar!!",
	"make_directory" => "New dir",
	"new_dir_failed" => "Failed to create directory",
	"chmod_dir_failed" => "Failed to change directory rights",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root"
);

// Bulgarian
$_TRANSLATIONS["bg"] = array(
	"file_name" => "Име",
	"size" => "Размер",
	"last_changed" => "Последна промяна",
	"total_used_space" => "Общо използвано",
	"free_space" => "Свободно място",
	"password" => "Парола",
	"upload" => "Качване",
	"failed_upload" => "Неуспешно качване на файла!",
	"failed_move" => "Неуспешно преместване на файла в правилната директория!",
	"wrong_password" => "Грешна парола",
	"make_directory" => "Нова директория",
	"new_dir_failed" => "Грешка при създаване на директорията",
	"chmod_dir_failed" => "Грешка при смяна на правата до директорията",
	"unable_to_read_dir" => "Директорията не може да бъде прочетена",
	"location" => "Път",
	"root" => "Корен",
	"log_file_permission_error" => "Скриптът няма права за запис в лог файла.",
	"upload_not_allowed" => "Настройките на скрипта не позволяват качване в тази директория.",
	"upload_dir_not_writable" => "Нямате право за запис в тази директория.",
	"mobile_version" => "Мобилна версия",
	"standard_version" => "Стандартен изглед",
	"page_load_time" => "Страницата е генерирана за %.2f мс",
	"wrong_pass" => "Грешен потребител или парола",
	"username" => "Потребител",
	"log_in" => "Вход",
	"upload_type_not_allowed" => "Този файлов формат е забранен за качване.",
	"del" => "Изтриване",
	"log_out" => "Изход"
);
//Catalan
$_TRANSLATIONS["ca"] = array(
        "file_name" => "Nom d'arxiu",
        "size" => "Mida",
        "last_changed" => "Última modificació",
        "total_used_space" => "Total espai emprat",
        "free_space" => "Espai lliure",
        "password" => "Paraula de pass",
        "upload" => "Pujar arxiu",
        "failed_upload" => "Error al pujar l'arxiu!",
        "failed_move" => "Error al moure l'arxiu al directori seleccionat!",
        "wrong_password" => "Paraula de pas incorrecta",
        "make_directory" => "Crear directori",
        "new_dir_failed" => "Error al crear el directori",
        "chmod_dir_failed" => "Error al canviar els permisos del directori",
        "unable_to_read_dir" => "No es possible llegir el directori",
        "location" => "Traducció",
        "root" => "Arrel"
);

// Czech
$_TRANSLATIONS["cz"] = array(
	"file_name" => "Název souboru",
	"size" => "Velikost",
	"last_changed" => "Změněno",
	"total_used_space" => "Obsazený prostor",
	"free_space" => "Volný prostor",
	"password" => "Heslo",
	"upload" => "Nahrát",
	"failed_upload" => "Nahrávání se nezdařilo!",
	"failed_move" => "Přesun souboru do určeného adresáře se nezdařil!",
	"wrong_password" => "Chybné heslo",
	"make_directory" => "Nový adresář",
	"new_dir_failed" => "Vytvoření adresáře se nezdařilo",
	"chmod_dir_failed" => "Změna práv adresáře se nezdařila",
	"unable_to_read_dir" => "Chyba při čtení adresáře",
	"location" => "Umístění",
	"root" => "Kořenový adresář",
	"log_file_permission_error" => "Skript nemá oprávnění k zápisu do souboru protokolu.",
	"upload_not_allowed" => "Konfigurační skript neumožňuje nahrávání v tomto adresáři.",
	"upload_dir_not_writable" => "Tento adresář nemá oprávnění k zápisu.",
	"mobile_version" => "Zobrazení pro mobil",
	"standard_version" => "Standardní zobrazení",
	"page_load_time" => "Stránka nahrána za %.2f ms",
	"wrong_pass" => "Špatné uživatelské jméno nebo heslo",
	"username" => "Uživatelské jméno",
	"log_in" => "Přihlásit se",
	"upload_type_not_allowed" => "Tento typ souboru není povolen pro nahrávání.",
	"del" => "Smazat",
	"log_out" => "Odhlásit se"
);

// Dutch
$_TRANSLATIONS["nl"] = array(
	"file_name" => "Bestandsnaam",
	"size" => "Omvang",
	"last_changed" => "Laatst gewijzigd",
	"total_used_space" => "Totaal gebruikte ruimte",
	"free_space" => "Beschikbaar",
	"password" => "Wachtwoord",
	"upload" => "Upload",
	"failed_upload" => "Fout bij uploaden van bestand!",
	"failed_move" => "Fout bij het verplaatsen van tijdelijk uploadbestand!",
	"wrong_password" => "Fout wachtwoord!",
	"make_directory" => "Nieuwe folder",
	"new_dir_failed" => "Fout bij aanmaken folder!",
	"chmod_dir_failed" => "Rechten konden niet gewijzigd worden!",
	"unable_to_read_dir" => "Niet mogelijk om directorie te lezen",
	"location" => "Locatie",
	"root" => "Root",
	"log_file_permission_error" => "Script heeft geen toegang tot het logbestand.",
	"upload_not_allowed" => "Uploaden van bestanden is niet toegestaan.",
	"upload_dir_not_writable" => "Het is niet toegestaan in deze directorie bestanden te plaatsen.",
	"mobile_version" => "Mobiele weergave",
	"standard_version" => "Standaard weergave",
	"page_load_time" => "Pagina geladen in %.2f ms",
	"wrong_pass" => "Foutieve gebruikersnaam of wachtwoord",
	"username" => "Gebruikersnaam",
	"log_in" => "Inloggen",
	"upload_type_not_allowed" => "Dit type bestand is niet toegestaan.",
	"del" => "Verwijder", // short for Delete
	"log_out" => "Uitloggen"
);

// English
$_TRANSLATIONS["en"] = array(
	"file_name" => "File name",
	"size" => "Size",
	"last_changed" => "Last updated",
	"total_used_space" => "Total space used",
	"free_space" => "Free space",
	"password" => "Password",
	"upload" => "Upload",
	"failed_upload" => "Failed to upload the file!",
	"failed_move" => "Failed to move the file into the right directory!",
	"wrong_password" => "Wrong password",
	"make_directory" => "New directory",
	"new_dir_failed" => "Failed to create directory",
	"chmod_dir_failed" => "Failed to change directory rights",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root",
	"log_file_permission_error" => "The script does not have permissions to write the log file.",
	"upload_not_allowed" => "The script configuration does not allow uploading in this directory.",
	"upload_dir_not_writable" => "This directory does not have write permissions.",
	"mobile_version" => "Mobile view",
	"standard_version" => "Standard view",
	"page_load_time" => "Page loaded in %.2f ms",
	"wrong_pass" => "Wrong username or password",
	"username" => "Username",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "This file type is not allowed for uploading.",
	"del" => "Delete",
	"log_out" => "Log out"
);

// Estonian
$_TRANSLATIONS["et"] = array(
	"file_name" => "Faili nimi",
	"size" => "Suurus",
	"last_changed" => "Viimati muudetud",
	"total_used_space" => "Kokku kasutatud",
	"free_space" => "Vaba ruumi",
	"password" => "Parool",
	"upload" => "Uploadi",
	"failed_upload" => "Faili ei &otilde;nnestunud serverisse laadida!",
	"failed_move" => "Faili ei &otilde;nnestunud &otilde;igesse kausta liigutada!",
	"wrong_password" => "Vale parool",
	"make_directory" => "Uus kaust",
	"new_dir_failed" => "Kausta loomine ebaõnnestus",
	"chmod_dir_failed" => "Kausta õiguste muutmine ebaõnnestus",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Asukoht",
	"root" => "Peakaust"
);

// Finnish
$_TRANSLATIONS["fi"] = array(
	"file_name" => "Tiedoston nimi",
	"size" => "Koko",
	"last_changed" => "Muokattu",
	"total_used_space" => "Yhteenlaskettu koko",
	"free_space" => "Vapaa tila",
	"password" => "Salasana",
	"upload" => "Lisää tiedosto",
	"failed_upload" => "Tiedoston lisäys epäonnistui!",
	"failed_move" => "Tiedoston siirto kansioon epäonnistui!",
	"wrong_password" => "Väärä salasana",
	"make_directory" => "Uusi kansio",
	"new_dir_failed" => "Uuden kansion luonti epäonnistui!",
	"chmod_dir_failed" => "Kansion käyttäjäoikeuksien muuttaminen epäonnistui!",
	"unable_to_read_dir" => "Kansion sisältöä ei voi lukea.",
	"location" => "Paikka",
	"root" => "Juurihakemisto",
	"log_file_permission_error" => "Ohjelman ei ole sallittu kirjoittaa lokiin.",
	"upload_not_allowed" => "Ohjelman asetukset eivät salli tiedoston lisäämistä tähän kansioon.",
	"upload_dir_not_writable" => "Kansioon tallentaminen epäonnistui.",
	"mobile_version" => "Mobiilinäkymä",
	"standard_version" => "Tavallinen näkymä",
	"page_load_time" => "Sivu ladattu %.2f ms:ssa",
	"wrong_pass" => "Väärä käyttäjätunnus tai salasana",
	"username" => "Käyttäjätunnus",
	"log_in" => "Kirjaudu sisään",
	"log_out" => "Kirjaudu ulos",
	"upload_type_not_allowed" => "Tämän tiedostotyypin lisääminen on estetty.",
	"del" => "Poista"
);

// French
$_TRANSLATIONS["fr"] = array(
	"file_name" => "Nom de fichier",
	"size" => "Taille",
	"last_changed" => "Modifi&eacute; le",
	"total_used_space" => "Espace total utilis&eacute;",
	"free_space" => "Espace libre",
	"password" => "Mot de passe",
	"upload" => "Ajouter",
	"failed_upload" => "Erreur lors de l'envoi",
	"failed_move" => "Erreur lors du d&eacute;placement",
	"wrong_password" => "Identifiant ou mot de passe incorrect",
	"make_directory" => "Nouveau dossier",
	"new_dir_failed" => "Erreur lors de la cr&eacute;ation du dossier",
	"chmod_dir_failed" => "Impossible de changer les permissions du dossier",
	"unable_to_read_dir" => "Impossible de lire le dossier",
	"location" => "Localisation",
	"root" => "Racine",
	"log_file_permission_error" => "Le script n'a pas la permission d'&eacute;crire dans le fichier de logs.",
	"upload_not_allowed" => "La configuration du script ne permet pas d'ajouter un fichier ici.",
	"upload_dir_not_writable" => "Ce dossier ne possède pas de permission en &eacute;criture.",
	"mobile_version" => "Version mobile",
	"standard_version" => "Version standard",
	"page_load_time" => "Page chargée en %.2f ms",
	"wrong_pass" => "Identifiant ou mot de passe incorrect",
	"username" => "Identifiant",
	"log_in" => "Connexion",
	"upload_type_not_allowed" => "L'envoi de ce type de fichier n'est pas permis.",
	"del" => "Supprimer",
	"log_out" => "D&eacute;connexion"
);

// German
$_TRANSLATIONS["de"] = array(
	"file_name" => "Dateiname",
	"size" => "Gr&ouml;&szlig;e",
	"last_changed" => "Letzte &Auml;nderung",
	"total_used_space" => "Benutzter Speicherplatz",
	"free_space" => "Freier Speicherplatz",
	"password" => "Passwort",
	"upload" => "Upload",
	"failed_upload" => "Upload ist fehlgeschlagen!",
	"failed_move" => "Verschieben der Datei ist fehlgeschlagen!",
	"wrong_password" => "Falsches Passwort",
	"make_directory" => "Neuer Ordner",
	"new_dir_failed" => "Erstellen des Ordners fehlgeschlagen",
	"chmod_dir_failed" => "Ver&auml;nderung der Zugriffsrechte des Ordners fehlgeschlagen",
	"unable_to_read_dir" => "Ordner konnte nicht gelesen werden",
	"location" => "Ort",
	"root" => "Wurzelverzeichnis",
	"log_file_permission_error" => "Das Script kann wegen fehlenden Berechtigungen keine Log Datei schreiben.",
	"upload_not_allowed" => "Die Scriptkonfiguration erlaubt kein Hochladen in dieses Verzeichnis.",
	"upload_dir_not_writable" => "Dieser Ordner besitzt keine Schreibrechte.",
	"mobile_version" => "Mobile Ansicht",
	"standard_version" => "Normale Ansicht",
	"page_load_time" => "Die Seite wurde in %.2f ms geladen",
	"wrong_pass" => "Benutzername oder Kennwort falsch",
	"username" => "Benutzername",
	"log_in" => "Einloggen",
	"upload_type_not_allowed" => "Dieser Dateityp darf nicht hochgeladen werden.",
	"del" => "Entfernen",
	"log_out" => "Ausloggen"
);

// Greek
$_TRANSLATIONS["el"] = array(
	"file_name" => "Όνομα αρχείου",
	"size" => "Μέγεθος",
	"last_changed" => "Τελευταία τροποποίηση",
	"total_used_space" => "Χρησιμοποιημένος χώρος",
	"free_space" => "Ελεύθερος χώρος",
	"password" => "Κωδικός",
	"upload" => "Φόρτωση",
	"failed_upload" => "Αποτυχία φόρτωσης αρχείου!",
	"failed_move" => "Αποτυχία μεταφοράς αρχείου στον κατάλληλο φάκελο!",
	"wrong_password" => "Λάθος κωδικός",
	"make_directory" => "Νέος Φάκελος",
	"new_dir_failed" => "Αποτυχία δημιουργίας φακέλου",
	"chmod_dir_failed" => "Αποτυχία τροποποίησης δικαιωμάτων φακέλου",
	"unable_to_read_dir" => "Αδυναμία ανάγνωσης φακέλου",
	"location" => "Τοποθεσία",
	"root" => "Ριζικός φάκελος",
	"log_file_permission_error" => "Το πρόγραμμα δεν έχει δικαιώματα εγγραφής στο αρχείο καταγραφής.",
	"upload_not_allowed" => "Οι ρυθμίσεις του προγράμματος δεν επιτρέπουν φόρτωση αρχείων σε αυτό τον φάκελο.",
	"upload_dir_not_writable" => "Αυτός ο φάκελος δεν έχει δικαιώματα για εγγραφή.",
	"mobile_version" => "Φορητή προβολή",
	"standard_version" => "Στάνταρ προβολή",
	"page_load_time" => "Η σελίδα φόρτωσε σε %.2f ms",
	"wrong_pass" => "Λάθος όνομα χρήστη ή κωδικός",
	"username" => "Όνομα χρήστη",
	"log_in" => "Σύνδεση",
	"upload_type_not_allowed" => "Αυτός ο τύπος αρχείου δεν επιτρέπεται να φορτωθεί.",
	"del" => "Διαγραφή",
	"log_out" => "Αποσύνδεση"
	
);

// Spanish
$_TRANSLATIONS["es"] = array(
	"file_name" => "Nombre del archivo",
	"size" => "Tamaño",
	"last_changed" => "Último cambio",
	"total_used_space" => "Espacio total usado",
	"free_space" => "Espacio libre",
	"password" => "Contraseña",
	"upload" => "Subir el archivo",
	"failed_upload" => "¡Error al subir el archivo!",
	"failed_move" => "¡Error al mover el archivo al directorio seleccionado!",
	"wrong_password" => "Contraseña incorrecta",
	"make_directory" => "Crear directorio",
	"new_dir_failed" => "Error al crear el directorio",
	"chmod_dir_failed" => "Error al cambiar los permisos del directorio",
	"unable_to_read_dir" => "No es posible leer el directorio",
	"location" => "Localización",
	"root" => "Raíz",
	"log_file_permission_error" => "El script no tiene permisos para escribir en el archivo de registro.",
	"upload_not_allowed" => "La configuración del script no permite subir archivos en este directorio.",
	"upload_dir_not_writable" => "Este directorio no tiene permisos de escritura.",
	"mobile_version" => "Vista móvil",
	"standard_version" => "Vista estándar",
	"page_load_time" => "Página cargada en %.2f ms",
	"wrong_pass" => "Nombre de usuario o contraseña incorrectos",
	"username" => "Usuario",
	"log_in" => "Iniciar sesión",
	"upload_type_not_allowed" => "Este tipo de archivo no está permitido para la subida.",
	"del" => "Eliminar",
	"log_out" => "Cerrar sesión"
);

// Esperanto
$_TRANSLATIONS["eo"] = array(
	"file_name" => "Dosiernomo",
	"size" => "Grando",
	"last_changed" => "Lasta ŝanĝo",
	"total_used_space" => "Uzata spaco",
	"free_space" => "Disponebla spaco",
	"password" => "pasvorto",
	"upload" => "Alŝuto",
	"failed_upload" => "Alŝuto malsukcesis!",
	"failed_move" => "Movo de la dosiero malsukcesis!",
	"wrong_password" => "Malĝusta pasvorto",
	"make_directory" => "Nova dosierujo",
	"new_dir_failed" => "Kreado de dosierujo malsukcesis",
	"chmod_dir_failed" => "Ŝanĝo de dosierujaj rajtoj malsukcesis",
	"unable_to_read_dir" => "Dosierujo ne estas legebla",
	"location" => "Loko",
	"root" => "Radiko",
	"log_file_permission_error" => "La skripto ne rajtas skribi la protokolan dosieron.",
	"upload_not_allowed" => "La skripto malpermesas alŝuti en ĉi tiun dosierujon.",
	"upload_dir_not_writable" => "Ĉi tiu dosierujo ne rajtigas skribadon.",
	"mobile_version" => "Vido por mobilaj iloj",
	"standard_version" => "Defaŭlta vido",
	"page_load_time" => "Paĝo ŝarĝita en %.2f ms",
	"wrong_pass" => "Malĝusta salutnomo aŭ pasvorto",
	"username" => "Salutnomo",
	"log_in" => "Ensaluto",
	"upload_type_not_allowed" => "Alŝuto estas malpermesita por ĉi tiu dosiertipo.",
	"del" => "For", // short for Delete
	"log_out" => "Adiaŭo"
);

// Hungarian
$_TRANSLATIONS["hu"] = array(
	"file_name" => "Fájl név",
	"size" => "Méret",
	"last_changed" => "Utolsó módosítás",
	"total_used_space" => "Összes elfoglalt terület",
	"free_space" => "Szabad terület",
	"password" => "Jelszó",
	"upload" => "Feltöltés",
	"failed_upload" => "A fájl feltöltése nem sikerült!",
	"failed_move" => "A fájl mozgatása nem sikerült!",
	"wrong_password" => "Hibás jelszó",
	"make_directory" => "Új mappa",
	"new_dir_failed" => "A mappa létrehozása nem sikerült",
	"chmod_dir_failed" => "A mappa jogainak megváltoztatása nem sikerült",
	"unable_to_read_dir" => "A mappa nem olvasható",
	"location" => "Hely",
	"root" => "Gyökér",
	"log_file_permission_error" => "A log fájl írása jogosultsági okok miatt nem sikerült.",
	"upload_not_allowed" => "Ebbe a mappába a feltöltés nem engedélyezett.",
	"upload_dir_not_writable" => "A mappa nem írható.",
	"mobile_version" => "Mobil nézet",
	"standard_version" => "Web nézet",
	"page_load_time" => "Letöltési id? %.2f ms",
	"wrong_pass" => "Rossz felhasználónév vagy jelszó",
	"username" => "Felhasználónév",
	"log_in" => "Belépés",
	"upload_type_not_allowed" => "A fájltípus feltöltése tiltott."
);

// Italian
$_TRANSLATIONS["it"] = array(
	"file_name" => "Nome file",
	"size" => "Dimensione",
	"last_changed" => "Ultima modifica",
	"total_used_space" => "Totale spazio usato",
	"free_space" => "Spazio disponibile",
	"password" => "Parola chiave",
	"upload" => "Caricamento file",
	"failed_upload" => "Caricamento del file fallito!",
	"failed_move" => "Spostamento del file nella cartella fallito!",
	"wrong_password" => "Password sbagliata",
	"make_directory" => "Nuova cartella",
	"new_dir_failed" => "Creazione cartella fallita!",
	"chmod_dir_failed" => "Modifica dei permessi della cartella fallita!",
	"unable_to_read_dir" => "Non abilitato a leggere la cartella",
	"location" => "Posizione",
	"root" => "Indice",
	"log_file_permission_error" => "Lo script non ha i permessi per scrivere il file di log.",
	"upload_not_allowed" => "La configurazione dello script non permette l'upload in questa cartella.",
	"upload_dir_not_writable" => "Questa cartella non ha i permessi di scrittura.",
	"mobile_version" => "Visualizzazione Mobile",
	"standard_version" => "Visualizzazione Standard",
	"page_load_time" => "Page aperta in %.2f min",
	"wrong_pass" => "Username o password errati",
	"username" => "Username",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "Questo formato di file non è abilitato per l'upload.",
	"del" => "Cancella", // short for Delete
	"log_out" => "Esci"
);

// Korean
$_TRANSLATIONS["ko"] = array(
	"file_name" => "이름",
	"size" => "크기",
	"last_changed" => "마지막 수정",
	"total_used_space" => "사용한 공간",
	"free_space" => "남은 공간",
	"password" => "비밀번호",
	"upload" => "올리기",
	"failed_upload" => "파일을 올릴 수 없습니다.",
	"failed_move" => "파일을 옮길 수 없습니다.",
	"wrong_password" => "비밀번호가 올바르지 않습니다.",
	"make_directory" => "만들기",
	"new_dir_failed" => "폴더를 만들 수 없습니다.",
	"chmod_dir_failed" => "권한 설정을 할 수 없습니다.",
	"unable_to_read_dir" => "폴더를 읽을 수 없습니다.",
	"location" => "위치",
	"root" => "최상위 폴더",
	"log_file_permission_error" => "로그 파일의 위치에 쓰기 권한을 가지고 있지 않습니다.",
	"upload_not_allowed" => "이 위치에 올릴 수 없습니다.",
	"upload_dir_not_writable" => "이 위치에 쓰기 권한을 가지고 있지 않습니다.",
	"mobile_version" => "모바일 버전으로 보기",
	"standard_version" => "표준 화면으로 보기",
	"page_load_time" => "페이지 로드 %.2f ms",
	"wrong_pass" => "사용자 이름 또는 비밀번호가 올바르지 않습니다.",
	"username" => "사용자 이름",
	"log_in" => "로그인",
	"upload_type_not_allowed" => "이 종류의 파일은 올릴 수 없습니다.",
	"del" => "삭제",
	"log_out" => "로그아웃"
); 

// Norwegian
$_TRANSLATIONS["no"] = array(
	"file_name" => "Navn",
	"size" => "Størrelse",
	"last_changed" => "Endret",
	"total_used_space" => "Brukt plass",
	"free_space" => "Resterende plass",
	"password" => "Passord",
	"upload" => "Last opp",
	"failed_upload" => "Opplasting gikk galt",
	"failed_move" => "Kunne ikke flytte objektet",
	"wrong_password" => "Feil passord",
	"make_directory" => "Ny mappe",
	"new_dir_failed" => "Kunne ikke lage ny mappe",
	"chmod_dir_failed" => "Kunne ikke endre rettigheter",
	"unable_to_read_dir" => "Kunne ikke lese mappen",
	"location" => "Område",
	"root" => "Rot"
);

//Polish
$_TRANSLATIONS["pl"] = array(
  "file_name" => "Nazwa pliku",
  "size" => "Rozmiar",
  "last_changed" => "Data zmiany",
  "total_used_space" => "Cała przestrzeń",
  "free_space" => "Wolna przestrzeń",
  "password" => "Hasło",
  "upload" => "Prześlij",
  "failed_upload" => "Przesłanie pliku nie powiodło się",
  "failed_move" => "Przenoszenie pliku nie powiodło się!",
  "wrong_password" => "Niepoprawne hasło",
  "make_directory" => "Nowy folder",
  "new_dir_failed" => "Błąd podczas tworzenia nowego folderu",
  "chmod_dir_failed" => "Błąd podczas zmiany uprawnień folderu",
  "unable_to_read_dir" => "Odczytanie folderu nie powiodło się",
  "location" => "Miejsce",
  "root" => "Start",
  "log_file_permission_error" => "Brak uprawnień aby utworzyć dziennik działań.",
  "upload_not_allowed" => "Konfiguracja zabrania przesłania pliku do tego folderu.",
  "upload_dir_not_writable" => "Nie można zapisać pliku do tego folderu.",
  "mobile_version" => "Wersja mobilna",
  "standard_version" => "Widok standardowy",
  "page_load_time" => "Załadowano w %.2f ms",
  "wrong_pass" => "Niepoprawna nazwa użytkownika lub złe hasło",
  "username" => "Użytkownik",
  "log_in" => "Zaloguj się",
  "upload_type_not_allowed" => "Ten rodzaj pliku jest zabroniony.",
  "del" => "Kasuj",
  "log_out" => "Wyloguj się"
);

// Portuguese (Brazil)
$_TRANSLATIONS["pt_BR"] = array(
	"file_name" => "Nome do arquivo",
	"size" => "Tamanho",
	"last_changed" => "Modificado em",
	"total_used_space" => "Total de espaço utilizado",
	"free_space" => "Espaço livre",
	"password" => "Senha",
	"upload" => "Enviar",
	"failed_upload" => "Falha ao enviar o arquivo!",
	"failed_move" => "Falha ao mover o arquivo para o diretório correto!",
	"wrong_password" => "Senha errada",
	"make_directory" => "Nova pasta",
	"new_dir_failed" => "Falha ao criar diretório",
	"chmod_dir_failed" => "Falha ao mudar os privilégios do diretório",
	"unable_to_read_dir" => "Não foi possível ler o diretório",
	"location" => "Localização",
	"root" => "Raíz",
	"log_file_permission_error" => "O script não tem permissão para escrever o arquivo de log.",
	"upload_not_allowed" => "A configuração do script não permite envios neste diretório.",
	"upload_dir_not_writable" => "Não há permissão para escrita neste diretório.",
	"mobile_version" => "Versão Móvel",
	"standard_version" => "Versão Padrão",
	"page_load_time" => "Página carregada em %.2f ms",
	"wrong_pass" => "Nome de usuário ou senha errados",
	"username" => "Nome de Usuário",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "Não é permitido envio de arquivos deste tipo.",
	"del" => "Deletar",
	"log_out" => "Log out"
);

// Portuguese (Portugal)
$_TRANSLATIONS["pt_PT"] = array(
	"file_name" => "Nome do ficheiro",
	"size" => "Tamanho",
	"last_changed" => "Modificado em",
	"total_used_space" => "Total de espaço utilizado",
	"free_space" => "Espaço livre",
	"password" => "Palavra-passe",
	"upload" => "Enviar",
	"failed_upload" => "Falha ao enviar o ficheiro!",
	"failed_move" => "Falha ao mover o ficheiro para a pasta correcta!",
	"wrong_password" => "Palavra-passe errada",
	"make_directory" => "Nova pasta",
	"new_dir_failed" => "Falha ao criar pasta",
	"chmod_dir_failed" => "Falha ao mudar os privilégios da pasta",
	"unable_to_read_dir" => "Não foi possível ler a pasta",
	"location" => "Localização",
	"root" => "Raíz",
	"log_file_permission_error" => "O script não tem permissão para escrever o ficheiro de log.",
	"upload_not_allowed" => "A configuração do script não permite envios para esta pasta.",
	"upload_dir_not_writable" => "Não há permissão para escrita nesta pasta.",
	"mobile_version" => "Versão Móvel",
	"standard_version" => "Versão Padrão",
	"page_load_time" => "Página carregada em %.2f ms",
	"wrong_pass" => "Nome de utilizador ou palavra-passe incorrectos",
	"username" => "Nome de utilizador",
	"log_in" => "Entrar",
	"upload_type_not_allowed" => "Não é permitido o envio de ficheiros deste tipo.",
	"del" => "Apagar",
	"log_out" => "Sair"
);

// Romanian
$_TRANSLATIONS["ro"] = array(
	"file_name" => "Nume fisier",
	"size" => "Marime",
	"last_changed" => "Ultima modificare",
	"total_used_space" => "Spatiu total utilizat",
	"free_space" => "Spatiu disponibil",
	"password" => "Parola",
	"upload" => "Incarcare fisier",
	"failed_upload" => "Incarcarea fisierului a esuat!",
	"failed_move" => "Mutarea fisierului in alt director a esuat!",
	"wrong_password" => "Parol gresita!",
	"make_directory" => "Director nou",
	"new_dir_failed" => "Eroare la crearea directorului",
	"chmod_dir_failed" => "Eroare la modificarea drepturilor pe director",
	"unable_to_read_dir" => "Nu s-a putut citi directorul",
	"location" => "Locatie",
	"root" => "Root"
);

// Russian
$_TRANSLATIONS["ru"] = array(
	"file_name" => "Имя файла",
	"size" => "Размер",
	"last_changed" => "Последнее изменение",
	"total_used_space" => "Всего использовано",
	"free_space" => "Свободно",
	"password" => "Пароль",
	"upload" => "Загрузка",
	"failed_upload" => "Не удалось загрузить файл!",
	"failed_move" => "Не удалось переместить файл в нужную папку!",
	"wrong_password" => "Неверный пароль",
	"make_directory" => "Новая папка",
	"new_dir_failed" => "Не удалось создать папку",
	"chmod_dir_failed" => "Не удалось изменить права доступа к папке",
	"unable_to_read_dir" => "Не возможно прочитать папку",
	"location" => "Расположение",
	"root" => "Корневая папка",
	"log_file_permission_error" => "Скрипт не имеет прав для записи лога файла.",
	"upload_not_allowed" => "Загрузка в эту папку запрещена в настройках скрипта",
	"upload_dir_not_writable" => "В эту папку запрещена запись",
	"mobile_version" => "Мобильный вид",
	"standard_version" => "Обычный вид",
	"page_load_time" => "Страница загружена за %.2f мс.",
	"wrong_pass" => "Неверное имя пользователя или пароль",
	"username" => "Имя пользователя",
	"log_in" => "Войти",
	"upload_type_not_allowed" => "Этот тип файла запрещено загружать",
	"del" => "удалить",
	"log_out" => "выйти"
);

// Slovensky
$_TRANSLATIONS["sk"] = array(
	"file_name" => "Meno súboru",
	"size" => "Veľkosť",
	"last_changed" => "Posledná zmena",
	"total_used_space" => "Použité miesto celkom",
	"free_space" => "Voľné miesto",
	"password" => "Heslo",
	"upload" => "Nahranie súborov",
	"failed_upload" => "Chyba nahrávania súboru!",
	"failed_move" => "Nepodarilo sa presunúť súbor do vybraného adresára!",
	"wrong_password" => "Neplatné heslo!",
	"make_directory" => "Nový priečinok",
	"new_dir_failed" => "Nepodarilo sa vytvoriť adresár!",
	"chmod_dir_failed" => "Nepodarilo sa zmeniť práva adresára!",
	"unable_to_read_dir" => "Nemôžem čítať adresár",
	"location" => "Umiestnenie",
	"root" => "Domov"
);

// Swedish
$_TRANSLATIONS["sv"] = array(
	"file_name" => "Filnamn",
	"size" => "Storlek",
	"last_changed" => "Senast ändrad",
	"total_used_space" => "Totalt upptaget utrymme",
	"free_space" => "Ledigt utrymme",
	"password" => "Lösenord",
	"upload" => "Ladda upp",
	"failed_upload" => "Fel vid uppladdning av fil!",
	"failed_move" => "Fel vid flytt av fil till mapp!",
	"wrong_password" => "Fel lösenord",
	"make_directory" => "Ny mapp",
	"new_dir_failed" => "Fel vid skapande av mapp",
	"chmod_dir_failed" => "Fel vid ändring av mappens egenskaper",
	"unable_to_read_dir" => "Kan inte lasa den filen",
	"location" => "Plats",
	"root" => "Hem",
	"log_file_permission_error" => "Scriptet har inte behörighet att skriva till loggfilen.",
	"upload_not_allowed" => "Skriptets konfiguration tillåter inte uppladdning till denna katalog.",
	"upload_dir_not_writable" => "Denna katalog har inte behörigheter för att skriva.",
	"mobile_version" => "Mobilvisning",
	"standard_version" => "Standardvisning",
	"page_load_time" => "Sidan laddades på %.2f ms",
	"wrong_pass" => "Fel användarnamn eller lösenord",
	"username" => "Användarnamn",
	"log_in" => "Logga in",
	"upload_type_not_allowed" => "Denna filtyp är det inte tillåtet att ladda upp.",
	"del" => "Ta bort",
	"log_out" => "Logga ut"
);


// Turkish
$_TRANSLATIONS["tr"] = array(
	"file_name" => "Dosya Adı",
	"size" => "Boyut",
	"last_changed" => "Son Değişiklik",
	"total_used_space" => "Toplam Kullanılan Alan",
	"free_space" => "Boş Alan",
	"password" => "Parola",
	"upload" => "Yükle",
	"failed_upload" => "Dosya yüklemesi başarısız!",
	"failed_move" => "Dosyanın doğru klasöre taşınması başarısız!",
	"wrong_password" => "Hatalı Parola",
	"make_directory" => "Yeni Klasör",
	"new_dir_failed" => "Klasör oluşturma başarısız",
	"chmod_dir_failed" => "Klasör izinleri değiştirme başarısız",
	"unable_to_read_dir" => "Klasör okunamadı",
	"location" => "Konum",
	"root" => "Ana Klasör",
	"log_file_permission_error" => "Log dosyası oluşturulurken yetersiz izin hatası.",
	"upload_not_allowed" => "Konfigürasyon bu klasöre dosya yüklemeye izin vermiyor.",
	"upload_dir_not_writable" => "Bu klasör yazma izinlerine sahip değil.",
	"mobile_version" => "Mobil Görünüm",
	"standard_version" => "Standart Görünüm",
	"page_load_time" => "Sayfa yükleme süresi %.2f ms",
	"wrong_pass" => "Hatalı kullanıcı adı veya parola",
	"username" => "Kullanıcı Adı",
	"log_in" => "Giriş Yap",
	"upload_type_not_allowed" => "Bu dosya türünün yüklenmesine izin verilmiyor.",
	"del" => "Sil",
	"log_out" => "Çıkış Yap"
);


// Ukrainian
$_TRANSLATIONS["ua"] = array(
	"file_name" => "Ім'я файлу",
	"size" => "Розмір",
	"last_changed" => "Востаннє змінено",
	"total_used_space" => "Всього використано",
	"free_space" => "Вільно",
	"password" => "Пароль",
	"upload" => ">> Завантажити",
	"failed_upload" => "Не вдалось завантажити файл!",
	"failed_move" => "Не вдалось перемістити файл в потрібну теку!",
	"wrong_password" => "Невірний пароль",
	"make_directory" => "Нова тека",
	"new_dir_failed" => "Не вдалось створити теку",
	"chmod_dir_failed" => "Не вдалось змінити права доступу до теки",
	"unable_to_read_dir" => "Неможливо прочитати теку",
	"location" => "Знаходження",
	"root" => "Початок",
	"log_file_permission_error" => "Скрипт не має прав запису лог файлу.",
	"upload_not_allowed" => "Завантаження в цю теку заборонено в налаштуваннях скрипта",
	"upload_dir_not_writable" => "В цю теку запис заборонений",
	"mobile_version" => "Мобільний",
	"standard_version" => "Звичайний вид",
	"page_load_time" => "Сторінка завантажена за %.2f мс.",
	"wrong_pass" => "Невірне ім'я користувача чи пароль",
	"username" => "Ім'я користувача",
	"log_in" => "Вийти",
	"upload_type_not_allowed" => "Цей тип файлу завантажувати заборонено",
	"del" => "Видалити",
	"log_out" => "вийти"
);


// 简体中文(Simplified Chinese)
$_TRANSLATIONS["zh_CN"] = array(
	"file_name" => "文件名",
	"size" => "大小",
	"last_changed" => "最后修改",
	"total_used_space" => "总计使用空间",
	"free_space" => "剩余空间",
	"password" => "密码",
	"upload" => "上传",
	"failed_upload" => "上传失败",
	"failed_move" => "移动失败",
	"wrong_password" => "密码错误",
	"make_directory" => "创建目录",
	"new_dir_failed" => "创建目录失败",
	"chmod_dir_failed" => "修改目录权限失败",
	"unable_to_read_dir" => "无法读取目录",
	"location" => "路径",
	"root" => "根目录",
	"log_file_permission_error" => "日志文件权限错误",
	"upload_not_allowed" => "禁止上传",
	"upload_dir_not_writable" => "上传目录不可写",
	"mobile_version" => "移动版本",
	"standard_version" => "标准版本",
	"page_load_time" => "页面载入时间：%.2f ms",
	"wrong_pass" => "密码错误",
	"username" => "用户名",
	"log_in" => "登录",
	"log_out" => "注销",
	"upload_type_not_allowed" => "禁止上传该文件类型",
	"del" => "删除"
);


// 正體中文(Traditional Chinese)
$_TRANSLATIONS["zh_TW"] = array(
    "file_name" => "檔案名稱",
    "size" => "檔案大小",
    "last_changed" => "最後更改",
    "total_used_space" => "總共大小",
    "free_space" => "剩餘空間",
    "password" => "密碼",
    "upload" => "上傳檔案",
    "failed_upload" => "上傳失敗",
    "failed_move" => "移動失敗",
    "wrong_password" => "密碼錯誤",
    "make_directory" => "建立新資料夾",
    "new_dir_failed" => "資料夾新增失敗",
    "chmod_dir_failed" => "無法更改資料夾權限",
    "unable_to_read_dir" => "無法讀取資料夾",
    "location" => "位置",
    "root" => "根目錄",
    "log_file_permission_error" => "本程式沒有權限寫入記錄檔",
    "upload_not_allowed" => "不允許在這個資料夾上傳檔案",
    "upload_dir_not_writable" => "這個資料夾沒有寫入權限",
    "mobile_version" => "手機模式",
    "standard_version" => "標準模式",
    "page_load_time" => "執行使用%.2f毫秒",
    "wrong_pass" => "帳號或密碼錯誤",
    "username" => "帳號",
    "log_in" => "登入",
    "upload_type_not_allowed" => "不允許上傳這種類型的檔案",
    "del" => "刪除",
    "log_out" => "登出",
);

?>
