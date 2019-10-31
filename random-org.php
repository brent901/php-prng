<?php
// This is definitely not the best solution, but it can give you TRNG.
// (random.org supposedly gets their numbers from atmospheric noise)
// This requires you to place trust that random.org is not compromised.
$min="0";
$max="100";

echo htmlspecialchars(file_get_contents("https://www.random.org/integers/?num=1&min=$min&max=$max&col=1&base=10&format=plain&rnd=new"));

?>
