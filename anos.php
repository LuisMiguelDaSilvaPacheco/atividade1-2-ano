<?php

print "Os anos bissextos entre 1980 e 2024 são: \n";

for($ano = 1980; $ano <= 2024; $ano++){

 if($ano % 4 == 0  and $ano % 100 != 0 or $ano % 4 == 0  and $ano % 400 == 0 ){

  print "$ano \n";

 };
};
