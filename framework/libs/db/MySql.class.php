<?php
/**
 * Created by PhpStorm.
 * User: Leenovel
 * Date: 2014/11/6
 * Time: 14:41
 */

class MySql {
    function err($error) {
        die("错误！！Error: " . $error);
    }

    function connect($dbConfig) {
        extract($dbConfig);
        if (!($con = mysql_connect($dbHost, $dbUser, $dbPwd))) {
            $this->err(mysql_error());
        }

        if (!mysql_select_db($dbName, $con)) {
            $this->err(mysql_error());
        }

        mysql_query("set names " . $dbCharset);
    }
} 