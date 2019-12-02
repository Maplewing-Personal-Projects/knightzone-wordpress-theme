<?php
  if(have_posts()){
    while(have_posts())
      the_post();
  }
  else{
    echo '<p>There are no posts!</p>';
  }

?>