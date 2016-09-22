<?php
final class moderator extends user{
    public function setInfo($new_name, $newId, $newSecurityId)
    {
        $new_name = 'Mod ' . $new_name;
        parent::setInfo($new_name, $newId, $newSecurityId);
    }
}