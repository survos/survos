<?php

namespace Survos\FakerBundle\Twig;

use Faker;
use Twig\Extension\AbstractExtension;

use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    private Faker\Generator $generator;

    public function __construct(
        private ?int $seed,
        private string $prefix,
    ) {
        $this->generator = Faker\Factory::create();
        if ($this->seed) {
            $this->generator->seed($this->seed);
        }
    }

    public function getFilters(): array
    {
        return [
            //            new TwigFilter('faker', [$this, 'faker'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {

        return [
            // Faker\Provider\Uuid
            new TwigFunction($this->prefix . 'uuid_uuid', fn () => $this->generator->uuid()),  // @returns string
            new TwigFunction($this->prefix . 'uuid_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'uuid_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'uuid_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'uuid_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'uuid_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'uuid_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'uuid_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'uuid_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'uuid_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'uuid_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'uuid_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'uuid_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'uuid_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'uuid_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'uuid_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'uuid_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\UserAgent
            new TwigFunction($this->prefix . 'useragent_macProcessor', fn () => $this->generator->macProcessor()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_linuxProcessor', fn () => $this->generator->linuxProcessor()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_userAgent', fn () => $this->generator->userAgent()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_chrome', fn () => $this->generator->chrome()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_msedge', fn () => $this->generator->msedge()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_firefox', fn () => $this->generator->firefox()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_safari', fn () => $this->generator->safari()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_opera', fn () => $this->generator->opera()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_internetExplorer', fn () => $this->generator->internetExplorer()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_windowsPlatformToken', fn () => $this->generator->windowsPlatformToken()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_macPlatformToken', fn () => $this->generator->macPlatformToken()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_iosMobileToken', fn () => $this->generator->iosMobileToken()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_linuxPlatformToken', fn () => $this->generator->linuxPlatformToken()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'useragent_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'useragent_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'useragent_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'useragent_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'useragent_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'useragent_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'useragent_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'useragent_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'useragent_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'useragent_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'useragent_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'useragent_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'useragent_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'useragent_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\Text
            new TwigFunction($this->prefix . 'text_realText', fn ($maxNbChars = 200, $indexSize = 2) => $this->generator->realText($maxNbChars, $indexSize)),  // @returns string
            new TwigFunction($this->prefix . 'text_realTextBetween', fn ($minNbChars = 160, $maxNbChars = 200, $indexSize = 2) => $this->generator->realTextBetween($minNbChars, $maxNbChars, $indexSize)),  // @returns string
            new TwigFunction($this->prefix . 'text_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'text_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'text_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'text_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'text_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'text_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'text_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'text_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'text_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'text_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'text_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'text_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'text_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'text_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'text_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'text_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'text_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'text_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'text_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'text_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'text_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'text_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\PhoneNumber
            new TwigFunction($this->prefix . 'phonenumber_tollFreeAreaCode', fn () => $this->generator->tollFreeAreaCode()),  // @returns
            new TwigFunction($this->prefix . 'phonenumber_tollFreePhoneNumber', fn () => $this->generator->tollFreePhoneNumber()),  // @returns
            new TwigFunction($this->prefix . 'phonenumber_phoneNumberWithExtension', fn () => $this->generator->phoneNumberWithExtension()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_areaCode', fn () => $this->generator->areaCode()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_exchangeCode', fn () => $this->generator->exchangeCode()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_phoneNumber', fn () => $this->generator->phoneNumber()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_e164PhoneNumber', fn () => $this->generator->e164PhoneNumber()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_imei', fn () => $this->generator->imei()),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'phonenumber_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'phonenumber_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'phonenumber_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'phonenumber_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'phonenumber_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'phonenumber_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'phonenumber_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'phonenumber_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'phonenumber_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\Person
            new TwigFunction($this->prefix . 'person_suffix', fn () => $this->generator->suffix()),  // @returns
            new TwigFunction($this->prefix . 'person_ssn', fn () => $this->generator->ssn()),  // @returns
            new TwigFunction($this->prefix . 'person_name', fn ($gender = null) => $this->generator->name($gender)),  // @returns string
            new TwigFunction($this->prefix . 'person_firstName', fn ($gender = null) => $this->generator->firstName($gender)),  // @returns string
            new TwigFunction($this->prefix . 'person_firstNameMale', fn () => $this->generator->firstNameMale()),  // @returns string
            new TwigFunction($this->prefix . 'person_firstNameFemale', fn () => $this->generator->firstNameFemale()),  // @returns string
            new TwigFunction($this->prefix . 'person_lastName', fn () => $this->generator->lastName()),  // @returns string
            new TwigFunction($this->prefix . 'person_title', fn ($gender = null) => $this->generator->title($gender)),  // @returns string
            new TwigFunction($this->prefix . 'person_titleMale', fn () => $this->generator->titleMale()),  // @returns string
            new TwigFunction($this->prefix . 'person_titleFemale', fn () => $this->generator->titleFemale()),  // @returns string
            new TwigFunction($this->prefix . 'person_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'person_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'person_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'person_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'person_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'person_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'person_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'person_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'person_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'person_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'person_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'person_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'person_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'person_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'person_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'person_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'person_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'person_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'person_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'person_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'person_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'person_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\Payment
            new TwigFunction($this->prefix . 'payment_bankAccountNumber', fn () => $this->generator->bankAccountNumber()),  // @returns
            new TwigFunction($this->prefix . 'payment_bankRoutingNumber', fn () => $this->generator->bankRoutingNumber()),  // @returns
            new TwigFunction($this->prefix . 'payment_calculateRoutingNumberChecksum', fn ($routing) => $this->generator->calculateRoutingNumberChecksum($routing)),  // @returns
            new TwigFunction($this->prefix . 'payment_creditCardType', fn () => $this->generator->creditCardType()),  // @returns string
            new TwigFunction($this->prefix . 'payment_creditCardNumber', fn ($type = null, $formatted = false, $separator = '-') => $this->generator->creditCardNumber($type, $formatted, $separator)),  // @returns string
            new TwigFunction($this->prefix . 'payment_creditCardExpirationDate', fn ($valid = true) => $this->generator->creditCardExpirationDate($valid)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'payment_creditCardExpirationDateString', fn ($valid = true, $expirationDateFormat = null) => $this->generator->creditCardExpirationDateString($valid, $expirationDateFormat)),  // @returns string
            new TwigFunction($this->prefix . 'payment_creditCardDetails', fn ($valid = true) => $this->generator->creditCardDetails($valid)),  // @returns array
            new TwigFunction($this->prefix . 'payment_iban', fn ($countryCode = null, $prefix = '', $length = null) => $this->generator->iban($countryCode, $prefix, $length)),  // @returns string
            new TwigFunction($this->prefix . 'payment_swiftBicNumber', fn () => $this->generator->swiftBicNumber()),  // @returns string
            new TwigFunction($this->prefix . 'payment_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'payment_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'payment_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'payment_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'payment_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'payment_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'payment_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'payment_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'payment_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'payment_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'payment_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'payment_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'payment_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'payment_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'payment_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'payment_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'payment_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'payment_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'payment_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'payment_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'payment_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'payment_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Miscellaneous
            new TwigFunction($this->prefix . 'miscellaneous_boolean', fn ($chanceOfGettingTrue = 50) => $this->generator->boolean($chanceOfGettingTrue)),  // @returns bool
            new TwigFunction($this->prefix . 'miscellaneous_md5', fn () => $this->generator->md5()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_sha1', fn () => $this->generator->sha1()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_sha256', fn () => $this->generator->sha256()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_locale', fn () => $this->generator->locale()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_countryCode', fn () => $this->generator->countryCode()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_countryISOAlpha3', fn () => $this->generator->countryISOAlpha3()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_languageCode', fn () => $this->generator->languageCode()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_currencyCode', fn () => $this->generator->currencyCode()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_emoji', fn () => $this->generator->emoji()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'miscellaneous_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'miscellaneous_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'miscellaneous_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'miscellaneous_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'miscellaneous_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'miscellaneous_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'miscellaneous_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'miscellaneous_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'miscellaneous_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'miscellaneous_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'miscellaneous_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'miscellaneous_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'miscellaneous_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Medical
            new TwigFunction($this->prefix . 'medical_bloodType', fn () => $this->generator->bloodType()),  // @returns
            new TwigFunction($this->prefix . 'medical_bloodRh', fn () => $this->generator->bloodRh()),  // @returns
            new TwigFunction($this->prefix . 'medical_bloodGroup', fn () => $this->generator->bloodGroup()),  // @returns
            new TwigFunction($this->prefix . 'medical_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'medical_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'medical_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'medical_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'medical_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'medical_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'medical_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'medical_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'medical_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'medical_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'medical_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'medical_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'medical_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'medical_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'medical_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'medical_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'medical_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'medical_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'medical_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'medical_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'medical_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'medical_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Lorem
            new TwigFunction($this->prefix . 'lorem_word', fn () => $this->generator->word()),  // @returns string
            new TwigFunction($this->prefix . 'lorem_words', fn ($nb = 3, $asText = false) => $this->generator->words($nb, $asText)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_sentence', fn ($nbWords = 6, $variableNbWords = true) => $this->generator->sentence($nbWords, $variableNbWords)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_sentences', fn ($nb = 3, $asText = false) => $this->generator->sentences($nb, $asText)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_paragraph', fn ($nbSentences = 3, $variableNbSentences = true) => $this->generator->paragraph($nbSentences, $variableNbSentences)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_paragraphs', fn ($nb = 3, $asText = false) => $this->generator->paragraphs($nb, $asText)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_text', fn ($maxNbChars = 200) => $this->generator->text($maxNbChars)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'lorem_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'lorem_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'lorem_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'lorem_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'lorem_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'lorem_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'lorem_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'lorem_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'lorem_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'lorem_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'lorem_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'lorem_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'lorem_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Internet
            new TwigFunction($this->prefix . 'internet_email', fn () => $this->generator->email()),  // @returns string
            new TwigFunction($this->prefix . 'internet_safeEmail', fn () => $this->generator->safeEmail()),  // @returns string
            new TwigFunction($this->prefix . 'internet_freeEmail', fn () => $this->generator->freeEmail()),  // @returns string
            new TwigFunction($this->prefix . 'internet_companyEmail', fn () => $this->generator->companyEmail()),  // @returns string
            new TwigFunction($this->prefix . 'internet_freeEmailDomain', fn () => $this->generator->freeEmailDomain()),  // @returns string
            new TwigFunction($this->prefix . 'internet_safeEmailDomain', fn () => $this->generator->safeEmailDomain()),  // @returns string
            new TwigFunction($this->prefix . 'internet_userName', fn () => $this->generator->userName()),  // @returns string
            new TwigFunction($this->prefix . 'internet_password', fn ($minLength = 6, $maxLength = 20) => $this->generator->password($minLength, $maxLength)),  // @returns string
            new TwigFunction($this->prefix . 'internet_domainName', fn () => $this->generator->domainName()),  // @returns string
            new TwigFunction($this->prefix . 'internet_domainWord', fn () => $this->generator->domainWord()),  // @returns string
            new TwigFunction($this->prefix . 'internet_tld', fn () => $this->generator->tld()),  // @returns string
            new TwigFunction($this->prefix . 'internet_url', fn () => $this->generator->url()),  // @returns string
            new TwigFunction($this->prefix . 'internet_slug', fn ($nbWords = 6, $variableNbWords = true) => $this->generator->slug($nbWords, $variableNbWords)),  // @returns string
            new TwigFunction($this->prefix . 'internet_ipv4', fn () => $this->generator->ipv4()),  // @returns string
            new TwigFunction($this->prefix . 'internet_ipv6', fn () => $this->generator->ipv6()),  // @returns string
            new TwigFunction($this->prefix . 'internet_localIpv4', fn () => $this->generator->localIpv4()),  // @returns string
            new TwigFunction($this->prefix . 'internet_macAddress', fn () => $this->generator->macAddress()),  // @returns string
            new TwigFunction($this->prefix . 'internet_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'internet_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'internet_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'internet_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'internet_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'internet_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'internet_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'internet_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'internet_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'internet_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'internet_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'internet_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'internet_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'internet_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'internet_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'internet_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'internet_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'internet_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'internet_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'internet_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'internet_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'internet_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Image
            new TwigFunction($this->prefix . 'image_imageUrl', fn ($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false, $format = 'png') => $this->generator->imageUrl($width, $height, $category, $randomize, $word, $gray, $format)),  // @returns string
            new TwigFunction($this->prefix . 'image_image', fn ($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null, $gray = false, $format = 'png') => $this->generator->image($dir, $width, $height, $category, $fullPath, $randomize, $word, $gray, $format)),  // @returns bool|string
            new TwigFunction($this->prefix . 'image_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'image_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'image_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'image_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'image_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'image_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'image_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'image_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'image_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'image_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'image_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'image_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'image_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'image_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'image_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'image_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'image_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'image_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'image_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'image_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'image_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'image_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\HtmlLorem
            new TwigFunction($this->prefix . 'htmllorem_randomHtml', fn ($maxDepth = 4, $maxWidth = 4) => $this->generator->randomHtml($maxDepth, $maxWidth)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'htmllorem_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'htmllorem_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'htmllorem_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'htmllorem_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'htmllorem_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'htmllorem_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'htmllorem_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'htmllorem_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'htmllorem_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'htmllorem_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'htmllorem_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'htmllorem_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'htmllorem_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\File
            new TwigFunction($this->prefix . 'file_mimeType', fn () => $this->generator->mimeType()),  // @returns string
            new TwigFunction($this->prefix . 'file_fileExtension', fn () => $this->generator->fileExtension()),  // @returns string
            new TwigFunction($this->prefix . 'file_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'file_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'file_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'file_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'file_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'file_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'file_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'file_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'file_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'file_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'file_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'file_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'file_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'file_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'file_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'file_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'file_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'file_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'file_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'file_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'file_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'file_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\DateTime
            new TwigFunction($this->prefix . 'datetime_unixTime', fn ($max = 'now') => $this->generator->unixTime($max)),  // @returns int
            new TwigFunction($this->prefix . 'datetime_dateTime', fn ($max = 'now', $timezone = null) => $this->generator->dateTime($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeAD', fn ($max = 'now', $timezone = null) => $this->generator->dateTimeAD($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_iso8601', fn ($max = 'now') => $this->generator->iso8601($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_date', fn ($format = 'Y-m-d', $max = 'now') => $this->generator->date($format, $max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_time', fn ($format = 'H:i:s', $max = 'now') => $this->generator->time($format, $max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_dateTimeBetween', fn ($startDate = '-30 years', $endDate = 'now', $timezone = null) => $this->generator->dateTimeBetween($startDate, $endDate, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeInInterval', fn ($date = '-30 years', $interval = '+5 days', $timezone = null) => $this->generator->dateTimeInInterval($date, $interval, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeThisCentury', fn ($max = 'now', $timezone = null) => $this->generator->dateTimeThisCentury($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeThisDecade', fn ($max = 'now', $timezone = null) => $this->generator->dateTimeThisDecade($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeThisYear', fn ($max = 'now', $timezone = null) => $this->generator->dateTimeThisYear($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_dateTimeThisMonth', fn ($max = 'now', $timezone = null) => $this->generator->dateTimeThisMonth($max, $timezone)),  // @returns \DateTime
            new TwigFunction($this->prefix . 'datetime_amPm', fn ($max = 'now') => $this->generator->amPm($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_dayOfMonth', fn ($max = 'now') => $this->generator->dayOfMonth($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_dayOfWeek', fn ($max = 'now') => $this->generator->dayOfWeek($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_month', fn ($max = 'now') => $this->generator->month($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_monthName', fn ($max = 'now') => $this->generator->monthName($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_year', fn ($max = 'now') => $this->generator->year($max)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_century', fn () => $this->generator->century()),  // @returns string
            new TwigFunction($this->prefix . 'datetime_timezone', fn () => $this->generator->timezone()),  // @returns string
            new TwigFunction($this->prefix . 'datetime_resolveTimezone', fn ($timezone) => $this->generator->resolveTimezone($timezone)),  // @returns string|null
            new TwigFunction($this->prefix . 'datetime_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'datetime_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'datetime_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'datetime_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'datetime_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'datetime_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'datetime_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'datetime_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'datetime_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'datetime_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'datetime_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'datetime_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'datetime_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'datetime_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'datetime_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'datetime_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\Company
            new TwigFunction($this->prefix . 'company_catchPhrase', fn () => $this->generator->catchPhrase()),  // @returns
            new TwigFunction($this->prefix . 'company_bs', fn () => $this->generator->bs()),  // @returns
            new TwigFunction($this->prefix . 'company_ein', fn () => $this->generator->ein()),  // @returns
            new TwigFunction($this->prefix . 'company_company', fn () => $this->generator->company()),  // @returns string
            new TwigFunction($this->prefix . 'company_companySuffix', fn () => $this->generator->companySuffix()),  // @returns string
            new TwigFunction($this->prefix . 'company_jobTitle', fn () => $this->generator->jobTitle()),  // @returns string
            new TwigFunction($this->prefix . 'company_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'company_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'company_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'company_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'company_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'company_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'company_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'company_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'company_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'company_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'company_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'company_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'company_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'company_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'company_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'company_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'company_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'company_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'company_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'company_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'company_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'company_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Color
            new TwigFunction($this->prefix . 'color_hexColor', fn () => $this->generator->hexColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_safeHexColor', fn () => $this->generator->safeHexColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_rgbColorAsArray', fn () => $this->generator->rgbColorAsArray()),  // @returns array
            new TwigFunction($this->prefix . 'color_rgbColor', fn () => $this->generator->rgbColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_rgbCssColor', fn () => $this->generator->rgbCssColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_rgbaCssColor', fn () => $this->generator->rgbaCssColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_safeColorName', fn () => $this->generator->safeColorName()),  // @returns string
            new TwigFunction($this->prefix . 'color_colorName', fn () => $this->generator->colorName()),  // @returns string
            new TwigFunction($this->prefix . 'color_hslColor', fn () => $this->generator->hslColor()),  // @returns string
            new TwigFunction($this->prefix . 'color_hslColorAsArray', fn () => $this->generator->hslColorAsArray()),  // @returns array
            new TwigFunction($this->prefix . 'color_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'color_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'color_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'color_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'color_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'color_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'color_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'color_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'color_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'color_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'color_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'color_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'color_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'color_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'color_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'color_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'color_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'color_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'color_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'color_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'color_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'color_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Biased
            new TwigFunction($this->prefix . 'biased_biasedNumberBetween', fn ($min = 0, $max = 100, $function = 'sqrt') => $this->generator->biasedNumberBetween($min, $max, $function)),  // @returns int
            new TwigFunction($this->prefix . 'biased_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'biased_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'biased_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'biased_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'biased_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'biased_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'biased_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'biased_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'biased_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'biased_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'biased_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'biased_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'biased_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'biased_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'biased_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'biased_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'biased_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'biased_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'biased_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'biased_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'biased_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'biased_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\Barcode
            new TwigFunction($this->prefix . 'barcode_ean13', fn () => $this->generator->ean13()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_ean8', fn () => $this->generator->ean8()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_isbn10', fn () => $this->generator->isbn10()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_isbn13', fn () => $this->generator->isbn13()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'barcode_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'barcode_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'barcode_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'barcode_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'barcode_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'barcode_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'barcode_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'barcode_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'barcode_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'barcode_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'barcode_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'barcode_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'barcode_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'barcode_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
            // Faker\Provider\en_US\Address
            new TwigFunction($this->prefix . 'address_cityPrefix', fn () => $this->generator->cityPrefix()),  // @returns
            new TwigFunction($this->prefix . 'address_secondaryAddress', fn () => $this->generator->secondaryAddress()),  // @returns
            new TwigFunction($this->prefix . 'address_state', fn () => $this->generator->state()),  // @returns
            new TwigFunction($this->prefix . 'address_stateAbbr', fn () => $this->generator->stateAbbr()),  // @returns
            new TwigFunction($this->prefix . 'address_citySuffix', fn () => $this->generator->citySuffix()),  // @returns string
            new TwigFunction($this->prefix . 'address_streetSuffix', fn () => $this->generator->streetSuffix()),  // @returns string
            new TwigFunction($this->prefix . 'address_buildingNumber', fn () => $this->generator->buildingNumber()),  // @returns string
            new TwigFunction($this->prefix . 'address_city', fn () => $this->generator->city()),  // @returns string
            new TwigFunction($this->prefix . 'address_streetName', fn () => $this->generator->streetName()),  // @returns string
            new TwigFunction($this->prefix . 'address_streetAddress', fn () => $this->generator->streetAddress()),  // @returns string
            new TwigFunction($this->prefix . 'address_postcode', fn () => $this->generator->postcode()),  // @returns string
            new TwigFunction($this->prefix . 'address_address', fn () => $this->generator->address()),  // @returns string
            new TwigFunction($this->prefix . 'address_country', fn () => $this->generator->country()),  // @returns string
            new TwigFunction($this->prefix . 'address_latitude', fn ($min = -90, $max = 90) => $this->generator->latitude($min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'address_longitude', fn ($min = -180, $max = 180) => $this->generator->longitude($min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'address_localCoordinates', fn () => $this->generator->localCoordinates()),  // @returns array
            new TwigFunction($this->prefix . 'address_randomDigit', fn () => $this->generator->randomDigit()),  // @returns int
            new TwigFunction($this->prefix . 'address_randomDigitNotNull', fn () => $this->generator->randomDigitNotNull()),  // @returns int
            new TwigFunction($this->prefix . 'address_randomDigitNot', fn ($except) => $this->generator->randomDigitNot($except)),  // @returns int
            new TwigFunction($this->prefix . 'address_randomNumber', fn ($nbDigits = null, $strict = false) => $this->generator->randomNumber($nbDigits, $strict)),  // @returns int
            new TwigFunction($this->prefix . 'address_randomFloat', fn ($nbMaxDecimals = null, $min = 0, $max = null) => $this->generator->randomFloat($nbMaxDecimals, $min, $max)),  // @returns float
            new TwigFunction($this->prefix . 'address_numberBetween', fn ($int1 = 0, $int2 = 2147483647) => $this->generator->numberBetween($int1, $int2)),  // @returns int
            new TwigFunction($this->prefix . 'address_passthrough', fn ($value) => $this->generator->passthrough($value)),  // @returns
            new TwigFunction($this->prefix . 'address_randomLetter', fn () => $this->generator->randomLetter()),  // @returns string
            new TwigFunction($this->prefix . 'address_randomAscii', fn () => $this->generator->randomAscii()),  // @returns string
            new TwigFunction($this->prefix . 'address_randomElements', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ], $count = 1, $allowDuplicates = false) => $this->generator->randomElements($array, $count, $allowDuplicates)),  // @returns array
            new TwigFunction($this->prefix . 'address_randomElement', fn ($array = [
                0 => 'a',
                1 => 'b',
                2 => 'c',
            ]) => $this->generator->randomElement($array)),  // @returns
            new TwigFunction($this->prefix . 'address_randomKey', fn ($array = [
            ]) => $this->generator->randomKey($array)),  // @returns int|string|null
            new TwigFunction($this->prefix . 'address_shuffle', fn ($arg = '') => $this->generator->shuffle($arg)),  // @returns array
            new TwigFunction($this->prefix . 'address_shuffleArray', fn ($array = [
            ]) => $this->generator->shuffleArray($array)),  // @returns array
            new TwigFunction($this->prefix . 'address_shuffleString', fn ($string = '', $encoding = 'UTF-8') => $this->generator->shuffleString($string, $encoding)),  // @returns string
            new TwigFunction($this->prefix . 'address_numerify', fn ($string = '###') => $this->generator->numerify($string)),  // @returns string
            new TwigFunction($this->prefix . 'address_lexify', fn ($string = '????') => $this->generator->lexify($string)),  // @returns string
            new TwigFunction($this->prefix . 'address_bothify', fn ($string = '## ??') => $this->generator->bothify($string)),  // @returns string
            new TwigFunction($this->prefix . 'address_asciify', fn ($string = '****') => $this->generator->asciify($string)),  // @returns string
            new TwigFunction($this->prefix . 'address_regexify', fn ($regex = '') => $this->generator->regexify($regex)),  // @returns string
            new TwigFunction($this->prefix . 'address_toLower', fn ($string = '') => $this->generator->toLower($string)),  // @returns string
            new TwigFunction($this->prefix . 'address_toUpper', fn ($string = '') => $this->generator->toUpper($string)),  // @returns string
        ];
    }
}
