<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0"><font size="5">Texas
Rangers Women's Club</font></p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>

<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0"><font size="5">Membership
Renewal</font></p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">It
is once again time to renew our membership in the Texas Rangers Women's
Club.&nbsp; This is a good time to review the object of the club: to promote
fellowship among its members, to generate enthusiasm for the Texas Rangers
Baseball Club, to enable less fortunate citizens to enjoy baseball through funds
raised in Ways and Means projects, and to have fun at the ball game.</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">The
dues are <b>$22.00</b> per year.&nbsp;If you need a new name badge please include <b>$7.00</b> 
for your badge for a total of <b>$29.00</b>. Please complete this form and mail with
your check made payable to the &quot;TRWC&quot; and mail it to the address below: </p>

<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">Texas Rangers Women's Club</p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">P.O.
Box 201473</p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">Arlington,
TX 76006-1473</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">You
may also bring the form to the next general membership meeting.</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
  
  
  <table border="0" width="100%">
	<tr><td width="19%" height="25">Name</td><td width="36%" height="25"><?php echo $_POST['Name']; ?></td></tr>
	<?php 
		if($_POST['NameBadge']==1) echo ("<tr><td width='19%' height='25'>Membership and New Name Badge</td><td width='36%' height='25'> $29; </td></tr>"); 
		else echo("<tr><td width='19%' height='25'>Membership Renewal</td><td width='36%' height='25'> $22; </td></tr>")
	?>
	<tr><td width="19%" height="25">Cash</td><td width="36%" height="25"><?php echo $_POST['CashAmt']; ?></td></tr>
	<tr><td width="19%" height="25">Check</td><td width="36%" height="25"><?php echo $_POST['CheckAmt']; ?></td></tr>
	<tr><td width="19%" height="25">Check Number</td><td width="36%" height="25"><?php echo $_POST['CheckNbr']; ?></td></tr>
  </table>
  
  <?php
  if($_POST['InfoUpdate']==1) echo ("Updated Contact Information:
  
 <table border='0' width='100%'>
	<tr><td>Address:</td><td><input type='text' name='Address'/></td></tr>
	<tr><td>City:</td><td><input type='text' name='City'/></td></tr>
	<tr><td>State:</td><td><input type='text' name='State'/></td></tr>
	<tr><td>Zip:</td><td><input type='text' name='Zip'/></td></tr>
	<input type='hidden' name='HContact?' value='' />
	<input type='hidden' name='WContact?' value='' />
	<tr><td>Home Phone:</td><td><input type='text' name='HPhone'/><input type='checkbox' name ='HContact?' value='Yes'/> Contact?</td></tr>
	<tr><td>Work Phone:</td><td><input type='text' name='WPhone'/><input type='checkbox' name ='WContact?' value='Yes' /> Contact?</td></tr>
	<tr><td>Email Address:</td><td><input type='text' name='EMail'/></td></tr>
	
</table>"); ?>
