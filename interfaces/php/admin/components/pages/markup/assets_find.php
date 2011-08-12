<div class="col_twothirds">
	<h3>Find Assets</h3>
	<form>	
	<label for="text1">Search Terms</label><br />
	<input type="text" id="text1" placeholder="Disabled" /> 

	<div class="row_seperator">.</div>
	<label>Search For</label><br />
	<div class="col_onethird">
	<input type="checkbox" class="checkorradio" checked="checked" /> Title
	</div>
	<div class="col_onethird">
	<input type="checkbox" class="checkorradio" checked="checked" /> Tag
	</div>
	<div class="col_onethird lastcol">
	<input type="checkbox" class="checkorradio" /> All Metadata
	</div>
	
	<div class="row_seperator">.</div>
	<br />
	<div class="col_onehalf">
		<label>Limit by Date</label><br />
		The asset was first created<br />
		<input type="radio" name="radio1" class="checkorradio" checked="checked" /> Before &nbsp; &nbsp; <input type="radio" name="radio1" class="checkorradio" /> After 
		<div class="col_onehalf">
			<input type="text" />
		</div>
	</div>
	<div class="col_onehalf lastcol">
		<label>Limit by Use</label><br />
		The asset has been accessed<br />
		<input type="radio" name="radio2" class="checkorradio" checked="checked" /> At least &nbsp; &nbsp; <input type="radio" name="radio2" class="checkorradio" /> At most 
		<div class="col_onehalf">
			<input type="text" />
		</div>
	</div>
	
	<div class="row_seperator">.</div><br />
	<input class="button" type="submit" value="Search" />
	
	</form>
</div>

<div class="col_onethird lastcol">
	<h3>Saved Searches</h3>
	<p>
	Links for system defaults like 'last 20 assets added', 'most accessed assets', 'least accessed assets',
	etc. Also add user saved searches. Low priority.
	</p>
</div>