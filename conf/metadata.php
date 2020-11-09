<?php
/**
 * DokuPrism Plugin - Code highlighter using [prismjs.com] library
 *
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Adam Mnemnonic <adam85mn@gmail.com>
 */

$meta['override_code'] = array('onoff');
$meta['override_file'] = array('onoff');
$meta['lanuages_list'] = array('string');
$meta['theme'] = array (
    'multichoice', '_choices' => array (
        'prism',
        'prism-coy',
        'prism-dark',
        'prism-funky',
        'prism-okaidia',
        'prism-solarizedlight',
        'prism-tomorrow',
        'prism-twilight',
    )
);
