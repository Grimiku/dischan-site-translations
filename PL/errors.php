<?php

if (empty($siteStrings) || !is_array($siteStrings))
{
	$siteStrings = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Note: all uses of ' in translations should be precended with \, in example: \'
//

$siteStrings = array_merge($siteStrings, array(
'passwordIncorrect'			=> 'Hasło nieprawidłowe.',
	'userEmailNotFound'			=> 'Nick lub Email nie znaleziony.',
	'notLoggedIn'		=> 'Nie jesteś zalogowany.',
	'error'		=> 'Błąd!',
	'forumDoesNotExist'		=> 'Próbujesz napisać na forum, które nie istnieje.',
	'subConPicRequired'		=> 'Nowy wątek wymaga tematu, treści i obrazka.',
	'picConRequired'		=> 'Odpowiedź wymaga obrazka i/lub treści.',
	'threadLocked'				=> 'Nie możesz napisać. Wątek został zablokowany.',
	'fileUpError'			=> 'Wystąpił problem z załadowaniem pliku. Spróbuj ponownie.',
	'thumbProblem'			=> 'Wystąpił problem z wygenerowaniem miniaturki. Może użyjesz innego obrazka?',
	'passwordNoMatch'		=> 'Twoje nowe hasła nie pasują.',
	'invalidEmail'			=> 'Nieprawidłowy adres email.',
	'postLimitReached'		=> 'Limit postów osiągnięty. Załóż nowy wątek, jeśli chcesz kontyunować dyskusję w tym temacie.',
	'imageLimitReached'		=> 'Limit obrazków osiągnięty, spróbuj napisać bez dołączania obrazka.',
	'charLimitReached'		=> 'Twój post przekracza dozwolony limit znaków. Proszę go skrócić.',
	'newLLimitReached'		=> 'Post przekracza dozwolony limit nowych wierszy. Proszę usunąć część z nich.',
	'postingTooFast'		=> 'Piszesz posty za szybko! Musisz trochę poczekać. Może przez ten czas zafundujesz sobie gorącą czekoladę?',
	'fileTooLarge'			=> 'Twój plik jest za duży! Spróbuj go zmniejszyć lub narzekać, że nasz limit wielkości jest za mały.',
	'silenced'		=> 'Wyciszony!',
	'silencedMsg'			=> 'Zostałeś wyciszony. To oznacza, że nie możesz zamieszczać postów! Być może zostałeś niewłaściwie lub przypadkowo zbanowany. Aby odwołać się od tej decyzji, należy skontaktować się z moderatorem.',
	'alreadyUnsubbed'	=> 'Nie subskrybujesz tego wątku, więc nie możesz anulować subskrypcji!',
	'alreadySubbed'			=> 'Nie możesz dodać do subskrybcji czegoś, co już subskrybujesz! Spokojnie z tym klikaniem.',
	'ipBanned'			=> 'IP Zbanowane!',
	'ipBannedMsg'			=> 'Twój adres IP został zbanowany. Być może to nie twoja wina, najpewniej spamer skłonił nas do wlepienia bana. Skontaktuj się z nami, jeśli sądzisz, że to nie byłeś ty.',
	'forumLocked'			=> 'Te forum jest zablokowane.',
	'captchaFail'			=> 'Captcha: zły kod, spróbuj ponownie.',
	'emptyForms'			=> 'Niektóre pola pozostały puste, sprawdź dokładnie.',
	'invalidUsername'			=> 'Nieprawidłowy nick, spróbuj ponownie.',
	'passwordTooShort'			=> 'Hasło nie pasuje lub jest za krótkie.',
	'emailUsed'			=> 'Email już w użyciu.',
	'usernameUsed'			=> 'Nick już w użyciu.',
	'passwordIncoTryAgain'	=> 'Nieprawidłowe hasło. Spróbuj ponownie.',
	'msgReqSubCon'			=> 'Nowa wiadomość wymaga tematu i treści.',
	'msgTooManyChars'		=> 'Twoja wiadomość jest za długa! Proszę ją skrócić.',
	'msgTooManyNewL'		=> 'Twoja wiadomość przekracza limit nowych wierszy, proszę usunąć część z nich.',
	'flood'			=> 'Wykonujesz czynności za szybko. Poczekaj chwilę, a następnie spróbuj ponownie.',
	'destinationReq'		=> 'Wymagane miejsce docelowe.',
	'threadNoLonger'			=> 'Wątek już nie istnieje.',
	'registrationLock'			=> 'Rejestracja jest obecnie zablokowana. Przepraszamy! Prawdopodobnie nad czymś pracujemy. Proszę sprawdzić ponownie później.',
	'userNotFound'			=> 'Nie znaleziono użytkownika.',
	'spamFilter'			=> 'Filtr spamu włączony!',
	'spamFilterMsg'			=> 'Twoja wiadomośc przypominała spam, więc została odrzucona. Jeśli nie jesteś spamerem, przepisz wiadomość i spróbuj ponownie.',
	'sendMsgFail'			=> 'Wysyłanie wiadomości nie powiodło się!',
	'sendMsgFailMsg'		=> 'Twoja wiadomość nie została wysłana z niewiadomych przyczyn. Przepraszamy! Proszę spróbować ponownie później.',
	'formsEmpty'			=> 'Któreś z wymaganych pól pozostało niewypełnione.',
	'contactFlood'			=> 'Wysłałeś już niedawno formularz kontaktowy. Spróbuj ponownie później.',
	'applicationFlood'		=> 'Złożyłeś już niedawno podanie. Spróbuj ponownie później.',
	'noAcctEmail'			=> 'Nie ma konta powiązanego z tym adresem email.',
	'passRstFlood'			=> 'Wysłałeś już niedawno prośbę o zmianę hasła, sprawdź swój email.<br /><br />Jeśli nie otrzymałeś żadnej wiadomości, sprawdź folder spam i <a href = "contact.php">skontaktuj się z nami</a>.',
	'sorry'			=> 'Przepraszamy!',
	'loginDisabl'			=> 'Logowanie jest obecnie zablokowane. Proszę sprawdzić ponownie później.',
	'msgSendFailSome'		=> 'Nie udało się wysłać wiadomości do następujących użytkowników (mogą nie istnieć, sprawdź pisownię):',
	'ratAndReviewEmp'			=> 'Pole opinii i/lub oceny jest niewypełnione.',
	'reviewTooManyChars'		=> 'Twoja recenzja jest za długa! Proszę ją skrócić.',
	'reviewTooManyNewL'			=> 'Twoja recenzja przekracza limit nowych wierszy, proszę usunąć część z nich.',
	'productMssng'			=> 'Przepraszamy! Nie znaleziono produktu. Może być tymczasowo lub trwale usunięty. ',
	'reviewedAlr'			=> 'Już zrecenzowałeś ten produkt. Możesz to zrobić tylko raz. Jeśli chcesz coś zmienić
			w swojej recenzji, proszę się z nami <a href = "http://dischan.org/contact.php">skontaktować</a> i dać nam znać.',
	'serialDisabled'			=> 'Ten klucz został zablokowany z powodu podejrzenia nadużycia. Sprawa zostanie zbadana, jednak możesz się z nami od razu <a href = "http://dischan.org/contact.php">skontaktować</a> jeśli uważasz, że to pomyłka.',
	'noDownloadPrm'			=> 'Nie masz uprawnień do pobrania tego elementu. Przepraszamy! Jeśli uważasz, że otrzymałeś ten komunikat przez pomyłkę, proszę się z nami
			<a href = "http://dischan.org/contact.php">skontaktować</a>.',
	'noDLSelect'			=> 'Musisz wybrać format lub system operacyjny, aby pobrać!',
	'invEmailSerialComb'		=> 'Email lub klucz nieprawidłowy. Proszę spróbować ponownie.',
	'downloadLimit'			=> 'Limit Pobrań Osiągnięty!',
	'downloadLimitMsg1'			=> 'Osiągnąłeś swój limit pobrań na dema gier. Proszę wrócić ponownie za kilka godzin, a limit zostanie zresetowany. Przepraszamy za niedogodności.',
	'downloadLimitMsg2'			=> 'Osiągnąłeś swój limit pobrań na produkty. Proszę wrócić ponownie za kilka godzin, a limit zostanie zresetowany. Przepraszamy za niedogodności.',
	'downloadLimitMsg3'			=> 'Osiągnąłeś swój limit pobrań na ten produkt. Jeśli wciąż potrzebujesz go pobrać, proszę odczekać kilka godzin, a limit zostanie zresetowany.',
	'reviewNotFound'			=> 'Nie znaleziono recenzji.',
	'mustPurchase'			=> 'Musisz zakupić ten produkt, aby móc go zrecenzować.',
	'noPermission'			=> 'Nie masz uprawnień do wykonania tej operacji. Jeśli uważasz, że to pomyłka, proszę się z nami <a href = "http://dischan.org/contact.php">skontaktować</a>.',
	'formExpired'			=> 'Formularz ten wygasł lub jest nieprawidłowy. Proszę spróbować ponownie.',
	'userNotFoundGift'		=> 'Nie znaleziono użytkownika.',
	'UserOwns'			=> 'Użytkownik już posiada ten produkt.',
	'invalidEmailGift'		=> 'Nieprawidłowy email.',
	'alreadyInCart'			=> 'Już jest w twoim wózku.',
	'giftLimit'			=> 'Limit prezentów osiągnięty. Proszę zakupić swoje obecne prezenty zanim dodasz więcej.',
	'noSelfGifting'			=> 'Nie możesz wysłać prezentu samemu sobie!',
	'outboxFull'			=> 'Twoja skrzynka nadawcza jest pełna. Nie będziesz mógł wysyłać nowych wiadomości, dopóki nie usuniesz starych',
<<<<<<< HEAD
=======
	'invalidAmount'			=> 'Invalid amount.',
	'alreadyGiven'			=> 'Sorry, but you can\'t give for the same product twice. ):',
>>>>>>> Big commit
));

?>
