<?php

namespace Data\One {
    class Name
    {
        function yourName($name)
        {
            echo "Halo $name Selamat Malam" . PHP_EOL;
        }
    }
    class Age
    {
        #code...
        function umur($age)
        {
            echo "Umur Kamu $age" . PHP_EOL;
        }
    }
    class Address
    {
        #code...
        function alamat($address)
        {
            echo "Alamat Kamu $address" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Name
    {
        function yourName($name)
        {
            echo "Halo $name Selamat Siang" . PHP_EOL;
        }
    }
}

namespace Data\Three {
    function yourName($name)
    {
        echo "Halo $name Selamat Siang" . PHP_EOL;
    }

    const APPLICATION = "PHP 8.0";
}
