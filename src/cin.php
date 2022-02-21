<?php require(__DIR__.DIRECTORY_SEPARATOR."parse_mb.php");?>
%gen_inp
%ename TianRanMa<?="$ver\n"?>
%cname 天然码<?="$ver\n"?>
%tcname 天然碼<?="$ver\n"?>
%scname 天然码<?="$ver\n"?>
%encoding UTF-8
%selkey 123456789
%endkey ,<.>/?;:'"[]\`~!^&()_
%keyname begin
<?php
foreach (prompts() as $key => $char) {
    echo "$key $char\n";
}
?>
, ，
. 。
? ？
" “
" ”
' ‘
' ’
< 《
> 》
[ 【
] 】
{ 「
} 」
~ ～
! ！
@ ・
^ ……
& &
( （
) ）
` ·
\ 、
/ 、
; ；
: ：
_ ——
%keyname end
%chardef begin
, ，
. 。
? ？
" “
" ”
' ‘
' ’
< 《
> 》
[ 【
[ ［
] 】
] ］
{ 「
{ 『
} 」
} 』
~ ～
! ！
^ ……
& &
( （
) ）
` ·
\ 、
/ 、
; ；
: ：
_ ——
<?php
foreach(mb() as list($code, $word, $sort)) {
    echo "$code $word\n";
}
?>
%chardef end
