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
	'passwordIncorrect'			=> 'Mot de passe incorrect.',
	'userEmailNotFound'			=> 'Nom d\'utilisateur ou e-mail non trouvé.',
	'notLoggedIn'		=> 'Vous n\'êtes pas connecté(e).',
	'error'		=> 'Erreur !',
	'forumDoesNotExist'		=> 'Vous essayez d\'envoyer un message sur un forum qui n\'existe pas.',
	'subConPicRequired'		=> 'Une nouvelle discussion nécessite un sujet, un texte et une image.',
	'picConRequired'		=> 'Une réponse à une discussion nécessite une image et/ou un texte.',
	'threadLocked'				=> 'Envoie impossible. La discussion est bloquée.',
	'fileUpError'			=> 'Un problème est survenu lors du téléchargement du fichier. Veuillez réessayer.',
	'thumbProblem'			=> 'Un problème est survenu lors de l\'Aperçu Image. Pourquoi ne pas esssayer une autre image ?',
	'passwordNoMatch'		=> 'Votre nouveau mot de passe ne correspond pas.',
	'invalidEmail'			=> 'E-mail invalide.',
	'postLimitReached'		=> 'Limite des messages atteinte. Veuillez ouvrir une nouvelle discussion pour continuer de discuter sur ce sujet.',
	'imageLimitReached'		=> 'Limite des images atteinte, essayez d\'envoyer un message sans image.',
	'charLimitReached'		=> 'Votre message a dépassé la limite de caractère. Veuillez le réduire.',
	'newLLimitReached'		=> 'Votre message a dépassé la limite de saut de ligne. Veuillez en supprimer quelques-unes.',
	'postingTooFast'		=> 'Vous envoyez des messages trop rapidement ! Il va falloir attendre un peu... Pourquoi ne pas aller boire un bon chocolat chaud pendant ce temps ?',
	'fileTooLarge'			=> 'Votre fichier est trop gros ! Essayez de le réduire, ou plaignez-vous de notre taille limite des fichiers...',
	'silenced'		=> 'Silenced!',
	'silencedMsg'			=> 'You have been silenced. This means you can\'t make any posts! You might have been misbehaving, or accidentally banned. To appeal this decision, please contact a moderator.',
	'alreadyUnsubbed'	=> 'Nous n\'êtes pas abonné(e) à cette discussion, alors nous ne pouvons pas vous désabonner !',
	'alreadySubbed'			=> 'Impossible de vous abonner deux fois à la même chose ! Allez-y doucement avec la souris, peut-être...',
	'ipBanned'			=> 'IP Banni !',
	'ipBannedMsg'			=> 'Votre adresse IP est bannie. Ce n\'est peut-être pas de votre faute, un spammer a probablement causé ce bannissement. Veuillez nous contacter si vous pensez que ce n\'était pas vous.',
	'forumLocked'			=> 'Ce forum est bloqué.',
	'captchaFail'			=> 'Captcha incorrect, veuillez réessayer.',
	'emptyForms'			=> 'Certaines cases sont laissées vides, veuillez revérifier.',
	'invalidUsername'			=> 'Nom d\'utilisateur invalide, veuillez réessayer.',
	'passwordTooShort'			=> 'Votre mot de passe est trop court ou ne correspond pas.',
	'emailUsed'			=> 'E-mail déjà utilisé.',
	'usernameUsed'			=> 'Nom d\'utilisateur déjà utilisé.',
	'passwordIncoTryAgain'	=> 'Mot de passe incorrect. Veuillez réessayer.',
	'msgReqSubCon'			=> 'Un nouveau message nécessite un sujet et un texte.',
	'msgTooManyChars'		=> 'Votre message a dépassé la limite de caractère. Veuillez le réduire.',
	'msgTooManyNewL'		=> 'Votre message a dépassé la limite de saut de ligne. Veuillez en supprimer quelques-unes.',
	'flood'			=> 'Vous effectuez des actions trop rapidement. Veuillez attendre un peu, puis réessayez.',
	'destinationReq'		=> 'Destination nécessaire.',
	'threadNoLonger'			=> 'Cette discussion n\'existe plus.',
	'registrationLock'			=> 'Les inscriptions sont momentanément bloquées. Toutes nos excuses ! Nous travaillons sans doute sur quelque chose. Veuillez revenir plus tard.',
	'userNotFound'			=> 'Utilisateur non trouvé.',
	'spamFilter'			=> 'Filtre Spam déclenché !',
	'spamFilterMsg'			=> 'Votre message ressemble à un spam, donc nous l\'avons mis à l\'écart. Si vous n\'êtes pas un spammer, veuillez réécrire votre message et réessayez.',
	'sendMsgFail'			=> 'Envoie de message échoué !',
	'sendMsgFailMsg'		=> 'Votre message n\'a pas été envoyé suite à une erreur inconnue. Toutes nos excuses ! Veuillez réessayer plus tard.',
	'formsEmpty'			=> 'Certaines cases sont laissées vides.',
	'contactFlood'			=> 'Vous avez déjà soumis récemment un formulaire de contact. Veuillez réessayer plus tard.',
	'applicationFlood'		=> 'Vous avez déjà soumis récemment une demande. Veuillez réessayer plus tard.',
	'noAcctEmail'			=> 'Aucun compte n\'est associé à cette adresse e-mail.',
	'passRstFlood'			=> 'Vous avez déjà soumis récemment une demande de changement de mot de passe, veuillez vérifier vos e-mails.<br /><br /> Assurez-vous qu\'il n\'est pas marqué comme Spam, et si vous n\'avez pas reçu d\'e-mail, veuillez <a href = "contact.php">nous contacter</a>.',
	'sorry'			=> 'Toutes nos excuses !',
	'loginDisabl'			=> 'La connexion est momentanément désactivée. Veuillez revenir plus tard.',
	'msgSendFailSome'		=> 'Le message n\'a pas été envoyé aux utilisateurs suivants (il se peut qu\'ils n\'existent pas, veuillez vérifier votre frappe) :',
	'ratAndReviewEmp'			=> 'Boîte de Note et/ou Avis vide.',
	'reviewTooManyChars'		=> 'Votre avis a dépassé la limite de caractère ! Veuillez le réduire.',
	'productMssng'			=> 'Toutes nos excuses ! Ce produit est introuvable. Il a peut-être été temporairement ou définitivement supprimé.',
	'reviewTooManyNewL'			=> 'Votre avis a dépassé la limite de saut de ligne, veuillez en supprimer quelques-unes.',
	'reviewedAlr'			=> 'Vous avez déjà donné votre avis sur ce produit. Vous ne pouvez donner qu\'un avis par produit. Si vous souhaitez modifier quelque chose
			sur un avis, n\'hésitez pas à <a href = "http://dischan.org/contact.php">nous contacter</a> et nous avertir.',
	'serialDisabled'			=> 'Cette clé produit a été désactivée en raison d\'un soupçon d\'abus. Nous examinerons cette affaire, cependant vous pouvez <a href = "http://dischan.org/contact.php">nous contacter</a> immédiatement si vous pensez que c\'est une erreur.',
	'noDownloadPrm'			=> 'Vous n\'êtes pas autorisé(e) à télécharger ceci. Toutes nos excuses ! Si vous pensez avoir reçu cette notification par erreur, veuillez
			<a href = "http://dischan.org/contact.php">nous contacter</a>.',
	'noDLSelect'			=> 'Vous devez choisir un format ou un système d\'exploitation à télécharger !',
	'invEmailSerialComb'		=> 'Clé produit ou e-mail invalide, veuillez réessayer.',
	'downloadLimit'			=> 'Limite de Téléchargement Atteinte !',
	'downloadLimitMsg1'			=> 'Vous avez atteint votre limite de téléchargement des jeux démos. Veuillez revenir dans quelques heures pour que la limite soit réinitialisée. Nous vous prions de nous excuser pour la gêne occasionnée.',
	'downloadLimitMsg2'			=> 'Vous avez atteint votre limite de téléchargement des produits. Veuillez revenir dans quelques heures pour que la limite soit réinitialisée. Nous vous prions de nous excuser pour la gêne occasionnée.',
	'downloadLimitMsg3'			=> 'Vous avez atteint votre limite de téléchargement pour ce produit. Si vous souhaitez le télécharger à nouveau, Veuillez attendre quelques heures pour que la limite soit réinitialisée.',
	'reviewNotFound'			=> 'Avis non trouvé.',
	'mustPurchase'			=> 'Vous devez d\'abord acheter ce produit avant de pouvoir donner un avis.',
	'noPermission'			=> 'Vous n\'avez pas la permission d\'effectuer cette action. Si vous pensez que c\'est une erreur, veuillez <a href = "http://dischan.org/contact.php">nous contacter</a>.',
	'formExpired'			=> 'Ce formulaire a expiré, ou est invalide. Veuillez réessayer.',
	'userNotFoundGift'		=> 'Utilisateur non trouvé.',
	'UserOwns'			=> 'L\'utilisateur possède déjà ce produit.',
	'invalidEmailGift'		=> 'E-mail invalide.',
	'alreadyInCart'			=> 'Déjà dans votre panier.',
	'giftLimit'			=> 'Limite des cadeaux atteinte. Veuillez d\'abord acheter les cadeaux actuels avant d\'en ajouter.',
	'noSelfGifting'			=> 'Vous ne pouvez pas ajouter un cadeau pour vous-même.',
	'outboxFull'			=> 'Votre boîte d\'envoi est pleine. Vous ne pourrez pas envoyer de nouveaux messages avant d\'en avoir supprimé au préalable.',
	'invalidAmount'			=> 'Invalid amount.',
	'alreadyGiven'			=> 'Sorry, but you can\'t give for the same product twice. ):',
));

?>