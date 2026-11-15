<?php

namespace App\Support;

/** Неразрывный пробел после коротких слов и перед тире — как build.py у лендинга */
class Typo
{
    private const SHORT = '(?:в|во|и|с|со|к|ко|о|об|у|а|я|на|по|до|из|за|от|не|ни|но|же|для|без|при|над|под|про|его|их|все|это|кто|что|как|где|или|ли)';

    public static function text(string $t): string
    {
        $re = '~(?<![\p{L}\p{N}-])('.self::SHORT.') (?=\S)~iu';
        $t = preg_replace($re, "$1\u{00A0}", $t);
        $t = preg_replace($re, "$1\u{00A0}", $t);
        $t = preg_replace_callback('~ (\d[\d ]*) ₸~u', fn ($m) => "\u{00A0}".str_replace(' ', "\u{00A0}", $m[1])."\u{00A0}₸", $t);

        return str_replace(' —', "\u{00A0}—", $t);
    }

    /** То же для HTML: трогает только текст между тегами */
    public static function glue(string $html): string
    {
        $parts = preg_split('~(<[^>]+>)~u', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($parts as $i => $p) {
            if ($p !== '' && $p[0] !== '<') {
                $parts[$i] = self::text($p);
            }
        }

        return implode('', $parts);
    }
}
