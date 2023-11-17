<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php
    // example1
    //iterable function argument
    function printIterable(iterable $myIterable) {
        foreach ($myIterable as $item) {
            echo $item;
        }
    }

    $array = ["aa", "bb", "cc"];
    printIterable($array);
    echo "<br>";


    // example2
    //return an iterable
    function getIterable():iterable {
        return ["aa", "bb", "cc"];
    }
    $myIterable = getIterable();
    foreach($myIterable as $item) {
        echo $item;
    }

    
    //example3
    //implement the iterator interface and use it as an iterable
    class myIterator implements Iterator{
        private $items = [];
        private $pointer = 0;

        public function _construct($items) {
            //array_values() make sure that the keys are numbers
            $this->items = array_values($items);
        }
        public function current() {
            return $this->items[$this->pointer];
        }
        public function key() {
            return $this->pointer;
        }
        public function next() {
            $this->pointer++;
        }
        public function rewind() {
            $this->pointer = 0;
        }

        public function valid() {
            //count() indicates how many items are there 
            return $this->pointer < count($this->items);
        }
    }

    //a function that uses iterables
    function printIterable(iterable $myIterable) {
        foreach($myIterable as $items) {
            echo $items;
        }
    } 

    //use iterator as an iterable
    $iterator = new myIterator(["a","b","c"]);
    printIterable($iterator);
    ?>
</body>
</html>