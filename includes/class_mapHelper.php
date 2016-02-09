<?php

if ( ! class_exists( 'mapHelper' ) ) {

	class mapHelper {

		/**
		* Reduced string length while preserving words
		*/

		public static function truncate( $string, $length = 100, $tail = '...' ) {
			if (strlen( $string ) < $length ) {
				return $string;
			} else {
				$length = $length - strlen ( $tail );
				/**
				* Look for between 1 and infinte amount of white space 
				* Capturing group in ()
				* Look for one of infintie amount of non white space 
				* $ Start at the end of the string
				* Finds the string at the end of the word and replaces it with ...
				*/
				return preg_replace( '/\s+?(\S+)?$/', '', substr( $string, 0, $length ) ) . $tail;
			}
		}
	}
}



?>