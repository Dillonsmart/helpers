# PHP Helpers
A collection of PHP Helpers

## Installation 
`composer require dillonsmart/helpers`

## Strings

### Str::random()
The **Str::random** method generates a random string of a specified length. By default, the length is set to 16 characters. 
```
<?php 

use Dillonsmart/Helpers/Str;

$string = Str::random(16);

// i5So6KqkCvdDKizB
```

### Str::toString()
The **Str::toString()** method implodes an array of strings and accepts a separator.
```
<?php 

use Dillonsmart/Helpers/Str;

$string = Str::toString(['John', 'Lennon'], '-');

// John-Lennon
```

### Str::capitalize()
The **Str::capitalize()** converts the given string to lower case, then the first character top uppercase.
```
<?php 

use Dillonsmart/Helpers/Str;

$string = Str::capitalize('joHN');

// John
```
