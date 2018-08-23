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
    $command = $instructions[0];
    if (count($instructions) > 1){
        $from = $instructions[1];
        $to = $instructions[2];
        $direction = $instructions[3];
    }
    
    robotMove($command, $from, $to, $direction);
}

function robotMove($command, $from, $to, $direction) 
{
    if (is_numeric($command))
    {
        $maxBlocks = $command;
        createStacks($maxblocks);
    }
    //moves
    
    if ($command == "quit")
        outputBlocks();
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
