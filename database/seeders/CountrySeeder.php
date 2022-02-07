<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Country::truncate();
        $countries = [

            ['country_name' => 'Afghanistan', 'code' => 'AF', 'status' => 1],

            ['country_name' => 'Åland Islands', 'code' => 'AX', 'status' => 1],

            ['country_name' => 'Albania', 'code' => 'AL', 'status' => 1],

            ['country_name' => 'Algeria', 'code' => 'DZ', 'status' => 1],

            ['country_name' => 'American Samoa', 'code' => 'AS', 'status' => 1],

            ['country_name' => 'Andorra', 'code' => 'AD', 'status' => 1],

            ['country_name' => 'Angola', 'code' => 'AO', 'status' => 1],

            ['country_name' => 'Anguilla', 'code' => 'AI', 'status' => 1],

            ['country_name' => 'Antarctica', 'code' => 'AQ', 'status' => 1],

            ['country_name' => 'Antigua and Barbuda', 'code' => 'AG', 'status' => 1],

            ['country_name' => 'Argentina', 'code' => 'AR', 'status' => 1],

            ['country_name' => 'Armenia', 'code' => 'AM', 'status' => 1],

            ['country_name' => 'Aruba', 'code' => 'AW', 'status' => 1],

            ['country_name' => 'Australia', 'code' => 'AU', 'status' => 1],

            ['country_name' => 'Austria', 'code' => 'AT', 'status' => 1],

            ['country_name' => 'Azerbaijan', 'code' => 'AZ', 'status' => 1],

            ['country_name' => 'Bahamas', 'code' => 'BS', 'status' => 1],

            ['country_name' => 'Bahrain', 'code' => 'BH', 'status' => 1],

            ['country_name' => 'Bangladesh', 'code' => 'BD', 'status' => 1],

            ['country_name' => 'Barbados', 'code' => 'BB', 'status' => 1],

            ['country_name' => 'Belarus', 'code' => 'BY', 'status' => 1],

            ['country_name' => 'Belgium', 'code' => 'BE', 'status' => 1],

            ['country_name' => 'Belize', 'code' => 'BZ', 'status' => 1],

            ['country_name' => 'Benin', 'code' => 'BJ', 'status' => 1],

            ['country_name' => 'Bermuda', 'code' => 'BM', 'status' => 1],

            ['country_name' => 'Bhutan', 'code' => 'BT', 'status' => 1],

            ['country_name' => 'Bolivia, Plurinational State of', 'code' => 'BO', 'status' => 1],

            ['country_name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ', 'status' => 1],

            ['country_name' => 'Bosnia and Herzegovina', 'code' => 'BA', 'status' => 1],

            ['country_name' => 'Botswana', 'code' => 'BW', 'status' => 1],

            ['country_name' => 'Bouvet Island', 'code' => 'BV', 'status' => 1],

            ['country_name' => 'Brazil', 'code' => 'BR', 'status' => 1],

            ['country_name' => 'British Indian Ocean Territory', 'code' => 'IO', 'status' => 1],

            ['country_name' => 'Brunei Darussalam', 'code' => 'BN', 'status' => 1],

            ['country_name' => 'Bulgaria', 'code' => 'BG', 'status' => 1],

            ['country_name' => 'Burkina Faso', 'code' => 'BF', 'status' => 1],

            ['country_name' => 'Burundi', 'code' => 'BI', 'status' => 1],

            ['country_name' => 'Cambodia', 'code' => 'KH', 'status' => 1],

            ['country_name' => 'Cameroon', 'code' => 'CM', 'status' => 1],

            ['country_name' => 'Canada', 'code' => 'CA', 'status' => 1],

            ['country_name' => 'Cape Verde', 'code' => 'CV', 'status' => 1],

            ['country_name' => 'Cayman Islands', 'code' => 'KY', 'status' => 1],

            ['country_name' => 'Central African Republic', 'code' => 'CF', 'status' => 1],

            ['country_name' => 'Chad', 'code' => 'TD', 'status' => 1],

            ['country_name' => 'Chile', 'code' => 'CL', 'status' => 1],

            ['country_name' => 'China', 'code' => 'CN', 'status' => 1],

            ['country_name' => 'Christmas Island', 'code' => 'CX', 'status' => 1],

            ['country_name' => 'Cocos (Keeling) Islands', 'code' => 'CC', 'status' => 1],

            ['country_name' => 'Colombia', 'code' => 'CO', 'status' => 1],

            ['country_name' => 'Comoros', 'code' => 'KM', 'status' => 1],

            ['country_name' => 'Congo', 'code' => 'CG', 'status' => 1],

            ['country_name' => 'Congo, the Democratic Republic of the', 'code' => 'CD', 'status' => 1],

            ['country_name' => 'Cook Islands', 'code' => 'CK', 'status' => 1],

            ['country_name' => 'Costa Rica', 'code' => 'CR', 'status' => 1],

            ['country_name' => 'Côte d\'Ivoire', 'code' => 'CI', 'status' => 1],

            ['country_name' => 'Croatia', 'code' => 'HR', 'status' => 1],

            ['country_name' => 'Cuba', 'code' => 'CU', 'status' => 1],

            ['country_name' => 'Curaçao', 'code' => 'CW', 'status' => 1],

            ['country_name' => 'Cyprus', 'code' => 'CY', 'status' => 1],

            ['country_name' => 'Czech Republic', 'code' => 'CZ', 'status' => 1],

            ['country_name' => 'Denmark', 'code' => 'DK', 'status' => 1],

            ['country_name' => 'Djibouti', 'code' => 'DJ', 'status' => 1],

            ['country_name' => 'Dominica', 'code' => 'DM', 'status' => 1],

            ['country_name' => 'Dominican Republic', 'code' => 'DO', 'status' => 1],

            ['country_name' => 'Ecuador', 'code' => 'EC', 'status' => 1],

            ['country_name' => 'Egypt', 'code' => 'EG', 'status' => 1],

            ['country_name' => 'El Salvador', 'code' => 'SV', 'status' => 1],

            ['country_name' => 'Equatorial Guinea', 'code' => 'GQ', 'status' => 1],

            ['country_name' => 'Eritrea', 'code' => 'ER', 'status' => 1],

            ['country_name' => 'Estonia', 'code' => 'EE', 'status' => 1],

            ['country_name' => 'Ethiopia', 'code' => 'ET', 'status' => 1],

            ['country_name' => 'Falkland Islands (Malvinas)', 'code' => 'FK', 'status' => 1],

            ['country_name' => 'Faroe Islands', 'code' => 'FO', 'status' => 1],

            ['country_name' => 'Fiji', 'code' => 'FJ', 'status' => 1],

            ['country_name' => 'Finland', 'code' => 'FI', 'status' => 1],

            ['country_name' => 'France', 'code' => 'FR', 'status' => 1],

            ['country_name' => 'French Guiana', 'code' => 'GF', 'status' => 1],

            ['country_name' => 'French Polynesia', 'code' => 'PF', 'status' => 1],

            ['country_name' => 'French Southern Territories', 'code' => 'TF', 'status' => 1],

            ['country_name' => 'Gabon', 'code' => 'GA', 'status' => 1],

            ['country_name' => 'Gambia', 'code' => 'GM', 'status' => 1],

            ['country_name' => 'Georgia', 'code' => 'GE', 'status' => 1],

            ['country_name' => 'Germany', 'code' => 'DE', 'status' => 1],

            ['country_name' => 'Ghana', 'code' => 'GH', 'status' => 1],

            ['country_name' => 'Gibraltar', 'code' => 'GI', 'status' => 1],

            ['country_name' => 'Greece', 'code' => 'GR', 'status' => 1],

            ['country_name' => 'Greenland', 'code' => 'GL', 'status' => 1],

            ['country_name' => 'Grenada', 'code' => 'GD', 'status' => 1],

            ['country_name' => 'Guadeloupe', 'code' => 'GP', 'status' => 1],

            ['country_name' => 'Guam', 'code' => 'GU', 'status' => 1],

            ['country_name' => 'Guatemala', 'code' => 'GT', 'status' => 1],

            ['country_name' => 'Guernsey', 'code' => 'GG', 'status' => 1],

            ['country_name' => 'Guinea', 'code' => 'GN', 'status' => 1],

            ['country_name' => 'Guinea-Bissau', 'code' => 'GW', 'status' => 1],

            ['country_name' => 'Guyana', 'code' => 'GY', 'status' => 1],

            ['country_name' => 'Haiti', 'code' => 'HT', 'status' => 1],

            ['country_name' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM', 'status' => 1],

            ['country_name' => 'Holy See (Vatican City State)', 'code' => 'VA', 'status' => 1],

            ['country_name' => 'Honduras', 'code' => 'HN', 'status' => 1],

            ['country_name' => 'Hong Kong', 'code' => 'HK', 'status' => 1],

            ['country_name' => 'Hungary', 'code' => 'HU', 'status' => 1],

            ['country_name' => 'Iceland', 'code' => 'IS', 'status' => 1],

            ['country_name' => 'India', 'code' => 'IN', 'status' => 1],

            ['country_name' => 'Indonesia', 'code' => 'ID', 'status' => 1],

            ['country_name' => 'Iran, Islamic Republic of', 'code' => 'IR', 'status' => 1],

            ['country_name' => 'Iraq', 'code' => 'IQ', 'status' => 1],

            ['country_name' => 'Ireland', 'code' => 'IE', 'status' => 1],

            ['country_name' => 'Isle of Man', 'code' => 'IM', 'status' => 1],

            ['country_name' => 'Israel', 'code' => 'IL', 'status' => 1],

            ['country_name' => 'Italy', 'code' => 'IT', 'status' => 1],

            ['country_name' => 'Jamaica', 'code' => 'JM', 'status' => 1],

            ['country_name' => 'Japan', 'code' => 'JP', 'status' => 1],

            ['country_name' => 'Jersey', 'code' => 'JE', 'status' => 1],

            ['country_name' => 'Jordan', 'code' => 'JO', 'status' => 1],

            ['country_name' => 'Kazakhstan', 'code' => 'KZ', 'status' => 1],

            ['country_name' => 'Kenya', 'code' => 'KE', 'status' => 1],

            ['country_name' => 'Kiribati', 'code' => 'KI', 'status' => 1],

            ['country_name' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP', 'status' => 1],

            ['country_name' => 'Korea, Republic of', 'code' => 'KR', 'status' => 1],

            ['country_name' => 'Kuwait', 'code' => 'KW', 'status' => 1],

            ['country_name' => 'Kyrgyzstan', 'code' => 'KG', 'status' => 1],

            ['country_name' => 'Lao People\'s Democratic Republic', 'code' => 'LA', 'status' => 1],

            ['country_name' => 'Latvia', 'code' => 'LV', 'status' => 1],

            ['country_name' => 'Lebanon', 'code' => 'LB', 'status' => 1],

            ['country_name' => 'Lesotho', 'code' => 'LS', 'status' => 1],

            ['country_name' => 'Liberia', 'code' => 'LR', 'status' => 1],

            ['country_name' => 'Libya', 'code' => 'LY', 'status' => 1],

            ['country_name' => 'Liechtenstein', 'code' => 'LI', 'status' => 1],

            ['country_name' => 'Lithuania', 'code' => 'LT', 'status' => 1],

            ['country_name' => 'Luxembourg', 'code' => 'LU', 'status' => 1],

            ['country_name' => 'Macao', 'code' => 'MO', 'status' => 1],

            ['country_name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK', 'status' => 1],

            ['country_name' => 'Madagascar', 'code' => 'MG', 'status' => 1],

            ['country_name' => 'Malawi', 'code' => 'MW', 'status' => 1],

            ['country_name' => 'Malaysia', 'code' => 'MY', 'status' => 1],

            ['country_name' => 'Maldives', 'code' => 'MV', 'status' => 1],

            ['country_name' => 'Mali', 'code' => 'ML', 'status' => 1],

            ['country_name' => 'Malta', 'code' => 'MT', 'status' => 1],

            ['country_name' => 'Marshall Islands', 'code' => 'MH', 'status' => 1],

            ['country_name' => 'Martinique', 'code' => 'MQ', 'status' => 1],

            ['country_name' => 'Mauritania', 'code' => 'MR', 'status' => 1],

            ['country_name' => 'Mauritius', 'code' => 'MU', 'status' => 1],

            ['country_name' => 'Mayotte', 'code' => 'YT', 'status' => 1],

            ['country_name' => 'Mexico', 'code' => 'MX', 'status' => 1],

            ['country_name' => 'Micronesia, Federated States of', 'code' => 'FM', 'status' => 1],

            ['country_name' => 'Moldova, Republic of', 'code' => 'MD', 'status' => 1],

            ['country_name' => 'Monaco', 'code' => 'MC', 'status' => 1],

            ['country_name' => 'Mongolia', 'code' => 'MN', 'status' => 1],

            ['country_name' => 'Montenegro', 'code' => 'ME', 'status' => 1],

            ['country_name' => 'Montserrat', 'code' => 'MS', 'status' => 1],

            ['country_name' => 'Morocco', 'code' => 'MA', 'status' => 1],

            ['country_name' => 'Mozambique', 'code' => 'MZ', 'status' => 1],

            ['country_name' => 'Myanmar', 'code' => 'MM', 'status' => 1],

            ['country_name' => 'Namibia', 'code' => 'NA', 'status' => 1],

            ['country_name' => 'Nauru', 'code' => 'NR', 'status' => 1],

            ['country_name' => 'Nepal', 'code' => 'NP', 'status' => 1],

            ['country_name' => 'Netherlands', 'code' => 'NL', 'status' => 1],

            ['country_name' => 'New Caledonia', 'code' => 'NC', 'status' => 1],

            ['country_name' => 'New Zealand', 'code' => 'NZ', 'status' => 1],

            ['country_name' => 'Nicaragua', 'code' => 'NI', 'status' => 1],

            ['country_name' => 'Niger', 'code' => 'NE', 'status' => 1],

            ['country_name' => 'Nigeria', 'code' => 'NG', 'status' => 1],

            ['country_name' => 'Niue', 'code' => 'NU', 'status' => 1],

            ['country_name' => 'Norfolk Island', 'code' => 'NF', 'status' => 1],

            ['country_name' => 'Northern Mariana Islands', 'code' => 'MP', 'status' => 1],

            ['country_name' => 'Norway', 'code' => 'NO', 'status' => 1],

            ['country_name' => 'Oman', 'code' => 'OM', 'status' => 1],

            ['country_name' => 'Pakistan', 'code' => 'PK', 'status' => 1],

            ['country_name' => 'Palau', 'code' => 'PW', 'status' => 1],

            ['country_name' => 'Palestine, State of', 'code' => 'PS', 'status' => 1],

            ['country_name' => 'Panama', 'code' => 'PA', 'status' => 1],

            ['country_name' => 'Papua New Guinea', 'code' => 'PG', 'status' => 1],

            ['country_name' => 'Paraguay', 'code' => 'PY', 'status' => 1],

            ['country_name' => 'Peru', 'code' => 'PE', 'status' => 1],

            ['country_name' => 'Philippines', 'code' => 'PH', 'status' => 1],

            ['country_name' => 'Pitcairn', 'code' => 'PN', 'status' => 1],

            ['country_name' => 'Poland', 'code' => 'PL', 'status' => 1],

            ['country_name' => 'Portugal', 'code' => 'PT', 'status' => 1],

            ['country_name' => 'Puerto Rico', 'code' => 'PR', 'status' => 1],

            ['country_name' => 'Qatar', 'code' => 'QA', 'status' => 1],

            ['country_name' => 'Réunion', 'code' => 'RE', 'status' => 1],

            ['country_name' => 'Romania', 'code' => 'RO', 'status' => 1],

            ['country_name' => 'Russian Federation', 'code' => 'RU', 'status' => 1],

            ['country_name' => 'Rwanda', 'code' => 'RW', 'status' => 1],

            ['country_name' => 'Saint Barthélemy', 'code' => 'BL', 'status' => 1],

            ['country_name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH', 'status' => 1],

            ['country_name' => 'Saint Kitts and Nevis', 'code' => 'KN', 'status' => 1],

            ['country_name' => 'Saint Lucia', 'code' => 'LC', 'status' => 1],

            ['country_name' => 'Saint Martin (French part)', 'code' => 'MF', 'status' => 1],

            ['country_name' => 'Saint Pierre and Miquelon', 'code' => 'PM', 'status' => 1],

            ['country_name' => 'Saint Vincent and the Grenadines', 'code' => 'VC', 'status' => 1],

            ['country_name' => 'Samoa', 'code' => 'WS', 'status' => 1],

            ['country_name' => 'San Marino', 'code' => 'SM', 'status' => 1],

            ['country_name' => 'Sao Tome and Principe', 'code' => 'ST', 'status' => 1],

            ['country_name' => 'Saudi Arabia', 'code' => 'SA', 'status' => 1],

            ['country_name' => 'Senegal', 'code' => 'SN', 'status' => 1],

            ['country_name' => 'Serbia', 'code' => 'RS', 'status' => 1],

            ['country_name' => 'Seychelles', 'code' => 'SC', 'status' => 1],

            ['country_name' => 'Sierra Leone', 'code' => 'SL', 'status' => 1],

            ['country_name' => 'Singapore', 'code' => 'SG', 'status' => 1],

            ['country_name' => 'Sint Maarten (Dutch part)', 'code' => 'SX', 'status' => 1],

            ['country_name' => 'Slovakia', 'code' => 'SK', 'status' => 1],

            ['country_name' => 'Slovenia', 'code' => 'SI', 'status' => 1],

            ['country_name' => 'Solomon Islands', 'code' => 'SB', 'status' => 1],

            ['country_name' => 'Somalia', 'code' => 'SO', 'status' => 1],

            ['country_name' => 'South Africa', 'code' => 'ZA', 'status' => 1],

            ['country_name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS', 'status' => 1],

            ['country_name' => 'South Sudan', 'code' => 'SS', 'status' => 1],

            ['country_name' => 'Spain', 'code' => 'ES', 'status' => 1],

            ['country_name' => 'Sri Lanka', 'code' => 'LK', 'status' => 1],

            ['country_name' => 'Sudan', 'code' => 'SD', 'status' => 1],

            ['country_name' => 'Suriname', 'code' => 'SR', 'status' => 1],

            ['country_name' => 'Svalbard and Jan Mayen', 'code' => 'SJ', 'status' => 1],

            ['country_name' => 'Swaziland', 'code' => 'SZ', 'status' => 1],

            ['country_name' => 'Sweden', 'code' => 'SE', 'status' => 1],

            ['country_name' => 'Switzerland', 'code' => 'CH', 'status' => 1],

            ['country_name' => 'Syrian Arab Republic', 'code' => 'SY', 'status' => 1],

            ['country_name' => 'Taiwan', 'code' => 'TW', 'status' => 1],

            ['country_name' => 'Tajikistan', 'code' => 'TJ', 'status' => 1],

            ['country_name' => 'Tanzania, United Republic of', 'code' => 'TZ', 'status' => 1],

            ['country_name' => 'Thailand', 'code' => 'TH', 'status' => 1],

            ['country_name' => 'Timor-Leste', 'code' => 'TL', 'status' => 1],

            ['country_name' => 'Togo', 'code' => 'TG', 'status' => 1],

            ['country_name' => 'Tokelau', 'code' => 'TK', 'status' => 1],

            ['country_name' => 'Tonga', 'code' => 'TO', 'status' => 1],

            ['country_name' => 'Trinidad and Tobago', 'code' => 'TT', 'status' => 1],

            ['country_name' => 'Tunisia', 'code' => 'TN', 'status' => 1],

            ['country_name' => 'Turkey', 'code' => 'TR', 'status' => 1],

            ['country_name' => 'Turkmenistan', 'code' => 'TM', 'status' => 1],

            ['country_name' => 'Turks and Caicos Islands', 'code' => 'TC', 'status' => 1],

            ['country_name' => 'Tuvalu', 'code' => 'TV', 'status' => 1],

            ['country_name' => 'Uganda', 'code' => 'UG', 'status' => 1],

            ['country_name' => 'Ukraine', 'code' => 'UA', 'status' => 1],

            ['country_name' => 'United Arab Emirates', 'code' => 'AE', 'status' => 1],

            ['country_name' => 'United Kingdom', 'code' => 'GB', 'status' => 1],

            ['country_name' => 'United States', 'code' => 'US', 'status' => 1],

            ['country_name' => 'United States Minor Outlying Islands', 'code' => 'UM', 'status' => 1],

            ['country_name' => 'Uruguay', 'code' => 'UY', 'status' => 1],

            ['country_name' => 'Uzbekistan', 'code' => 'UZ', 'status' => 1],

            ['country_name' => 'Vanuatu', 'code' => 'VU', 'status' => 1],

            ['country_name' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE', 'status' => 1],

            ['country_name' => 'Viet Nam', 'code' => 'VN', 'status' => 1],

            ['country_name' => 'Virgin Islands, British', 'code' => 'VG', 'status' => 1],

            ['country_name' => 'Virgin Islands, U.S.', 'code' => 'VI', 'status' => 1],

            ['country_name' => 'Wallis and Futuna', 'code' => 'WF', 'status' => 1],

            ['country_name' => 'Western Sahara', 'code' => 'EH', 'status' => 1],

            ['country_name' => 'Yemen', 'code' => 'YE', 'status' => 1],

            ['country_name' => 'Zambia', 'code' => 'ZM', 'status' => 1],

            ['country_name' => 'Zimbabwe', 'code' => 'ZW', 'status' => 1],

        ];

          

        foreach ($countries as $key => $value) {

            Country::create($value);

        }*/
    }
}
