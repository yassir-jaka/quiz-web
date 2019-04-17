<div id="content" class="cadre" >
<h3 style="margin-bottom:40px; color:#DCDCDC">VOS INFORMATIONS</h3>
<table class="info">
<tr>
<th>Login : </th>
<td style="padding-left:30px"><?php echo $this->user->login() ?></td>
</tr>
<tr>
<th>Nom :</th>
<td style="padding-left:30px"><?php echo $this->user->nom() ?></td>
</tr>
<tr>
<th>Prénom :</th>
<td style="padding-left:30px"><?php echo $this->user->prenom() ?></td>
</tr>
<tr>
<th>Mail :</th>
<td style="padding-left:30px"><?php echo $this->user->mail() ?></td>
</tr>
</table>
</div>
