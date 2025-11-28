

<?php
// تحديد الترميز للغة العربية
header('Content-Type: text/html; charset=utf-8');

// دالة مساعدة لطباعة النتائج بشكل مرتب
function show_result($name, $desc, $example, $result) {
    echo "الدالة: $name\n";
    echo "التعريف: $desc\n";
    echo "المثال: $example\n";
    echo "النتيجة: $result\n";
    echo "-------------------------\n";
}

// 1) strlen()
show_result("strlen()", "تحسب طول النص", "strlen('Hello')", strlen("Hello"));

// 2) str_word_count()
show_result("str_word_count()", "تحسب عدد الكلمات في النص", "str_word_count('Hello world')", str_word_count("Hello world"));

// 3) strrev()
show_result("strrev()", "تعكس النص من الأخير للأول", "strrev('Hello')", strrev("Hello"));

// 4) strpos()
show_result("strpos()", "تعطي موقع أول ظهور لكلمة داخل النص", "strpos('Hello world','world')", strpos("Hello world","world"));

// 5) str_replace()
show_result("str_replace()", "تستبدل كلمة بأخرى داخل النص", "str_replace('world','PHP','Hello world')", str_replace("world","PHP","Hello world"));

// 6) strtolower()
show_result("strtolower()", "تحول النص إلى حروف صغيرة", "strtolower('HELLO')", strtolower("HELLO"));

// 7) strtoupper()
show_result("strtoupper()", "تحول النص إلى حروف كبيرة", "strtoupper('hello')", strtoupper("hello"));

// 8) ucfirst()
show_result("ucfirst()", "تجعل أول حرف من النص كبير", "ucfirst('hello world')", ucfirst("hello world"));

// 9) ucwords()
show_result("ucwords()", "تجعل أول حرف من كل كلمة كبير", "ucwords('hello world')", ucwords("hello world"));

// 10) trim()
show_result("trim()", "تحذف الفراغات من البداية والنهاية", "trim('  hello  ')", trim("  hello  "));

// 11) ltrim()
show_result("ltrim()", "تحذف الفراغات من البداية فقط", "ltrim('  hello')", ltrim("  hello"));

// 12) rtrim()
show_result("rtrim()", "تحذف الفراغات من النهاية فقط", "rtrim('hello  ')", rtrim("hello  "));

// 13) explode()
$array_ex = explode(",", "a,b,c");
show_result("explode()", "تقسم النص إلى مصفوفة حسب الفاصل", "explode(',', 'a,b,c')", print_r($array_ex,true));

// 14) implode()
$arr = ["a","b","c"];
show_result("implode()", "تحول مصفوفة إلى نص بفاصل", "implode('-', ['a','b','c'])", implode("-",$arr));

// 15) substr()
show_result("substr()", "تقتطع جزء من النص", "substr('Hello',1,3)", substr("Hello",1,3));

// 16) str_repeat()
show_result("str_repeat()", "تكرر النص عدة مرات", "str_repeat('Hi ',3)", str_repeat("Hi ",3));

// 17) strcmp()
show_result("strcmp()", "تقارن نصين بحساسية حالة الأحرف", "strcmp('A','B')", strcmp("A","B"));

// 18) strcasecmp()
show_result("strcasecmp()", "تقارن نصين بدون حساسية حالة الأحرف", "strcasecmp('hello','HELLO')", strcasecmp("hello","HELLO"));

// 19) number_format()
show_result("number_format()", "تنسيق الأرقام مع فواصل", "number_format(1000000)", number_format(1000000));

// 20) md5()
show_result("md5()", "تشفير النص MD5", "md5('password')", md5("password"));

// 21) sha1()
show_result("sha1()", "تشفير النص SHA1", "sha1('hello')", sha1("hello"));

// 22) htmlspecialchars()
show_result("htmlspecialchars()", "تحويل HTML إلى نص آمن", "htmlspecialchars('<b>Hi</b>')", htmlspecialchars("<b>Hi</b>"));

// 23) nl2br()
show_result("nl2br()", "تحويل السطور الجديدة \\n إلى <br>", "nl2br('Hello\\nWorld')", nl2br("Hello\nWorld"));

// 24) addslashes()
show_result("addslashes()", "إضافة شرطات معكوسة لحماية النصوص", "addslashes(\"Ali's book\")", addslashes("Ali's book"));

// 25) stripslashes()
show_result("stripslashes()", "إزالة الشرطات المعكوسة", "stripslashes(\"Ali\\'s book\")", stripslashes("Ali\'s book"));

// 26) wordwrap()
show_result("wordwrap()", "تقسيم النص إلى أسطر بعد عدد محدد من الأحرف", "wordwrap('Hello world here',5,'\\n')", wordwrap("Hello world here",5,"\n"));

// 27) chr()
show_result("chr()", "تحويل رقم ASCII إلى حرف", "chr(65)", chr(65));

// 28) ord()
show_result("ord()", "تحويل حرف إلى رقم ASCII", "ord('A')", ord("A"));

// 29) htmlentities()
show_result("htmlentities()", "تحويل HTML إلى رموز نصية آمنة", "htmlentities('<div>Hello</div>')", htmlentities("<div>Hello</div>"));

// 30) parse_str()
parse_str("name=Ali&age=20", $result);
show_result("parse_str()", "تحويل Query String إلى مصفوفة", "parse_str('name=Ali&age=20')", print_r($result,true));

?>


