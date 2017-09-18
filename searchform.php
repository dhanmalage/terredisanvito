<?php
/*
Template Name: Search Page
*/
?>
<form action="/" method="get">
    <input type="text" name="s" id="search" placeholder="Search Recipes" value="<?php the_search_query(); ?>" />
</form>