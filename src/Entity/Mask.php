<?php


namespace Bernardo\Doctrine\Entity;
class Mask
{
    public static function maskPhoneNumber($phoneNumber): string
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        $mask = '##-#####-####';
        $maskedPhoneNumber = '';
        $j = 0;
        for ($i = 0; $i < strlen($mask); $i++) {
            if ($mask[$i] == '#') {
                if (isset($phoneNumber[$j])) {
                    $maskedPhoneNumber .= $phoneNumber[$j];
                    $j++;
                }
            } else {
                $maskedPhoneNumber .= $mask[$i];
            }
        }

        return $maskedPhoneNumber;
    }
}