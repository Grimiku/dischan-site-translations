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
	'passwordIncorrect'			=> 'Password incorreta.',
	'userEmailNotFound'			=> 'Nome de utilizador ou Email não encontrado.',
	'notLoggedIn'		=> 'Você não entrou.',
	'error'		=> 'Erro!',
	'forumDoesNotExist'		=> 'Está a tentar colocar um post num fórum que não existe.',
	'subConPicRequired'		=> 'Um novo tópico requer um sujeito, conteúdo e uma imagem.',
	'picConRequired'		=> 'Uma resposta a um tópico requer uma imagem e/ou conteúdo.',
	'threadLocked'				=> 'Impossível responder. Tópico bloqueado.',
	'fileUpError'			=> 'Houve um problema com o upload do ficheiro. Por favor tente de novo.',
	'thumbProblem'			=> 'Houve um problema com o gerador de pré-visualizações. Tente talvez uma imagem diferente?',
	'passwordNoMatch'		=> 'As suas passwords novas não correspondem.',
	'invalidEmail'			=> 'Email inválido.',
	'postLimitReached'		=> 'Limite de posts alcançado. Por favor inicie outro tópico se deseja continuar a discutir este assunto.',
	'imageLimitReached'		=> 'Limite de imagens alcançado, tente responder sem uma imagem.',
	'charLimitReached'		=> 'A sua resposta excede o limite de caracteres. Por favor encurte-a.',
	'newLLimitReached'		=> 'A sua resposta excede o limite de quebras de linha. Por favor remova algumas.',
	'postingTooFast'		=> 'Está a responder demasiado rápido! Terá que esperar um bocado. Talvez deliciar-se com um bocado de chocolate quente enquanto espera?',
	'fileTooLarge'			=> 'O seu ficheiro é demasiado grande! Tente diminuir o seu tamanho, ou queixar-se que o nosso limite de tamanho é demasiado pequeno.',
	'silenced'		=> 'Silenciado!',
	'silencedMsg'			=> 'Você foi silenciado. Isto quer dizer que é incapaz de criar posts! Pode ter-se comportado mal, ou fora banido acidentalmente. Para apelar a esta decisão, por favor contacte um moderador.',
	'alreadyUnsubbed'	=> 'De acordo connosco, você não está subscrito a este tópico, portanto não podemos cancelar a subscrição!',
	'alreadySubbed'			=> 'Não conseguimos subscrevê-lo a algo a que já está subscrito! Tenha alguma calma com esse botão do rato.',
	'ipBanned'			=> 'IP Banido!',
	'ipBannedMsg'			=> 'O seu IP foi banido. A culpa provavelmente não é sua, algum spammer às tantas fez com que nós o baníssemos. Por favor contacte-nos se crê que não foi você.',
	'forumLocked'			=> 'Este fórum está bloqueado.',
	'captchaFail'			=> 'O Captcha falhou, por favor tente de novo.',
	'emptyForms'			=> 'Alguns formulários estão vazios, por favor verifique de novo.',
	'invalidUsername'			=> 'Nome de utilizador inválido, por favor tente de novo.',
	'passwordTooShort'			=> 'Passwords não correspondem, ou são demasiado curtas.',
	'emailUsed'			=> 'Email já usado.',
	'usernameUsed'			=> 'Nome de utilizador já usado.',
	'passwordIncoTryAgain'	=> 'Password incorreta. Por favor tente de novo.',
	'msgReqSubCon'			=> 'Uma nova mensagem requer um assunto e conteúdo.',
	'msgTooManyChars'		=> 'A sua mensagem tem demasiados caracteres! Por favor encurte-a.',
	'msgTooManyNewL'		=> 'A sua mensagem tem demasiadas quebras de linha, por favor remova algumas.',
	'flood'			=> 'Está a executar ações demasiado rápido. Por favor espere um pouco e tente de novo.',
	'destinationReq'		=> 'Destino necessário.',
	'threadNoLonger'			=> 'Tópico já não existe.',
	'registrationLock'			=> 'Registrações estão bloqueadas neste momento. Desculpe! Estamos provavelmente a tratar de algo. Por favor tente de novo mais tarde.',
	'userNotFound'			=> 'Utilizador não encontrado.',
	'spamFilter'			=> 'Filtro de spam ativado!',
	'spamFilterMsg'			=> 'A sua mensagem parecia ser spam, portanto foi descartada. Se não é um spammer, por favor reescreva a mensagem e tente de novo.',
	'sendMsgFail'			=> 'Envio de mensagem falhado!',
	'sendMsgFailMsg'		=> 'A sua mensagem não foi enviada devido a um erro desconhecido. Desculpe! Por favor tente de novo mais tarde.',
	'formsEmpty'			=> 'Alguns dos formulários necessários estão vazios.',
	'contactFlood'			=> 'Já submeteu um formulário de contacto recentemente. Por favor tente de novo mais tarde.',
	'applicationFlood'		=> 'Já submeteu uma candidatura recentemente. Por favor tente de novo mais tarde.',
	'noAcctEmail'			=> 'Não existe conta associada a este endereço de email.',
	'passRstFlood'			=> 'Já submeteu um pedido de reinicio da password recentemente, por favor verifique o seu email.<br /><br />Se não recebeu nenhum email, por favor verifique a caixa do spam, e <a href = "contact.php">contacte-nos</a>.',
	'sorry'			=> 'Pedimos desculpa!',
	'loginDisabl'			=> 'É temporariamente impossível entrar. Por favor tente de novo mais tarde.',
	'msgSendFailSome'		=> 'Foi impossível enviar a mensagem para os seguintes utilizadores (eles podem não existir, por favor verifique se escreveu corretamente):',
	'ratAndReviewEmp'			=> 'Caixa de crítica e/ou pontuação vazia.',
	'reviewTooManyChars'		=> 'A sua crítica tem demasiados caracteres! Por favor encurte-a.',
	'reviewTooManyNewL'			=> 'A sua crítica tem demasiadas quebras de linha, por favor remova algumas.',
	'productMssng'			=> 'Pedimos desculpa! Esse produto não foi encontrado. Pode ter sido removido temporariamente ou permanentemente.',
	'reviewedAlr'			=> 'Já deu uma crítica a este produto. Só pode dar uma crítica a um produto. Se desejar alterar algo em relação a uma crítica, por favor <a href = "http://dischan.org/contact.php">contacte-nos</a> para nós sabermos.',
	'serialDisabled'			=> 'Esta chave foi desativada devido a suspeitas de abuso. Trataremos deste assunto, porém pode <a href = "http://dischan.org/contact.php">contactar-nos</a> imediatamente se achar que isto se trata de um erro.',
	'noDownloadPrm'			=> 'Não tem permissão para transferir isto. Desculpe! Se acha que recebeu esta mensagem erradamente, por favor <a href = "http://dischan.org/contact.php">contacte-nos</a>.',
	'noDLSelect'			=> 'Deve escolher um formato ou sistema operativo para transferir!',
	'invEmailSerialComb'		=> 'Chave ou email inválido, por favor tente de novo.',
	'downloadLimit'			=> 'Limite de downloads alcançado!',
	'downloadLimitMsg1'			=> 'Chegou ao limite de downloads para demos de jogos. Por favor regresse nalgumas horas e o seu limite será reiniciado. Pedimos desculpa pelo incómodo.',
	'downloadLimitMsg2'			=> 'Chegou ao limite de downloads para produtos. Por favor regresse nalgumas horas e o seu limite será reiniciado. Pedimos desculpa pelo incómodo.',
	'downloadLimitMsg3'			=> 'Chegou ao limite de downloads para este produto. Se ainda precisar de o transferir, por favor espere algumas horas e o seu limite será reiniciado.',
	'reviewNotFound'			=> 'Crítica não encontrada.',
	'mustPurchase'			=> 'Deve comprar este produto antes de lhe poder dar uma crítica.',
	'noPermission'			=> 'Não tem permissão para efetuar esta ação. Se acha que se trata dum erro, por favor <a href = "http://dischan.org/contact.php">contacte-nos</a>.',
	'formExpired'			=> 'Este formulário expirou, ou é inválido. Por favor tente de novo.',
	'userNotFoundGift'		=> 'Utilizador não encontrado.',
	'UserOwns'			=> 'Utilizador já tem este produto.',
	'invalidEmailGift'		=> 'Email inválido.',
	'alreadyInCart'			=> 'Já está no seu carrinho.',
	'giftLimit'			=> 'Limite de prendas alcançado. Por favor compre as suas prendas atuais antes de adicionar mais.',
	'noSelfGifting'			=> 'Não pode adicionar uma prenda a si próprio.',
	'outboxFull'			=> 'A sua caixa de saída está cheia. Será incapaz de enviar mensagens novas enquanto não apagar algumas das antigas.',
));

?>