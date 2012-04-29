<form  action="/node/18" method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="Name"/></td></tr>
<tr><td width="100%">Do you need to update your contact information? 
If not proceed to Payment Information
<select name="InfoUpdate"> 
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select>
</tr>
<tr><td>Address:</td><td><input type="text" name="Address"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip"/></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="EMail"/></td></tr>
<input type="hidden" name="HContact?" value="" />
<input type="hidden" name="WContact?" value="" />
<tr><td>Home Phone:</td><td><input type="text" name="HPhone"/><input type="checkbox" name ="HContact?" value="Yes"/> Contact?</td></tr>
<tr><td>Work Phone:</td><td><input type="text" name="WPhone"/><input type="checkbox" name ="WContact?" value="Yes" /> Contact?</td></tr>

<tr><td>***************************</tr></td>
<tr><td>Payment Information</td></tr>
<tr><td>Membership Renewal: $22 per year. </tr></td>
<tr><td>Include New Name Badge? :</td><td>
	<select name="NameBadge"> 
	<option value="1">Yes(+$7)</option>
	<option value="0" >No (+$0)</option></td></tr>
<tr><td>Amount enclosed in cash:</td><td><input type="text" name="CashAmt"/></td></tr>
<tr><td>Amount enclosed in check:</td><td><input type="text" name="CheckAmt"/></td></tr>
<tr><td>Check Number:</td><td><input type="text" name="CheckNbr"/></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="EMail"/></td></tr>
</table>
<p><input type="submit" value="submit"></p>
</form>
