<?php
    echo '## Exercice 1: FirstUpperCase' .'<br>';
    function firstUpperCase(string $text){
        return ucwords($text);
    }
    echo firstUpperCase('je suis marcos medenou').'<br>';; 

    echo '## Exercice 2: LongestWord' . '<br>';
    
    function longestWord($string){
        function strLength(string $txt){
            return strlen($txt) ;
        }
        $textSplit = explode(' ', $string);
        $text= array_map('strLength', $textSplit );
            print_r (max( $text));
    }
    //echo longestWord("je suis marcos medenou") . '<br>';
    echo longestWord("les chaussettes de l'archiduchesse") .'<br>';

    echo '## Exercice 3: LargestNumber' .'<br>';
    function largestWord($arr){
        return max($arr);
    }
    echo largestWord([20, 32, 97]) . '<br>';
    echo largestWord([156, 851, 138]).'<br>';
    echo largestWord([357, 195, 759]).'<br>';

    echo '## Exercice 4: ConfirmEnd' . '<br>';
    function confirmEnd($string, $end){
        return $string[strlen($string)-1]===$end? 'true':'false';
    }
   echo (confirmEnd("bonjour", "n")) .'<br>'; 
    echo (confirmEnd("bonjour", "r")) .'<br>';

    echo '## Exercice 5: Tracage' . '<br>';
    function truncate($str, $num){
        $strLength=strlen($str);
        $result = [];
        for ($i=0; $i < $strLength ; $i++) { 
            # code...
            if($i <$num){
                array_push($result , $str[$i]);          
            }else{
            array_push($result, '.');
            }
        }
       print_r(implode($result));
    }
    echo '<pre>';
    echo(truncate("bonjour à tous", 5)) .'<br>';
    print_r(truncate("salut", 8)).'<br>';
    echo '</pre>';

    echo '## ## Exercice 6:  Les détectives' . '<br>';
    function findElement($arr){
        $tab=[];
        for ($i=0; $i < count($arr); $i++) { 
            # code...
            if($arr[$i] % 2 ===0){
                array_push($tab, $arr[$i] );
            }
        }
        return $tab[0];
    }   
    echo (findElement([1, 3, 5, 8, 9, 10])) .'<br>';
    echo (findElement([1, 3, 5, 9])) .'<br>';

    echo '## Exercice 7: Les perroquets' . '<br>';

    function repeat($string, $num){
        return str_repeat($string, $num);
    }
    echo  repeat("abc", 3) . '<br>';
    echo repeat ("*", 3) . '<br>';
    echo repeat("bonjour", 2) . '<br>';

    echo '## Exercice 8: Factorisation' . '<br>';
    fUnction factorialize($number){
        $fact=1;
        for ($i=1; $i <= $number; $i++) {
            $fact= $fact*$i;
        }
        return $fact;
    }
    echo factorialize(5) . '<br>';

    echo '## Exercice 9: Téléportation et Fusion'.'<br>';
    function frankenSplice($arr1, $arr2, $index){
         array_splice($arr2,1,0, $arr1);
         return $arr2;
    }
    echo '<pre>';
    print_r( frankenSplice([1, 2, 3], [4, 5], 1)) ;
    print_r (frankenSplice([1, 2], ["a", "b"], 1)) . '<br>';
    print_r(frankenSplice(["claw", "tentacle"], ["head", "shoulders", "knees", "toes"], 2)).'<br>';
    print_r( frankenSplice([1, 2, 3, 4], [], 0)) .'<br>';
    echo '</pre>';

    echo '## Exercice 10: Faux Videurs';
    function bouncer($arr){
        $tab_filtered= array_filter($arr);
        echo '<pre>';
        print_r($tab_filtered);
        echo '</pre>';
    }
    echo bouncer([7, "ate", "", false, 9]);

    echo '## Exercice 11: Où devrais-je être' . '<br>';
    function getIndexToIns($arr, $toInsert){
        echo '<pre>';
        $newArr=array_push($arr, $toInsert);
        $newArrSort=sort($arr, SORT_NUMERIC);
        return array_search($toInsert, $arr);
        echo '</pre>';
    }
    echo getIndexToIns([10, 20, 30, 40, 50], 30) . '<br>';
    echo getIndexToIns([10, 20, 30, 40, 50], 35) . '<br>';
    echo getIndexToIns([10, 20, 30, 40, 50], 35) . '<br>';
    echo getIndexToIns([10, 20, 30, 40, 50], 30) . '<br>';
    echo getIndexToIns([10, 20, 30, 40, 50], 30) . '<br>';
    echo getIndexToIns([40, 60], 50) . '<br>';
    echo getIndexToIns([40, 60], 50) . '<br>';
    echo getIndexToIns([3, 10, 5], 3) . '<br>' ;
    echo getIndexToIns([3, 10, 5], 3) . '<br>';

    
    echo '## Exercice 12: Mutation' . '<br>';

    function mutation($arr){
        $firstIndex=strtolower($arr[0]) ;
        $lastIndex=strtolower($arr[1]);
        $explLastIndex= array_unique( str_split( $lastIndex, 1));
        $explfirstIndex = array_unique(str_split($firstIndex, 1));
        $lastIndexCount=count($explLastIndex);
        $tab=[]; 
        for ($i=0; $i < count($explLastIndex) ; $i++) { 
            # code...
            for ($j=0; $j <=count($explfirstIndex) ; $j++) { 
                # code...
                if($explLastIndex[$i]=== $explfirstIndex[$j]){
                    array_push($tab, 'true');
                }
            }
        }
        $tabCount=(count($tab));
        foreach ($tab as $key => $value) {
            # code...
            return $tab[$key]==='true' && $lastIndexCount=== $tabCount? 'true':'false';
        }
        return $tab;
        
    };

    echo(mutation(["hello", "hey"])) .' <br>' ;
    echo mutation(["hello", "Hello"]).' <br>';
    echo mutation(["zyxwvutsrqponmlkjihgfedcba", "qrstu"]) . ' <br>';
    echo mutation(["Mary", "Army"]) . ' <br>';
    echo mutation(["Mary", "Aarmy"]) . ' <br>';
    echo mutation(["Alien", "line"]) . ' <br>'; 
    echo mutation(["floor", "for"]) . ' <br>';
    echo mutation(["hello", "neo"]) . ' <br>';
    echo mutation(["voodoo", "no"]) . ' <br>';
    echo mutation(["ate", "date"]) . ' <br>';
    echo mutation(["Tiger", "Zebra"]) . ' <br>';
    echo mutation(["Noel", "Ole"]) . ' <br>';

    echo '## Exercice 13: Singe Trapu';
    function chunkArrayInGroups($arr, $size) {
        $arrayTransform= array_chunk($arr, $size);
        print_r($arrayTransform);
    }

    echo chunkArrayInGroups(["a", "b", "c", "d"], 2) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5], 3) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5], 2) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5], 4) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5, 6], 3) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5, 6, 7, 8], 4) . ' <br>';
    echo chunkArrayInGroups([0, 1, 2, 3, 4, 5, 6, 7, 8], 2) . ' <br>';

    echo '## Exercice 14: Encodage Latin ';

    function latinPing($string){
        $strSplit=explode(' ',$string);
        ECHO $strSplit[-1][-1];
        $tab=[];
        for ($i=0; $i < count($strSplit) ; $i++) {
        # code...
        if ($i = count($strSplit) - 1) {
            array_push($tab,'m' ) . 'ay';
        }else{
            array_push($tab, strrev($strSplit[$i]) . 'ay');
        }
            
            
        }
        print_r($tab) ;
       // print_r( $strSplit);
        // function transform($strSplit)
        // {
        //     return (strrev(implode(array_slice($strSplit, 0, count($strSplit) - 1))) . 'ay');
        // }
        //  $str= array_map('transform', $strSplit);
        //  print_r($str);
    }

    echo latinPing("hello!") ;
    echo latinPing("bonjour a tous!");
?>

//correction de tiburce

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo PHP</title>
</head>

<body>
    <pre>

        <?php
            # Excercice 1:
            function firstUpperCase(string $s)
            {
                echo "string ===> " . $s . PHP_EOL;
                return ucwords($s);
            }

            $str = "bonjour tout le monde";
            echo firstUpperCase($str) . PHP_EOL;

            $str = "je m'appelle eric dupond moretti.";
            echo firstUpperCase($str) . PHP_EOL;

            # Exercice 2:
            function longestWord(string $s)
            {
                return max(array_map(fn ($el) => mb_strlen($el), explode(' ', $s)));
            }

            echo "bonjour a tous" . PHP_EOL;
            echo "longestWord ==> " . longestWord("bonjour a tous") . PHP_EOL;

            echo "je m'appelle eric dupond moretti." . PHP_EOL;
            echo "longestWord ==> " . longestWord("je m'appelle eric dupond moretti.") . PHP_EOL;

            #Exercice 3:
            function largestNumber(array $arr)
            {
                return max($arr);
            }

            echo "largesNumber [23, 12, 98] ==> " . largestNumber([23, 12, 98]) . PHP_EOL;
            echo "largesNumber [10, 139, 960, 1029] ==> " . largestNumber([10, 139, 960, 1029]) . PHP_EOL;

            #Exercice 4:
            function confirmEnd(string $s, string $end)
            {
                return str_ends_with($s, $end);
            }

            echo "confirmEnd(\"bonjour\", \"n\")" . PHP_EOL;
            echo confirmEnd("bonjour", "n") ? "True" : "False" . PHP_EOL;
            
            echo "confirmEnd(\"bonjour\", \"r\")" . PHP_EOL;
            echo confirmEnd("bonjour", "r")  ? "True" : "False"  . PHP_EOL;

            #Exercice 5:
            function truncate(string $s, int $num) {
                return mb_strlen($s) < $num ? $s : substr_replace($s, "...", $num);
            }
            echo PHP_EOL;
            echo truncate("bonjour à tous", 5) . PHP_EOL;
            echo truncate("salut", 8) . PHP_EOL;

            # Exercice 6:
            function findElement(array $arr, $func) {
                return count(array_filter($arr, $func)) > 1 ? array_values(array_filter($arr, $func))[0] : "undefined";
            }
            echo "findElement(findElement([1, 3, 5, 8, 9, 10], function(\$num) { return \$num % 2 === 0; }) ==> " . (findElement([1, 3, 5, 8, 9, 10], function($num) { return $num % 2 === 0; })) . PHP_EOL;
            // echo findElement([1, 3, 5, 9], function($num) { return $num % 2 === 0; });
            echo "findElement(findElement([1, 3, 5, 9], function(\$num) { return \$num % 2 === 0; }) ==> " . (findElement([1, 3, 5, 9], function($num) { return $num % 2 === 0; })) . PHP_EOL;

            # Exercice 7:
            function repeat(string $s, int $num) {
                return str_repeat($s, $num);
            }

            echo repeat("abc", 3) . PHP_EOL;
            echo repeat("*", 3) . PHP_EOL;
            echo repeat("bonjour", 2) . PHP_EOL;

            # Exercice 8:
            function factorialize($num) {
                return array_product(range(1, $num));
            }

            echo "factorialize(5) ==> " . factorialize(5) . PHP_EOL;
            
            # Exercice 9:
            function frankenSplice(array $arr1, array $arr2, int $pos): array {
                $newArr = [...$arr2];
                array_splice($newArr, $pos, 0, $arr1);
                return $newArr;
            }
            print_r(frankenSplice([1, 2, 3], [4, 5], 1));
            
            # Exercice 10:
            function bouncer(array $arr): array {
                return array_values(array_filter($arr, fn($el) => (bool) $el));
            }

            print_r(bouncer([7, "ate", "", false, 9])) . PHP_EOL;
            print_r(bouncer(["a", "b", "c"])) . PHP_EOL;
            print_r(bouncer([false, null, 0, ""])) . PHP_EOL;
            
            # Exercice 11:
            function getIndexToIns(array $arr, int $num): int {
                $newArr = [...$arr, $num];
                sort($newArr, SORT_NUMERIC);
                return array_search($num, $newArr);
            }

            echo "getIndexToIns([10, 20, 30, 40, 50], 35) ==> " . getIndexToIns([10, 20, 30, 40, 50], 35) . PHP_EOL;
            
            # Exercice 12:
            function mutation(array $arr): bool {
                // Tableau comprenant les lettres qu'on recherche
                $searchedLetters = str_split(strtolower($arr[0]));
                // Tableau comprenant les lettres de comparaison
                $searchedArr = str_split(strtolower($arr[1]));

                // On parcours chaque lettre qu'on recherche
                foreach($searchedLetters as $letter) {
                    // si la lettre n'existe pas, on retourne automatiquement false
                    if (array_search($letter, $searchedArr) === false) {
                        return false;
                    }
                }
                // si le code arrive jusqu'ici, c'est que toutes les lettres existent
                // donc on retourne true
                return true;
            }
            echo mutation(["Mary", "Army"]) ? "True\n" : "False\n" ;
            echo mutation(["floor", "for"]) ? "True\n" : "False\n";

            # Exercice 13:
            function chunkArrayInGroups($arr, $length) {
                return array_chunk($arr, $length);
            }

            print_r(chunkArrayInGroups(["a", "b", "c", "d"], 2)) . PHP_EOL;
            print_r(chunkArrayInGroups([0, 1, 2, 3, 4, 5], 3)) . PHP_EOL;

            # Exercice 14:
            function latinPing(string $s): string {
                return preg_replace("/(\w)(\w*)(\s|$)/", "\$2\$1ay\$3", $s);

            }
            echo latinPing("hello");
        ?>
        
    </pre>
</body>

</html>
