<?php

class PandaValidator
{
    public function validateGrade($grade)
    {
        if ($grade != 3) {
            return "Error: The grade must be 3";
        }

        return "";
    }

    public function validateText($text)
    {
        if ($text != "panda") {
            return "Error: The text must be 'panda'";
        }

        return "";
    }
}