<?php require(__DIR__.DIRECTORY_SEPARATOR."parse_mb.php");?>
SCIM_Generic_Table_Phrase_Library_TEXT
VERSION_<?="$ver\n"?>
### Begin Table definition.
BEGIN_DEFINITION
LICENSE = GPL
UUID = 2765513d-52d9-433e-b480-e134d1141a1e
SERIAL_NUMBER = <?=@date("Ymd\n")?>
ICON = ibus-table.svg
NAME = TianRanMa<?="$ver\n"?>
NAME.zh_CN = 天然码<?="$ver\n"?>
NAME.zh_SG = 天然码<?="$ver\n"?>
NAME.zh_HK = 天然碼<?="$ver\n"?>
NAME.zh_TW = 天然碼<?="$ver\n"?>
DESCRIPTION = This is the IME table for TianRanMa
LANGUAGES = zh_CN,zh_SG,zh_TW,zh_HK
AUTHOR = GuangXiN <rek@rek.me>
STATUS_PROMPT = CN
VALID_INPUT_CHARS = 0123456789abcdefghijklmnopqrstuvwxyz
LAYOUT = us
MAX_KEY_LENGTH = 4
AUTO_COMMIT = FALSE
AUTO_SELECT = FALSE
DEF_FULL_WIDTH_PUNCT = TRUE
DEF_FULL_WIDTH_LETTER = FALSE
USER_CAN_DEFINE_PHRASE = TRUE
PINYIN_MODE = TRUE
DYNAMIC_ADJUST = TRUE
RULES = ce2:p11+p12+p21+p22;ce3:p11+p21+p31+p32;ca4:p11+p21+p31+p41

BEGIN_CHAR_PROMPTS_DEFINITION
<?php
foreach (prompts() as $key => $char) {
    echo "$key $char\n";
}
?>
END_CHAR_PROMPTS_DEFINITION


END_DEFINITION

### Begin Table data.
BEGIN_TABLE
<?php
foreach(mb() as list($code, $word, $sort)) {
    echo "$code\t$word\t$sort\n";
}
?>
END_TABLE
