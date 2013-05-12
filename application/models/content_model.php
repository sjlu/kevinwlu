<?php

class Content_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('directory', 'file', 'typography'));
	}

	private function get_title($object)
	{
		$text = explode('.', $object);
		$text = str_replace("_", " ", $text[0]);
		$text = ucwords($text);
		return $text;
	}

	private function _text($file)
	{
		$input = read_file($file);
		$input = auto_typography($input);
		return $input;
	}

	private function _attr($input)
	{
		$output = array();
		$lines = explode("\n", $input);

		foreach ($lines as &$line)
		{
			$data = explode(":", $line, 2);
			if (count($data) < 2)
				continue;

			$key = trim($data[0]);
			$value = trim($data[1]);

			$output[$key] = $value;
		}

		return $output;
	}

    private function _parse($map, $path)
    {
        $output = array();
        asort($map);

        foreach ($map as $object)
            $output[$this->get_title($object)] = $this->_text($path . '/' . $object);

        return $output;
    }

    function get_attributes()
    {
    	return $this->_attr(read_file('content/attributes.txt'));
    }

	function get_sections()
	{
		$map = directory_map('content/sections');
		return $this->_parse($map, 'content/sections');
	}
}