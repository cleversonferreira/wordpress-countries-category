<?php

//include wordpress files
require_once(ABSPATH . 'wp-config.php');
require_once(ABSPATH . 'wp-includes/wp-db.php');
require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');

//countries array
$countries = array(
    0 =>
        array(
            'name' => 'Afeganistão'
        ),
    1 =>
        array(
            'name' => 'África do Sul'
        ),
    2 =>
        array(
            'name' => 'Albânia'
        ),
    3 =>
        array(
            'name' => 'Alemanha'
        ),
    4 =>
        array(
            'name' => 'Andorra'
        ),
    5 =>
        array(
            'name' => 'Angola'
        ),
    6 =>
        array(
            'name' => 'Anguilla'
        ),
    7 =>
        array(
            'name' => 'Antártida'
        ),
    8 =>
        array(
            'name' => 'Antígua e Barbuda'
        ),
    9 =>
        array(
            'name' => 'Antilhas Holandesas'
        ),
    10 =>
        array(
            'name' => 'Arábia Saudita'
        ),
    11 =>
        array(
            'name' => 'Argélia'
        ),
    12 =>
        array(
            'name' => 'Argentina'
        ),
    13 =>
        array(
            'name' => 'Armênia'
        ),
    14 =>
        array(
            'name' => 'Aruba'
        ),
    15 =>
        array(
            'name' => 'Austrália'
        ),
    16 =>
        array(
            'name' => 'Áustria'
        ),
    17 =>
        array(
            'name' => 'Azerbaijão'
        ),
    18 =>
        array(
            'name' => 'Bahamas'
        ),
    19 =>
        array(
            'name' => 'Bahrein'
        ),
    20 =>
        array(
            'name' => 'Bangladesh'
        ),
    21 =>
        array(
            'name' => 'Barbados'
        ),
    22 =>
        array(
            'name' => 'Belarus'
        ),
    23 =>
        array(
            'name' => 'Bélgica'
        ),
    24 =>
        array(
            'name' => 'Belize'
        ),
    25 =>
        array(
            'name' => 'Benin'
        ),
    26 =>
        array(
            'name' => 'Bermudas'
        ),
    27 =>
        array(
            'name' => 'Bolívia'
        ),
    28 =>
        array(
            'name' => 'Bósnia-Herzegóvina'
        ),
    29 =>
        array(
            'name' => 'Botsuana'
        ),
    30 =>
        array(
            'name' => 'Brasil'
        ),
    31 =>
        array(
            'name' => 'Brunei'
        ),
    32 =>
        array(
            'name' => 'Bulgária'
        ),
    33 =>
        array(
            'name' => 'Burkina Fasso'
        ),
    34 =>
        array(
            'name' => 'Burundi'
        ),
    35 =>
        array(
            'name' => 'Butão'
        ),
    36 =>
        array(
            'name' => 'Cabo Verde'
        ),
    37 =>
        array(
            'name' => 'Camarões'
        ),
    38 =>
        array(
            'name' => 'Camboja'
        ),
    39 =>
        array(
            'name' => 'Canadá'
        ),
    40 =>
        array(
            'name' => 'Cazaquistão'
        ),
    41 =>
        array(
            'name' => 'Chade'
        ),
    42 =>
        array(
            'name' => 'Chile'
        ),
    43 =>
        array(
            'name' => 'China'
        ),
    44 =>
        array(
            'name' => 'Chipre'
        ),
    45 =>
        array(
            'name' => 'Cingapura'
        ),
    46 =>
        array(
            'name' => 'Colômbia'
        ),
    47 =>
        array(
            'name' => 'Congo'
        ),
    48 =>
        array(
            'name' => 'Coréia do Norte'
        ),
    49 =>
        array(
            'name' => 'Coréia do Sul'
        ),
    50 =>
        array(
            'name' => 'Costa do Marfim'
        ),
    51 =>
        array(
            'name' => 'Costa Rica'
        ),
    52 =>
        array(
            'name' => 'Croácia (Hrvatska)'
        ),
    53 =>
        array(
            'name' => 'Cuba'
        ),
    54 =>
        array(
            'name' => 'Dinamarca'
        ),
    55 =>
        array(
            'name' => 'Djibuti'
        ),
    56 =>
        array(
            'name' => 'Dominica'
        ),
    57 =>
        array(
            'name' => 'Egito'
        ),
    58 =>
        array(
            'name' => 'El Salvador'
        ),
    59 =>
        array(
            'name' => 'Emirados Árabes Unidos'
        ),
    60 =>
        array(
            'name' => 'Equador'
        ),
    61 =>
        array(
            'name' => 'Eritréia'
        ),
    62 =>
        array(
            'name' => 'Eslováquia'
        ),
    63 =>
        array(
            'name' => 'Eslovênia'
        ),
    64 =>
        array(
            'name' => 'Espanha'
        ),
    65 =>
        array(
            'name' => 'Estados Unidos'
        ),
    66 =>
        array(
            'name' => 'Estônia'
        ),
    67 =>
        array(
            'name' => 'Etiópia'
        ),
    68 =>
        array(
            'name' => 'Fiji'
        ),
    69 =>
        array(
            'name' => 'Filipinas'
        ),
    70 =>
        array(
            'name' => 'Finlândia'
        ),
    71 =>
        array(
            'name' => 'França'
        ),
    72 =>
        array(
            'name' => 'Gabão'
        ),
    73 =>
        array(
            'name' => 'Gâmbia'
        ),
    74 =>
        array(
            'name' => 'Gana'
        ),
    75 =>
        array(
            'name' => 'Geórgia'
        ),
    76 =>
        array(
            'name' => 'Gibraltar'
        ),
    77 =>
        array(
            'name' => 'Grã-Bretanha (Reino Unido, UK)'
        ),
    78 =>
        array(
            'name' => 'Granada'
        ),
    79 =>
        array(
            'name' => 'Grécia'
        ),
    80 =>
        array(
            'name' => 'Groelândia'
        ),
    81 =>
        array(
            'name' => 'Guadalupe'
        ),
    82 =>
        array(
            'name' => 'Guam (Território dos Estados Unidos)'
        ),
    83 =>
        array(
            'name' => 'Guatemala'
        ),
    84 =>
        array(
            'name' => 'Guernsey'
        ),
    85 =>
        array(
            'name' => 'Guiana'
        ),
    86 =>
        array(
            'name' => 'Guiana Francesa'
        ),
    87 =>
        array(
            'name' => 'Guiné'
        ),
    88 =>
        array(
            'name' => 'Guiné Equatorial'
        ),
    89 =>
        array(
            'name' => 'Guiné-Bissau'
        ),
    90 =>
        array(
            'name' => 'Haiti'
        ),
    91 =>
        array(
            'name' => 'Holanda'
        ),
    92 =>
        array(
            'name' => 'Honduras'
        ),
    93 =>
        array(
            'name' => 'Hong Kong'
        ),
    94 =>
        array(
            'name' => 'Hungria'
        ),
    95 =>
        array(
            'name' => 'Iêmen'
        ),
    96 =>
        array(
            'name' => 'Ilha Bouvet (Território da Noruega)'
        ),
    97 =>
        array(
            'name' => 'Ilha do Homem'
        ),
    98 =>
        array(
            'name' => 'Ilha Natal'
        ),
    99 =>
        array(
            'name' => 'Ilha Pitcairn'
        ),
    100 =>
        array(
            'name' => 'Ilha Reunião'
        ),
    101 =>
        array(
            'name' => 'Ilhas Aland'
        ),
    102 =>
        array(
            'name' => 'Ilhas Cayman'
        ),
    103 =>
        array(
            'name' => 'Ilhas Cocos'
        ),
    104 =>
        array(
            'name' => 'Ilhas Comores'
        ),
    105 =>
        array(
            'name' => 'Ilhas Cook'
        ),
    106 =>
        array(
            'name' => 'Ilhas Faroes'
        ),
    107 =>
        array(
            'name' => 'Ilhas Falkland (Malvinas)'
        ),
    108 =>
        array(
            'name' => 'Ilhas Geórgia do Sul e Sandwich do Sul'
        ),
    109 =>
        array(
            'name' => 'Ilhas Heard e McDonald (Território da Austrália)'
        ),
    110 =>
        array(
            'name' => 'Ilhas Marianas do Norte'
        ),
    111 =>
        array(
            'name' => 'Ilhas Marshall'
        ),
    112 =>
        array(
            'name' => 'Ilhas Menores dos Estados Unidos'
        ),
    113 =>
        array(
            'name' => 'Ilhas Norfolk'
        ),
    114 =>
        array(
            'name' => 'Ilhas Seychelles'
        ),
    115 =>
        array(
            'name' => 'Ilhas Solomão'
        ),
    116 =>
        array(
            'name' => 'Ilhas Svalbard e Jan Mayen'
        ),
    117 =>
        array(
            'name' => 'Ilhas Tokelau'
        ),
    118 =>
        array(
            'name' => 'Ilhas Turks e Caicos'
        ),
    119 =>
        array(
            'name' => 'Ilhas Virgens (Estados Unidos)'
        ),
    120 =>
        array(
            'name' => 'Ilhas Virgens (Inglaterra)'
        ),
    121 =>
        array(
            'name' => 'Ilhas Wallis e Futuna'
        ),
    122 =>
        array(
            'name' => 'índia'
        ),
    123 =>
        array(
            'name' => 'Indonésia'
        ),
    124 =>
        array(
            'name' => 'Irã'
        ),
    125 =>
        array(
            'name' => 'Iraque'
        ),
    126 =>
        array(
            'name' => 'Irlanda'
        ),
    127 =>
        array(
            'name' => 'Islândia'
        ),
    128 =>
        array(
            'name' => 'Israel'
        ),
    129 =>
        array(
            'name' => 'Itália'
        ),
    130 =>
        array(
            'name' => 'Jamaica'
        ),
    131 =>
        array(
            'name' => 'Japão'
        ),
    132 =>
        array(
            'name' => 'Jersey'
        ),
    133 =>
        array(
            'name' => 'Jordânia'
        ),
    134 =>
        array(
            'name' => 'Kênia'
        ),
    135 =>
        array(
            'name' => 'Kiribati'
        ),
    136 =>
        array(
            'name' => 'Kuait'
        ),
    137 =>
        array(
            'name' => 'Laos'
        ),
    138 =>
        array(
            'name' => 'Látvia'
        ),
    139 =>
        array(
            'name' => 'Lesoto'
        ),
    140 =>
        array(
            'name' => 'Líbano'
        ),
    141 =>
        array(
            'name' => 'Libéria'
        ),
    142 =>
        array(
            'name' => 'Líbia'
        ),
    143 =>
        array(
            'name' => 'Liechtenstein'
        ),
    144 =>
        array(
            'name' => 'Lituânia'
        ),
    145 =>
        array(
            'name' => 'Luxemburgo'
        ),
    146 =>
        array(
            'name' => 'Macau'
        ),
    147 =>
        array(
            'name' => 'Macedônia (República Yugoslava)'
        ),
    148 =>
        array(
            'name' => 'Madagascar'
        ),
    149 =>
        array(
            'name' => 'Malásia'
        ),
    150 =>
        array(
            'name' => 'Malaui'
        ),
    151 =>
        array(
            'name' => 'Maldivas'
        ),
    152 =>
        array(
            'name' => 'Mali'
        ),
    153 =>
        array(
            'name' => 'Malta'
        ),
    154 =>
        array(
            'name' => 'Marrocos'
        ),
    155 =>
        array(
            'name' => 'Martinica'
        ),
    156 =>
        array(
            'name' => 'Maurício'
        ),
    157 =>
        array(
            'name' => 'Mauritânia'
        ),
    158 =>
        array(
            'name' => 'Mayotte'
        ),
    159 =>
        array(
            'name' => 'México'
        ),
    160 =>
        array(
            'name' => 'Micronésia'
        ),
    161 =>
        array(
            'name' => 'Moçambique'
        ),
    162 =>
        array(
            'name' => 'Moldova'
        ),
    163 =>
        array(
            'name' => 'Mônaco'
        ),
    164 =>
        array(
            'name' => 'Mongólia'
        ),
    165 =>
        array(
            'name' => 'Montenegro'
        ),
    166 =>
        array(
            'name' => 'Montserrat'
        ),
    167 =>
        array(
            'name' => 'Myanma'
        ),
    168 =>
        array(
            'name' => 'Namíbia'
        ),
    169 =>
        array(
            'name' => 'Nauru'
        ),
    170 =>
        array(
            'name' => 'Nepal'
        ),
    171 =>
        array(
            'name' => 'Nicarágua'
        ),
    172 =>
        array(
            'name' => 'Níger'
        ),
    173 =>
        array(
            'name' => 'Nigéria'
        ),
    174 =>
        array(
            'name' => 'Niue'
        ),
    175 =>
        array(
            'name' => 'Noruega'
        ),
    176 =>
        array(
            'name' => 'Nova Caledônia'
        ),
    177 =>
        array(
            'name' => 'Nova Zelândia'
        ),
    178 =>
        array(
            'name' => 'Omã'
        ),
    179 =>
        array(
            'name' => 'Palau'
        ),
    180 =>
        array(
            'name' => 'Panamá'
        ),
    181 =>
        array(
            'name' => 'Papua-Nova Guiné'
        ),
    182 =>
        array(
            'name' => 'Paquistão'
        ),
    183 =>
        array(
            'name' => 'Paraguai'
        ),
    184 =>
        array(
            'name' => 'Peru'
        ),
    185 =>
        array(
            'name' => 'Polinésia Francesa'
        ),
    186 =>
        array(
            'name' => 'Polônia'
        ),
    187 =>
        array(
            'name' => 'Porto Rico'
        ),
    188 =>
        array(
            'name' => 'Portugal'
        ),
    189 =>
        array(
            'name' => 'Qatar'
        ),
    190 =>
        array(
            'name' => 'Quirguistão'
        ),
    191 =>
        array(
            'name' => 'República Centro-Africana'
        ),
    192 =>
        array(
            'name' => 'República Democrática do Congo'
        ),
    193 =>
        array(
            'name' => 'República Dominicana'
        ),
    194 =>
        array(
            'name' => 'República Tcheca'
        ),
    195 =>
        array(
            'name' => 'Romênia'
        ),
    196 =>
        array(
            'name' => 'Ruanda'
        ),
    197 =>
        array(
            'name' => 'Rússia (antiga URSS) - Federação Russa'
        ),
    198 =>
        array(
            'name' => 'Saara Ocidental'
        ),
    199 =>
        array(
            'name' => 'Saint Vincente e Granadinas'
        ),
    200 =>
        array(
            'name' => 'Samoa Americana'
        ),
    201 =>
        array(
            'name' => 'Samoa Ocidental'
        ),
    202 =>
        array(
            'name' => 'San Marino'
        ),
    203 =>
        array(
            'name' => 'Santa Helena'
        ),
    204 =>
        array(
            'name' => 'Santa Lúcia'
        ),
    205 =>
        array(
            'name' => 'São Bartolomeu'
        ),
    206 =>
        array(
            'name' => 'São Cristóvão e Névis'
        ),
    207 =>
        array(
            'name' => 'São Martim'
        ),
    208 =>
        array(
            'name' => 'São Tomé e Príncipe'
        ),
    209 =>
        array(
            'name' => 'Senegal'
        ),
    210 =>
        array(
            'name' => 'Serra Leoa'
        ),
    211 =>
        array(
            'name' => 'Sérvia'
        ),
    212 =>
        array(
            'name' => 'Síria'
        ),
    213 =>
        array(
            'name' => 'Somália'
        ),
    214 =>
        array(
            'name' => 'Sri Lanka'
        ),
    215 =>
        array(
            'name' => 'St. Pierre and Miquelon'
        ),
    216 =>
        array(
            'name' => 'Suazilândia'
        ),
    217 =>
        array(
            'name' => 'Sudão'
        ),
    218 =>
        array(
            'name' => 'Suécia'
        ),
    219 =>
        array(
            'name' => 'Suíça'
        ),
    220 =>
        array(
            'name' => 'Suriname'
        ),
    221 =>
        array(
            'name' => 'Tadjiquistão'
        ),
    222 =>
        array(
            'name' => 'Tailândia'
        ),
    223 =>
        array(
            'name' => 'Taiwan'
        ),
    224 =>
        array(
            'name' => 'Tanzânia'
        ),
    225 =>
        array(
            'name' => 'Território Britânico do Oceano índico'
        ),
    226 =>
        array(
            'name' => 'Territórios do Sul da França'
        ),
    227 =>
        array(
            'name' => 'Territórios Palestinos Ocupados'
        ),
    228 =>
        array(
            'name' => 'Timor Leste'
        ),
    229 =>
        array(
            'name' => 'Togo'
        ),
    230 =>
        array(
            'name' => 'Tonga'
        ),
    231 =>
        array(
            'name' => 'Trinidad and Tobago'
        ),
    232 =>
        array(
            'name' => 'Tunísia'
        ),
    233 =>
        array(
            'name' => 'Turcomenistão'
        ),
    234 =>
        array(
            'name' => 'Turquia'
        ),
    235 =>
        array(
            'name' => 'Tuvalu'
        ),
    236 =>
        array(
            'name' => 'Ucrânia'
        ),
    237 =>
        array(
            'name' => 'Uganda'
        ),
    238 =>
        array(
            'name' => 'Uruguai'
        ),
    239 =>
        array(
            'name' => 'Uzbequistão'
        ),
    240 =>
        array(
            'name' => 'Vanuatu'
        ),
    241 =>
        array(
            'name' => 'Vaticano'
        ),
    242 =>
        array(
            'name' => 'Venezuela'
        ),
    243 =>
        array(
            'name' => 'Vietnã'
        ),
    244 =>
        array(
            'name' => 'Zâmbia'
        ),
    245 =>
        array(
            'name' => 'Zimbábue'
        ),
);

echo 'Creation process started ...' . '<br><br>';

foreach ($countries as $key => $country){

    //your parent category, if exists
    $parent = 0;

    //if the category already exists, continue
    if (term_exists($country['name'], 'category') !== 0 && term_exists($country['name'], 'category') !== null) {
        echo '- ' . $country['name'] . ' category already exists' . '<br>';
        continue;
    }
    
    //create category
    wp_create_category($country['name'], $parent);
    echo '- Category ' . $country['name'] . ' successfully created' . '<br>';
    
}

echo '<br>' . 'Process completed ...';
