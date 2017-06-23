<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * Initialize the XML parser
 */
$parser = xml_parser_create();

/**
 * Function to use at the start of an element
 * @param {function} $parser
 * @param {string} $element_name
 * @param {string} $element_attrs
 */
function start($parser, $element_name, $element_attrs)
{
    switch ($element_name) {
        case "NOTE":
            echo "-- Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
    }
}

/**
 * Function to use at the end of an element
 * @param {function} $parser
 * @param {string} $element_name
 */
function stop($parser, $element_name)
{
    echo "<br>";
}

/**
 * Function to use when finding character data
 * @param {function} $parser
 * @param {string} $data
 */
function char($parser, $data)
{
    echo $data;
}

/**
 * Specify element handler
 */
xml_set_element_handler($parser, "start", "stop");

/**
 * Specify data handler
 */
xml_set_character_data_handler($parser, "char");

/**
 * Open XML file
 */
$fp = fopen("note.xml", "r");

/**
 * Read data
 */
while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
}

/**
 * Free the XML parser
 */
xml_parser_free($parser);
