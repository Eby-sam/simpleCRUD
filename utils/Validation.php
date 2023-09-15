<?php
class Validation
{
    public static function issetPostParams(string...$params): bool
    {
        foreach ($params as $param) {
            if (!isset($_POST[$param])) {
                return false;
            }
        }
        return true;
    }

//assainit les donnees recu pour protection contre des injections
    public static function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);
        return $data;
    }
}