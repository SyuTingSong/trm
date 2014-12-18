<?php require(__DIR__.DIRECTORY_SEPARATOR."parse_mb.php");?>
SCIM_Generic_Table_Phrase_Library_TEXT
VERSION_<?="$ver\n"?>
### Begin Table definition.
BEGIN_DEFINITION
UUID = 2765513d-52d9-433e-b480-e134d1141a1e
SERIAL_NUMBER = <?=@date("Ymd\n")?>
#ICON = /usr/share/scim/icons/trm.png
NAME = TianRanMa<?="$ver\n"?>
NAME.zh_CN = 天然码<?="$ver\n"?>
NAME.zh_HK = 天然碼<?="$ver\n"?>
NAME.zh_TW = 天然碼<?="$ver\n"?>
LANGUAGES = zh_CN,zh_SG,zh_TW,zh_HK
AUTHOR = GuangXiN <rek@rek.me>
STATUS_PROMPT = 中
KEYBOARD_LAYOUT = US_Default
VALID_INPUT_CHARS = 0123456789abcdefghijklmnopqrstuvwxyz
### KEY_END_CHARS =
SINGLE_WILDCARD_CHAR = 0
MULTI_WILDCARD_CHAR = *
SPLIT_KEYS = apostrophe
COMMIT_KEYS = space
FORWARD_KEYS = Return
SELECT_KEYS = 0,1,2,3,4,5,6,7,8,9
PAGE_UP_KEYS = Page_Up,comma,minus
PAGE_DOWN_KEYS = Page_Down,period,equal
MODE_SWITCH_KEYS = Shift+KeyRelease+Shift_L,Shift+KeyRelease+Shift_R
FULL_WIDTH_PUNCT_KEYS = Control+period
FULL_WIDTH_LETTER_KEYS = Shift+space
MAX_KEY_LENGTH = 4
SHOW_KEY_PROMPT = FALSE
AUTO_SELECT = TRUE
AUTO_WILDCARD = FALSE
AUTO_COMMIT = FALSE
AUTO_SPLIT = FALSE
AUTO_FILL = FALSE
DISCARD_INVALID_KEY = TRUE
DYNAMIC_ADJUST = TRUE
ALWAYS_SHOW_LOOKUP = TRUE
USE_FULL_WIDTH_PUNCT = TRUE
DEF_FULL_WIDTH_PUNCT = TRUE
USE_FULL_WIDTH_LETTER = TRUE
DEF_FULL_WIDTH_LETTER = FALSE
BEGIN_CHAR_PROMPTS_DEFINITION
<?php
foreach (prompts() as $key => $char) {
    echo "$key $char\n";
}
?>
END_CHAR_PROMPTS_DEFINITION

DYNAMIC_ADJUST = TRUE

RULES = ce2:p11+p12+p21+p22;ce3:p11+p21+p31+p32;ca4:p11+p21+p31+p41

END_DEFINITION

### Begin Table data.
BEGIN_TABLE
<?php
foreach(mb() as list($code, $word, $sort)) {
    echo "$code\t$word\t$sort\n";
}
?>
END_TABLE
