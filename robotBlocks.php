<?php
$maxBlocks;
$command; $from; $to; $direction;

$inputFile = fopen("input.txt", "r");
if ($inputFile) 
{
    while (($line = fgets($inputFile)) !== false) 
        analyzeLine($line);
    
    fclose($handle);
} else 
    echo "Input file could not be open.";
 

function createStacks($maxblocks) 
{
    for ($i = 0; $i < $maxblocks; $i++) {
        ${'$i'} = [$i];
    }
}

function analyzeLine($currentLine) 
{
    $instructions = explode(" ", $currentLine);
    if (count($instructions) == 1)
    {
        if (is_numeric($instructions[0])) 
        {
           $maxBlocks = $instructions[0];
            createStacks($maxblocks); 
        }
        else 
          outputBlocks();  
    }
        
    if (count($instructions) > 1)
    {
        $command = $instructions[0];
        $from = $instructions[1];
        $direction = $instructions[2];
        $to = $instructions[3];        
    }
    if (isMoveValid ($from, $to))
        robotMove($command, $from, $direction, $to);
}

function robotMove($command, $from, $direction, $to) 
{
    
}

function outputBlocks() 
{
    
}

function isMoveValid ($from, $to) 
{
    if ($from == $to)
        return false;
    
    $whoHasFrom = whoHasThisBlock($from);
    $whoHasTo = whoHasThisBlock($to);
    if ($whoHasFrom == $whoHasTo)
        return false;
    
    return true;
}

function whoHasThisBlock($block) 
{
    for ($i = 0; $i < $maxblocks; $i++) 
    {
        if (in_array($block, ${'$i'})) 
            break;
        return $i;
    }
}

function moveOver ($from, $to) 
{
    
}

function moveOnto ($from, $to) 
{
    
}

function pileOver ($from, $to) 
{
    
}

function pileOnto ($from, $to) 
{
    
}


echo $maxBlocks;
?>
