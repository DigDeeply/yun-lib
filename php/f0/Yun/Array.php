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
	
	/**
	 * ����һ������ʽ��key������ȡ�����е�ĳ��ֵ
	 * 
	 * @param array $arr
	 * @param string|number $path_key
	 * @param mixed $default_value
	 * @param string $path_separator ����Ϊstring����������Yun_Array::get
	 * @return mixed
	 */
	public static function getByPath(array $arr, $path_key, $default_value=null, $path_separator='.') {
		$path_key_arr = explode($path_separator, $path_key);
		$retval = $arr;
		foreach ($path_key_arr as $current_key) {
			$retval = self::get($retval, $current_key);
			if (!is_array($retval)) {
				break;
			}
		}
		return false === next($path_key_arr) ? $retval : $default_value;
	}
	
	public static function rekeyByPath() {
		
	}
	
}