<?php
/**
 * Yun_Array
 * 
 * �й����������һЩ���߷���
 * 
 * @author walu<imcnan@gmail.com>
 * 
 */

class Yun_Array {
	
	/**
	 * ����key����ȡĳ�������һά��ĳһ��ֵ
	 * 
	 * @param array  $arr
	 * @param string|number $key
	 * @param mixed  $default_value ���key�����ڣ��򷵻ش�Ĭ��ֵ
	 * @return mixed
	 */
	public static function get(array $arr, $key, $default_value=null) {
		return false!==array_key_exists($key, $arr) ? $arr[$key] : $default_value;
	}
	
	public static function getByPath(array $arr, $path_key, $default_value=null, $path_separator='.') {
		
	}
	
	public static function rekey() {
		
	}
	
	public static function rekeyByPath() {
		
	}
	
}