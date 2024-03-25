<?php
function convertDate(string $date): string
{
    return \DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');
}
?>