
<!-- date() হলো PHP একটি মৌলিক ফাংশন, যা তারিখ এবং সময়ের তথ্য প্রদান করতে ব্যবহৃত হয়। এটি বিভিন্ন তারিখ এবং সময় ফরম্যাটে তথ্য প্রদান করতে ব্যবহৃত হয় এবং বর্তমান তারিখ এবং সময়ের তথ্য পেতে ব্যবহৃত হয়। 

এটির সিনট্যাক:

string date ( string $format [, int $timestamp = time() ] )

এখানে,

$format: এটি হলো ফরম্যাট স্ট্রিং, যেটি অনুসারে তারিখ এবং সময় প্রদান করা হবে। এটি অতিরিক্ত এবং ঐচ্ছিক। বিভিন্ন ফরম্যাটের জন্য বিভিন্ন চিহ্নের সম্বোধন আছে, যেমন Y হলো সাল, m হলো মাস, d হলো দিন, H হলো 24-ঘণ্টা সময় আকারে ঘড়ি, i হলো মিনিট, s হলো সেকেন্ড, ইত্যাদি।
$timestamp (ঐচ্ছিক): এটি হলো একটি Unix টাইমস্ট্যাম্প, যেটি ব্যবহার করে স্পষ্ট একটি তারিখ এবং সময় প্রদান করতে ব্যবহৃত হয়। এটি অতিরিক্ত এবং ঐচ্ছিক।
-->

<?php
// বর্তমান তারিখ এবং সময় প্রদান করা
$currentDate = date("Y-m-d H:i:s");
echo $currentDate;
?>


<!-- এই উদাহরণে, date("Y-m-d H:i:s") বর্তমান তারিখ এবং সময় প্রদান করবে এবং তার ফরম্যাট হবে Year-Month-Day Hour:Minute:Second।

এই উদাহরণে date() ফাংশনের ফরম্যাট স্ট্রিং "Y-m-d H:i:s" ব্যবহৃত হয়েছে, যেটি তারিখ এবং সময় একত্রে প্রদান করতে সক্ষম। আপনি ফরম্যাট স্ট্রিং পরিবর্তন করে আপনার প্রয়োজনের মধ্যে কোনও ফরম্যাটে তারিখ এবং সময় প্রদান করতে পারেন। -->