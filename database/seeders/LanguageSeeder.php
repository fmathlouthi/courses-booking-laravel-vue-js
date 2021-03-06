<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Language::truncate();
// count 142
$languages_list = array(
    array("name" => "Afrikaans", "code" => "af", "status" => 'active'),
    array("name" => "Albanian - shqip", "code" => "sq", "status" => 'active'),
    array("name" => "Amharic - አማርኛ", "code" => "am", "status" => 'active'),
    array("name" => "Arabic - العربية", "code" => "ar", "status" => 'active'),
    array("name" => "Aragonese - aragonés", "code" => "an", "status" => 'active'),
    array("name" => "Armenian - հայերեն", "code" => "hy", "status" => 'active'),
    array("name" => "Asturian - asturianu", "code" => "ast", "status" => 'active'),
    array("name" => "Azerbaijani - azərbaycan dili", "code" => "az", "status" => 'active'),
    array("name" => "Basque - euskara", "code" => "eu", "status" => 'active'),
    array("name" => "Belarusian - беларуская", "code" => "be", "status" => 'active'),
    array("name" => "Bengali - বাংলা", "code" => "bn", "status" => 'active'),
    array("name" => "Bosnian - bosanski", "code" => "bs", "status" => 'active'),
    array("name" => "Breton - brezhoneg", "code" => "br", "status" => 'active'),
    array("name" => "Bulgarian - български", "code" => "bg", "status" => 'active'),
    array("name" => "Catalan - català", "code" => "ca", "status" => 'active'),
    array("name" => "Central Kurdish - کوردی (دەستنوسی عەرەبی)", "code" => "ckb", "status" => 'active'),
    array("name" => "Chinese - 中文", "code" => "zh", "status" => 'active'),
    array("name" => "Chinese (Hong Kong) - 中文（香港）", "code" => "zh-HK", "status" => 'active'),
    array("name" => "Chinese (Simplified) - 中文（简体）", "code" => "zh-CN", "status" => 'active'),
    array("name" => "Chinese (Traditional) - 中文（繁體）", "code" => "zh-TW", "status" => 'active'),
    array("name" => "Corsican", "code" => "co", "status" => 'active'),
    array("name" => "Croatian - hrvatski", "code" => "hr", "status" => 'active'),
    array("name" => "Czech - čeština", "code" => "cs", "status" => 'active'),
    array("name" => "Danish - dansk", "code" => "da", "status" => 'active'),
    array("name" => "Dutch - Nederlands", "code" => "nl", "status" => 'active'),
    array("name" => "English", "code" => "en", "status" => 'active'),
    array("name" => "English (Australia)", "code" => "en-AU", "status" => 'active'),
    array("name" => "English (Canada)", "code" => "en-CA", "status" => 'active'),
    array("name" => "English (India)", "code" => "en-IN", "status" => 'active'),
    array("name" => "English (New Zealand)", "code" => "en-NZ", "status" => 'active'),
    array("name" => "English (South Africa)", "code" => "en-ZA", "status" => 'active'),
    array("name" => "English (United Kingdom)", "code" => "en-GB", "status" => 'active'),
    array("name" => "English (United States)", "code" => "en-US", "status" => 'active'),
    array("name" => "Esperanto - esperanto", "code" => "eo", "status" => 'active'),
    array("name" => "Estonian - eesti", "code" => "et", "status" => 'active'),
    array("name" => "Faroese - føroyskt", "code" => "fo", "status" => 'active'),
    array("name" => "Filipino", "code" => "fil", "status" => 'active'),
    array("name" => "Finnish - suomi", "code" => "fi", "status" => 'active'),
    array("name" => "French - français", "code" => "fr", "status" => 'active'),
    array("name" => "French (Canada) - français (Canada)", "code" => "fr-CA", "status" => 'active'),
    array("name" => "French (France) - français (France)", "code" => "fr-FR", "status" => 'active'),
    array("name" => "French (Switzerland) - français (Suisse)", "code" => "fr-CH", "status" => 'active'),
    array("name" => "Galician - galego", "code" => "gl", "status" => 'active'),
    array("name" => "Georgian - ქართული", "code" => "ka", "status" => 'active'),
    array("name" => "German - Deutsch", "code" => "de", "status" => 'active'),
    array("name" => "German (Austria) - Deutsch (Österreich)", "code" => "de-AT", "status" => 'active'),
    array("name" => "German (Germany) - Deutsch (Deutschland)", "code" => "de-DE", "status" => 'active'),
    array("name" => "German (Liechtenstein) - Deutsch (Liechtenstein)", "code" => "de-LI", "status" => 'active'),
    array("name" => "German (Switzerland) - Deutsch (Schweiz)", "code" => "de-CH", "status" => 'active'),
    array("name" => "Greek - Ελληνικά", "code" => "el", "status" => 'active'),
    array("name" => "Guarani", "code" => "gn", "status" => 'active'),
    array("name" => "Gujarati - ગુજરાતી", "code" => "gu", "status" => 'active'),
    array("name" => "Hausa", "code" => "ha", "status" => 'active'),
    array("name" => "Hawaiian - ʻŌlelo Hawaiʻi", "code" => "haw", "status" => 'active'),
    array("name" => "Hebrew - עברית", "code" => "he", "status" => 'active'),
    array("name" => "Hindi - हिन्दी", "code" => "hi", "status" => 'active'),
    array("name" => "Hungarian - magyar", "code" => "hu", "status" => 'active'),
    array("name" => "Icelandic - íslenska", "code" => "is", "status" => 'active'),
    array("name" => "Indonesian - Indonesia", "code" => "id", "status" => 'active'),
    array("name" => "Interlingua", "code" => "ia", "status" => 'active'),
    array("name" => "Irish - Gaeilge", "code" => "ga", "status" => 'active'),
    array("name" => "Italian - italiano", "code" => "it", "status" => 'active'),
    array("name" => "Italian (Italy) - italiano (Italia)", "code" => "it-IT", "status" => 'active'),
    array("name" => "Italian (Switzerland) - italiano (Svizzera)", "code" => "it-CH", "status" => 'active'),
    array("name" => "Japanese - 日本語", "code" => "ja", "status" => 'active'),
    array("name" => "Kannada - ಕನ್ನಡ", "code" => "kn", "status" => 'active'),
    array("name" => "Kazakh - қазақ тілі", "code" => "kk", "status" => 'active'),
    array("name" => "Khmer - ខ្មែរ", "code" => "km", "status" => 'active'),
    array("name" => "Korean - 한국어", "code" => "ko", "status" => 'active'),
    array("name" => "Kurdish - Kurdî", "code" => "ku", "status" => 'active'),
    array("name" => "Kyrgyz - кыргызча", "code" => "ky", "status" => 'active'),
    array("name" => "Lao - ລາວ", "code" => "lo", "status" => 'active'),
    array("name" => "Latin", "code" => "la", "status" => 'active'),
    array("name" => "Latvian - latviešu", "code" => "lv", "status" => 'active'),
    array("name" => "Lingala - lingála", "code" => "ln", "status" => 'active'),
    array("name" => "Lithuanian - lietuvių", "code" => "lt", "status" => 'active'),
    array("name" => "Macedonian - македонски", "code" => "mk", "status" => 'active'),
    array("name" => "Malay - Bahasa Melayu", "code" => "ms", "status" => 'active'),
    array("name" => "Malayalam - മലയാളം", "code" => "ml", "status" => 'active'),
    array("name" => "Maltese - Malti", "code" => "mt", "status" => 'active'),
    array("name" => "Marathi - मराठी", "code" => "mr", "status" => 'active'),
    array("name" => "Mongolian - монгол", "code" => "mn", "status" => 'active'),
    array("name" => "Nepali - नेपाली", "code" => "ne", "status" => 'active'),
    array("name" => "Norwegian - norsk", "code" => "no", "status" => 'active'),
    array("name" => "Norwegian Bokmål - norsk bokmål", "code" => "nb", "status" => 'active'),
    array("name" => "Norwegian Nynorsk - nynorsk", "code" => "nn", "status" => 'active'),
    array("name" => "Occitan", "code" => "oc", "status" => 'active'),
    array("name" => "Oriya - ଓଡ଼ିଆ", "code" => "or", "status" => 'active'),
    array("name" => "Oromo - Oromoo", "code" => "om", "status" => 'active'),
    array("name" => "Pashto - پښتو", "code" => "ps", "status" => 'active'),
    array("name" => "Persian - فارسی", "code" => "fa", "status" => 'active'),
    array("name" => "Polish - polski", "code" => "pl", "status" => 'active'),
    array("name" => "Portuguese - português", "code" => "pt", "status" => 'active'),
    array("name" => "Portuguese (Brazil) - português (Brasil)", "code" => "pt-BR", "status" => 'active'),
    array("name" => "Portuguese (Portugal) - português (Portugal)", "code" => "pt-PT", "status" => 'active'),
    array("name" => "Punjabi - ਪੰਜਾਬੀ", "code" => "pa", "status" => 'active'),
    array("name" => "Quechua", "code" => "qu", "status" => 'active'),
    array("name" => "Romanian - română", "code" => "ro", "status" => 'active'),
    array("name" => "Romanian (Moldova) - română (Moldova)", "code" => "mo", "status" => 'active'),
    array("name" => "Romansh - rumantsch", "code" => "rm", "status" => 'active'),
    array("name" => "Russian - русский", "code" => "ru", "status" => 'active'),
    array("name" => "Scottish Gaelic", "code" => "gd", "status" => 'active'),
    array("name" => "Serbian - српски", "code" => "sr", "status" => 'active'),
    array("name" => "Serbo - Croatian", "code" => "sh", "status" => 'active'),
    array("name" => "Shona - chiShona", "code" => "sn", "status" => 'active'),
    array("name" => "Sindhi", "code" => "sd", "status" => 'active'),
    array("name" => "Sinhala - සිංහල", "code" => "si", "status" => 'active'),
    array("name" => "Slovak - slovenčina", "code" => "sk", "status" => 'active'),
    array("name" => "Slovenian - slovenščina", "code" => "sl", "status" => 'active'),
    array("name" => "Somali - Soomaali", "code" => "so", "status" => 'active'),
    array("name" => "Southern Sotho", "code" => "st", "status" => 'active'),
    array("name" => "Spanish - español", "code" => "es", "status" => 'active'),
    array("name" => "Spanish (Argentina) - español (Argentina)", "code" => "es-AR", "status" => 'active'),
    array("name" => "Spanish (Latin America) - español (Latinoamérica)", "code" => "es-419", "status" => 'active'),
    array("name" => "Spanish (Mexico) - español (México)", "code" => "es-MX", "status" => 'active'),
    array("name" => "Spanish (Spain) - español (España)", "code" => "es-ES", "status" => 'active'),
    array("name" => "Spanish (United States) - español (Estados Unidos)", "code" => "es-US", "status" => 'active'),
    array("name" => "Sundanese", "code" => "su", "status" => 'active'),
    array("name" => "Swahili - Kiswahili", "code" => "sw", "status" => 'active'),
    array("name" => "Swedish - svenska", "code" => "sv", "status" => 'active'),
    array("name" => "Tajik - тоҷикӣ", "code" => "tg", "status" => 'active'),
    array("name" => "Tamil - தமிழ்", "code" => "ta", "status" => 'active'),
    array("name" => "Tatar", "code" => "tt", "status" => 'active'),
    array("name" => "Telugu - తెలుగు", "code" => "te", "status" => 'active'),
    array("name" => "Thai - ไทย", "code" => "th", "status" => 'active'),
    array("name" => "Tigrinya - ትግርኛ", "code" => "ti", "status" => 'active'),
    array("name" => "Tongan - lea fakatonga", "code" => "to", "status" => 'active'),
    array("name" => "Turkish - Türkçe", "code" => "tr", "status" => 'active'),
    array("name" => "Turkmen", "code" => "tk", "status" => 'active'),
    array("name" => "Twi", "code" => "tw", "status" => 'active'),
    array("name" => "Ukrainian - українська", "code" => "uk", "status" => 'active'),
    array("name" => "Urdu - اردو", "code" => "ur", "status" => 'active'),
    array("name" => "Uyghur", "code" => "ug", "status" => 'active'),
    array("name" => "Uzbek - o‘zbek", "code" => "uz", "status" => 'active'),
    array("name" => "Vietnamese - Tiếng Việt", "code" => "vi", "status" => 'active'),
    array("name" => "Walloon - wa", "code" => "wa", "status" => 'active'),
    array("name" => "Welsh - Cymraeg", "code" => "cy", "status" => 'active'),
    array("name" => "Western Frisian", "code" => "fy", "status" => 'active'),
    array("name" => "Xhosa", "code" => "xh", "status" => 'active'),
    array("name" => "Yiddish", "code" => "yi", "status" => 'active'),
    array("name" => "Yoruba - Èdè Yorùbá", "code" => "yo", "status" => 'active'),
    array("name" => "Zulu - isiZulu", "code" => "zu", "status" => 'active')
);
foreach ($languages_list as $key => $value) {

    Language::create($value);

}
    }
}
