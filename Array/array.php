## Challenge 2: Get The Sum Of An Array

In the last challenge video, I had you get the sum of an array by manually adding the numbers together. In this
challenge, I want you to use a `foreach` loop. You can also do this with a `for` loop for extra credit.

### Hints

- Use the append assignment operator (+=) to add each number to a variable. Then echo the variable after the loop.


<details>
    <summary>Click For Solution</summary>

    <?php
$numbers = [1, 2, 3, 4, 5];

$sum = 0;

foreach($numbers as $number) {
  $sum += $number;
}

echo $sum;

echo '<br>';

// Using a for loop
$sum2 = 0;

for($i = 0; $i < count($numbers); $i++) {
  $sum2 += $numbers[$i];
}

echo $sum2;
?>

</details>