<?php
  if(have_post()){
    while(have_posts())
      the_post();
  }
  else{
    echo '<p>There are no posts!</p>';
  }

?>