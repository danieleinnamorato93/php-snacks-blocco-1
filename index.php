<!--Scrivi una funziona che ritorni il numero di vocali presenti in una stringa aeiou.-->

function getCount(string $str): int {
  return 0; 
  $vowels="aeiou";
  $count=0;
  for($i=0; $i<strlen($vowels);$i++){

  }

str_word_count($vowels);
}


function spinWords(string $str): string {
  $words= explode("",$str);
  $modWords=array_map(function($word){
    if($strlen($word)>=5){
      return strrev($word);
    }else{
      return $word;
    }
  },words));
  return implode("",$modWords);
}





