<form  action="/node/11" method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="Name"/></td></tr>
<tr><td>Address:</td><td><input type="text" name="Address"/></td></tr>
<tr><td>City:</td><td><input type="text" name="City"/></td></tr>
<tr><td>State:</td><td><input type="text" name="State"/></td></tr>
<tr><td>Zip:</td><td><input type="text" name="Zip"/></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="EMail"/></td></tr>
<tr><td>
Birthday: </td><td>
	Month:<select name="Bmonth">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
	</select>
	Day: <input type="text" name="Bday" size="2" maxlength="2">
	Year: <input type="text" name="Byear" size="4" maxlength="4">
</tr></td>
<input type="hidden" name="HMetro?" value="" />
<input type="hidden" name="WMetro?" value="" />
<input type="hidden" name="HContact?" value="" />
<input type="hidden" name="WContact?" value="" />
<tr><td>Home Phone:</td><td><input type="text" name="HPhone"/><input type="checkbox" name ="HMetro?" value="Yes" />  Metro Line? <input type="checkbox" name ="HContact?" value="Yes"/> Contact?</td></tr>
<tr><td>Work Phone:</td><td><input type="text" name="WPhone"/><input type="checkbox" name ="WMetro?" value="Yes"/>  Metro Line? <input type="checkbox" name ="WContact?" value="Yes" /> Contact?</td></tr>

<tr><td>Email Address:</td><td><input type="text" name="Email"/></td></tr>
<tr><td>What Hours do you work?:</td><td><input type="text" name="WHours"/></td></tr>
<tr><td>What is the best time/method to reach you?:</td><td><input type="text" name="RHours"/></td></tr>
<tr><td>How/when should someone not contact you:</td><td><input type="text" name="NContact"/></td></tr>
<tr><td>How did you hear about us?:</td><td><input type="text" name="Heard"/></td></tr>
</table>
<p><input type="submit" value="submit"></p>
</form>
