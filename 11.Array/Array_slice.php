<!-- 
array_slice() হলো PHP একটি ফাংশন, যা একটি অ্যারের একই অংশ বা সিকুয়েন্স থেকে উপাদানগুলি নেয় এবং তাদেরকে নতুন একটি অ্যারে হিসেবে রিটার্ন করে।

array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )

এখানে,

$array: এটি হলো সোর্স অ্যারে, যা থেকে উপাদানগুলি নেওয়া হবে।
$offset: সোর্স অ্যারের কোথা থেকে উপাদানগুলি শুরু হবে, সেটি বুঝায়।
$length (ঐচ্ছিক): উপাদানগুলির মোট সংখ্যা কতটি হবে, সেটি বুঝায়। এটি না পাওয়া গিয়ে বা NULL হলে, সব উপাদান নেবে।
$preserve_keys (ঐচ্ছিক): এটি বলে দেয় যদি উপাদানগুলির ইনডেক্সগুলি রাখতে হয় তবে true, অন্যথায় false। এটি ডিফল্টভাবে false। -->

<?php
    $array = array("a", "b", "c", "d", "e");
    $slice = array_slice($array, 1, 3);
    print_r($slice);
?>
<!-- 
এই উদাহরণে, array_slice($array, 1, 3) সোর্স অ্যারে থেকে ইনডেক্স 1 থেকে শুরু হয়ে 3 টি উপাদান নেবে, তা হলো ["b", "c", "d"]।

$preserve_keys ব্যবহার করা হতে পারে উপাদানগুলির ইনডেক্সগুলি রাখতে হয় কিনা তা বোঝার জন্য: -->

<?php
$array = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);

// সোর্স অ্যারে থেকে উপাদানগুলির সিকুয়েন্স নেওয়া, ইনডেক্স রাখতে
$slice = array_slice($array, 1, 3, true);

print_r($slice);
?>

<!-- 
এই উদাহরণে, array_slice($array, 1, 3, true) সোর্স অ্যারে থেকে ইনডেক্স 1 থেকে শুরু হয়ে 3 টি উপাদান নেবে, তা হলো ["b" => 2, "c" => 3, "d" => 4]। -->