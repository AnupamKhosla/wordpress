<form  method="get"  action="http://localhost/mrdigital/">
				<div>
					<label  for="search">Search for:</label>
					<input type="hidden" name="cat" value="5">
					<input type="text" value="" name="s" id="search" value="<?php the_search_query()?>" required>
					<button type="sumbit">Search</button>
				</div>
			</form>