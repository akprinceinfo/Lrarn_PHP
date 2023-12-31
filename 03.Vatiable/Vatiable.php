
<!-- 
ভ্যারিয়েবল কি?
ভ্যারিয়েবল হল প্রোগ্রামিং ভাষা যেখানে তথ্য সংরক্ষণ করার জন্য একটি স্থান। ভ্যারিয়েবল এক বা একাধিক মান ধারণ করতে পারে এবং সেগুলির মান পরিবর্তন করা যেতে পারে।

পিএইচপি ভ্যারিয়েবলের বৈশিষ্ট্য:
1.পিএইচপি ভ্যারিয়েবল শুরু হয় $ চিহ্ন দ্বারা। যেমন: $variableName।
2.ভ্যারিয়েবলের নাম শুরু হতে হবে একটি অক্ষর বা underscore (_) দ্বারা।
3.এটি সংখ্যা দ্বারা শুরু হতে পারে না।
4.ভ্যাযারিয়েবলে শুধুমাত্র অক্ষর, সংখ্যা এবং underscores থাকতে পারে।
5.পিএইচপি ভ্যারিয়েবল কেস সেন্সিটিভ। অর্থাৎ $var এবং $Var দুটি ভিন্ন ভ্যারিয়েবল। -->

<?php

    $myVar = "Hello, World!";
    echo $myVar; // এটি "Hello, World!" প্রিন্ট করবে।

?>

<!-- 
ভ্যারিয়েবল টাইপস:
পিএইচপি ডাইনামিক ভ্যারিয়েবল টাইপ সমর্থন করে। এটি মানে, আপনি একটি ভ্যারিয়েবলের টাইপ সরাসরি নির্ধারণ করতে হবে না। টাইপ স্বয়ংক্রিয়ভাবে নির্ধারিত হবে যখন মান অ্যাসাইন করা হবে।
যেমন:
 -->

<?php
    $stringVar = "This is a string"; // স্ট্রিং টাইপের ভ্যারিয়েবল
    $intVar = 10; // ইন্টিজার টাইপের ভ্যারিয়েবল
    $floatVar = 10.5; // ফ্লোট টাইপের ভ্যারিয়েবল
?>
