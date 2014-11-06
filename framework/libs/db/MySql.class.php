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

    function query($sql) {
        if (!($query = mysql_query($sql))) {
            $this->err(mysql_error() . "<br>" . $sql);
        } else {
            return $query;
        }
    }

    function findAll($query) {
        while ($rs = mysql_fetch_array($query, MYSQL_ASSOC)) {
            $list[] = $rs;
        }
        return isset($list) ? $list : "";
    }

    function findOne($query) {
        return mysql_fetch_array($query, MYSQL_ASSOC);
    }

    function findResult($query, $row, $column) {
        return mysql_result($query, $row, $column);
    }
} 