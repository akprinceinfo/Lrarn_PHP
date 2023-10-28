

<!-- 
PHP-এর array_column() ফাংশন একটি ইনবিল্ট ফাংশন যা একটি অ্যারে থেকে একটি নির্দিষ্ট কলামের মানগুলি ফেরত দেয়। এটি প্রধানভাবে একটি ডাটাবেস টেবিল হিসেবে চিত্রিত বহু-মাত্রিক অ্যারে থেকে একটি নির্দিষ্ট কলামের সকল মান পেতে অত্যন্ত উপকারী।

 **** এক কথায় মাল্টিডাইমেনশন অ্যারে মধ্যে নির্দিষ্ট কী ভেলু আছে এর মধ্যে নির্দিষ্ট কী ভেলুকে খুঁজে আনতে ব্যবহার করা হয় ।

সিনট্যাক্স:

    <?php
        // array_column($array, $column_key, $index_key = null);
    ?>

এই ফাংশনটি তিনটি প্যারামিটার গ্রহণ করে:
$array (প্রয়োজনীয়): ইনপুট অ্যারে।
$column_key (প্রয়োজনীয়): এটি নির্দিষ্ট করে যে কলামের মানগুলি পেতে হবে।
$index_key (ঐচ্ছিক): ফেরত অ্যারের কী হিসেবে কোন কলামের মান ব্যবহার করতে হবে তা নির্দিষ্ট করার জন্য। 

উদাহরণ:
-->

<?php

        $data = [
            ['id' => 1, 'name' => 'জন', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'জেন', 'email' => 'jane@example.com'],
            ['id' => 3, 'name' => 'ডো', 'email' => 'doe@example.com']
        ];

        $names = array_column($data, 'name');

        echo "<pre>";
            print_r($names);
        echo "</pre>";

        //Output
        // Array
        //     (
        //         [0] => জন
        //         [1] => জেন
        //         [2] => ডো
        //     )
    
    ?>


    <!-- আমরা চাইলে $index_key ব্যবহার করে কী হিসেবে নির্দিষ্ট কলামের মান ব্যবহার করতে পারি। -->

    <?php

        $names = array_column($data, 'name', 'id');
        
        echo "<pre>";
            print_r($names);
        echo "</pre>";

        //Output
        // Array
        // (
        //     [1] => জন
        //     [2] => জেন
        //     [3] => ডো
        // )
    ?>




<!-- 
array_column() ফাংশনটি PHP-এর একটি শক্তিশালী সরঞ্জাম যা অ্যারে থেকে মানগুলিকে ফিল্টার করতে এবং অ্যাক্সেস করতে ব্যবহার করা যেতে পারে। -->