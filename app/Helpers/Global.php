<?php
function kanvasHasher(string $val)
{
    return hash("sha256", $val);
}
