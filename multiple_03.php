<!DOCTYPE HTML>
<html>
<head>
<title>Multiple form 3</title>
</head>

<body>
<form method="head" action="">
<p>
<label for="address">Address:</label>
<input type="text" name="address" id="address_id">
</p>
<p>
<label for="city">City:</label>
<input type="text" name="city" id="city_id" required>
</p>
<p>
<label for="state">State:</label>
<input type="text" name="state" id="state_id" required>
</p>
<p>
<label for="country">Country:</label>
<select name="country" id="country_id" required>
<option value="" selected>Please Select</option>
<option value="Canada">Canada</option>
<option value="France">France</option>
<option value="Germany">Germany</option>
<option value="Japan">Japan</option>
<option value="UK">United Kingdom</option>
<option value="USA">United States</option>
<option value="other">Other</option>
</select>
</p>
<p>
<input type="submit" name="next" value="Send details">
</p>
</form>
</body>
</html>
