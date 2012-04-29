<table border="0" width="100%">
  <tr>
    <td width="100%">
      <p align="center"><font size="5">Texas
Rangers Women's Club</font></td>
  </tr>
  <tr>
    <td width="100%">
      <p align="center"><font size="5">Membership
Application</font></td>
  </tr>
</table>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">&nbsp;</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">Any
adult female over 18 years of age is eligible to become a member of the Texas
Rangers Women's Club (TRWC) by subscribing to it's bylaws and by payment of
dues.&nbsp; Female relatives of TRWC members may apply for limited membership at
the age of 16.&nbsp; Limited members shall not be eligible to run for elective
office, chair committees, and shall not have voting privileges.</p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0"><b>DUES:&nbsp;
$22.00</b> - payable October 1&nbsp;&nbsp;&nbsp;&nbsp; <b>NAME BADGE</b> <b>&nbsp;$7.00&nbsp;&nbsp; 
TOTAL $29.00</b></p>
<p align="left" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">Please
make checks payable to the Texas Rangers Women's Club and mail to:</p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">TRWC</p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">P.O.
Box 201473</p>
<p align="center" style="line-height: 100%; text-indent: 0; word-spacing: 0; margin: 0">Arlington,
Tx 76006</p>
<form method="POST" action="_derived/nortbots.htm" onSubmit="location.href='_derived/nortbots.htm';return false;" WEBBOT-onSubmit webbot-action="--WEBBOT-SELF--">
  <!--webbot bot="SaveResults" startspan
  U-File="E:\TRWC Website\_private\form_results.txt" S-Format="TEXT/CSV"
  S-Label-Fields="TRUE" --><strong>[FrontPage Save Results Component]</strong><!--webbot
  bot="SaveResults" endspan i-checksum="6561" -->
  <table border="0" width="101%" height="480">
    <tr>
      <td width="19%" height="25">Name</td>
      <td width="36%" height="25"><?php echo $_POST['Name']; ?></td>
      <td width="19%" height="25">Address</td>
      <td width="48%" height="25"><?php echo $_POST['Address']; ?></td>
    </tr>
    <tr>
      <td width="19%" height="25">Home Phone</td>
      <td width="36%" height="25"><?php echo $_POST['HPhone']; 
			if($_POST['HMetro?']== "Yes") echo ', Metro line';
			if($_POST['HContact?']== "Yes") echo ', Contact';
	  ?>
      <td width="19%" height="25">City</td>
      <td width="48%" height="25"><?php echo $_POST['City']; ?></td>
    </tr>
    <tr>
      <td width="19%" height="25">Work Phone</td>
      <td width="36%" height="25"><?php echo $_POST['WPhone']; 
		if($_POST['WMetro?']== "Yes") echo ', Metro line ';
		if($_POST['WContact?']== "Yes") echo ', Contact';
		?>
      <td width="19%" height="25">State</td>
      <td width="48%" height="25"><?php echo $_POST['State']; ?></td>
    </tr>
    <tr>
      <td width="19%" height="25">Birthday</td>
      <td width="36%" height="25"><?php echo $_POST['Bmonth'].", ".$_POST['Bday']." ".$_POST['Byear']?>
      <td width="19%" height="25">Zip</td>
      <td width="48%" height="25"><?php echo $_POST['Zip']; ?></td>
    </tr>
    <tr>
      <td width="49%" height="25">E-Mail Address: <?php echo $_POST['EMail']; ?></td>
    </tr>
    <tr>
      <td width="118%" colspan="4" height="25">What days and hours do you work? <?php echo $_POST['WHours']; ?></td>
    </tr>
    <tr>
      <td width="118%" colspan="4" height="25">What is the best day/time when you can be
        reached? <?php echo $_POST['RHours']; ?></td>
    </tr>
    <tr>
      <td width="118%" colspan="4" height="25">When should someone <b>NOT</b> call you? <?php echo $_POST['NContact']; ?></td>
    </tr>
    <tr>
      <td width="118%" colspan="4" height="99">We would like to know how you heard about the
        Texas Rangers Women's Club.&nbsp; Please specify the name of the paper,
        radio station, TV station, Friend, Winter Carnival, or other.&nbsp;
        Thank you.
        <p><?php echo $_POST['Heard']; ?></p>
        <p>*****************************************************************************************</td>
    </tr>
    <tr>
      <td width="19%" height="25">Check</td>
      <td width="36%" height="25"><input type="text" name="T11" size="26" tabindex="9"></td>
    </tr>
    <tr>
      <td width="19%" height="25">Cash</td>
      <td width="36%" height="25"><input type="text" name="T12" size="26" tabindex="10"></td>
	</tr>
    <tr>
      <td width="19%" height="25">Date Received</td>
      <td width="36%" height="25"><input type="text" name="T13" size="26" tabindex="11"></td>
    </tr>
    <tr>
      <td width="19%" height="25">Gave directors, badge, pin </td>
      <td width="36%" height="25"><input type="text" name="T14" size="26" tabindex="12"></td>
    </tr>
    <tr>
      <td width="19%" height="25">Needs directory, badge, pin </td>
      <td width="36%" height="25"><input type="text" name="T15" size="26" tabindex="13"></td>
    </tr>
    <tr>
	  <td width="19%" height="25">Phone Committee Area Assigned</td>
      <td width="36%" height="25"><input type="text" name="T16" size="26" tabindex="14"></td>
  </table>
</form>


