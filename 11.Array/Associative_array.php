
<!-- পিএইচপি অ্যাসোসিয়েটিভ অ্যারে এক ধরণের অ্যারে যেখানে প্রতিটি মান একটি নির্দিষ্ট কী অথবা স্ট্রিং দ্বারা চিহ্নিত। এটি ইন্ডেক্সড অ্যারে থেকে ভিন্ন যেহেতু এখানে নম্বর বজায় কী/স্ট্রিং ব্যবহার করা হয় মান চিহ্নিত করার জন্য। -->

<!-- অ্যাসোসিয়েটিভ অ্যারে তৈরি করা: -->

<?php

    $age = array("John" => "35", "Jane" => "30", "Jim" => "40");

     //"John", "Jane", এবং "Jim" হল অ্যারে এর কী এবং 35, 30, 40 হল তাদের সংশ্লিষ্ট মান।

    //  অ্যাসোসিয়েটিভ অ্যারের মান এক্সেস করা:

    echo $age["John"];  // আউটপুট হবে: 35

?>

<!-- অ্যাসোসিয়েটিভ অ্যারে ব্যবহার করে লুপ: -->
<!-- আমরা অ্যাসোসিয়েটিভ অ্যারে ব্যবহার করে লুপ চালাতে চাইলে foreach লুপ ব্যবহার করতে পারি: -->

<?php

    foreach($age as $key => $value) {
    echo $key . " is " . $value . " years old.<br>";
    }

    //  প্রতিটি কী এবং মানের জন্য একটি লাইন প্রিন্ট করা হবে।
    //OutPut
    // 35 John is 35 years old.
    // Jane is 30 years old.
    // Jim is 40 years old.


?>
