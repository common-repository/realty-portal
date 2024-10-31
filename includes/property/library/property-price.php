<?php
if ( ! function_exists( 'rp_currency' ) ) :

	/**
	 * Create list currency
	 *
	 * @return array
	 */
	function rp_currency() {

		return array_unique( apply_filters( 'rp_currency', array(
			'AED' => esc_html__( 'United Arab Emirates Dirham', 'realty-portal' ),
			'EUR' => esc_html__( 'Euros', 'realty-portal' ),

			// Add more currency

			'AFN' => esc_html__( 'Afghan afghani', 'realty-portal' ),
			'ALL' => esc_html__( 'Albanian lek', 'realty-portal' ),
			'AMD' => esc_html__( 'Armenian dram', 'realty-portal' ),
			'ANG' => esc_html__( 'Netherlands Antillean guilder', 'realty-portal' ),
			'AOA' => esc_html__( 'Angolan kwanza', 'realty-portal' ),
			'ARS' => esc_html__( 'Argentine peso', 'realty-portal' ),
			'AWG' => esc_html__( 'Aruban florin', 'realty-portal' ),
			'AZN' => esc_html__( 'Azerbaijani manat', 'realty-portal' ),

			'BAM' => esc_html__( 'Bosnia and Herzegovina convertible mark', 'realty-portal' ),
			'BBD' => esc_html__( 'Barbadian dollar', 'realty-portal' ),
			'BHD' => esc_html__( 'Bahraini dinar', 'realty-portal' ),
			'BIF' => esc_html__( 'Burundian franc', 'realty-portal' ),
			'BMD' => esc_html__( 'Bermudian dollar', 'realty-portal' ),
			'BND' => esc_html__( 'Brunei dollar', 'realty-portal' ),
			'BOB' => esc_html__( 'Bolivian boliviano', 'realty-portal' ),
			'BSD' => esc_html__( 'Bahamian dollar', 'realty-portal' ),
			'BTN' => esc_html__( 'Bhutanese ngultrum', 'realty-portal' ),
			'BWP' => esc_html__( 'Botswana pula', 'realty-portal' ),
			'BYR' => esc_html__( 'Belarusian ruble', 'realty-portal' ),
			'BZD' => esc_html__( 'Belize dollar', 'realty-portal' ),

			'CDF' => esc_html__( 'Congolese franc', 'realty-portal' ),
			'CRC' => esc_html__( 'Costa Rican colón', 'realty-portal' ),
			'CUC' => esc_html__( 'Cuban convertible peso', 'realty-portal' ),
			'CUP' => esc_html__( 'Cuban peso', 'realty-portal' ),
			'CVE' => esc_html__( 'Cape Verdean escudo', 'realty-portal' ),

			'DJF' => esc_html__( 'Djiboutian franc', 'realty-portal' ),
			'DOP' => esc_html__( 'Dominican peso', 'realty-portal' ),
			'DZD' => esc_html__( 'Algerian dinar', 'realty-portal' ),

			'EEK' => esc_html__( 'Estonian kroon', 'realty-portal' ),
			'EGP' => esc_html__( 'Egyptian pound', 'realty-portal' ),
			'ERN' => esc_html__( 'Eritrean nakfa', 'realty-portal' ),
			'ETB' => esc_html__( 'Ethiopian bir', 'realty-portal' ),

			'FJD' => esc_html__( 'Fijian dollar', 'realty-portal' ),
			'FKP' => esc_html__( 'Falkland Islands pound', 'realty-portal' ),

			'GEL' => esc_html__( 'Georgian lari', 'realty-portal' ),
			'GHS' => esc_html__( 'Ghanaian cedi', 'realty-portal' ),
			'GIP' => esc_html__( 'Gibraltar pound', 'realty-portal' ),

			'GMD' => esc_html__( 'Gambian dalasi', 'realty-portal' ),
			'GNF' => esc_html__( 'Guinean franc', 'realty-portal' ),
			'GTQ' => esc_html__( 'Guatemalan quetzal', 'realty-portal' ),
			'GYD' => esc_html__( 'Guyanese dollar', 'realty-portal' ),

			'HNL' => esc_html__( 'Honduran lempira', 'realty-portal' ),
			'HTG' => esc_html__( 'Haitian gourde', 'realty-portal' ),

			'IQD' => esc_html__( 'Iraqi dinar', 'realty-portal' ),
			'IRR' => esc_html__( 'Iranian rial', 'realty-portal' ),


			'JMD' => esc_html__( 'Jamaican dollar', 'realty-portal' ),
			'JOD' => esc_html__( 'Jordanian dinar', 'realty-portal' ),

			'KGS' => esc_html__( 'Kyrgyzstani som', 'realty-portal' ),
			'KHR' => esc_html__( 'Cambodian riel', 'realty-portal' ),
			'KMF' => esc_html__( 'Comorian franc', 'realty-portal' ),
			'KPW' => esc_html__( 'North Korean won', 'realty-portal' ),
			'KWD' => esc_html__( 'Kuwaiti dinar', 'realty-portal' ),
			'KYD' => esc_html__( 'Cayman Islands dollar', 'realty-portal' ),
			'KZT' => esc_html__( 'Kazakhstani tenge', 'realty-portal' ),

 			'LAK' => esc_html__( 'Lao kip', 'realty-portal' ),
            'LBP' => esc_html__( 'Lebanese pound','realty-portal' ),
            'LKR' => esc_html__( 'Sri Lankan rupee', 'realty-portal' ),
            'LRD' => esc_html__( 'Liberian dollar', 'realty-portal' ),
            'LSL' => esc_html__( 'Lesotho loti', 'realty-portal' ),
            'LTL' => esc_html__( 'Lithuanian litas', 'realty-portal' ),
            'LVL' => esc_html__( 'Latvian lats', 'realty-portal' ),
            'LYD' => esc_html__( 'Libyan dinar', 'realty-portal' ),
            'MAD' => esc_html__( 'Moroccan dirham', 'realty-portal' ),
            'MDL' => esc_html__( 'Moldovan leu', 'realty-portal' ),
            'MGA' => esc_html__( 'Malagasy ariary', 'realty-portal' ),
            'MKD' => esc_html__( 'Macedonian denar', 'realty-portal' ),
            'MMK' => esc_html__( 'Myanma kyat', 'realty-portal' ),
            'MNT' => esc_html__( 'Mongolian tögrög', 'realty-portal' ),
            'MOP' => esc_html__( 'Macanese pataca', 'realty-portal' ),
            'MRO' => esc_html__( 'Mauritanian ouguiya', 'realty-portal' ),
            'MUR' => esc_html__( 'Mauritian rupee', 'realty-portal' ),
            'MVR' => esc_html__( 'Maldivian rufiyaa', 'realty-portal' ),
            'MWK' => esc_html__( 'Malawian kwacha', 'realty-portal' ),
            'MZN' => esc_html__( 'Mozambican metical', 'realty-portal' ),
            'NAD' => esc_html__( 'Namibian dollar', 'realty-portal' ),
            'NIO' => esc_html__( 'Nicaraguan córdoba', 'realty-portal' ),
            'NPR' => esc_html__( 'Nepalese rupee', 'realty-portal' ),
            'OMR' => esc_html__( 'Omani rial', 'realty-portal' ),
            'PAB' => esc_html__( 'Panamanian balboa', 'realty-portal' ),
            'PEN' => esc_html__( 'Peruvian nuevo sol', 'realty-portal' ),
            'PGK' => esc_html__( 'Papua New Guinean kina', 'realty-portal' ),
            'PYG' => esc_html__( 'Paraguayan guaraní', 'realty-portal' ),
            'QAR' => esc_html__( 'Qatari riyal', 'realty-portal' ),
            'RSD' => esc_html__( 'Serbian dinar', 'realty-portal' ),
            'RWF' => esc_html__( 'Rwandan franc', 'realty-portal' ),
            'SAR' => esc_html__( 'Saudi riyal', 'realty-portal' ),
            'SBD' => esc_html__( 'Solomon Islands dollar', 'realty-portal' ),
            'SCR' => esc_html__( 'Seychellois rupee', 'realty-portal' ),
            'SDG' => esc_html__( 'Sudanese pound', 'realty-portal' ),
            'SHP' => esc_html__( 'Saint Helena pound', 'realty-portal' ),
            'SLL' => esc_html__( 'Sierra Leonean leone','realty-portal' ),
            'SOS' => esc_html__( 'Somali shilling', 'realty-portal' ),
            'SRD' => esc_html__( 'Surinamese dollar', 'realty-portal' ),
            'STD' => esc_html__( 'São Tomé and Príncipe dobra', 'realty-portal' ),
            'SVC' => esc_html__( 'Salvadoran colón', 'realty-portal' ),
            'SYP' => esc_html__( 'Syrian pound', 'realty-portal' ),
            'SZL' => esc_html__( 'Swazi lilangeni', 'realty-portal' ),
            'TJS' => esc_html__( 'Tajikistani somoni', 'realty-portal' ),
            'TMM' => esc_html__( 'Turkmenistani manat', 'realty-portal' ),
            'TND' => esc_html__( 'Tunisian dinar', 'realty-portal' ),
            'TOP' => esc_html__( 'Tongan paʻanga', 'realty-portal' ),
            'TTD' => esc_html__( 'Trinidad and Tobago dollar', 'realty-portal' ),
            'TZS' => esc_html__( 'Tanzanian shilling', 'realty-portal' ),
            'UAH' => esc_html__( 'Ukrainian hryvnia', 'realty-portal' ),
            'UGX' => esc_html__( 'Ugandan shilling', 'realty-portal' ),
            'UYU' => esc_html__( 'Uruguayan peso', 'realty-portal' ),
            'UZS' => esc_html__( 'Uzbekistani som', 'realty-portal' ),
            'VEF' => esc_html__( 'Venezuelan bolívar', 'realty-portal' ),
            'VUV' => esc_html__( 'Vanuatu vatu', 'realty-portal' ),
            'WST' => esc_html__( 'Samoan tala', 'realty-portal' ),
            'XAF' => esc_html__( 'Central African CFA franc', 'realty-portal' ),
            'XCD' => esc_html__( 'East Caribbean dollar', 'realty-portal' ),
            'XOF' => esc_html__( 'West African CFA franc', 'realty-portal' ),
            'XPF' => esc_html__( 'CFP franc', 'realty-portal' ),
            'YER' => esc_html__( 'Yemeni rial', 'realty-portal' ),
            'ZMK' => esc_html__( 'Zambian kwacha', 'realty-portal' ),
            'ZWR' => esc_html__('Zimbabwean dollar', 'realty-portal' ),

			'AUD' => esc_html__( 'Australian Dollars', 'realty-portal' ),
			'BDT' => esc_html__( 'Bangladeshi Taka', 'realty-portal' ),
			'BRL' => esc_html__( 'Brazilian Real', 'realty-portal' ),
			'BGN' => esc_html__( 'Bulgarian Lev', 'realty-portal' ),
			'CAD' => esc_html__( 'Canadian Dollars', 'realty-portal' ),
			'CLP' => esc_html__( 'Chilean Peso', 'realty-portal' ),
			'CNY' => esc_html__( 'Chinese Yuan', 'realty-portal' ),
			'COP' => esc_html__( 'Colombian Peso', 'realty-portal' ),
			'HRK' => esc_html__( 'Croatia kuna', 'realty-portal' ),
			'CZK' => esc_html__( 'Czech Koruna', 'realty-portal' ),
			'DKK' => esc_html__( 'Danish Krone', 'realty-portal' ),
			'HKD' => esc_html__( 'Hong Kong Dollar', 'realty-portal' ),
			'HUF' => esc_html__( 'Hungarian Forint', 'realty-portal' ),
			'ISK' => esc_html__( 'Icelandic krona', 'realty-portal' ),
			'IDR' => esc_html__( 'Indonesia Rupiah', 'realty-portal' ),
			'INR' => esc_html__( 'Indian Rupee', 'realty-portal' ),
			'ILS' => esc_html__( 'Israeli Shekel', 'realty-portal' ),
			'JPY' => esc_html__( 'Japanese Yen', 'realty-portal' ),
			'KES' => esc_html__( 'Kenyan Shilling', 'realty-portal' ),
			'MYR' => esc_html__( 'Malaysian Ringgits', 'realty-portal' ),
			'MXN' => esc_html__( 'Mexican Peso', 'realty-portal' ),
			'NGN' => esc_html__( 'Nigerian Naira', 'realty-portal' ),
			'NOK' => esc_html__( 'Norwegian Krone', 'realty-portal' ),
			'NZD' => esc_html__( 'New Zealand Dollar', 'realty-portal' ),
			'PHP' => esc_html__( 'Philippine Pesos', 'realty-portal' ),
			'PKR' => esc_html__( 'Pakistani Rupees', 'realty-portal' ),
			'PLN' => esc_html__( 'Polish Zloty', 'realty-portal' ),
			'GBP' => esc_html__( 'Pounds Sterling', 'realty-portal' ),
			'RON' => esc_html__( 'Romanian Leu', 'realty-portal' ),
			'RUB' => esc_html__( 'Russian Ruble', 'realty-portal' ),
			'SGD' => esc_html__( 'Singapore Dollar', 'realty-portal' ),
			'ZAR' => esc_html__( 'South African rand', 'realty-portal' ),
			'KRW' => esc_html__( 'South Korean Won', 'realty-portal' ),
			'SEK' => esc_html__( 'Swedish Krona', 'realty-portal' ),
			'CHF' => esc_html__( 'Swiss Franc', 'realty-portal' ),
			'TWD' => esc_html__( 'Taiwan New Dollars', 'realty-portal' ),
			'THB' => esc_html__( 'Thai Baht', 'realty-portal' ),
			'TRY' => esc_html__( 'Turkish Lira', 'realty-portal' ),
			'USD' => esc_html__( 'US Dollars', 'realty-portal' ),
			'VND' => esc_html__( 'Vietnamese Dong', 'realty-portal' ),
			'CLN' => esc_html__( 'Colones', 'realty-portal' ),
			'DHS' => esc_html__( 'United Arab Emirates', 'realty-portal' ),
		) ) );
	}

endif;

if ( ! function_exists( 'rp_currency_symbol' ) ) :

	/**
	 * Create currency symbol
	 *
	 * @param string $currency
	 *
	 * @return mixed|void
	 */
	function rp_currency_symbol( $currency = '' ) {

		if ( empty( $currency ) ) {

			$currency = RP_Property::get_setting( 'property_setting', 'property_currency', 'USD' );
		}

		switch ( $currency ) {
			case 'AED' :
				$currency_symbol = 'د.إ';
				break;
			case 'AFN' :
				$currency_symbol = '؋';
				break;
			case 'ALL' :
				$currency_symbol = 'L';
				break;
			case 'AMD' :
				$currency_symbol = 'դր.';
				break;
			case 'ANG' :
				$currency_symbol = 'ƒ';
				break;
			case 'AOA' :
				$currency_symbol = 'Kz';
				break;
			case 'AWG' :
				$currency_symbol = 'ƒ';
				break;
			case 'AZN' :
				$currency_symbol = 'AZN';
				break;
			case 'BAM' :
				$currency_symbol = 'КМ';
				break;
			case 'BHD' :
				$currency_symbol = 'ب.د';
				break;
			case 'BOB' :
				$currency_symbol = 'Bs.';
				break;
			case 'BTN' :
				$currency_symbol = 'BTN';
				break;
			case 'BWP' :
				$currency_symbol = 'P';
				break;
			case 'BYR' :
				$currency_symbol = 'Br';
				break;
			case 'CRC' :
				$currency_symbol = '₡';
				break;
			case 'CVE' :
				$currency_symbol = 'Esc';
				break;
			case 'DZD' :
				$currency_symbol = 'د.ج';
				break;	
			case 'EEK' :
				$currency_symbol = 'KR';
				break;
			case 'ERN' :
				$currency_symbol = 'Nfk';
				break;
			case 'ETB' :
				$currency_symbol = 'ETB';
				break;
			case 'GEL' :
				$currency_symbol = 'ლ';
				break;
			case 'GHS' :
				$currency_symbol = '₵';
				break;
			case 'GMD' :
				$currency_symbol = '';
				break;
			case 'GTQ' :
				$currency_symbol = 'Q';
				break;
			case 'HNL' :
				$currency_symbol = 'L';
				break;
			case 'HTG' :
				$currency_symbol = 'G';
				break;
			case 'IQD' :
				$currency_symbol = 'ع.د';
				break;
			case 'IRR' :
				$currency_symbol = '﷼';
				break;
			case 'JOD' :
				$currency_symbol = 'د.ا';
				break;
			case 'KGS' :
				$currency_symbol = 'KGS';
				break;
			case 'KHR' :
				$currency_symbol = '៛';
				break;
			case 'KWD' :
				$currency_symbol = 'د.ك';
				break;
			case 'KZT' :
				$currency_symbol = '〒';
				break;
			case 'LAK' :
				$currency_symbol = '₭';
				break;
			case 'LBP' :
				$currency_symbol = 'ل.ل';
				break;
			case 'LKR' :
				$currency_symbol = 'Rs';
				break;
			case 'LSL' :
				$currency_symbol = 'L';
				break;
			case 'LTL' :
				$currency_symbol = 'Lt';
				break;
			case 'LVL' :
				$currency_symbol = 'Ls';
				break;
			case 'LYD' :
				$currency_symbol = 'ل.د';
				break;
			case 'MAD' :
				$currency_symbol = 'Dh';
				break;
			case 'MDL' :
				$currency_symbol = 'L';
				break;

			case 'MGA' :
				$currency_symbol = 'MGA';
				break;
			case 'MKD' :
				$currency_symbol = 'ден';
				break;
			case 'MMK' :
				$currency_symbol = 'K';
				break;
			case 'MNT' :
				$currency_symbol = '₮';
				break;
			case 'MOP' :
				$currency_symbol = 'P';
				break;
			case 'MRO' :
				$currency_symbol = 'UM';
				break;
			case 'MVR' :
				$currency_symbol = 'ރ.';
				break;
			case 'MZN' :
				$currency_symbol = 'MTn';
				break;
			case 'NIO' :
				$currency_symbol = 'C$';
				break;
			case 'OMR' :
				$currency_symbol = 'ر.ع.';
				break;
			case 'PAB' :
				$currency_symbol = 'B/.';
				break;
			case 'PEN' :
				$currency_symbol = 'S/.';
				break;
			case 'PGK' :
				$currency_symbol = 'K';
				break;
			case 'PYG' :
				$currency_symbol = '₲';
				break;
			case 'QAR' :
				$currency_symbol = 'ر.ق';
				break;
			case 'RSD' :
				$currency_symbol = 'дин.';
				break;

			case 'BIF' :
			case 'CDF' :
			case 'DJF' :
			case 'GNF' :
			case 'KMF' :
			case 'RWF' :
				$currency_symbol = 'Fr';
				break;
			case 'CHF' :	
				$currency_symbol = 'CHF';
			case 'SAR' :
				$currency_symbol = 'ر.س';
				break;
			case 'SLL' :
				$currency_symbol = 'Le';
				break;
			case 'STD' :
				$currency_symbol = 'Db';
				break;
			case 'SVC' :
				$currency_symbol = '₡';
				break;

			case 'FKP' :
			case 'EGP' :
			case 'GIP' :
			case 'SDG' :
			case 'GBP' :
			case 'SYP' :
			case 'SHP' :
			case 'XAF' :
			case 'XOF' :
			case 'XPF' :
				$currency_symbol = '£';
				break;
			case 'SZL' :
				$currency_symbol = 'L';
				break;
			case 'TJS' :
				$currency_symbol = 'ЅМ';
				break;
			case 'TMM' :
				$currency_symbol = 'm';
				break;
			case 'TND' :
				$currency_symbol = 'د.ت';
				break;
			case 'TOP' :
				$currency_symbol = 'T$';
				break;
			case 'UAH' :
				$currency_symbol = '₴';
				break;
			case 'UZS' :
				$currency_symbol = 'UZS';
				break;
			case 'VEF' :
				$currency_symbol = 'Bs F';
				break;
			case 'VUV' :
				$currency_symbol = 'Vt';
				break;
			case 'WST' :
				$currency_symbol = 'T';
				break;
			case 'YER' :
				$currency_symbol = '﷼';
				break;
			case 'ZMK' :
				$currency_symbol = 'ZK';
				break;
			case 'BDT':
				$currency_symbol = '&#2547;&nbsp;';
				break;
			case 'BRL' :
				$currency_symbol = 'R$';
				break;
			case 'BGN' :
				$currency_symbol = '&#1083;&#1074;.';
				break;
			case 'AUD' :
			case 'ARS' :
			case 'BBD' :
			case 'BMD' :
			case 'BND' :
			case 'BSD' :
			case 'BZD' :
			case 'CAD' :
			case 'COP' :
			case 'CUC' :
			case 'CUP' :
			case 'CLP' :
			case 'DOP' :
			case 'FJD' :
			case 'GYD' :
			case 'JMD' :
			case 'KYD' :
			case 'LRD' :
			case 'MXN' :
			case 'NAD' :
			case 'NZD' :
			case 'HKD' :
			case 'SGD' :
			case 'SBD' :
			case 'SRD' :
			case 'TTD' :
			case 'UYU' :
			case 'USD' :
			case 'XCD' :
			case 'ZWR' :
				$currency_symbol = '$';
				break;
			case 'EUR' :
				$currency_symbol = '€';
				break;
			case 'CNY' :
			case 'RMB' :
			case 'JPY' :
				$currency_symbol = '¥';
				break;
			case 'RUB' :
				$currency_symbol = 'руб.';
				break;
			case 'KRW' :
			case 'KPW' :
				$currency_symbol = '₩';
				break;
			case 'TRY' :
				$currency_symbol = 'TL';
				break;
			case 'ZAR' :
				$currency_symbol = 'R';
				break;
			case 'CZK' :
				$currency_symbol = '&#75;&#269;';
				break;
			case 'MYR' :
				$currency_symbol = 'RM';
				break;
			case 'HUF' :
				$currency_symbol = 'Ft';
				break;
			case 'IDR' :
				$currency_symbol = 'Rp';
				break;
			case 'INR' :
			case 'MUR' :
			case 'NPR' :
			case 'SCR' :
			case 'PKR' :
				$currency_symbol = '₨';
				break;
			case 'ILS' :
				$currency_symbol = '₪';
				break;
			case 'PHP' :
				$currency_symbol = '₱';
				break;
			case 'PLN' :
				$currency_symbol = 'zł';
				break;
			case 'NOK' :
			case 'SEK' :
			case 'DKK' :
			case 'ISK' :
				$currency_symbol = 'kr';
				break;
			case 'TWD' :
				$currency_symbol = '&#78;&#84;&#36;';
				break;
			case 'THB' :
				$currency_symbol = '&#3647;';
				break;
			case 'RON' :
				$currency_symbol = 'lei';
				break;
			case 'VND' :
				$currency_symbol = 'VND';
				break;
			case 'NGN' :
				$currency_symbol = '₦';
				break;
			case 'HRK' :
				$currency_symbol = 'kn';
				break;
			case 'KES' :
			case 'SOS' :
			case 'TZS' :
			case 'UGX' :
				$currency_symbol = 'Sh';
				break;
			case 'CLN' :
				$currency_symbol = '&#8353;';
				break;
			case 'DHS' :
				$currency_symbol = 'Dhs';
				break;
			default    :
				$currency_symbol = '';
				break;
		}
		return apply_filters( 'rp_currency_symbol', $currency_symbol, $currency );
	}

endif;

if ( ! function_exists( 'rp_price_inr_comma' ) ) :

	/**
	 * Process price when code is INR
	 *
	 * @param        $input
	 * @param string $thousands_sep
	 *
	 * @return string
	 */
	function rp_price_inr_comma( $input, $thousands_sep = ',' ) {

		// This function is written by some anonymous person – I got it from Google
		if ( strlen( $input ) <= 2 ) {
			return $input;
		}

		$length = substr( $input, 0, strlen( $input ) - 2 );

		$formatted_input = rp_price_inr_comma( $length, $thousands_sep ) . $thousands_sep . substr( $input, - 2 );

		return $formatted_input;
	}

endif;

if ( ! function_exists( 'rp_price_number_format' ) ) :

	/**
	 * This function process number format
	 *
	 * @param        $num
	 * @param int    $num_decimals
	 * @param string $decimal_sep
	 * @param string $thousands_sep
	 * @param string $currency_code
	 *
	 * @return string|void
	 */
	function rp_price_number_format( $num, $num_decimals = 2, $decimal_sep = '.', $thousands_sep = ',', $currency_code = '' ) {

		if ( empty( $num ) ) {
			return false;
		}

		if ( empty( $currency_code ) || 'INR' != $currency_code ) {
			return number_format( $num, $num_decimals, $decimal_sep, $thousands_sep );
		}

		// Special format for Indian Rupee
		$pos = strpos( (string) $num, '.' );
		if ( false == $pos ) {
			$decimalpart = str_repeat( "0", $num_decimals );
		} else {
			$decimalpart = substr( $num, $pos + 1, $num_decimals );
			$num         = substr( $num, 0, $pos );
		}

		$decimalpart = ! empty( $decimalpart ) ? $decimal_sep . $decimalpart : '';

		if ( strlen( $num ) > 3 & strlen( $num ) <= 12 ) {
			$last3digits         = substr( $num, - 3 );
			$numexceptlastdigits = substr( $num, 0, - 3 );
			$formatted           = rp_price_inr_comma( $numexceptlastdigits, $thousands_sep );
			$stringtoreturn      = $formatted . $thousands_sep . $last3digits . $decimalpart;
		} elseif ( strlen( $num ) <= 3 ) {
			$stringtoreturn = $num . $decimalpart;
		} elseif ( strlen( $num ) > 12 ) {
			$stringtoreturn = number_format( $num, $num_decimals, $decimal_sep, $thousands_sep );
		}

		if ( substr( $stringtoreturn, 0, 2 ) == ( '-' . $decimal_sep ) ) {
			$stringtoreturn = '-' . substr( $stringtoreturn, 2 );
		}

		return $stringtoreturn;
	}

endif;

if ( ! function_exists( 'rp_format_price' ) ) :

	/**
	 * This function get format price
	 *
	 * @param      $price
	 * @param bool $html
	 *
	 * @return mixed|string|void
	 */
	function rp_format_price( $price, $html = true ) {
		$currency_code      = RP_Property::get_setting( 'property_setting', 'property_currency', 'USD' );
		$currency_symbol    = rp_currency_symbol( $currency_code );
		$currency_position  = RP_Property::get_setting( 'property_setting', 'property_currency_position', 'left_space' );
		$price_thousand_sep = RP_Property::get_setting( 'property_setting', 'price_thousand_sep', ',' );
		$price_decimal_sep  = RP_Property::get_setting( 'property_setting', 'price_decimal_sep', '.' );
		$price_num_decimals = RP_Property::get_setting( 'property_setting', 'price_num_decimals', '0' );
		switch ( $currency_position ) {
			case 'left' :
				$format = '<span class="format_price">%1$s</span>%2$s';
				break;
			case 'right' :
				$format = '%2$s<span class="format_price">%1$s</span>';
				break;
			case 'left_space' :
				$format = '<span class="format_price">%1$s</span>&nbsp;%2$s';
				break;
			case 'right_space' :
				$format = '%2$s&nbsp;<span class="format_price">%1$s</span>';
				break;
			default:
				$format = '<span class="format_price">%1$s</span>%2$s';
		}

		$thousands_sep = wp_specialchars_decode( stripslashes( $price_thousand_sep ), ENT_QUOTES );
		$decimal_sep   = wp_specialchars_decode( stripslashes( $price_decimal_sep ), ENT_QUOTES );
		$num_decimals  = absint( $price_num_decimals );

		$price = filter_var( $price, FILTER_SANITIZE_NUMBER_INT );

		if ( ! $html ) {
			return rp_price_number_format( $price, $num_decimals, '.', '', $currency_code );
		}

		if ( isset( $price ) && $price > 0 ) {
			$price = rp_price_number_format( $price, $num_decimals, $decimal_sep, $thousands_sep, $currency_code );
		}
		if ( 'text' === $html ) {
			return sprintf( $format, $currency_symbol, $price );
		}

		if ( 'number' === $html ) {
			return $price;
		}

		//$price = preg_replace( '/' . preg_quote( re_get_property_setting('price_decimal_sep'), '/' ) . '0++$/', '', $price );
		$return = '<span class="amount">' . sprintf( $format, $currency_symbol, $price ) . '</span>';

		return $return;
	}

endif;

if ( ! function_exists( 'rp_property_price' ) ) :

	/**
	 * This function process price
	 *
	 * @param string $post_id
	 * @param bool   $label
	 *
	 * @return mixed|string|void
	 */
	function rp_property_price( $post_id = '', $label = true ) {

		if ( empty( $post_id ) ) {
			return false;
		}

		$price        = trim( get_post_meta( $post_id, 'price', true ) );
		$price        = ( preg_match( "/^([0-9]+)$/", $price ) ) ? rp_format_price( $price ) : esc_html( $price );
		$before_price = '<span class="before-price">' . esc_html( get_post_meta( $post_id, 'before_price', true ) ) . '</span>';
		$after_price  = '<span class="after-price">' . esc_html( get_post_meta( $post_id, 'after_price', true ) ) . '</span>';
		if ( $label ) {
			return $before_price . ' ' . $price . ' ' . $after_price;
		} else {
			return $price;
		}
	}

endif;

if ( ! function_exists( 'rp_property_render_price_search_field' ) ) :

	/**
	 * This function show field price to form search
	 *
	 * @param $field
	 */
	function rp_property_render_price_search_field( $field ) {

		global $wpdb;

		$min_price   = $max_price = 0;
		$max_price   = ceil( $wpdb->get_var( '
				SELECT max(meta_value + 0)
				FROM ' . $wpdb->posts . '
				LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id
				WHERE meta_key = \'price\' AND post_type = \'' . apply_filters( 'rp_property_post_type', 'rp_property' ) . '\' AND post_status = \'publish\'
				' ) );
		$g_min_price = isset( $_GET[ 'min_price' ] ) ? esc_attr( $_GET[ 'min_price' ] ) : $min_price;
		$g_max_price = isset( $_GET[ 'max_price' ] ) ? esc_attr( $_GET[ 'max_price' ] ) : $max_price;

		?>
		<div id="rp-item-price-wrap"
		     class="rp-control rp-item-wrap <?php echo ! empty( $field[ 'class' ] ) ? esc_attr( $field[ 'class' ] ) : '' ?>">
			<!-- <?php echo( ! empty( $field[ 'label' ] ) ? '<label>' . esc_html( $field[ 'label' ] ) . '</label>' : '' ) ?> -->
			<div class="rp-price">
				<div class="price-slider-range"></div>
				<input type="hidden" name="min_price" class="price_min" data-min="<?php echo $min_price ?>"
				       value="<?php echo $g_min_price ?>">
				<input type="hidden" name="max_price" class="price_max" data-max="<?php echo $max_price ?>"
				       value="<?php echo $g_max_price ?>">
				<div class="price-results">
					<span class="min-price">
						<?php echo rp_format_price( $g_min_price, 'text' ); ?>
					</span> -
					<span class="max-price">
						<?php echo rp_format_price( $g_max_price, 'text' ); ?>
					</span>
				</div>
			</div>
		</div>
		<?php
	}

endif;