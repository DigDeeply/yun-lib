<?php
/**
 * Yun_Db_Mysql_Conf使用的adapter接口
 * 
 * @author walu
 */
interface Yun_Db_Mysql_Adapter_Interface extends Yun_Db_Adapter_Interface {
    
    /**
     * 连接mysql服务器
     * 接口里就不要重连了，重连策略由调用方完成
     *
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $dbname
     * @param string $port
     * @param string $socket http://www.php.net/manual/zh/mysqli.construct.php
     * @return bool true:连接成功 false:连接失败
     */
    public function connect($host, $user, $pass, $dbname, $port, $socket='');
    
    /**
     * 在建立数据连接时发生的错误信息
     * 
     * @return array array('error_code'=>int or string, 'error_info'=>string);
     */
    public function errorInConnect();
}
