<?php

class File
{
    public function writing()
    {
        try {
            $dir = dirname(__FILE__);
            $file = "/file.txt";
            $handle = fopen($dir . $file, "w");
            fwrite($handle, "Simpele tekst in file.txt");
            fclose($handle);
            echo "<br>Bestand Aangemaakt.";
        } catch (IOException $e) {
            echo $e->getMessage();
        }
    }

    public function reading()
    {
        try {
            $dir = dirname(__FILE__);
            $file = "/file.txt";
            if (!file_exists($dir . $file)) {
                throw new Exception('File not found.');
            }
            $handle = fopen($dir . $file, "r");
            $content = stream_get_contents($handle);
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    }

    public function divide(int $a, int $b)
    {
        if ($b == 0) {
            throw new DivisionByZeroError("Deler kan niet 0 zijn");
        } else {
            return $a/$b;
        }
    }
}