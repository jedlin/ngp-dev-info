<!--
	This php script will simulate the JSON data that a NGP ActionTag
	form will generate. A URL to it on a PHP server can replace the
	data-form-url value in an NGP form embed
-->

<?php

function cors() {
    
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
        exit(0);
    }
}

$data = array (
  'tenantDisplayName' => '',
  'submissionUrl' => '',
  'autoFastAction' => false,
  'created' => '2020-08-06 20:03:09Z',
  'fastAction' => false,
  'form_elements' => 
  array (
    0 => 
    array (
      'name' => 'HeaderHtml',
      'type' => 'markup',
      'markup' => '<h1>Thanks for your interest in volunteering. Fill out the form to get involved.</h1>',
    ),
    1 => 
    array (
      'name' => 'submitForm',
      'type' => 'submit',
      'value' => 'Submit',
    ),
    2 => 
    array (
      'name' => 'ContactInformation',
      'type' => 'fieldset',
      'title' => 'Contact Information',
      'children' => 
      array (
        0 => 
        array (
          'name' => 'FirstName',
          'type' => 'textfield',
          'title' => 'First Name',
          'queryString' => 'fn',
          'required' => true,
          'maxlength' => 20,
        ),
        1 => 
        array (
          'name' => 'LastName',
          'type' => 'textfield',
          'title' => 'Last Name',
          'queryString' => 'ln',
          'required' => true,
          'maxlength' => 25,
        ),
        2 => 
        array (
          'name' => 'MobilePhone',
          'type' => 'international_phone',
          'title' => 'Mobile Phone',
          'default_country_code' => 'US',
          'queryString' => 'mp',
          'required' => false,
          'validation' => 'phone',
          'options' => 'table_countries',
        ),
        3 => 
        array (
          'name' => 'EmailAddress',
          'type' => 'textfield',
          'title' => 'Email',
          'queryString' => 'em',
          'required' => true,
          'maxlength' => 100,
          'validation' => 'email',
        ),
        4 => 
        array (
          'name' => 'PersonalUrl',
          'type' => 'textfield',
          'queryString' => 'PersonalUrl',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'TrackingPixel',
          'type' => 'markup',
          'markup' => '',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'AdditionalInformation',
      'type' => 'fieldset',
      'title' => 'I\'m interested in',
      'children' => 
      array (
        0 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225',
          'type' => 'checkbox-list-manager',
          'title' => 'How can you help?',
          'queryString' => 'CustomFormFieldQuestion_6431177571265225',
          'required' => false,
        ),
        1 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225_CustomFormFieldQuestion_4328121869607295_MappedActivistCodeQuestion_4731852',
          'type' => 'checkbox',
          'title' => 'Making Calls',
          'default_value' => false,
          'queryString' => 'CustomFormFieldQuestion_4328121869607295',
          'required' => false,
        ),
        2 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225_CustomFormFieldQuestion_7392684971905899_MappedActivistCodeQuestion_4731854',
          'type' => 'checkbox',
          'title' => 'Hosting an Event',
          'default_value' => false,
          'queryString' => 'CustomFormFieldQuestion_7392684971905899',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225_CustomFormFieldQuestion_3470355993218709_MappedActivistCodeQuestion_4731855',
          'type' => 'checkbox',
          'title' => 'Sending Texts',
          'default_value' => false,
          'queryString' => 'CustomFormFieldQuestion_3470355993218709',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225_CustomFormFieldQuestion_2267211848029303_MappedActivistCodeQuestion_4731856',
          'type' => 'checkbox',
          'title' => 'Knocking on Doors',
          'default_value' => false,
          'queryString' => 'CustomFormFieldQuestion_2267211848029303',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'CustomFormFieldQuestion_6431177571265225_CustomFormFieldQuestion_7909693959667425_MappedActivistCodeQuestion_4731857',
          'type' => 'checkbox',
          'title' => 'Being a Community Liaison',
          'default_value' => false,
          'queryString' => 'CustomFormFieldQuestion_7909693959667425',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'CustomFormFieldQuestion_4274331063447775',
          'type' => 'textfield',
          'title' => 'Let us know how you’d like to help:',
          'queryString' => 'CustomFormFieldQuestion_4274331063447775',
          'required' => false,
          'maxlength' => 75,
        ),
      ),
    ),
  ),
  'formId' => 687602,
  'metadata' => 
  array (
    'layoutStyle' => 'standard',
    'displayConfirmationMessage' => true,
    'deactivationHtmlContent' => '<p>Sorry, the page you are trying to access is not accepting submissions at this time.</p>',
    'columns' => 1,
    'accepted_cards' => 
    array (
    ),
    'tenantUri' => '',
    'clientAmountFormatting' => true,
    'options' => 
    array (
      'table_countries' => 
      array (
        0 => 
        array (
          'value' => 'AF',
          'display' => 'Afghanistan',
        ),
        1 => 
        array (
          'value' => 'AX',
          'display' => 'Åland Islands',
        ),
        2 => 
        array (
          'value' => 'AL',
          'display' => 'Albania',
        ),
        3 => 
        array (
          'value' => 'DZ',
          'display' => 'Algeria',
        ),
        4 => 
        array (
          'value' => 'AD',
          'display' => 'Andorra',
        ),
        5 => 
        array (
          'value' => 'AO',
          'display' => 'Angola',
        ),
        6 => 
        array (
          'value' => 'AI',
          'display' => 'Anguilla',
        ),
        7 => 
        array (
          'value' => 'AQ',
          'display' => 'Antarctica',
        ),
        8 => 
        array (
          'value' => 'AG',
          'display' => 'Antigua and Barbuda',
        ),
        9 => 
        array (
          'value' => 'AR',
          'display' => 'Argentina',
        ),
        10 => 
        array (
          'value' => 'AM',
          'display' => 'Armenia',
        ),
        11 => 
        array (
          'value' => 'AW',
          'display' => 'Aruba',
        ),
        12 => 
        array (
          'value' => 'AU',
          'display' => 'Australia',
        ),
        13 => 
        array (
          'value' => 'AT',
          'display' => 'Austria',
        ),
        14 => 
        array (
          'value' => 'AZ',
          'display' => 'Azerbaijan',
        ),
        15 => 
        array (
          'value' => 'BS',
          'display' => 'Bahamas',
        ),
        16 => 
        array (
          'value' => 'BH',
          'display' => 'Bahrain',
        ),
        17 => 
        array (
          'value' => 'BD',
          'display' => 'Bangladesh',
        ),
        18 => 
        array (
          'value' => 'BB',
          'display' => 'Barbados',
        ),
        19 => 
        array (
          'value' => 'BY',
          'display' => 'Belarus',
        ),
        20 => 
        array (
          'value' => 'BE',
          'display' => 'Belgium',
        ),
        21 => 
        array (
          'value' => 'BZ',
          'display' => 'Belize',
        ),
        22 => 
        array (
          'value' => 'BJ',
          'display' => 'Benin',
        ),
        23 => 
        array (
          'value' => 'BM',
          'display' => 'Bermuda',
        ),
        24 => 
        array (
          'value' => 'BT',
          'display' => 'Bhutan',
        ),
        25 => 
        array (
          'value' => 'BO',
          'display' => 'Bolivia (Plurinational State of)',
        ),
        26 => 
        array (
          'value' => 'BQ',
          'display' => 'Bonaire, Sint Eustatius and Saba',
        ),
        27 => 
        array (
          'value' => 'BA',
          'display' => 'Bosnia and Herzegovina',
        ),
        28 => 
        array (
          'value' => 'BW',
          'display' => 'Botswana',
        ),
        29 => 
        array (
          'value' => 'BV',
          'display' => 'Bouvet Island',
        ),
        30 => 
        array (
          'value' => 'BR',
          'display' => 'Brazil',
        ),
        31 => 
        array (
          'value' => 'IO',
          'display' => 'British Indian Ocean Territory',
        ),
        32 => 
        array (
          'value' => 'VG',
          'display' => 'British Virgin Islands',
        ),
        33 => 
        array (
          'value' => 'BN',
          'display' => 'Brunei Darussalam',
        ),
        34 => 
        array (
          'value' => 'BG',
          'display' => 'Bulgaria',
        ),
        35 => 
        array (
          'value' => 'BF',
          'display' => 'Burkina Faso',
        ),
        36 => 
        array (
          'value' => 'BI',
          'display' => 'Burundi',
        ),
        37 => 
        array (
          'value' => 'CV',
          'display' => 'Cabo Verde',
        ),
        38 => 
        array (
          'value' => 'KH',
          'display' => 'Cambodia',
        ),
        39 => 
        array (
          'value' => 'CM',
          'display' => 'Cameroon',
        ),
        40 => 
        array (
          'value' => 'CA',
          'display' => 'Canada',
        ),
        41 => 
        array (
          'value' => 'KY',
          'display' => 'Cayman Islands',
        ),
        42 => 
        array (
          'value' => 'CF',
          'display' => 'Central African Republic',
        ),
        43 => 
        array (
          'value' => 'TD',
          'display' => 'Chad',
        ),
        44 => 
        array (
          'value' => 'CL',
          'display' => 'Chile',
        ),
        45 => 
        array (
          'value' => 'CN',
          'display' => 'China',
        ),
        46 => 
        array (
          'value' => 'CX',
          'display' => 'Christmas Island',
        ),
        47 => 
        array (
          'value' => 'CC',
          'display' => 'Cocos (Keeling) Islands',
        ),
        48 => 
        array (
          'value' => 'CO',
          'display' => 'Colombia',
        ),
        49 => 
        array (
          'value' => 'KM',
          'display' => 'Comoros',
        ),
        50 => 
        array (
          'value' => 'CG',
          'display' => 'Congo',
        ),
        51 => 
        array (
          'value' => 'CD',
          'display' => 'Congo (Democratic Republic of the)',
        ),
        52 => 
        array (
          'value' => 'CK',
          'display' => 'Cook Islands',
        ),
        53 => 
        array (
          'value' => 'CR',
          'display' => 'Costa Rica',
        ),
        54 => 
        array (
          'value' => 'CI',
          'display' => 'Côte d\'Ivoire',
        ),
        55 => 
        array (
          'value' => 'HR',
          'display' => 'Croatia',
        ),
        56 => 
        array (
          'value' => 'CU',
          'display' => 'Cuba',
        ),
        57 => 
        array (
          'value' => 'CW',
          'display' => 'Curaçao',
        ),
        58 => 
        array (
          'value' => 'CY',
          'display' => 'Cyprus',
        ),
        59 => 
        array (
          'value' => 'CZ',
          'display' => 'Czechia',
        ),
        60 => 
        array (
          'value' => 'DK',
          'display' => 'Denmark',
        ),
        61 => 
        array (
          'value' => 'DJ',
          'display' => 'Djibouti',
        ),
        62 => 
        array (
          'value' => 'DM',
          'display' => 'Dominica',
        ),
        63 => 
        array (
          'value' => 'DO',
          'display' => 'Dominican Republic',
        ),
        64 => 
        array (
          'value' => 'EC',
          'display' => 'Ecuador',
        ),
        65 => 
        array (
          'value' => 'EG',
          'display' => 'Egypt',
        ),
        66 => 
        array (
          'value' => 'SV',
          'display' => 'El Salvador',
        ),
        67 => 
        array (
          'value' => 'GQ',
          'display' => 'Equatorial Guinea',
        ),
        68 => 
        array (
          'value' => 'ER',
          'display' => 'Eritrea',
        ),
        69 => 
        array (
          'value' => 'EE',
          'display' => 'Estonia',
        ),
        70 => 
        array (
          'value' => 'SZ',
          'display' => 'Eswatini',
        ),
        71 => 
        array (
          'value' => 'ET',
          'display' => 'Ethiopia',
        ),
        72 => 
        array (
          'value' => 'FK',
          'display' => 'Falkland Islands (Malvinas)',
        ),
        73 => 
        array (
          'value' => 'FO',
          'display' => 'Faroe Islands',
        ),
        74 => 
        array (
          'value' => 'FJ',
          'display' => 'Fiji',
        ),
        75 => 
        array (
          'value' => 'FI',
          'display' => 'Finland',
        ),
        76 => 
        array (
          'value' => 'FR',
          'display' => 'France',
        ),
        77 => 
        array (
          'value' => 'GF',
          'display' => 'French Guiana',
        ),
        78 => 
        array (
          'value' => 'PF',
          'display' => 'French Polynesia',
        ),
        79 => 
        array (
          'value' => 'TF',
          'display' => 'French Southern Territories',
        ),
        80 => 
        array (
          'value' => 'GA',
          'display' => 'Gabon',
        ),
        81 => 
        array (
          'value' => 'GM',
          'display' => 'Gambia',
        ),
        82 => 
        array (
          'value' => 'GE',
          'display' => 'Georgia',
        ),
        83 => 
        array (
          'value' => 'DE',
          'display' => 'Germany',
        ),
        84 => 
        array (
          'value' => 'GH',
          'display' => 'Ghana',
        ),
        85 => 
        array (
          'value' => 'GI',
          'display' => 'Gibraltar',
        ),
        86 => 
        array (
          'value' => 'GR',
          'display' => 'Greece',
        ),
        87 => 
        array (
          'value' => 'GL',
          'display' => 'Greenland',
        ),
        88 => 
        array (
          'value' => 'GD',
          'display' => 'Grenada',
        ),
        89 => 
        array (
          'value' => 'GP',
          'display' => 'Guadeloupe',
        ),
        90 => 
        array (
          'value' => 'GT',
          'display' => 'Guatemala',
        ),
        91 => 
        array (
          'value' => 'GG',
          'display' => 'Guernsey',
        ),
        92 => 
        array (
          'value' => 'GN',
          'display' => 'Guinea',
        ),
        93 => 
        array (
          'value' => 'GW',
          'display' => 'Guinea-Bissau',
        ),
        94 => 
        array (
          'value' => 'GY',
          'display' => 'Guyana',
        ),
        95 => 
        array (
          'value' => 'HT',
          'display' => 'Haiti',
        ),
        96 => 
        array (
          'value' => 'HM',
          'display' => 'Heard Island and McDonald Islands',
        ),
        97 => 
        array (
          'value' => 'VA',
          'display' => 'Holy See',
        ),
        98 => 
        array (
          'value' => 'HN',
          'display' => 'Honduras',
        ),
        99 => 
        array (
          'value' => 'HK',
          'display' => 'Hong Kong',
        ),
        100 => 
        array (
          'value' => 'HU',
          'display' => 'Hungary',
        ),
        101 => 
        array (
          'value' => 'IS',
          'display' => 'Iceland',
        ),
        102 => 
        array (
          'value' => 'IN',
          'display' => 'India',
        ),
        103 => 
        array (
          'value' => 'ID',
          'display' => 'Indonesia',
        ),
        104 => 
        array (
          'value' => 'IR',
          'display' => 'Iran (Islamic Republic of)',
        ),
        105 => 
        array (
          'value' => 'IQ',
          'display' => 'Iraq',
        ),
        106 => 
        array (
          'value' => 'IE',
          'display' => 'Ireland',
        ),
        107 => 
        array (
          'value' => 'IM',
          'display' => 'Isle of Man',
        ),
        108 => 
        array (
          'value' => 'IL',
          'display' => 'Israel',
        ),
        109 => 
        array (
          'value' => 'IT',
          'display' => 'Italy',
        ),
        110 => 
        array (
          'value' => 'JM',
          'display' => 'Jamaica',
        ),
        111 => 
        array (
          'value' => 'JP',
          'display' => 'Japan',
        ),
        112 => 
        array (
          'value' => 'JE',
          'display' => 'Jersey',
        ),
        113 => 
        array (
          'value' => 'JO',
          'display' => 'Jordan',
        ),
        114 => 
        array (
          'value' => 'KZ',
          'display' => 'Kazakhstan',
        ),
        115 => 
        array (
          'value' => 'KE',
          'display' => 'Kenya',
        ),
        116 => 
        array (
          'value' => 'KI',
          'display' => 'Kiribati',
        ),
        117 => 
        array (
          'value' => 'KP',
          'display' => 'Korea (Democratic People\'s Republic of)',
        ),
        118 => 
        array (
          'value' => 'KR',
          'display' => 'Korea (Republic of)',
        ),
        119 => 
        array (
          'value' => 'KW',
          'display' => 'Kuwait',
        ),
        120 => 
        array (
          'value' => 'KG',
          'display' => 'Kyrgyzstan',
        ),
        121 => 
        array (
          'value' => 'LA',
          'display' => 'Lao People\'s Democratic Republic',
        ),
        122 => 
        array (
          'value' => 'LV',
          'display' => 'Latvia',
        ),
        123 => 
        array (
          'value' => 'LB',
          'display' => 'Lebanon',
        ),
        124 => 
        array (
          'value' => 'LS',
          'display' => 'Lesotho',
        ),
        125 => 
        array (
          'value' => 'LR',
          'display' => 'Liberia',
        ),
        126 => 
        array (
          'value' => 'LY',
          'display' => 'Libya',
        ),
        127 => 
        array (
          'value' => 'LI',
          'display' => 'Liechtenstein',
        ),
        128 => 
        array (
          'value' => 'LT',
          'display' => 'Lithuania',
        ),
        129 => 
        array (
          'value' => 'LU',
          'display' => 'Luxembourg',
        ),
        130 => 
        array (
          'value' => 'MO',
          'display' => 'Macao',
        ),
        131 => 
        array (
          'value' => 'MG',
          'display' => 'Madagascar',
        ),
        132 => 
        array (
          'value' => 'MW',
          'display' => 'Malawi',
        ),
        133 => 
        array (
          'value' => 'MY',
          'display' => 'Malaysia',
        ),
        134 => 
        array (
          'value' => 'MV',
          'display' => 'Maldives',
        ),
        135 => 
        array (
          'value' => 'ML',
          'display' => 'Mali',
        ),
        136 => 
        array (
          'value' => 'MT',
          'display' => 'Malta',
        ),
        137 => 
        array (
          'value' => 'MQ',
          'display' => 'Martinique',
        ),
        138 => 
        array (
          'value' => 'MR',
          'display' => 'Mauritania',
        ),
        139 => 
        array (
          'value' => 'MU',
          'display' => 'Mauritius',
        ),
        140 => 
        array (
          'value' => 'YT',
          'display' => 'Mayotte',
        ),
        141 => 
        array (
          'value' => 'MX',
          'display' => 'Mexico',
        ),
        142 => 
        array (
          'value' => 'FM',
          'display' => 'Micronesia (Federated States of)',
        ),
        143 => 
        array (
          'value' => 'MD',
          'display' => 'Moldova (Republic of)',
        ),
        144 => 
        array (
          'value' => 'MC',
          'display' => 'Monaco',
        ),
        145 => 
        array (
          'value' => 'MN',
          'display' => 'Mongolia',
        ),
        146 => 
        array (
          'value' => 'ME',
          'display' => 'Montenegro',
        ),
        147 => 
        array (
          'value' => 'MS',
          'display' => 'Montserrat',
        ),
        148 => 
        array (
          'value' => 'MA',
          'display' => 'Morocco',
        ),
        149 => 
        array (
          'value' => 'MZ',
          'display' => 'Mozambique',
        ),
        150 => 
        array (
          'value' => 'MM',
          'display' => 'Myanmar',
        ),
        151 => 
        array (
          'value' => 'NA',
          'display' => 'Namibia',
        ),
        152 => 
        array (
          'value' => 'NR',
          'display' => 'Nauru',
        ),
        153 => 
        array (
          'value' => 'NP',
          'display' => 'Nepal',
        ),
        154 => 
        array (
          'value' => 'NL',
          'display' => 'Netherlands',
        ),
        155 => 
        array (
          'value' => 'NC',
          'display' => 'New Caledonia',
        ),
        156 => 
        array (
          'value' => 'NZ',
          'display' => 'New Zealand',
        ),
        157 => 
        array (
          'value' => 'NI',
          'display' => 'Nicaragua',
        ),
        158 => 
        array (
          'value' => 'NE',
          'display' => 'Niger',
        ),
        159 => 
        array (
          'value' => 'NG',
          'display' => 'Nigeria',
        ),
        160 => 
        array (
          'value' => 'NU',
          'display' => 'Niue',
        ),
        161 => 
        array (
          'value' => 'NF',
          'display' => 'Norfolk Island',
        ),
        162 => 
        array (
          'value' => 'MK',
          'display' => 'North Macedonia',
        ),
        163 => 
        array (
          'value' => 'NO',
          'display' => 'Norway',
        ),
        164 => 
        array (
          'value' => 'OM',
          'display' => 'Oman',
        ),
        165 => 
        array (
          'value' => 'PK',
          'display' => 'Pakistan',
        ),
        166 => 
        array (
          'value' => 'PW',
          'display' => 'Palau',
        ),
        167 => 
        array (
          'value' => 'PS',
          'display' => 'Palestine (State of)',
        ),
        168 => 
        array (
          'value' => 'PA',
          'display' => 'Panama',
        ),
        169 => 
        array (
          'value' => 'PG',
          'display' => 'Papua New Guinea',
        ),
        170 => 
        array (
          'value' => 'PY',
          'display' => 'Paraguay',
        ),
        171 => 
        array (
          'value' => 'PE',
          'display' => 'Peru',
        ),
        172 => 
        array (
          'value' => 'PH',
          'display' => 'Philippines',
        ),
        173 => 
        array (
          'value' => 'PN',
          'display' => 'Pitcairn',
        ),
        174 => 
        array (
          'value' => 'PL',
          'display' => 'Poland',
        ),
        175 => 
        array (
          'value' => 'PT',
          'display' => 'Portugal',
        ),
        176 => 
        array (
          'value' => 'QA',
          'display' => 'Qatar',
        ),
        177 => 
        array (
          'value' => 'RE',
          'display' => 'Réunion',
        ),
        178 => 
        array (
          'value' => 'RO',
          'display' => 'Romania',
        ),
        179 => 
        array (
          'value' => 'RU',
          'display' => 'Russian Federation',
        ),
        180 => 
        array (
          'value' => 'RW',
          'display' => 'Rwanda',
        ),
        181 => 
        array (
          'value' => 'BL',
          'display' => 'Saint Barthélemy',
        ),
        182 => 
        array (
          'value' => 'SH',
          'display' => 'Saint Helena, Ascension and Tristan da Cunha',
        ),
        183 => 
        array (
          'value' => 'KN',
          'display' => 'Saint Kitts and Nevis',
        ),
        184 => 
        array (
          'value' => 'LC',
          'display' => 'Saint Lucia',
        ),
        185 => 
        array (
          'value' => 'MF',
          'display' => 'Saint Martin (French part)',
        ),
        186 => 
        array (
          'value' => 'PM',
          'display' => 'Saint Pierre and Miquelon',
        ),
        187 => 
        array (
          'value' => 'VC',
          'display' => 'Saint Vincent and the Grenadines',
        ),
        188 => 
        array (
          'value' => 'WS',
          'display' => 'Samoa',
        ),
        189 => 
        array (
          'value' => 'SM',
          'display' => 'San Marino',
        ),
        190 => 
        array (
          'value' => 'ST',
          'display' => 'Sao Tome and Principe',
        ),
        191 => 
        array (
          'value' => 'SA',
          'display' => 'Saudi Arabia',
        ),
        192 => 
        array (
          'value' => 'SN',
          'display' => 'Senegal',
        ),
        193 => 
        array (
          'value' => 'RS',
          'display' => 'Serbia',
        ),
        194 => 
        array (
          'value' => 'SC',
          'display' => 'Seychelles',
        ),
        195 => 
        array (
          'value' => 'SL',
          'display' => 'Sierra Leone',
        ),
        196 => 
        array (
          'value' => 'SG',
          'display' => 'Singapore',
        ),
        197 => 
        array (
          'value' => 'SX',
          'display' => 'Sint Maarten (Dutch part)',
        ),
        198 => 
        array (
          'value' => 'SK',
          'display' => 'Slovakia',
        ),
        199 => 
        array (
          'value' => 'SI',
          'display' => 'Slovenia',
        ),
        200 => 
        array (
          'value' => 'SB',
          'display' => 'Solomon Islands',
        ),
        201 => 
        array (
          'value' => 'SO',
          'display' => 'Somalia',
        ),
        202 => 
        array (
          'value' => 'ZA',
          'display' => 'South Africa',
        ),
        203 => 
        array (
          'value' => 'GS',
          'display' => 'South Georgia and the South Sandwich Islands',
        ),
        204 => 
        array (
          'value' => 'SS',
          'display' => 'South Sudan',
        ),
        205 => 
        array (
          'value' => 'ES',
          'display' => 'Spain',
        ),
        206 => 
        array (
          'value' => 'LK',
          'display' => 'Sri Lanka',
        ),
        207 => 
        array (
          'value' => 'SD',
          'display' => 'Sudan',
        ),
        208 => 
        array (
          'value' => 'SR',
          'display' => 'Suriname',
        ),
        209 => 
        array (
          'value' => 'SJ',
          'display' => 'Svalbard and Jan Mayen',
        ),
        210 => 
        array (
          'value' => 'SE',
          'display' => 'Sweden',
        ),
        211 => 
        array (
          'value' => 'CH',
          'display' => 'Switzerland',
        ),
        212 => 
        array (
          'value' => 'SY',
          'display' => 'Syrian Arab Republic',
        ),
        213 => 
        array (
          'value' => 'TW',
          'display' => 'Taiwan',
        ),
        214 => 
        array (
          'value' => 'TJ',
          'display' => 'Tajikistan',
        ),
        215 => 
        array (
          'value' => 'TZ',
          'display' => 'Tanzania (United Republic of)',
        ),
        216 => 
        array (
          'value' => 'TH',
          'display' => 'Thailand',
        ),
        217 => 
        array (
          'value' => 'TL',
          'display' => 'Timor-Leste',
        ),
        218 => 
        array (
          'value' => 'TG',
          'display' => 'Togo',
        ),
        219 => 
        array (
          'value' => 'TK',
          'display' => 'Tokelau',
        ),
        220 => 
        array (
          'value' => 'TO',
          'display' => 'Tonga',
        ),
        221 => 
        array (
          'value' => 'TT',
          'display' => 'Trinidad and Tobago',
        ),
        222 => 
        array (
          'value' => 'TN',
          'display' => 'Tunisia',
        ),
        223 => 
        array (
          'value' => 'TR',
          'display' => 'Turkey',
        ),
        224 => 
        array (
          'value' => 'TM',
          'display' => 'Turkmenistan',
        ),
        225 => 
        array (
          'value' => 'TC',
          'display' => 'Turks and Caicos Islands',
        ),
        226 => 
        array (
          'value' => 'TV',
          'display' => 'Tuvalu',
        ),
        227 => 
        array (
          'value' => 'UG',
          'display' => 'Uganda',
        ),
        228 => 
        array (
          'value' => 'UA',
          'display' => 'Ukraine',
        ),
        229 => 
        array (
          'value' => 'AE',
          'display' => 'United Arab Emirates',
        ),
        230 => 
        array (
          'value' => 'GB',
          'display' => 'United Kingdom',
        ),
        231 => 
        array (
          'value' => 'US',
          'display' => 'United States',
        ),
        232 => 
        array (
          'value' => 'UM',
          'display' => 'United States Minor Outlying Islands',
        ),
        233 => 
        array (
          'value' => 'UY',
          'display' => 'Uruguay',
        ),
        234 => 
        array (
          'value' => 'UZ',
          'display' => 'Uzbekistan',
        ),
        235 => 
        array (
          'value' => 'VU',
          'display' => 'Vanuatu',
        ),
        236 => 
        array (
          'value' => 'VE',
          'display' => 'Venezuela (Bolivarian Republic of)',
        ),
        237 => 
        array (
          'value' => 'VN',
          'display' => 'Viet Nam',
        ),
        238 => 
        array (
          'value' => 'WF',
          'display' => 'Wallis and Futuna',
        ),
        239 => 
        array (
          'value' => 'EH',
          'display' => 'Western Sahara',
        ),
        240 => 
        array (
          'value' => 'YE',
          'display' => 'Yemen',
        ),
        241 => 
        array (
          'value' => 'ZM',
          'display' => 'Zambia',
        ),
        242 => 
        array (
          'value' => 'ZW',
          'display' => 'Zimbabwe',
        ),
      ),
    ),
  ),
  'status' => 'Active',
  'title' => 'Sign up to join [Candidate]\'s campaign!',
  'name' => 'Volunteer',
  'type' => 'VolunteerForm',
  'updated' => '2020-12-01 22:12:46Z',
  'url' => 
  array (
    'full' => 'https://jimedlin.com/ngpjson.php',
    'base' => 'https://jimedlin.com/',
    'slug' => '',
  ),
  'shortCode' => '',
);

cors();
header('Content-Type: application/json');

echo json_encode($data);