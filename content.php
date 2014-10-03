<div class="container">
<h2>xkcd Style Password Generator</h2>
<h4>This Password Generator generates passwords consisting from common words. Such words are hard to guess (even by brute force), but easy to remember, making them interesting password choices.</h4>
<h3>Fill Details</h3>
<form method="POST" action="/p2/index.php">
<label name="countwords">Number of words</label>
<input type="text" id="countwords" name="countwords" value="10"/><br />
<label name="lengthpassword">Maximum Length of password</label>
<input type="text" id="lengthpassword" name="lengthpassword" value="6"/><br />
<label name="uppercase">Upper case First Letter?</label>
<input type="checkbox" name="uppercase" value="checkbox" <?php echo ($uppercase) ? 'checked = "checked"' : ''; ?>/><br />
<label name="symbol">Use a symbol?</label>
<input type="checkbox" name="symbol" value="symbol" /><br />
<label name="number">Include a number?</label>
<input type="checkbox" name="number" value="number" /><br />
<input type="submit" name="submit" value="Generate a new Password"/>
</form>
<br />
<p>Your Password is:</p>
<p><?php echo ($password) ? $password : ''; ?></p>
</div>