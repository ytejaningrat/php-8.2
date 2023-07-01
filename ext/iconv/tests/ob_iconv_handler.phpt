--TEST--
ob_iconv_handler()
--EXTENSIONS--
iconv
--INI--
error_reporting=2039
--FILE--
<?php
iconv_set_encoding('internal_encoding', 'EUC-JP');
iconv_set_encoding('output_encoding', 'Shift_JIS');
ob_start('ob_iconv_handler');
print "､｢､､､ｦ､ｨ､ｪ";
ob_end_flush();
?>
--EXPECT--
あいうえお
