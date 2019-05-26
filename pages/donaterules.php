<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
$main_content .= '
<p><strong>Informa&ccedil;&otilde;es para Doa&ccedil;&atilde;o</strong></p>
<p><br />Informamos aos jogadores e colaboradores que o <strong>'.$config['server']['serverName'].'&nbsp;</strong>n&atilde;o tem nenhum interesse financeiro. Toda a renda obtida &eacute; diretamente reaplicada para a manuten&ccedil;&atilde;o do servidor - isto significa que ao fazer uma doa&ccedil;&atilde;o, voc&ecirc; est&aacute; garantindo a estabilidade e aumentando a qualidade do mesmo.</p>
<p>Os pontos <strong>(Coins)</strong> que s&atilde;o repassados aos jogadores que efetuam as doa&ccedil;&otilde;es n&atilde;o representam nada mais al&eacute;m de nossa gratifica&ccedil;&atilde;o, isto &eacute;, voc&ecirc; n&atilde;o est&aacute; comprando pontos e sim recebendo uma gratifica&ccedil;&atilde;o simb&oacute;lica (em formas de pontos/coins) que te beneficie dentro do jogo; voc&ecirc; poder&aacute; usar os seus pontos da maneira que desejar.</p>
<p>O esp&iacute;rito deste sistema &eacute; simples: com o intuito de nos aproximarmos dos jogadores e fazer com que voc&ecirc;s se sintam em casa, entendemos a sua doa&ccedil;&atilde;o como uma via de m&atilde;o dupla no quesito credibilidade. Ao acreditar que vale a pena investir na manuten&ccedil;&atilde;o do servidor, n&oacute;s investimos em voc&ecirc;s creditando-os com pontos, que como j&aacute; dito anteriormente, podem ser utilizados da maneira que mais os couber.</p>
<p><strong>Regras:</strong></p>
<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0 WIDTH=100%>
					<TR>
						<TD><IMG SRC="'.$layout_name.'/images/global/general/blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD>
						<TD>
							<TABLE CELLSPACING=1 CELLPADDING=0 BORDER=0 WIDTH=100%>
								<TR>
									<TD COLSPAN=2><IMG SRC="'.$layout_name.'/images/global/general/blank.gif" WIDTH=1 HEIGHT=1 BORDER=0></TD>
								</TR>
								<TR>
									<TD VALIGN=top><IMG SRC="'.$layout_name.'/images/global/content/bullet.gif" WIDTH=12 HEIGHT=15 BORDER=0></TD>
									<TD>O Doador está ciente que a doação não pode ser devolvida.</TD>
								</TR>
								<TR>
									<TD VALIGN=top><IMG SRC="'.$layout_name.'/images/global/content/bullet.gif" WIDTH=12 HEIGHT=15 BORDER=0></TD>
									<TD>Os Pontos/Coins (Item virtual) serão entregues dentro do prazo de 24 horas na conta do doador.</TD>
								</TR>
								<TR>
									<TD VALIGN=top><IMG SRC="'.$layout_name.'/images/global/content/bullet.gif" WIDTH=12 HEIGHT=15 BORDER=0></TD>
									<TD>O Doador está ciente que não está comprando e sim doando, e como forma de gratificação iremos adicionar os Pontos/Coins (item virtual) na conta do doador.</TD>
								</TR>
								<TR>
									<TD VALIGN=top><IMG SRC="'.$layout_name.'/images/global/content/bullet.gif" WIDTH=12 HEIGHT=15 BORDER=0></TD>
									<TD>Em caso de resete, poderá resgatar seus pontos normalmente, Exceto doações feitas em server BETA e/ou TESTE.</TD>
								</TR>
								<TR>
									<TD VALIGN=top><IMG SRC="'.$layout_name.'/images/global/content/bullet.gif" WIDTH=12 HEIGHT=15 BORDER=0></TD>
									<TD>O valor dos Pontos/Coins estão sujeitos a alterações.</TD>
								</TR>
							</TABLE>
						</TD>
						<TD><IMG SRC="'.$layout_name.'/images/global/general/blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD>
					</TR>
				</TABLE>	
';
?>