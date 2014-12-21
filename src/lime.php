<?php require(__DIR__.DIRECTORY_SEPARATOR."parse_mb.php");?>
@version@|天然碼<?=$ver?> Unicode-CJK 20120706
%selkey|!@#$%^&*()
%keyname|begin
<?php
foreach (prompts() as $key => $char) {
    echo "$key|$char\n";
}
?>
%keyname|end
%chardef|begin
<?php
foreach(mb() as list($code, $word, $sort)) {
    echo "$code|$word\n";
}
?>
%chardef|end
